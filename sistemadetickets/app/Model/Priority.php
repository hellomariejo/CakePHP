<?php

class Priority extends AppModel{
  
   public $displayField = 'description';
   
   //VALIDACION DE LOS CAMPOS
    public $validate = array('description' => 
                            array('rule' => 'notEmpty', 'required' => array('message' => 'Ingrese una descripción'))
        ); 
     
   //RELACIONES ENTRE TABLAS
    public $hasMany = array (
                              'Ticket' => array(
                                               'classname'=>'Ticket',
                                               'foreignkey'=>'priority_id',
                                               'dependent'=>'true'
                                             )  
                            );
   
        
}
?>
