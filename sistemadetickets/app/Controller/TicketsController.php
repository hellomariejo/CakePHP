<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
App::import('Controller', 'TicketsUsers');
class TicketsController extends AppController {
 public $helpers = array('Html', 'Form');
 public $components = array('Session', 'RequestHandler');

   public function index() 
            { 
       //ADMINISTRADOR  
            //Todos los Tickets
             $this->set('tickets',$this->Ticket->find('all')); 
             $count1= $this->Ticket->find('count');
             $this->set('count1',$count1);
             //Tickets Abiertos
             $this->set('opentickets', $this->Ticket->find('all', array('conditions' => array("Ticket.state_id" =>2)))); 
             $count2= $this->Ticket->find('count',array('conditions' => array("Ticket.state_id" =>2)));
             $this->set('count2',$count2);
            //Tickets Cerrados
             $this->set('closedtickets', $this->Ticket->find('all', array('conditions' => array('OR'=>array("Ticket.state_id" =>array(4,5 )))))); 
             $count3= $this->Ticket->find('count',array('conditions' => array('OR'=>array("Ticket.state_id" =>array(4,5 )))));
             $this->set('count3',$count3);
             
             //TICKETS NUEVOS
             $this->set('newtickets', $this->Ticket->find('all', array('conditions' => array("Ticket.state_id" =>1)))); 
             $count_new= $this->Ticket->find('count',array('conditions' => array("Ticket.state_id" =>1)));
             $this->set('count_new',$count_new);
             
          
          
         //DIRECTORES, JEFES DE AREA, TECNICOS FACULTAD
             //todos los tickets asignados o creados por el tecnico dependencia logeado
             $this->set('tickets1', $this->Ticket->find('all', array('conditions' => array('OR' =>array("Ticket.tech_id" => $this->Session->read('Auth.User.id'),"Ticket.user_id" => $this->Session->read('Auth.User.id'),"Ticket.group_id" => $this->Session->read('Auth.User.group_id'))))));
             $count4= $this->Ticket->find('count',array('conditions' =>              array('OR' =>array("Ticket.tech_id" => $this->Session->read('Auth.User.id'), "Ticket.user_id" =>$this->Session->read('Auth.User.id'),"Ticket.group_id" => $this->Session->read('Auth.User.group_id')))));
             $this->set('count4',$count4);
             //Tickets Abiertos
             $this->set('opentickets1',$this->Ticket->find('all', array('conditions' => array('OR' =>array("Ticket.tech_id" => $this->Session->read('Auth.User.id'),"Ticket.user_id" => $this->Session->read('Auth.User.id'),"Ticket.group_id" => $this->Session->read('Auth.User.group_id')), 'AND' =>array("Ticket.state_id" =>2))))); 
             $count5= $this->Ticket->find('count',                array('conditions' => array('OR' =>array("Ticket.tech_id" => $this->Session->read('Auth.User.id'), "Ticket.user_id" => $this->Session->read('Auth.User.id'),"Ticket.group_id" => $this->Session->read('Auth.User.group_id')), 'AND' =>array("Ticket.state_id" =>2))));
             $this->set('count5',$count5);
             //Tickets Nuevos
             $this->set('newtickets1', $this->Ticket->find('all', array('conditions' => array('OR' =>array("Ticket.tech_id" => $this->Session->read('Auth.User.id'),"Ticket.user_id" => $this->Session->read('Auth.User.id'),"Ticket.group_id" => $this->Session->read('Auth.User.group_id')), 'AND' =>array("Ticket.state_id" =>1))))); 
             $count_new1= $this->Ticket->find('count',array('conditions' => array('OR' =>array("Ticket.tech_id" => $this->Session->read('Auth.User.id'),"Ticket.user_id" => $this->Session->read('Auth.User.id'),"Ticket.group_id" => $this->Session->read('Auth.User.group_id')), 'AND' =>array("Ticket.state_id" =>1))));
             $this->set('count_new1',$count_new1);
            
            //Tickets Cerrados
             $this->set('closedtickets1', $this->Ticket->find('all', array('conditions' => array('OR' =>array("Ticket.tech_id" => $this->Session->read('Auth.User.id'),"Ticket.user_id" => $this->Session->read('Auth.User.id'),"Ticket.group_id" => $this->Session->read('Auth.User.group_id')), 'AND' =>array('OR'=>array("Ticket.state_id" =>array(4,5 ))))))); 
             $count6= $this->Ticket->find('count',array('conditions' => array('OR' =>array("Ticket.tech_id" => $this->Session->read('Auth.User.id'), "Ticket.user_id" => $this->Session->read('Auth.User.id'),"Ticket.group_id" => $this->Session->read('Auth.User.group_id')), 'AND' =>array('OR'=>array("Ticket.state_id" =>array(4,5 ))))));
             $this->set('count6',$count6);
             
             
           //TECNICOS DTIC
             
             $this->set('tickets2', $this->Ticket->find('all', array('conditions' => array('OR' =>array("Ticket.tech_id" => $this->Session->read('Auth.User.id'),"Ticket.user_id" => $this->Session->read('Auth.User.id'),)))));
             $count7= $this->Ticket->find('count',array('conditions' =>               array('OR' =>array("Ticket.tech_id" => $this->Session->read('Auth.User.id'), "Ticket.user_id" =>$this->Session->read('Auth.User.id')))));
             $this->set('count7',$count7);
             
             $this->set('opentickets2',$this->Ticket->find('all', array('conditions' => array('OR' =>array("Ticket.tech_id" => $this->Session->read('Auth.User.id'),"Ticket.user_id" => $this->Session->read('Auth.User.id')), 'AND' =>array("Ticket.state_id" =>2))))); 
             $count8= $this->Ticket->find('count',                array('conditions' => array('OR' =>array("Ticket.tech_id" => $this->Session->read('Auth.User.id'), "Ticket.user_id" => $this->Session->read('Auth.User.id')), 'AND' =>array("Ticket.state_id" =>2))));
             $this->set('count8',$count8);
             
             $this->set('newtickets2',$this->Ticket->find('all', array('conditions' => array('OR' =>array("Ticket.tech_id" => $this->Session->read('Auth.User.id'),"Ticket.user_id" => $this->Session->read('Auth.User.id')), 'AND' =>array("Ticket.state_id" =>1))))); 
             $count_new2= $this->Ticket->find('count',           array('conditions' => array('OR' =>array("Ticket.tech_id" => $this->Session->read('Auth.User.id'),"Ticket.user_id" => $this->Session->read('Auth.User.id')), 'AND' =>array("Ticket.state_id" =>1)))); 
             $this->set('count_new2',$count_new2);
             
             $this->set('closedtickets2', $this->Ticket->find('all', array('conditions' => array('OR' =>array("Ticket.tech_id" => $this->Session->read('Auth.User.id'),"Ticket.user_id" => $this->Session->read('Auth.User.id')), 'AND' =>array('OR'=>array("Ticket.state_id" =>array(4,5 ))))))); 
             $count9= $this->Ticket->find('count',array('conditions' => array('OR' =>array("Ticket.tech_id" => $this->Session->read('Auth.User.id'), "Ticket.user_id" => $this->Session->read('Auth.User.id')), 'AND' =>array('OR'=>array("Ticket.state_id" =>array(4,5 ))))));
             $this->set('count9',$count9);
           
              //ADMINISTRADOR
              $ticket_types = $this->Ticket->TicketType->find('list');
              $departaments = $this->Ticket->Departament->find('list'); 
              $groups = $this->Ticket->Group->find('list');
              $priorities = $this->Ticket->Priority->find('list');
              
              
              $this->set('ticket_types',$ticket_types );
              $this->set('departaments', $departaments ); 
              $this->set('groups', $groups) ;
              $this->set('priorities', $priorities) ;
             
          // DIRECTORES, TECNICOS DE DEPENDENCIA, Y FACTULTAS Y JEFES DE AREAS ADD
              $groups1 = $this->Ticket->Group->find('list',array('conditions' => array('OR' =>array("Group.id" =>array(1,2,3)))));
              $groups2 = $this->Ticket->Group->find('list',array('conditions' => array('OR' =>array("Group.id" =>array(6)))));
              $groups3 = $this->Ticket->Group->find('list',array('conditions' => array('OR' =>array("Group.id" =>array(1,2,3,6)))));
              $groups4 = $this->Ticket->Group->find('list',array('conditions' => array('OR' =>array("Group.id" =>array(5,6)))));

              $this->set('groups1',$groups1 );
              $this->set('groups2',$groups2 );
              $this->set('groups3',$groups3 );
              $this->set('groups4',$groups4 );
              
             
              //asignar usuario logeado a solicitante
              $idc = $this->Session->read('Auth.User.id');
              $client =$this->Ticket->Client->find('list', array('conditions'=>array("Client.id" =>$idc)));
             $this->set('client', $client); 

              // $this->set('tickets1',$this->Ticket->find('all',array('conditions'=>array("Client.id" =>$idc)))); 
            
            } 
   
        
         public function add(){
             
           if($this->request->is('post')): // que el request sea de tipo post, si mandamos por get seria una url gigante e inseguro
             
                 if( $this->Ticket->save($this->request->data)): //checamos que se puedan guardar
                    //$this->Session->delete('Ticket.id');
                     $this->Session->setFlash('Ticket '.$this->request->data['Ticket']['id'] .' Guardado!', 'alert-box', array('class'=>'alert-success'));
                     $this->redirect(array('action' => 'index')); //redirecciona al index, en base de controldores y acciones
                     else:
                        $this->Session->setFlash(__('El Ticket se pudo guardar, Por Favor Intente nuevamente'),'alert-box', array('class'=>'alert-danger'));  
                 endif;
                 
            endif;  
            
         }
            
            
         public function edit($id = null){
             
             $this->Ticket->id = $id;
             
             if($this->request->is('get')): //si es get pasaron el id por url
                 $this->request->data = $this->Ticket->read(); //llena los datos en el form
      
                 else: //peticion no  get, y dado por el boton guardar
                     if( $this->Ticket->save($this->request->data)): 
                      $this->Session->setFlash(__('Información del Ticket N° ').$this->request->data['Ticket']['id'] .__(' Modificada!'), 'alert-box', array('class'=>'alert-success'));
                      $this->redirect(array('action' => 'view', $this->request->data['Ticket']['id']));
                      else:
                        $this->Session->setFlash(__('Información del Ticket no se pudo modificar, Por Favor Intente nuevamente'),'alert-box', array('class'=>'alert-danger'));  
                     endif;
             endif;
         }
         
       
         
         public function view($id =null)
         { 
             
           $this->Ticket->id = $id; 
           $this->set('ticket', $this->Ticket->read(null, $id));
           $this->set('id', $id); //set value to view from controller
           //poner en sesion el id
         //  $this->Session->write('id',$id);
             
           $TicketsUsers= new TicketsUsersController;
           $answers = $TicketsUsers->t_list($id);
           $this->set('answers', $answers); 
             
             
         //ADMINISTRADOR
           $states = $this->Ticket->State->find('list', array('conditions' => array('NOT'=>array("State.id" =>1 )))); 
           $groups = $this->Ticket->Group->find('list');
           $technicians = $this->Ticket->Tech->find('list',array('conditions' => array( "Tech.validity" => 'Válido')));
           
           $this->set('states', $states ); 
           $this->set('groups', $groups ); 
           $this->set('technicians',  $technicians ); 
         
        //TRANSFERIR AREA  
                   //TECNICO DE DEPENDIENCIA SOLO MUESTRA DIRECCION
                   $groups1 = $this->Ticket->Group->find('list',array('conditions' => array("Group.id" => 6 )));
                   $this->set(compact('groups1', $groups1) ); 

                    //DIRECCION DTIC
                   $groups2 = $this->Ticket->Group->find('list',array('conditions' =>  array('OR'=>array("Group.id" =>1,array("Group.id" =>2),array("Group.id" =>3)))));
                   $this->set(compact('groups2', $groups2) ); 

                   //JEFE DE AREA
                   $groups3 = $this->Ticket->Group->find('list',array('conditions' =>  array('OR'=>array("Group.id" =>1,array("Group.id" =>2),array("Group.id" =>3),array("Group.id" =>6)))));
                   $this->set(compact('groups3', $groups3) ); 
          
        //ASIGNAR TECNICO 
                   //TECNICOS DTIC SOPORTE
                   $technicians1 = $this->Ticket->Tech->find('list',array('conditions' => array('AND'=>array("Tech.group_id" => 1, "Tech.validity" =>'Válido'))));
                   $this->set(compact('technicians1',  $technicians1) ); 
                   
                   //TECNICO DTIC DESARROLLO
                   $technicians2 = $this->Ticket->Tech->find('list',array('conditions' => array('AND'=>array("Tech.group_id" => 2, "Tech.validity" =>'Válido'))));
                   $this->set(compact('technicians2',  $technicians2) ); 
                   
                   //TECNICO DTIC REDES
                   $technicians3 = $this->Ticket->Tech->find('list',array('conditions' => array('AND'=>array("Tech.group_id" => 3, "Tech.validity" =>'Válido'))));
                   $this->set(compact('technicians3',  $technicians3) ); 
                   
                   //TECNICO FAC
                   $technicians4= $this->Ticket->Tech->find('list',array('conditions' => array('AND'=>array("Tech.group_id" => 5, "Tech.validity" =>'Válido'))));
                   $this->set(compact('technicians4',  $technicians4) ); 
                   
// //ALERTA NUEVOS TICKETS
////                 ADMINISTRADOR
//                   $this->set('newtickets', $this->Ticket->find('all', array('conditions' => array("Ticket.state_id" =>1)))); 
//                   $count_new= $this->Ticket->find('count',array('conditions' => array("Ticket.state_id" =>1)));
//                   $this->set('count_new',$count_new);
////                   
//////                   DIRECTOR, JEFE DE AREA , TECNICO FAC
//                     $this->set('newtickets1', $this->Ticket->find('all', array('conditions' => array('OR' =>array("Ticket.tech_id" => $this->Session->read('Auth.User.id'),"Ticket.user_id" => $this->Session->read('Auth.User.id'),"Ticket.group_id" => $this->Session->read('Auth.User.group_id')), 'AND' =>array("Ticket.state_id" =>1))))); 
//                     $count_new1= $this->Ticket->find('count',array('conditions' => array('OR' =>array("Ticket.tech_id" => $this->Session->read('Auth.User.id'),"Ticket.user_id" => $this->Session->read('Auth.User.id'),"Ticket.group_id" => $this->Session->read('Auth.User.group_id')), 'AND' =>array("Ticket.state_id" =>1))));
//                     $this->set('count_new1',$count_new1);
////                     
//////                     TECNICO DTIC
//                     $this->set('newtickets2',$this->Ticket->find('all', array('conditions' => array('OR' =>array("Ticket.tech_id" => $this->Session->read('Auth.User.id'),"Ticket.user_id" => $this->Session->read('Auth.User.id')), 'AND' =>array("Ticket.state_id" =>1))))); 
//                     $count_new2= $this->Ticket->find('count',           array('conditions' => array('OR' =>array("Ticket.tech_id" => $this->Session->read('Auth.User.id'),"Ticket.user_id" => $this->Session->read('Auth.User.id')), 'AND' =>array("Ticket.state_id" =>1)))); 
//                     $this->set('count_new2',$count_new2);
//           
//

          
           
         
         }
        
         public function reports (){
             
      //CONTAR TICKETS
            // ADMINISTRADOR
             //Todos los Tickets
          //   $this->set('tickets',$this->Ticket->find('all')); 
             $count1= $this->Ticket->find('count');
             $this->set('count1',$count1);
             //Tickets Abiertos
          //   $this->set('opentickets', $this->Ticket->find('all', array('conditions' => array("Ticket.state_id" =>2)))); 
             $count2= $this->Ticket->find('count',array('conditions' => array("Ticket.state_id" =>2)));
             $this->set('count2',$count2);
            //Tickets Cerrados
           //  $this->set('closedtickets', $this->Ticket->find('all', array('conditions' => array('OR'=>array("Ticket.state_id" =>array(4,5 )))))); 
             $count3= $this->Ticket->find('count',array('conditions' => array('OR'=>array("Ticket.state_id" =>array(4,5 )))));
             $this->set('count3',$count3);
             //TICKETS NUEVOS
            // $this->set('newtickets', $this->Ticket->find('all', array('conditions' => array("Ticket.state_id" =>1)))); 
             $count_new= $this->Ticket->find('count',array('conditions' => array("Ticket.state_id" =>1)));
             $this->set('count_new',$count_new);
             
             //DIRECTORES, JEFES DE AREA, TECNICOS FACULTAD
             //todos los tickets asignados o creados por el tecnico dependencia logeado
            // $this->set('tickets1', $this->Ticket->find('all', array('conditions' => array('OR' =>array("Ticket.tech_id" => $this->Session->read('Auth.User.id'),"Ticket.user_id" => $this->Session->read('Auth.User.id'),"Ticket.group_id" => $this->Session->read('Auth.User.group_id'))))));
             $count4= $this->Ticket->find('count',array('conditions' =>              array('OR' =>array("Ticket.tech_id" => $this->Session->read('Auth.User.id'), "Ticket.user_id" =>$this->Session->read('Auth.User.id'),"Ticket.group_id" => $this->Session->read('Auth.User.group_id')))));
             $this->set('count4',$count4);
             //Tickets Abiertos
            // $this->set('opentickets1',$this->Ticket->find('all', array('conditions' => array('OR' =>array("Ticket.tech_id" => $this->Session->read('Auth.User.id'),"Ticket.user_id" => $this->Session->read('Auth.User.id'),"Ticket.group_id" => $this->Session->read('Auth.User.group_id')), 'AND' =>array("Ticket.state_id" =>2))))); 
             $count5= $this->Ticket->find('count',                array('conditions' => array('OR' =>array("Ticket.tech_id" => $this->Session->read('Auth.User.id'), "Ticket.user_id" => $this->Session->read('Auth.User.id'),"Ticket.group_id" => $this->Session->read('Auth.User.group_id')), 'AND' =>array("Ticket.state_id" =>2))));
             $this->set('count5',$count5);
             //Tickets Nuevos
            // $this->set('newtickets1', $this->Ticket->find('all', array('conditions' => array('OR' =>array("Ticket.tech_id" => $this->Session->read('Auth.User.id'),"Ticket.user_id" => $this->Session->read('Auth.User.id'),"Ticket.group_id" => $this->Session->read('Auth.User.group_id')), 'AND' =>array("Ticket.state_id" =>1))))); 
             $count_new1= $this->Ticket->find('count',array('conditions' => array('OR' =>array("Ticket.tech_id" => $this->Session->read('Auth.User.id'),"Ticket.user_id" => $this->Session->read('Auth.User.id'),"Ticket.group_id" => $this->Session->read('Auth.User.group_id')), 'AND' =>array("Ticket.state_id" =>1))));
             $this->set('count_new1',$count_new1);
            
            //Tickets Cerrados
            // $this->set('closedtickets1', $this->Ticket->find('all', array('conditions' => array('OR' =>array("Ticket.tech_id" => $this->Session->read('Auth.User.id'),"Ticket.user_id" => $this->Session->read('Auth.User.id'),"Ticket.group_id" => $this->Session->read('Auth.User.group_id')), 'AND' =>array('OR'=>array("Ticket.state_id" =>array(4,5 ))))))); 
             $count6= $this->Ticket->find('count',array('conditions' => array('OR' =>array("Ticket.tech_id" => $this->Session->read('Auth.User.id'), "Ticket.user_id" => $this->Session->read('Auth.User.id'),"Ticket.group_id" => $this->Session->read('Auth.User.group_id')), 'AND' =>array('OR'=>array("Ticket.state_id" =>array(4,5 ))))));
             $this->set('count6',$count6);
             
             
           //TECNICOS DTIC
             
             //$this->set('tickets2', $this->Ticket->find('all', array('conditions' => array('OR' =>array("Ticket.tech_id" => $this->Session->read('Auth.User.id'),"Ticket.user_id" => $this->Session->read('Auth.User.id'),)))));
             $count7= $this->Ticket->find('count',array('conditions' =>               array('OR' =>array("Ticket.tech_id" => $this->Session->read('Auth.User.id'), "Ticket.user_id" =>$this->Session->read('Auth.User.id')))));
             $this->set('count7',$count7);
             
           //  $this->set('opentickets2',$this->Ticket->find('all', array('conditions' => array('OR' =>array("Ticket.tech_id" => $this->Session->read('Auth.User.id'),"Ticket.user_id" => $this->Session->read('Auth.User.id')), 'AND' =>array("Ticket.state_id" =>2))))); 
             $count8= $this->Ticket->find('count',                array('conditions' => array('OR' =>array("Ticket.tech_id" => $this->Session->read('Auth.User.id'), "Ticket.user_id" => $this->Session->read('Auth.User.id')), 'AND' =>array("Ticket.state_id" =>2))));
             $this->set('count8',$count8);
             
            // $this->set('newtickets2',$this->Ticket->find('all', array('conditions' => array('OR' =>array("Ticket.tech_id" => $this->Session->read('Auth.User.id'),"Ticket.user_id" => $this->Session->read('Auth.User.id')), 'AND' =>array("Ticket.state_id" =>1))))); 
             $count_new2= $this->Ticket->find('count',           array('conditions' => array('OR' =>array("Ticket.tech_id" => $this->Session->read('Auth.User.id'),"Ticket.user_id" => $this->Session->read('Auth.User.id')), 'AND' =>array("Ticket.state_id" =>1)))); 
             $this->set('count_new2',$count_new2);
             
            // $this->set('closedtickets2', $this->Ticket->find('all', array('conditions' => array('OR' =>array("Ticket.tech_id" => $this->Session->read('Auth.User.id'),"Ticket.user_id" => $this->Session->read('Auth.User.id')), 'AND' =>array('OR'=>array("Ticket.state_id" =>array(4,5 ))))))); 
             $count9= $this->Ticket->find('count',array('conditions' => array('OR' =>array("Ticket.tech_id" => $this->Session->read('Auth.User.id'), "Ticket.user_id" => $this->Session->read('Auth.User.id')), 'AND' =>array('OR'=>array("Ticket.state_id" =>array(4,5 ))))));
             $this->set('count9',$count9);
             
             
         //REPORTES POR DEPARTAMENTS
             $departaments = $this->Ticket->Departament->find('all'); 
             $this->set('departaments', $departaments) ; 

//REPORTES POR AREAS   
//            Administrador
             if ($this->Session->read('Auth.User.role_id') == 1 )
              { 
              $groups = $this->Ticket->Group->find('all',array('conditions' => array('NOT' =>array("Group.id"=>4)))); 
              $this->set('groups', $groups ); 
              }
//             Director DTIC
              if ($this->Session->read('Auth.User.group_id') == 6 )
              { 
              $groups = $this->Ticket->Group->find('all',array('conditions' => array('OR' =>array("Group.id"=>array(1,2,3))))); 
              $this->set('groups', $groups ); 
              }
// REPORTES POR TECNICO
////        Administrador y Director
             if (($this->Session->read('Auth.User.role_id') == 1)||($this->Session->read('Auth.User.group_id') == 6))
           {
              $techs = $this->Ticket->Tech->find('all',array('conditions' => array("Tech.role_id" => array(4,3))));
              $this->set('techs', $techs ); 
           } 
             if (($this->Session->read('Auth.User.role_id') == 3 )&&($this->Session->read('Auth.User.group_id') == 1 ))
           {
            $techs = $this->Ticket->Tech->find('all',array('conditions' => array('OR' =>array("Tech.role_id" => array(3,4)),'AND'=>array('Tech.group_id'=>1))));
            $this->set('techs', $techs ); 
           }
            if (($this->Session->read('Auth.User.role_id') == 3 )&&($this->Session->read('Auth.User.group_id') == 2 ))
           {
            $techs = $this->Ticket->Tech->find('all',array('conditions' => array('OR' =>array("Tech.role_id" => array(3,4)),'AND'=>array('Tech.group_id'=>2))));
            $this->set('techs', $techs ); 
           }
            if (($this->Session->read('Auth.User.role_id') == 3 )&&($this->Session->read('Auth.User.group_id') == 3 ))
           {
            $techs = $this->Ticket->Tech->find('all',array('conditions' => array('OR' =>array("Tech.role_id" => array(3,4)),'AND'=>array('Tech.group_id'=>3))));
            $this->set('techs', $techs ); 
           }
            
              
         }
         
          public function view_all_pdf() {
           // increase memory limit in PHP 
            ini_set('memory_limit', '512M');
//           ADMINISTRADOR
              if ($this->Session->read('Auth.User.role_id') == 1 )
              { 
                $this->set('tickets', $this->paginate()); 
              }
//          DIRECTORES JEFES DE AREAS TECNICO FAC
             if(($this->Session->read('Auth.User.role_id') == 2 )|| ($this->Session->read('Auth.User.role_id') == 3 )|| (($this->Session->read('Auth.User.role_id') == 4 )&& ($this->Session->read('Auth.User.group_id') == 5 ))) { 
             $this->set('tickets', $this->Ticket->find('all', array('conditions' => array('OR' =>array("Ticket.tech_id" => $this->Session->read('Auth.User.id'),"Ticket.user_id" => $this->Session->read('Auth.User.id'),"Ticket.group_id" => $this->Session->read('Auth.User.group_id'))))));      
         }
//           TECNICOS DTIC
               if(($this->Session->read('Auth.User.role_id') == 4 )&& (($this->Session->read('Auth.User.group_id') == 1 )|| ($this->Session->read('Auth.User.group_id') == 2 )|| ($this->Session->read('Auth.User.group_id') == 3 ))) { 
                $this->set('tickets', $this->Ticket->find('all', array('conditions' => array('OR' =>array("Ticket.tech_id" => $this->Session->read('Auth.User.id'),"Ticket.user_id" => $this->Session->read('Auth.User.id'),)))));
          }
          
                                                          }
           
           public function view_new_pdf() {
           // increase memory limit in PHP 
            ini_set('memory_limit', '512M');
           if ($this->Session->read('Auth.User.role_id') == 1 )
              { 
            $this->set('newtickets', $this->Ticket->find('all', array('conditions' => array("Ticket.state_id" =>1)))); 
              }
             if(($this->Session->read('Auth.User.role_id') == 2 )|| ($this->Session->read('Auth.User.role_id') == 3 )|| (($this->Session->read('Auth.User.role_id') == 4 )&& ($this->Session->read('Auth.User.group_id') == 5 ))) { 
                $this->set('newtickets', $this->Ticket->find('all', array('conditions' => array('OR' =>array("Ticket.tech_id" => $this->Session->read('Auth.User.id'),"Ticket.user_id" => $this->Session->read('Auth.User.id'),"Ticket.group_id" => $this->Session->read('Auth.User.group_id')), 'AND' =>array("Ticket.state_id" =>1))))); 
             }
             if(($this->Session->read('Auth.User.role_id') == 4 )&& (($this->Session->read('Auth.User.group_id') == 1 )|| ($this->Session->read('Auth.User.group_id') == 2 )|| ($this->Session->read('Auth.User.group_id') == 3 ))) { 
            $this->set('newtickets',$this->Ticket->find('all', array('conditions' => array('OR' =>array("Ticket.tech_id" => $this->Session->read('Auth.User.id'),"Ticket.user_id" => $this->Session->read('Auth.User.id')), 'AND' =>array("Ticket.state_id" =>1))))); 
             }
          }
          
          public function view_open_pdf() {
           // increase memory limit in PHP 
            ini_set('memory_limit', '512M');
             if ($this->Session->read('Auth.User.role_id') == 1 )
              { 
            $this->set('opentickets', $this->Ticket->find('all', array('conditions' => array("Ticket.state_id" =>2)))); 
              } 
             if(($this->Session->read('Auth.User.role_id') == 2 )|| ($this->Session->read('Auth.User.role_id') == 3 )|| (($this->Session->read('Auth.User.role_id') == 4 )&& ($this->Session->read('Auth.User.group_id') == 5 ))) { 
            $this->set('opentickets',$this->Ticket->find('all', array('conditions' => array('OR' =>array("Ticket.tech_id" => $this->Session->read('Auth.User.id'),"Ticket.user_id" => $this->Session->read('Auth.User.id'),"Ticket.group_id" => $this->Session->read('Auth.User.group_id')), 'AND' =>array("Ticket.state_id" =>2))))); 
               }
            if(($this->Session->read('Auth.User.role_id') == 4 )&& (($this->Session->read('Auth.User.group_id') == 1 )|| ($this->Session->read('Auth.User.group_id') == 2 )|| ($this->Session->read('Auth.User.group_id') == 3 ))) { 
             $this->set('opentickets',$this->Ticket->find('all', array('conditions' => array('OR' =>array("Ticket.tech_id" => $this->Session->read('Auth.User.id'),"Ticket.user_id" => $this->Session->read('Auth.User.id')), 'AND' =>array("Ticket.state_id" =>2))))); 
          }
          
     }
          
          public function view_closed_pdf() {
           // increase memory limit in PHP 
            ini_set('memory_limit', '512M');
             if ($this->Session->read('Auth.User.role_id') == 1 )
              {
              $this->set('closedtickets', $this->Ticket->find('all', array('conditions' => array('OR'=>array("Ticket.state_id" =>array(4,5 )))))); 
            }
             if(($this->Session->read('Auth.User.role_id') == 2 )|| ($this->Session->read('Auth.User.role_id') == 3 )|| (($this->Session->read('Auth.User.role_id') == 4 )&& ($this->Session->read('Auth.User.group_id') == 5 ))) { 
             $this->set('closedtickets', $this->Ticket->find('all', array('conditions' => array('OR' =>array("Ticket.tech_id" => $this->Session->read('Auth.User.id'),"Ticket.user_id" => $this->Session->read('Auth.User.id'),"Ticket.group_id" => $this->Session->read('Auth.User.group_id')), 'AND' =>array('OR'=>array("Ticket.state_id" =>array(4,5 ))))))); 
          } 
            if(($this->Session->read('Auth.User.role_id') == 4 )&& (($this->Session->read('Auth.User.group_id') == 1 )|| ($this->Session->read('Auth.User.group_id') == 2 )|| ($this->Session->read('Auth.User.group_id') == 3 ))) { 
            $this->set('closedtickets', $this->Ticket->find('all', array('conditions' => array('OR' =>array("Ticket.tech_id" => $this->Session->read('Auth.User.id'),"Ticket.user_id" => $this->Session->read('Auth.User.id')), 'AND' =>array('OR'=>array("Ticket.state_id" =>array(4,5 ))))))); 
          } 
           }
         
        public function view_dep_pdf($id=null){
              ini_set('memory_limit', '512M');
            $this->Ticket->Departament->departament_id = $id;
            $this->set('tickets_dep', $this->Ticket->find('all', array('conditions' => array("Ticket.departament_id" =>$id))));
        }
        
        
         public function view_group_pdf($id=null){
            ini_set('memory_limit', '512M');
            $this->Ticket->Group->group_id = $id;
           //ADMINISTRADOR Y DIRECTOR DTIC
            if (($this->Session->read('Auth.User.role_id') == 1 )||($this->Session->read('Auth.User.group_id') == 6 )){
            $this->set('tickets_group', $this->Ticket->find('all', array('conditions' => array("Ticket.group_id" =>$id))));
            }
            //JEFES DE AREA
            if ($this->Session->read('Auth.User.role_id') == 3 ){
            $this->set('tickets_group', $this->Ticket->find('all',array('conditions' => array('OR' =>array("Ticket.group_id" =>$id,"Ticket.group_id" => $this->Session->read('Auth.User.group_id'))))));
            }
            
        }
        
        public function view_ticket_pdf($id=null){
           $this->Ticket->id = $id; 
           $this->set('id', $id); //set value to view from controller
           $this->set('ticket1', $this->Ticket->read());
          
            
        }
        
         public function view_tech_pdf($id=null){
           ini_set('memory_limit', '512M');
           $this->Ticket->Tech->id = $id;
           //Administrador
             $this->set('tickets_tech', $this->Ticket->find('all', array('conditions' => array("Ticket.tech_id" =>$id))));
         
          
            
        }
          
 } 
         
    
?>
