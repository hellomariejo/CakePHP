<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Ticket extends AppModel {
    
     public $displayField = 'subject';
     
      public $validate = array('subject' => 
                            array('rule' => 'notEmpty', 'required' => array('message' => 'Debe ingresar un Asunto')),
          'description' => 
                            array('rule' => 'notEmpty', 'required' => array('message' => 'Ingrese una descripción')),
          'group_id' => 
                            array('rule' => 'notEmpty', 'required' => array('message' => 'Ingrese una descripción')),
          'departament_id' => 
                            array('rule' => 'notEmpty', 'required' => array('message' => 'Ingrese una descripción')),
          'ticket_type_id' => 
                            array('rule' => 'notEmpty', 'required' => array('message' => 'Ingrese una descripción')),
          'priority_id' => 
                            array('rule' => 'notEmpty', 'required' => array('message' => 'Ingrese una descripción'))
        ); 
     
     public $hasMany = array (
                              'TicketsUser' => array(
                                               'classname'=>'TicketsUser',
                                               'foreignkey'=>'ticket_id',
                                               'dependent'=>'true'
                                             )  
                            );
     
     public $belongsTo = array(     
         
         'TicketType' => array(
         'className' => 'TicketType',
         'foreignKey' => 'ticket_type_id',
         'conditions' => '',
         'fields' => '',
         'order' => ''
         ),
         'Departament' => array(
         'className' => 'Departament',
         'foreignKey' => 'departament_id',
         'conditions' => '',
         'fields' => '',
         'order' => ''
         ),
         'Group' => array(
         'className' => 'Group',
         'foreignKey' => 'group_id',
         'conditions' => '',
         'fields' => '',
         'order' => ''
         ),
         'Priority' => array(
         'className' => 'Priority',
         'foreignKey' => 'priority_id',
         'conditions' => '',
         'fields' => '',
         'order' => ''
         )
         ,
         'State' => array(
         'className' => 'State',
         'foreignKey' => 'state_id',
         'conditions' => '',
         'fields' => '',
         'order' => ''
         )
         ,
         'Tech' => array(
         'className' => 'User',
         'foreignKey' => 'tech_id',
         'conditions' => '',
         'fields' => '',
         'order' => ''
         ),
         'Client' => array(
         'className' => 'User',
         'foreignKey' => 'user_id',
         'conditions' => '',
         'fields' => '',
         'order' => ''
         )
         
         );
    
    
    
    
}
?>
