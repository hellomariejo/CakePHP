<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class TicketType extends AppModel{
    
     public $displayField = 'description';
     public $validate = array('description' => 
                            array('rule' => 'notEmpty', 'required' => array('message' => 'Ingrese una descripción'))
        ); 
    
     
      public $hasMany = array (
                              'Ticket' => array(
                                               'classname'=>'Ticket',
                                               'foreignkey'=>'ticket_type_id',
                                               'dependent'=>'true'
                                             )  
                            );
    
     
}

    

?>
