<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class PrioritiesController extends AppController {
    
   public $helpers = array('Html', 'Form');
   public $components = array('Session', 'RequestHandler');

   public function index() 
            { 
                 $this->set('priorities', 
                 $this->Priority->find('all')); //compartir variable  y pasarle a la vista index
                    
            } 
            

   public function add(){
             
           if($this->request->is('post')): // que el request sea de tipo post, si mandamos por get seria una url gigante e inseguro
             
                 if( $this->Priority->save($this->request->data)): //checamos que se puedan guardar
                     $this->Session->setFlash('Prioridad de un Ticket '.$this->request->data['Priority']['description'] .' Guardada!', 'alert-box', array('class'=>'alert-success'));
                     $this->redirect(array('action' => 'index')); //redirecciona al index, en base de controldores y acciones
                     else:
                        $this->Session->setFlash(__('La Prioridad no se pudo guardar, Por Favor Intente nuevamente'),'alert-box', array('class'=>'alert-danger'));  
                 endif;
                 
            endif;  
            
         }
         

          public function delete($id = null){
                  
             if($this->request->is('get')):
                 throw new MethodNotAllowedException();
                 else:
                     if($this->Priority->delete($id)):
                        $this->Session->setFlash(__('La Prioridad ha sido Eliminada'), 'alert-box', array('class'=>'alert-success'));
                        $this->redirect(array('action' => 'index'));
                     endif;
             endif;
             
             
         } 
         
           public function edit($id = null){
             
             $this->Priority->id = $id;
             if($this->request->is('get')): //si es get pasaron el id por url
                 $this->request->data = $this->Priority->read(); //llena los datos en el form
      
                 else: //peticion no  get, y dado por el boton guardar
                     if( $this->Priority->save($this->request->data)): 
                      $this->Session->setFlash('Prioridad del Ticket '.$this->request->data['Priority']['description'] .' Modificada!', 'alert-box', array('class'=>'alert-success'));
                      $this->redirect(array('action' => 'index'));
                      else:
                        $this->Session->setFlash(__('La Prioridad no se pudo guardar, Por Favor Intente nuevamente'),'alert-box', array('class'=>'alert-danger'));  
                     endif;
             endif;
             
             
         }
         
     
    
}

?>
