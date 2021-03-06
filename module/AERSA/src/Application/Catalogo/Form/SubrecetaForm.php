<?php

namespace Application\Catalogo\Form;

use Zend\Form\Form;

class SubrecetaForm extends Form
{
    public function __construct($productos = array())
    {
        // we want to ignore the name passed
        parent::__construct('subreceta_form');
        $this->setAttribute('method', 'post');
        
        $this->add(array(
            'name' => 'idreceta',
            'type' => 'Hidden',
        ));

       
        $this->add(array(
            'name' => 'idproductoreceta',
            'type' => 'Select',
            'options' => array(
                'label' => 'Producto *',
                'value_options' => $productos
            ),
            'attributes' => array(
                'required' => false,
                'class' => 'form-control',
            ),
        ));
        
        $this->add(array(
            'name' => 'receta_cantidad',
            'type' => 'Text',
            'options' => array(
                'label' => 'Cantidad *',
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
            ),
        ));
        
    }
}
