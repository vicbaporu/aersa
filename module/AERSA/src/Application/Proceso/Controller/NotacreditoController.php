<?php

namespace Application\Proceso\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Console\Request as ConsoleRequest;

class NotacreditoController extends AbstractActionController {

    public function indexAction() {

        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();

        $sucursal = \SucursalQuery::create()->findPk($session['idsucursal']);

        $anio_activo = $sucursal->getSucursalAnioactivo();
        $mes_activo = $sucursal->getSucursalMesactivo();

        $collection = \NotacreditoQuery::create()->filterByIdsucursal($session['idsucursal'])->orderByIdnotacredito(\Criteria::DESC)->find();

        $view_model = new ViewModel();
        $view_model->setTemplate('/application/proceso/notacredito/index');
        $view_model->setVariables(array(
            'messages' => $this->flashMessenger(),
            'collection' => $collection,
            'anio_activo' => $anio_activo,
            'mes_activo' => $mes_activo,
        ));
        return $view_model;
    }

    public function validatefolioAction() {

        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();

        $folio = $this->params()->fromQuery('folio');

        $to = new \DateTime();
        $from = date("Y-m-d", strtotime("-2 months"));
        $from = new \DateTime($from);

        $exist = \NotacreditoQuery::create()->filterByIdsucursal($session['idsucursal'])->filterByNotacreditoFechanotacredito(array('min' => $from, 'to' => $to))->filterByNotacreditoFolio($folio, \Criteria::LIKE)->exists();

        return $this->getResponse()->setContent(json_encode($exist));
    }

    public function nuevoregistroAction() {

        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();

        $request = $this->getRequest();

        if ($request->isPost()) {

            $post_data = $request->getPost();
            $post_files = $request->getFiles();



            $post_data["notacredito_fechacreacion"] = date_create_from_format('d/m/Y', $post_data["notacredito_fechacreacion"]);


            $entity = new \Notacredito();
            foreach ($post_data as $key => $value) {

                if (\NotacreditoPeer::getTableMap()->hasColumn($key)) {
                    $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                }
            }
            

            //SETEAMOS LA FECHA DE CREACION
            $entity->setNotacreditoFechacreacion(new \DateTime())
                    ->setIdempresa($session['idempresa'])
                    ->setIdsucursal($session['idsucursal'])
                    ->setIdusuario($session['idusuario']);

            $entity->setNotacreditoFechanotacredito($post_data["notacredito_fechacreacion"]);

            if ($post_data['notacredito_revisada']) {
                $entity->setIdauditor($session['idusuario']);
            }

            $entity->save();
            
            
            //EL COMPROBANTE
            if (!empty($post_files['notacredito_factura']['name'])) {

                $type = $post_files['notacredito_factura']['type'];
                $type = explode('/', $type);
                $type = $type[1];
                
                //$type = 'pdf';
                
                $target_path = "/application/files/notacredito/";
                $target_path = $target_path . 'notacredito_' . $entity->getIdnotacredito() . '.' . $type;
                
                if (move_uploaded_file($post_files['notacredito_factura']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . $target_path)) {
                    $entity->setNotacreditoFactura($target_path);
                    $entity->save();
                }
            }

            //DEVOLUCION DETALLES
            foreach ($post_data['productos'] as $producto) {

                $notacredito_detalle = new \Notacreditodetalle();
                $notacredito_detalle->setIdnotacredito($entity->getIdnotacredito())
                        ->setnotacreditodetalleRevisada(0)
                        ->setIdproducto($producto['idproducto'])
                        ->setNotacreditodetalleCantidad($producto['cantidad'])
                        ->setNotacreditodetalleCostounitario($producto['precio'])
                        ->setNotacreditodetalleCostounitarioneto($producto['costo_unitario'])
                        ->setNotacreditodetalleDescuento($producto['descuento'])
                        ->setNotacreditodetalleIeps($producto['ieps'])
                        ->setNotacreditodetalleSubtotal($producto['subtotal']);


                $notacredito_detalle->setIdalmacen($producto['almacen']);

                if (isset($producto['revisada'])) {
                    $notacredito_detalle->setNotacreditodetalleRevisada(1);
                }

                $notacredito_detalle->save();
            }

            //REDIRECCIONAMOS AL LISTADO
            $this->flashMessenger()->addSuccessMessage('Registro guardado satisfactoriamente!');
            return $this->redirect()->toUrl('/procesos/credito');
        }

        $sucursal = \SucursalQuery::create()->findPk($session['idsucursal']);
        $anio_activo = $sucursal->getSucursalAnioactivo();
        $mes_activo = $sucursal->getSucursalMesactivo();

        $almecenes = \AlmacenQuery::create()->filterByIdsucursal($session['idsucursal'])->filterByAlmacenEstatus(1)->filterByAlmacenNombre('Créditos al costo', \Criteria::NOT_EQUAL)->find();
        $almecenes = \Shared\GeneralFunctions::collectionToSelectArray($almecenes, 'idalmacen', 'almacen_nombre');

        $form = new \Application\Proceso\Form\NotacreditoForm($almecenes);

        $iva = \TasaivaQuery::create()->findOne();

        $view_model = new ViewModel();
        $view_model->setTemplate('/application/proceso/notacredito/nuevoregistro');
        $view_model->setVariables(array(
            'form' => $form,
            'anio_activo' => $anio_activo,
            'mes_activo' => $mes_activo,
            'iva' => $iva,
            'almacenes' => json_encode($almecenes) //LO PASAMOS EN JSON POR QUE LO VAMOS A TRABAJR CON NUESTRO JS
        ));

        return $view_model;
    }

    public function editarAction() {
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();

        $request = $this->getRequest();

        //CACHAMOS EL ID QUE RECIBIMOS POR LA RUTA
        $id = $this->params()->fromRoute('id');

        //VERIFICAMOS SI EXISTE
        $exist = \NotacreditoQuery::create()->filterByIdnotacredito($id)->exists();

        if ($exist) {
            // OBTENEMOS EL MES Y EL ANIO ACTIVO DE LA SUCURSAL
            $sucursal = \SucursalQuery::create()->findPk($session['idsucursal']);
            $anio_activo = $sucursal->getSucursalAnioactivo();
            $mes_activo = $sucursal->getSucursalMesactivo();

            //INTANCIAMOS NUESTRA ENTIDAD
            $entity = \NotacreditoQuery::create()->findPk($id);

            //SI NOS ENVIAN UNA PETICION POST
            if ($request->isPost()) {

                $post_data = $request->getPost();
                $post_files = $request->getFiles();

                $post_data["notacredito_fechanotacredito"] = date_create_from_format('d/m/Y', $post_data["notacredito_fechanotacredito"]);
                //$post_data["compra_fechaentrega"] = date_create_from_format('d/m/Y', $post_data["compra_fechaentrega"]);

                foreach ($post_data as $key => $value) {
                    if (\NotacreditoPeer::getTableMap()->hasColumn($key)) {
                        $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                    }
                }

                //SETEAMOS LA FECHA DE CREACION
                $entity->setNotacreditoFechanotacredito($post_data["notacredito_fechanotacredito"])
                        ->setIdempresa($session['idempresa'])
                        ->setIdsucursal($session['idsucursal']);

                if ($post_data['notacredito_revisada']) {
                    $entity->setIdauditor($session['idusuario']);
                }

                $entity->save();

                //EL COMPROBANTE
                if (!empty($post_files['notacredito_factura']['name'])) {

                    $type = $post_files['notacredito_factura']['type'];
                    $type = explode('/', $type);
                    $type = $type[1];

                    $target_path = "/application/files/devoluciones/";
                    $target_path = $target_path . 'devolucion_' . $entity->getIddevolucion() . '.' . $type;

                    if (move_uploaded_file($_FILES['devolucion_factura']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . $target_path)) {
                        $entity->setNotacreditoFactura($target_path);
                        $entity->save();
                    }
                }

                //Notacredito DETALLES
                $entity->getNotacreditodetalles()->delete();
                foreach ($post_data['productos'] as $producto) {

                    $notacredito_detalle = new \Notacreditodetalle();
                    $notacredito_detalle->setIdnotacredito($entity->getIdnotacredito())
                            ->setNotacreditodetalleRevisada(0)
                            ->setIdproducto($producto['idproducto'])
                            ->setIdalmacen($producto['almacen'])
                            ->setNotacreditodetalleCantidad($producto['cantidad'])
                            ->setNotacreditodetalleCostounitario($producto['precio'])
                            ->setNotacreditodetalleCostounitarioneto($producto['costo_unitario'])
                            ->setNotacreditodetalleDescuento($producto['descuento'])
                            ->setNotacreditodetalleIeps($producto['ieps'])
                            ->setNotacreditodetalleSubtotal($producto['subtotal']);

                    if (isset($producto['revisada'])) {
                        $notacredito_detalle->setNotacreditodetalleRevisada(1);
                    }

                    $notacredito_detalle->save();
                }

                //REDIRECCIONAMOS AL LISTADO
                $this->flashMessenger()->addSuccessMessage('Registro guardado satisfactoriamente!');
                return $this->redirect()->toUrl('/procesos/credito');
            }

            //NUESTROS ALMACENES
            $almecenes = \AlmacenQuery::create()->filterByIdsucursal($session['idsucursal'])->filterByAlmacenEstatus(1)->filterByAlmacenNombre('Créditos al costo', \Criteria::NOT_EQUAL)->find();
            $almecenes = \Shared\GeneralFunctions::collectionToSelectArray($almecenes, 'idalmacen', 'almacen_nombre');

            //INTANCIAMOS NUESTRO FORMULARIO
            $form = new \Application\Proceso\Form\NotacreditoForm($almecenes);

            //LE PONEMOS LOS DATOS A NUESTRO FORMULARIO
            $form->setData($entity->toArray(\BasePeer::TYPE_FIELDNAME));

            //CAMBIAMOS LOS VALORES DE FECHAS
            $form->get('notacredito_fechanotacredito')->setValue($entity->getNotacreditoFechanotacredito('d/m/Y'));

            //SETEAMOS EL VALOR AUTOCOMPLETE
            $form->get('idproveedor_autocomplete')->setValue($entity->getProveedor()->getProveedorNombrecomercial());

            //LE PONEMOS LA CLASE VALID AL FOLIO
            $form->get('notacredito_folio')->setAttribute('class', 'form-control valid');

            //LOS DETALLES DE LA DEVOLUCION
            $notacredito_detalle = \NotacreditodetalleQuery::create()->filterByIdnotacredito($entity->getIdnotacredito())->find();

            //COUNT
            $count = \NotacreditoQuery::create()->orderByIdnotacredito(\Criteria::DESC)->findOne();
            $count = $count->getIdnotacredito() + 1;

            $iva = \TasaivaQuery::create()->findOne();

            $view_model = new ViewModel();
            $view_model->setTemplate('/application/proceso/notacredito/editar');
            $view_model->setVariables(array(
                'form' => $form,
                'entity' => $entity,
                'notacredito_detalle' => $notacredito_detalle,
                'anio_activo' => $anio_activo,
                'mes_activo' => $mes_activo,
                'almacenes' => $almecenes,
                'count' => $count,
                'mes_notacredito' => $entity->getNotacreditoFechacreacion('m'),
                'anio_notacredito' => $entity->getNotacreditoFechacreacion('Y'),
                'iva' => $iva,
            ));

            return $view_model;
        } else {
            return $this->redirect()->toUrl('/procesos/credito');
        }
    }

    public function eliminarAction() {

        $request = $this->getRequest();

        if ($request->isPost()) {

            $id = $this->params()->fromRoute('id');

            $entity = \NotacreditoQuery::create()->findPk($id);
            $entity->delete();

            $this->flashMessenger()->addSuccessMessage('Registro eliminado satisfactoriamente!');

            return $this->redirect()->toUrl('/procesos/credito');
        }
    }

}
