<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 *
 
 */
class TicketTypesController extends AppController {
    
   public $helpers = array('Html', 'Form');
   public $components = array('Session', 'RequestHandler');

   public function index() 
            { 
                 $this->set('tickettypes', 
                 $this->TicketType->find('all')); //compartir variable  y pasarle a la vista index
                    
        } 
        
        
   public function add(){
             
           if($this->request->is('post')): // que el request sea de tipo post, si mandamos por get seria una url gigante e inseguro
             
                 if( $this->TicketType->save($this->request->data)): //checamos que se puedan guardar
                     $this->Session->setFlash('Tipo de Ticket '.$this->request->data['TicketType']['description'] .' Guardado!', 'alert-box', array('class'=>'alert-success'));
                     $this->redirect(array('action' => 'index')); //redirecciona al index, en base de controldores y acciones
                     else:
                        $this->Session->setFlash(__('El Tipo de Ticket no se pudo guardar, Por Favor Intente nuevamente'),'alert-box', array('class'=>'alert-danger'));  
                 endif;
                 
            endif;  
            
         }
         

          public function delete($id = null){
                  
             if($this->request->is('get')):
                 throw new MethodNotAllowedException();
                 else:
                     if($this->TicketType->delete($id)):
                        $this->Session->setFlash(__('El Tipo de Ticket ha sido Eliminado'), 'alert-box', array('class'=>'alert-success'));
                        $this->redirect(array('action' => 'index'));
                     endif;
             endif;
             
             
         } 
         
           public function edit($id = null){
             
             $this->TicketType->id = $id;
             if($this->request->is('get')): //si es get pasaron el id por url
                 $this->request->data = $this->TicketType->read(); //llena los datos en el form
      
                 else: //peticion no  get, y dado por el boton guardar
                     if( $this->TicketType->save($this->request->data)): 
                      $this->Session->setFlash('Tipo de Ticket '.$this->request->data['TicketType']['description'] .' Modificado!', 'alert-box', array('class'=>'alert-success'));
                      $this->redirect(array('action' => 'index'));
                      else:
                        $this->Session->setFlash(__('El Tipo de Ticket no se pudo guardar, Por Favor Intente nuevamente'),'alert-box', array('class'=>'alert-danger'));  
                     endif;
             endif;
             
             
         } 
        


 }
?>
