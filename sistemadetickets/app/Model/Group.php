<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Group extends AppModel{
 
    public $displayField = 'description';
    
    
    //VALIDACION DE LOS CAMPOS
    public $validate = array(
                                'description' => array('rule' => 'notEmpty', 
                                 'required' => array(  'message' => 'Ingrese una descripción'))
                              );
    
    
    
     //RELACIONES ENTRE TABLAS
    
    public $hasMany = array (
                              'User' => array(
                                               'classname'=>'User',
                                               'foreignkey'=>'group_id',
                                               'dependent'=>'true'
                                             )  
                            );
    
     
}


?>
