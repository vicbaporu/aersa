<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Catalogo\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Console\Request as ConsoleRequest;

class CategoriaController extends AbstractActionController
{
    public function indexAction()
    {
        //CARGAMOS LA SESSION PARA HACER VALIDACIONES
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();

        //OBTENEMOS LA COLECCION DE REGISTROS DE ACUERDO A SU ROL
        
        //SI SE TRATA DE UN ADMIN DE AERSA
        if($session['idrol'] == 1){
            $collection = \CategoriaQuery::create()->orderByIdcategoria(\Criteria::DESC)->find();
        }


        
        //INTANCIAMOS NUESTRA VISTA
        $view_model = new ViewModel();
        $view_model->setTemplate('/application/catalogo/categoria/index');
        $view_model->setVariables(array(
            'messages' => $this->flashMessenger(),
            'collection' => $collection,
        ));
        return $view_model;
    }
    
    public function nuevoAction()
    {
        $request = $this->getRequest();
        
        //INTANCIAMOS NUESTRO FORMULARIO
        //$padres = \CategoriaQuery::create()->orderByIdcategoria(\Criteria::ASC)->find();

        $form = new \Application\Catalogo\Form\CategoriasForm();
        
        if($request->isPost()){
            
            $post_data = $request->getPost();
            
            //LE PONEMOS LOS DATOS A NUESTRO FORMULARIO
            $post_data['usuario_estatus'] = 1;
            //$form->setData($post_data);
            
            //VALIDAMOS QUE EL USUARIO NO EXISTA EN LA BASE DE DATOS
            $exist = \UsuarioQuery::create()->filterByUsuarioUsername($post_data['usuario_username'])->exists();
            
            if(!$exist){
                
                //CREAMOS NUESTRA ENTIDAD VACIA
                $entity = new \Usuario();
                
                //INTANCIAMOS NUESTRO FILTRO
                $filter = new \Application\Catalogo\Filter\UsuarioFilter();
            
                //LE PONEMOS EL FILTRO A NUESTRO FORMULARIO
                $form->setInputFilter($filter->getInputFilter());
                
                //VERIFICAMOS QUE SEA VALIDO
                if($form->isValid()){
                    
                    //LE PONEMOS LOS DATOS A NUESTRA ENTIDAD
                    foreach ($post_data as $key => $value){
                        $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                    }
                    
                    //SETEAMOS EL STATUS Y EL PASSWORD
                    $entity->setUsuarioEstatus(1);
                    $entity->setUsuarioPassword(md5($post_data['usuario_passoword']));
                    
                    $entity->save();

                    $this->flashMessenger()->addSuccessMessage('Registro guardado satisfactoriamente!');
                    
                    return $this->redirect()->toUrl('/catalogo/usuario');

                }else{
                
                    
                }
                
            }else{
                $this->flashMessenger()->addErrorMessage('El nombre de usuario ya se encuentra registrado, por favor utilice uno distinto');
            }  
        }

        //INTANCIAMOS NUESTRA VISTA
        $view_model = new ViewModel();
        $view_model->setVariables(array
        (

            'form'      => $form,
            'padres'    => $padres,
            'messages'  => $this->flashMessenger(),
        ));

        $view_model->setTemplate('/application/catalogo/categoria/nuevo');
        return $view_model;

    }
    
    public function editarAction()
    {
        
        $request = $this->getRequest();
        
        //CACHAMOS EL ID QUE RECIBIMOS POR LA RUTA
        $id = $this->params()->fromRoute('id');
        
        //VERIFICAMOS SI EXISTE
        $exist = \UsuarioQuery::create()->filterByIdusuario($id)->exists();
        
        if($exist){
            
            //INTANCIAMOS NUESTRA ENTIDAD
            $entity = \UsuarioQuery::create()->findPk($id);

            //INTANCIAMOS NUESTRO FORMULARIO
            $form = new \Application\Catalogo\Form\UsuarioForm();
            $form->get('usuario_estatus')->setAttribute('required', true);
            
            //SI NOS ENVIAN UNA PETICION POST
            if($request->isPost()){
                
                $post_data = $request->getPost();
                
                $filter = new \Application\Catalogo\Filter\UsuarioFilter();
                
                //VALIDAMOS QUE EL USUARIO NO EXISTA EN LA BASE DE DATOS
                $exist = \UsuarioQuery::create()->filterByUsuarioUsername($post_data['usuario_username'])->filterByUsuarioUsername($entity->getUsuarioUsername(), \Criteria::NOT_EQUAL)->exists();
               
                if(!$exist){

                    //LE PONEMOS LOS DATOS A NUESTRA ENTIDAD
                    foreach ($post_data as $key => $value){
                        $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                    }

                    //LE PONEMOS LOS DATOS A NUESTRO FORMULARIO
                    $form->setData($entity->toArray(\BasePeer::TYPE_FIELDNAME));
                    
                    //VALIDAMOS SI ES UN FORMULARIO VALIDO
                    $form->setInputFilter($filter->getInputFilter());


                    $entity->save();

                    $this->flashMessenger()->addSuccessMessage('Registro guardado satisfactoriamente!');

                    return $this->redirect()->toUrl('/catalogo/usuario');

                    
                }else{
                    $this->flashMessenger()->addErrorMessage('El nombre de usuario ya se encuentra registrado, por favor utilice uno distinto');
                }
                
            }
            
            //LE PONEMOS LOS DATOS A NUESTRO FORMULARIO
            $form->setData($entity->toArray(\BasePeer::TYPE_FIELDNAME));
            
            //CAMBIAMOS ALGUNOS VALORES
            $form->get('usuario_password')->setLabel('Nueva contraseña');
            $form->get('usuario_password')->setValue('');
            
           
        }else{
            return $this->redirect()->toUrl('/catalogo/usuario');
        }
        
        //INTANCIAMOS NUESTRA VISTA
        $view_model = new ViewModel();
        $view_model->setVariables(array(
            'form' => $form,
            'messages' => $this->flashMessenger(),
        ));
        $view_model->setTemplate('/application/catalogo/usuario/editar');
        return $view_model;

    }
    
    public function changepasswordAction(){
        
        $request = $this->getRequest();
        
        //CACHAMOS EL ID QUE RECIBIMOS POR LA RUTA
        $id = $this->params()->fromRoute('id');
        
        //VERIFICAMOS SI EXISTE
        $exist = \UsuarioQuery::create()->filterByIdusuario($id)->exists();
        
        if($exist){
            
            //INTANCIAMOS NUESTRA ENTIDAD
            $entity = \UsuarioQuery::create()->findPk($id);
            
            //INTANCIAMOS NUESTRO FORMULARIO
            $form = new \Application\Catalogo\Form\UsuarioForm();
            
            //SI NOS ENVIAN UNA PETICION POST
            if($request->isPost()){
                
                $post_data = $request->getPost();
                $filter = new \Application\Catalogo\Filter\UsuarioFilter();
                
                //LE PONEMOS LOS DATOS A NUESTRA ENTIDAD
                foreach ($post_data as $key => $value){
                    $entity->setByName($key, md5($value), \BasePeer::TYPE_FIELDNAME);
                }
                
                 //LE PONEMOS LOS DATOS A NUESTRO FORMULARIO
                $form->setData($entity->toArray(\BasePeer::TYPE_FIELDNAME));
                
                //VALIDAMOS SI ES UN FORMULARIO VALIDO
                $form->setInputFilter($filter->getInputFilter());

                if($form->isValid()){

                    $entity->save();

                    $this->flashMessenger()->addSuccessMessage('Registro guardado satisfactoriamente!');

                    return $this->redirect()->toUrl('/catalogo/usuario');

                }
            }
            
        }else{
            return $this->redirect()->toUrl('/catalogo/usuario');
        }
  
    }
    
    public function eliminarAction(){
        
        $request = $this->getRequest();
        
        if($request->isPost()){
            
            $id = $this->params()->fromRoute('id');
            
            $entity = \UsuarioQuery::create()->findPk($id);
            $entity->delete();
            
            $this->flashMessenger()->addSuccessMessage('Registro eliminado satisfactoriamente!');

            return $this->redirect()->toUrl('/catalogo/usuario');
            
        }
        
    }

}
