<?php

class Role extends AppModel{
  
   public $displayField = 'description';
   
   //VALIDACION DE LOS CAMPOS
    public $validate = array('description' => 
                            array('rule' => 'notEmpty', 'required' => array('message' => 'Ingrese una descripción'))
        ); 
     
   //RELACIONES ENTRE TABLAS
    
    public $hasMany = array (
                              'User' => array(
                                               'classname'=>'User',
                                               'foreignkey'=>'role_id',
                                               'dependent'=>'true'
                                             )  
                            );
        
}
?>
