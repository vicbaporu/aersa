<?php

namespace Application\Proceso\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Console\Request as ConsoleRequest;

class RequisicionController extends AbstractActionController {
    public function indexAction()
    {
        //CARGAMOS LA SESSION PARA HACER VALIDACIONES
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        //OBTENEMOS LA COLECCION DE REGISTROS DE ACUERDO A LA EMPRESA
        //SI SE TRATA DE UN ADMIN DE AERSA
//        if($session['idrol'] == 1){
//            $collection = \CategoriaQuery::create()->find();
//        }
        $idempresa=$session['idempresa'];
        $collection = \RequisicionQuery::create()->filterByIdempresa($idempresa)->find();
        //INTANCIAMOS NUESTRA VISTA
        $view_model = new ViewModel();
        $view_model->setTemplate('/application/proceso/requisicion/index');
        $view_model->setVariables(array(
            'messages' => $this->flashMessenger(),
            'collection' => $collection,
        ));
        return $view_model;
    }
    
    public function nuevoAction()
    {
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        $idempresa=$session['idempresa'];
        $request = $this->getRequest();
        if ($request->isPost()) {
            $post_data = $request->getPost();
        }
        $sucursalorg = \SucursalQuery::create()->filterByIdsucursal($session['idsucursal'])->findOne();
        
        $sucursaldes_array = array();
        $sucursaldes = \SucursalQuery::create()->filterByIdempresa($idempresa)->find();
        foreach ($sucursaldes as $sucursal){
            
            $id = $sucursal->getIdsucursal();
            $sucursaldes_array[$id] = $sucursal->getSucursalNombre();
        }
        
        $almacen_array = array();
        $almacenes = \AlmacenQuery::create()->filterByIdsucursal($session['idsucursal'])->find();
        foreach ($almacenes as $almacen){
            $id = $almacen->getIdalmacen();
            $almacen_array[$id] = $almacen->getAlmacenNombre();
        }
        
        $concepto_array = array();
        $conceptos = \ConceptosalidaQuery::create()->find();
        foreach ($conceptos as $concepto){
            $id = $concepto->getIdconceptosalida();
            $concepto_array[$id] = $concepto->getConceptosalidaNombre();
        }
        
        $sucursal = \SucursalQuery::create()->findPk($session['idsucursal']);
        $anio_activo = $sucursal->getSucursalAnioactivo();
        $mes_activo = $sucursal->getSucursalMesactivo();
        
        //INTANCIAMOS NUESTRA VISTA

        $form = new \Application\Proceso\Form\RequisicionForm($sucursalorg,$almacen_array,$sucursaldes_array, $concepto_array);
        $view_model = new ViewModel();
        $view_model->setVariables(array(
            'form'      => $form,
            'messages'  => $this->flashMessenger(),
            'anio_activo' => $anio_activo,
            'mes_activo' => $mes_activo,
            ));
        $view_model->setTemplate('/application/proceso/requisicion/nuevo');
        return $view_model;
    }
    
    public function editarAction()
    {
        $request = $this->getRequest();
        $id = $this->params()->fromRoute('id');
        $exist = \PlantillatablajeriaQuery::create()->filterByIdplantillatablajeria($id)->exists(); 
        if($exist){
            
            if($request->isPost()){
                $post_data =  $request->getPost();
                foreach ($post_data as $key => $data){
                    $plantillatablajeria->setByName($key, $data, \BasePeer::TYPE_FIELDNAME);
                }
                $plantillatablajeria->save();
                return  $this->redirect()->toUrl('/catalogo/tablajeria');
            }
            $producto_array = array();
            $productos = \ProductoQuery::create()->find();
            foreach ($productos as $producto) {

                $id = $producto->getIdproducto();
                $producto_array[$id] = $producto->getProductoNombre();
            }
            $form = new \Application\Catalogo\Form\PlantillatablajeriaForm($producto_array);
            //LE PONEMOS LOS DATOS A NUESTRO FORMULARIO
            $form->setData($plantillatablajeria->toArray(\BasePeer::TYPE_FIELDNAME));
             //ENVIAMOS A LA VISTA
            $view_model = new ViewModel();
            $view_model->setVariables(array(
                'form'      => $form,
                'messages'  => $this->flashMessenger(),
                ));
            $view_model->setTemplate('/application/proceso/requisicion/editar');
            return $view_model;
        }else{
            return $this->redirect()->toUrl('/catalogo/tablajeria');
        }
    }
    
    public function eliminarAction()
    {
    $request = $this->getRequest();
    if($request->isPost())
        {
        $id = $this->params()->fromRoute('id');
        $plantilla = \PlantillatablajeriaQuery::create()->findPk($id);
        $plantilla->delete();
        $plantilladetalles = \PlantillatablajeriadetalleQuery::create()->filterByIdplantillatablajeria($id)->find();
        foreach ($plantilladetalles as $plantilladetalle) {
            $plantilladetalle->delete();
        }
        $this->flashMessenger()->addSuccessMessage('Plantilla de tablajeria eliminada satisfactoriamente!');
        return $this->redirect()->toUrl('/catalogo/tablajeria');       
        }
    }
    
    public function getalmdesAction()
    {
        $cat = $this->params()->fromRoute('id');
        $result = \AlmacenQuery::create()->filterByIdsucursal($cat)->find()->toArray();
        return $this->getResponse()->setContent(json_encode($result));      
    }

    public function getconcepsalAction()
    {
        $almorg = $this->params()->fromRoute('almorg');
        $almdes = $this->params()->fromRoute('almdes');
        $sucorg = $this->params()->fromRoute('sucorg');
        $sucdes = $this->params()->fromRoute('sucdes');
        if($sucorg==$sucdes) {
            $misma=1;
        } else {
            $misma=0;
        }
        $result = \ConceptosalidaQuery::create()->filterByAlmacendestino($almdes)->filterByAlmacenorigen($almorg)->filterByMismasucursal($misma)->find()->toArray();
        return $this->getResponse()->setContent(json_encode($result));      
    }
}
