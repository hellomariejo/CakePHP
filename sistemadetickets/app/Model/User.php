<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
App::uses('AppModel', 'Model');
App::uses('SimplePasswordHasher', 'Controller/Component/Auth');
class User extends AppModel{
 //usuario sistema de tickets
  
//      var $virtualFields = array(  
//        'fullname' => "CONCAT(User.name,' ',User.lastname)" ); 
//     
//
//    
    public $displayField = 'username';
    
//VALIDACION DE LOS CAMPOS
    public $validate = array(
                              'name' => array('rule' => 'notEmpty', 'required' => array(  'message' => 'Ingrese un nombre')), 
                              'lastname' => array('rule' => 'notEmpty', 'required' => array(  'message' => 'Ingrese los apellidos')),
                              'username' => array('rule' => 'notEmpty', 'required' => array(  'message' => 'Ingrese un nombre de usuario')),
                              'email' => array('rule' => 'email', 'required' => array(  'message' => 'Ingrese un nombre de usuario')),
                              'password' => array( array(
                                                            'rule'      => array('between', 8, 40),
                                                            'message'   => 'Your password must be between 8 and 40 characters.')),
  
                                                                 
                              'password_repeat' => array(
                                                        'length' => array(
                                                            'rule'      => array('between', 8, 40),
                                                           'message' => 'Mínimo 8 caracteres' 
                                                        ),
                                                            'compare'    => array(
                                                                'rule'      => array('validate_passwords'),
                                                               'message' => 'No coincide'
                                                            )),

                              'role_id' => array('rule' => 'notEmpty', 'required' => array(  'message' => 'Escoja un Rol')),
                              'group_id' => array('rule' => 'notEmpty', 'required' => array(  'message' => 'Escoja un Grupo')),
         );

     
   public $hasMany = array(
    'Ticket' => array(
        'className'   => 'Ticket',
        'foreignKey'  => false,
        'finderQuery' => 'SELECT *
                            FROM `tickets` as `Ticket`
                           WHERE `Ticket`.`user_id` = {$__cakeID__$}
                              OR `Ticket`.`tech_id` = {$__cakeID__$}'
    )
);
 

  
   
   public $belongsTo = array(
                                'Group' => array(
                                'className' => 'Group',
                                'foreignKey' => 'group_id',
                                'conditions' => '',
                                'fields' => '',
                                'order' => ''
                            ),
                                
                                'Role' => array(
                                'className' => 'Role',
                                'foreignKey' => 'role_id',
                                'conditions' => '',
                                'fields' => '',
                                'order' => ''
        )
        
  )
             
  
             
             ;

                   public function validate_passwords() {
                       return   $this->data[$this->alias]['password'] === $this->data[$this->alias]['password_repeat'];
                    }

    public function beforeSave($options = array()) {
        if (!empty($this->data['User']['password'])) {
            $passwordHasher = new SimplePasswordHasher(array('hashType' => 'sha1'));
            $this->data['User']['password'] = $passwordHasher->hash($this->data['User']['password']
            );
        }
        return true;
    }
    
   

    }
?>
