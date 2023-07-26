<?php

class TicketsUser extends AppModel{
    
     public $displayField = 'id';
     public $validate = array('symptom' => 
                            array('rule' => 'notEmpty', 'required' => array('message' => 'Ingrese una descripción',
                                'solution' => 
                            array('rule' => 'notEmpty', 'required' => array('message' => 'Ingrese una descripción')))
                               )); 
    
     
     
     
     public $belongsTo = array(
         
         
         'Ticket' => array(
         'className' => 'Ticket',
         'foreignKey' => 'ticket_id',
         'conditions' => '',
         'fields' => '',
         'order' => ''
         )
         );
     
    
     
}

?>
