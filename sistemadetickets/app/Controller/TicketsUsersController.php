<?php

class TicketsUsersController extends AppController {
    
   public $helpers = array('Html', 'Form');
   public $components = array('Session', 'RequestHandler');
 
   public function index() 
            { 
               
                $this->set('ticketsusers', $this->TicketsUser->find('all'));
            
              } 
           
           
    public function add(){
           
           if($this->request->is('post')): // que el request sea de tipo post, si mandamos por get seria una url gigante e inseguro
             
                 if( $this->TicketsUser->save($this->request->data)): //checamos que se puedan guardar
                   //pass parameters from one controller action to another view 
                     //$idtu = $this->request->data['TicketsUser']['id'];
                     //$this->Session->write('idtu', $idtu);
                     $idd = $this->request->data['TicketsUser']['ticket_id'];
                     $this->Session->write('idd', $idd);
                    
                     $this->Session->setFlash(__('Informacion del Ticket N° ').$idd .__(' Guardada'), 'alert-box', array('class'=>'alert-success'));
                     $this->redirect(array('controller'=>'Tickets','action' => 'view', $idd)); //redirecciona al index, en base de controldores y acciones
                    
                     else:
                        $this->Session->setFlash(__('La información no se ha podido enviar, Por Favor Intente nuevamente'),'alert-box', array('class'=>'alert-danger'));  
                 endif;
                 
            endif;  
            
         }
         
          public function edit($idd = null, $idtu = null){
             $this->TicketsUser->ticket_id =$idd;
              $this->TicketsUser->id = $idtu;
             
              if($this->request->is('get')): //si es get pasaron el id por url
                 $this->request->data = $this->TicketsUser->read(); //llena los datos en el form
      
                 else: //peticion no  get, y dado por el boton guardar
                     if( $this->TicketsUser->save($this->request->data)): 
                     $this->Session->setFlash(__('Informacion del Ticket N° ').$idd .__(' Guardada'), 'alert-box', array('class'=>'alert-success'));
                      $this->redirect(array('controller'=>'Tickets','action' => 'view', $idd  ));
                      else:
                        $this->Session->setFlash(__('La información no se pudo guardar, Por Favor Intente nuevamente'),'alert-box', array('class'=>'alert-danger'));  
                     endif;
             endif;
         }
         
    
         public function t_list($id=null){
          $find = $this->TicketsUser->find('all',array('conditions' => array("TicketsUser.ticket_id" => $id )));
          return $find;
         }
        
         
     
}
?>
