<?php 

namespace Shared\CustomListener;
 
use Zend\Mvc\MvcEvent;
use Zend\EventManager\EventManagerInterface;
use Zend\EventManager\ListenerAggregateInterface;
use Zend\Code\Reflection\ClassReflection;

class TemplateMapListener implements ListenerAggregateInterface
{
   
    protected $listeners = array();
    public function attach(EventManagerInterface $events)
    {
       $this->listeners[] = $events->attach(MvcEvent::EVENT_DISPATCH, array($this, 'onDispatch'),1000);
    }
   
    public function detach(EventManagerInterface $events)
    {
       foreach ($this->listeners as $index => $listener) {
        
           if ($events->detach($listener)) {
                unset($this->listeners[$index]);
            }
        } 
       
    }
    
    public function onDispatch(MvcEvent $e)
    {
        
        date_default_timezone_set('America/Mexico_City');
        
        $controller_params = $e->getRouteMatch()->getParams();
        
        $controller_of_route = $controller_params['controller'];
        
        $section = new classReflection($controller_of_route.'Controller');
        
        $section = $section ->getFileName();   
      
        $section = explode('/src/',  $section);
        $section = explode("/",$section[1]);
        
        $template_map=$e->getApplication()->getServiceManager()->get('viewtemplatemapresolver');
       
        switch ($section[0])
        {
            case 'Website':
            
            {
                $template_map->merge(
                    array(
                        'layout/layout'      => __DIR__.'/../../../view/website/layout/layout.phtml',
                        'error/404'          => __DIR__.'/../../../view/website/layout/error/404.phtml',
                        'error/index'        => __DIR__.'/../../../view/website/layout/error/index.phtml',                                                        
                    ));
                break;
            }
            case 'Application':{

                $template_map->merge(
                    array(
                        'layout/layout'      => __DIR__.'/../../../view/application/layout/layout.phtml',
                        'error/404'          => __DIR__.'/../../../view/application/layout/error/404.phtml',
                        'error/index'        => __DIR__.'/../../../view/application/layout/error/index.phtml',                                                                  
                    ));
                break;
            }


        }       
         
    }
      
}