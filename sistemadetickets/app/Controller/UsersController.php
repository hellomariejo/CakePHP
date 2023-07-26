<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class UsersController extends AppController {
   public $helpers = array('Html', 'Form');
   public $components = array('Session', 'RequestHandler');
  
public function beforeFilter() //funcion para que solo se pueda ingresar al add de usuarios, con el usuario actual
     {
             
                parent::beforeFilter();
               
                $this->Auth->allow('logout','login'); //permitir a los usuarios permitir añadirse si es por primera vez q visitan
                $this->Auth->deny('view' , 'add', 'edit', 'delete');
              //  $this->Auth->authError = "Please log in first in order to preform that action.";
                if ($this->Session->read('Auth.User.role_id') != 1){
                     
                }
           
     }

   public function index() 
            { 
  
             $this->set('users', $this->User->find('all',array('conditions' => array("not" => array ("User.role_id" =>1)))));
               //llenado de los select en el modal
                  $roles = $this->User->Role->find('list');
                  $groups = $this->User->Group->find('list'); 
                  $this->set('roles',$roles );
                  $this->set('groups', $groups ); 
                  
                 $group_dir =$this->User->Group->find('all',array('conditions' => array("OR" => array ("Group.id" =>array(6,7)))));
                  $this->set('group_dir', $group_dir ); 
                 
            } 
            

 
   public function add(){
            
          
              if($this->request->is('post')): // que el request sea de tipo post, si mandamos por get seria una url gigante e inseguro
            
                 if( $this->User->save($this->request->data)): //checamos que se puedan guardar
                     $this->Session->setFlash(__('Usuario ').$this->request->data['User']['username'] .__(' Guardado!'), 'alert-box', array('class'=>'alert-success'));
                     $this->redirect(array('action' => 'index')); //redirecciona al index, en base de controldores y acciones
                     else:
                        $this->Session->setFlash(__('El Usuario no se pudo guardar, Por Favor Intente nuevamente'),'alert-box', array('class'=>'alert-danger'));  
                 endif;
                 
            endif;  
           ;
        }
         

          public function delete($id = null){
                  
             if($this->request->is('get')):
                 throw new MethodNotAllowedException();
                 else:
                     if($this->User->delete($id)):
                        $this->Session->setFlash(__('El Usuario ha sido Eliminado'), 'alert-box', array('class'=>'alert-success'));
                        $this->redirect(array('action' => 'index'));
                     endif;
             endif;
             
             
         } 
         
           public function edit($id = null){
             
             $this->User->id = $id;
             $roles = $this->User->Role->find('list');
                  $groups = $this->User->Group->find('list'); 
                  $this->set(compact('roles',$roles) );
                  $this->set(compact('groups', $groups) );  
             
             if($this->request->is('get')): //si es get pasaron el id por url
                 $this->request->data = $this->User->read(); //llena los datos en el form
      
                 else: //peticion no  get, y dado por el boton guardar
                     if( $this->User->save($this->request->data)): 
                    $this->Session->setFlash(__('Usuario ').$this->request->data['User']['username'] .__(' Modificado!'), 'alert-box', array('class'=>'alert-success'));
                             if ($this->Session->read('Auth.User.role_id') == 1 ){  
                             $this->redirect(array('action' => 'index')); 
                              

                             } 
                             else  {
                                    $this->Session->setFlash(__('Usuario ').$this->request->data['User']['username'] .__(' Modificado!'), 'alert-box', array('class'=>'alert-success'));
                                    $this->redirect(array('action' => 'view_profile'));
                                      
                                  }
                      else:
                        $this->Session->setFlash(__('El Usuario no se pudo guardar, Por Favor Intente nuevamente'),'alert-box', array('class'=>'alert-danger'));  
                         $this->redirect(array('action' => 'index'));
                          
                      endif;
                    
             endif;
//              unset($this->request->data['User']['password']);
//                     unset($this->request->data['User']['pwd_repeat']);
             
         }
         
   
            public function login() 
            {
                if ($this->request->is('post')) {
                $auth= $this->Auth->login();
                
                if ($auth) {
                    return $this->redirect($this->Auth->redirectUrl());
                    }
                    else 
                    {  
                        $this->Session->setFlash(__('Usuario o Contraseña Incorrectos'),'alert-box', array('class'=>'alert-danger'));
                    }
 }
            
                    }
           
              public function logout()
                {
                    $this->Session->destroy();
                   return $this->redirect($this->Auth->logout());
                }
                
                
              public  function change_password($id=null) {
                     $id =$this->Session->read('Auth.User.id');
                      $this->User->id = $id;
                      if($this->request->is('get')): //si es get pasaron el id por url
                         $this->request->data = $this->User->read(); //llena los datos en el form

                         else: //peticion no  get, y dado por el boton guardar
                             if( $this->User->save($this->request->data)): 
                            $this->Session->setFlash(__('Contraseña Modificada!'), 'alert-box', array('class'=>'alert-success'));

                                     $this->redirect(array('action' => 'view_profile')); 
                            else:
                                $this->Session->setFlash(__('La Contraseña no se pudo guardar, Por Favor Intente nuevamente'),'alert-box', array('class'=>'alert-danger'));  
                                 $this->redirect(array('action' => 'view_profile'));

                              endif;

                     endif;
                          // unset($this->request->data['User']['pwd_repeat']);
             
         }

              
                
          
                public function view_profile ($id=null){
                    $id =$this->Session->read('Auth.User.id');
                     $this->User->id = $id; 
                     $this->set('id', $id); //set value to view from controller
                     $this->set('user', $this->User->read());
                    
                }
 
         
         
    
}
 
?>
