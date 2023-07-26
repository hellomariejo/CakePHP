
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

  
    <!-- Bootstrap Core CSS -->
    
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="css/plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="css/jasny-bootstrap.min.css" rel="stylesheet" media="screen">

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <a class="navbar-brand" href="index.html">
               Riobamba, <?php echo date('d').' de '. date('M').' del '. date('Y') ?>
               </a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                       <?php $auth = $this->Session->read('Auth.User.username'); echo $auth;?> <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li>
                            <?php echo $this->Html->link('<i class="fa fa-user fa-fw"></i>'.__('Perfil'), array('controller' => 'Users', 'action' => 'view_profile'),array('escape' => false)); ?>
                        </li>
                        
                        <li class="divider"></li>
                        <li>
                            <?php echo $this->Html->link('<i class="fa fa-sign-out fa-fw"></i>'.__('Cerrar Sesión'), array('controller' => 'Users', 'action' => 'logout'),array('escape' => false)); ?>
    
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
<?php 
                if ($this->Session->read('Auth.User.role_id') == 1)                                
                {
            ?>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                       
                        
                        <li>
                            <?php echo $this->Html->link('<i class="fa fa-dashboard fa-fw"></i>'.__('Inicio'), array('controller' => 'pages', 'action' => 'display', 'home'),array('escape' => false)); ?>
                            
                        </li>
                        <li>
                            
                            <a href="#"><i class="fa fa-cogs"></i><?php echo __(' Administración de Personas');?> <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                     <?php echo $this->Html->link('<i class="fa fa-users"></i>'.__(' Grupos'), array('controller' => 'Groups', 'action' => 'index'),array('escape' => false)); ?>
                                </li>
                               
                                <li>
                                     <?php echo $this->Html->link('<i class="fa fa-users"></i>'.__(' Roles'), array('controller' => 'Roles', 'action' => 'index'),array('escape' => false)); ?>
                                </li>
                                 <li>
                                     <?php echo $this->Html->link('<i class="fa fa-user"></i>'.__(' Usuarios'), array('controller' => 'Users', 'action' => 'index'),array('escape' => false)); ?>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                       <li>
                            
                            <a href="#"><i class="fa fa-cogs"></i> <?php echo __(' Administración de Tickets');?><span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                     <?php echo $this->Html->link(__(' Tipo de Tickets'), array('controller' => 'TicketTypes', 'action' => 'index'),array('escape' => false)); ?>
                                </li>
                                <li>
                                     <?php echo $this->Html->link(__('Tipo de Estado del Ticket'), array('controller' => 'States', 'action' => 'index'),array('escape' => false)); ?>
                                </li>
                                <li>
                                     <?php echo $this->Html->link(__('Prioridades del Ticket'), array('controller' => 'Priorities', 'action' => 'index'),array('escape' => false)); ?>
                                </li>
                                
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <?php echo $this->Html->link(__('<i class="fa fa-cogs"></i> Departamentos/Facultades ESPOCH'), array('controller' => 'Departaments', 'action' => 'index'),array('escape' => false)); ?>
                        </li>
                        <li>
                          <?php echo $this->Html->link('<span class="glyphicon glyphicon-inbox" aria-hidden="true"></span> '.__(' Tickets '), array('controller' => 'Tickets', 'action' => 'index'),array('escape' => false)); ?>
                        </li>
                         <li>
                                  <?php echo $this->Html->link('<i class="fa fa-flag"></i> '.__(' Reportes '), array('controller' => 'Tickets', 'action' => 'reports'),array('escape' => false)); ?>
                                </li>
                       
                        
                            <!-- /.nav-second-level -->
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
             <?php  }  
           
          if ($this->Session->read('Auth.User.role_id') != 1)  
               
           { ?>
               
               
                <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
<!--                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Buscar...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                             /input-group 
                        </li>-->
                        <li>
                            <?php echo $this->Html->link('<i class="fa fa-dashboard fa-fw"></i>'.__('Inicio'), array('controller' => 'pages', 'action' => 'display', 'home'),array('escape' => false)); ?>
                            
                        </li>
                       
                       <li>
                                     <?php echo $this->Html->link('<span class="glyphicon glyphicon-inbox" aria-hidden="true"></span> '.__(' Mis Tickets'), array('controller' => 'Tickets', 'action' => 'index'),array('escape' => false)); ?>
                        </li>
                       <li>
                                  <?php echo $this->Html->link('<i class="fa fa-flag"></i> '.__(' Reportes '), array('controller' => 'Tickets', 'action' => 'reports'),array('escape' => false)); ?>
                                </li>
                               
                           
                            <!-- /.nav-second-level -->
                        </li>
                       
                        
                        
                       
                       
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
               
               
        <?php   } ?>
            <!-- /.navbar-static-side -->
        </nav>
 
        
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> <?php echo __(' Tickets');?> </h1> 
                    <!--mensaje de informacion-->
                        <?php echo $this->Session->flash() ?>
       
    <!--MENU TICKET-->
                  
    <div role="tabpanel">
        <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active">
                        <a href="#view" aria-controls="view" role="tab" data-toggle="tab">
                        <?php  echo ('<i class="fa fa-pencil-square-o"></i>') . __(' Información del Ticket')?></a>
                    </li>
                    <li role="presentation" > 
                        <?php  echo $this->Html->link('<i class="fa fa-file-text-o"></i>' .__(' Todos los Tickets'),array('action'=>'index') ,array('escape' => false)); ?>
                    </li>
        </ul>
  
        <div class="tab-content">
         <div role="tabpanel" class="tab-pane active" id="index">
            <div class="row">
                <div class="col-lg-12">
                    <br><br>
  <!--INICIO BODY-->
   
           <div class="panel panel-default">
                  
                        <div class="panel-body">
                            
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                  <h3 class="panel-title"><?php echo __('Información')?>
                                 
                                  <span class='pull-right'>
                                      <?php   
                                     
//                                      echo $this->Html->link('<i class="fa fa-file-pdf-o"></i>'.__(' Generar PDF'), array('action'=>'view_ticket_pdf', 'ext' =>'pdf',$ticket['Ticket']['id']),array('escape' => false));
                                      
                                      echo '<i class="fa fa-file-pdf-o"></i>'. $this->Html->link(__(' Generar PDF'),'#',
                                                                array( 'onclick' => "var openWin = window.open('".$this->Html->url(array('action'=>'view_ticket_pdf', 'ext' =>'pdf',$ticket['Ticket']['id']))."', '_blank', 'toolbar=1,scrollbars=1,location=0,status=1,menubar=0,resizable=1,width=700,height=600');  return false;")); 
                                      ?>
                                 </span>
                               </h3>
                               </div>
                                
                                <br>
                                
                                
                                <dl class="dl-horizontal">
                              
                                            <dt><?php echo __('Ticket #:')?></dt>  
                                            <dd><?php echo $ticket['Ticket']['id']; ?></dd>

                                            
                                            <dt><?php echo __('Estado:')?></dt>
                                            <dd><?php echo $ticket['State']['description']; ?></dd>

                                            <dt><?php echo __('Prioridad:')?></dt>
                                            <dd><?php echo $ticket['Priority']['description']; ?></dd>
                                            
                                            <dt><?php echo __('Tipo de Incidente:')?></dt>
                                            <dd><?php echo $ticket['TicketType']['description'] ?></dd>

                                            <dt><?php echo __('Fecha de Creación:')?></dt>
                                            <dd><?php echo $ticket['Ticket']['created']; ?></dd>
                                            
                                            <dt><?php echo __('De:')?></dt>
                                            <dd><?php echo $ticket['Departament']['description'].' ('.$ticket['Client']['name'].' '.$ticket['Client']['lastname'].')' ?></dd>

                                            <dt><?php echo __('Para:')?></dt>
                                            <dd><?php echo $ticket['Group']['description']; ?></dd>
                                            
                                            <dt><?php echo __('Técnico Asignado:')?></dt>
                                            <dd><?php echo $ticket['Tech']['name'].' '.$ticket['Tech']['lastname']; ?></dd>
                                            
                                           
                                            
                                            
                                
                                 </dl>
                                
                            </div> 
                        <!--INDEX RESPUESTAS-->   
                             
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h3 class="panel-title"><?php echo __('Historial Respuestas')?></h3>
                          </div>
                          <div class="panel-body">
                           
                             <?php foreach ($answers as $k =>$answer): ?>
                                <div class="panel panel-default">
                                      <div class="panel-heading">
                                        <h6 class="panel-title"><?php echo '<h5>'.$answer['TicketsUser']['created'].' - '. __('Enviado por: ').$answer['TicketsUser']['sign'].'</h5>'?></h6>
                                      </div>
                                      <div class="panel-body">
                                         <?php 
                                         echo $answer['TicketsUser']['answer']; 
                                        ?> <br>
                                        
                                      </div>
                              </div>
                                                        
                            <?php endforeach; ?>  
                           
                               
                          </div>
                        </div>
                        
                        
                     
                            
                        <!--ASUNTO Y CUERPO DEL MENSAJE-->
                            
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h3 class="panel-title"><?php echo __('Mensaje')?></h3>
                          </div>
                          <div class="panel-body">
                              
                             <?php echo '<b>Asunto:</b>'.' '.$ticket['Ticket']['subject'] ?> <br>
                            <?php echo '<b>Descripción:</b>' ?> <br>
                            <?php echo $ticket['Ticket']['description'];?>
                          </div>
                        </div>
                        
                        <!-- FIN ASUNTO Y CUERPO DEL MENSAJE-->
                        
                                <div role="tabpanel">

                                  <!-- Nav tabs -->
                                          <ul class="nav nav-tabs" role="tablist">
                                      <!--SI ES TECNICO DTIC-->  
                                           <?php if (($this->Session->read('Auth.User.role_id') == 4  ) && (($this->Session->read('Auth.User.group_id') == 1  ) || ($this->Session->read('Auth.User.group_id') == 2  ) || ($this->Session->read('Auth.User.group_id') == 3 ) ))                         
                                             { ?>
                                            <li role="presentation" class="active"><a href="#response" aria-controls="response" role="tab" data-toggle="tab"><?php echo __('Responder')?></a></li>
                                            <li role="presentation"><a href="#states" aria-controls="states" role="tab" data-toggle="tab"><?php echo __('Siguiente Estado')?> </a></li>
                                            <li role="presentation"><a href="#note" aria-controls="note" role="tab" data-toggle="tab"><?php echo __('Nota Interna')?></a></li>
<!--                                        <li role="presentation"><a href="#departament" aria-controls="departament" role="tab" data-toggle="tab"><?php echo __('Transferir a Área:')?></a></li>
                                            <li role="presentation"><a href="#technician" aria-controls="technician" role="tab" data-toggle="tab"><?php echo __('Asignar a:')?></a></li>-->
                                           <?php } ?>
                                            
                                      <!--SI ES DIRECTOR DEPENDENCIA-->
                                           <?php  if (($this->Session->read('Auth.User.role_id') == 2  ) && (($this->Session->read('Auth.User.group_id') == 7 ))) { ?> 
                                            <li role="presentation" class="active"><a href="#response" aria-controls="response" role="tab" data-toggle="tab"><?php echo __('Responder')?></a></li>
                                            <li role="presentation"><a href="#states" aria-controls="states" role="tab" data-toggle="tab"><?php echo __('Siguiente Estado')?> </a></li>
                                           <?php } ?>
                                            
                                     <!--SI ES DIRECTOR DTIC-->
                                           <?php  if (($this->Session->read('Auth.User.role_id') == 2  ) && (($this->Session->read('Auth.User.group_id') == 6 ))) { ?> 
                                            <li role="presentation" class="active"><a href="#response" aria-controls="response" role="tab" data-toggle="tab"><?php echo __('Responder')?></a></li>
                                            <li role="presentation"><a href="#states" aria-controls="states" role="tab" data-toggle="tab"><?php echo __('Siguiente Estado')?> </a></li>
                                            <li role="presentation"><a href="#note" aria-controls="note" role="tab" data-toggle="tab"><?php echo __('Nota Interna')?></a></li>
                                            <li role="presentation"><a href="#departament" aria-controls="departament" role="tab" data-toggle="tab"><?php echo __('Transferir a Área:')?></a></li>
                                           <?php } ?>
                                    
                                     <!--SI ES TECNICO FACULTAD-->      
                                            <?php  if (($this->Session->read('Auth.User.role_id') == 4  ) && (($this->Session->read('Auth.User.group_id') == 5 ))) { ?> 
                                            <li role="presentation" class="active"><a href="#response" aria-controls="response" role="tab" data-toggle="tab"><?php echo __('Responder')?></a></li>
                                            <li role="presentation"><a href="#states" aria-controls="states" role="tab" data-toggle="tab"><?php echo __('Siguiente Estado')?> </a></li>
                                            <li role="presentation"><a href="#note" aria-controls="note" role="tab" data-toggle="tab"><?php echo __('Nota Interna')?></a></li>
                                            <li role="presentation"><a href="#departament" aria-controls="departament" role="tab" data-toggle="tab"><?php echo __('Transferir a Área:')?></a></li>
                                            <li role="presentation"><a href="#technician" aria-controls="technician" role="tab" data-toggle="tab"><?php echo __('Asignar a:')?></a></li>
                                             <?php } ?>
                                            
                                       <!--SI ES JEFE DE AREA--> 
                                       <?php  if (($this->Session->read('Auth.User.role_id')) == 3 ||($this->Session->read('Auth.User.role_id')== 1) )  { ?> 
                                            <li role="presentation" class="active"><a href="#response" aria-controls="response" role="tab" data-toggle="tab"><?php echo __('Responder')?></a></li>
                                            <li role="presentation"><a href="#states" aria-controls="states" role="tab" data-toggle="tab"><?php echo __('Siguiente Estado')?> </a></li>
                                            <li role="presentation"><a href="#note" aria-controls="note" role="tab" data-toggle="tab"><?php echo __('Nota Interna')?></a></li>
                                            <li role="presentation"><a href="#departament" aria-controls="departament" role="tab" data-toggle="tab"><?php echo __('Transferir a Área:')?></a></li>
                                            <li role="presentation"><a href="#technician" aria-controls="technician" role="tab" data-toggle="tab"><?php echo __('Asignar a:')?></a></li>
                                      <?php } ?>
</ul>

                                          <!-- Tab panes -->
                          <div class="tab-content">
                        <!--TAB DE RESPUESTA-->           
                              <div role="tabpanel" class="tab-pane active" id="response">
                                               <br> <br>
                                                 <?php echo $this->Form->create('TicketsUser', array('action'=>'add' , 'id'=>'formAddAnswer',
                                                             'class' => 'form-horizontal',  
                                                             'inputDefaults' => array(  
                                                             'format' => array('before', 'label', 'between', 'input', 'error', 'after'),  
                                                             'div' => array('class' => 'form-group'),  
                                                             'label' => array('class' => 'col-md-4 control-label'),  
                                                             'between' => '<div class="col-md-4">',  
                                                             'after' => '</div>' )));?> 

                                                                 <fieldset>
                                                                      <?php  
                                                                       echo $this->Form->input('answer', array('label' => array('id'=>'description_edit','class' => 'col-md-4 control-label', 'text'=>__('Respuesta')), 'class' => 'form-control input-md'));
                                                                       echo $this->Form->input('ticket_id', array('value'=>$id, 'type'=>'hidden'));                                                
//                                                                     echo $this->Form->input('id', array('id'=>'id_edit','type'=>'hidden'));
                                                                        echo $this->Form->input('sign', array('label' => array('id'=>'description_edit','class' => 'col-md-4 control-label', 
                                                                                                'text'=>__('Firma:')),'readonly'=>"readonly", 'value' =>array($this->Session->read('Auth.User.name'), $this->Session->read('Auth.User.lastname')), 'class' => 'form-control input-md'));

                                                                      ?>
                                                                </fieldset>
                                                     <center>
                                                             <?php echo $this->Form->submit('Enviar Respuesta', array('class' => 'btn btn-primary','div' => false)); ?> 
                                                     </center>                      
                                                 <?php echo $this->Form->end(); ?>
                                                <br> 
                               

                              </div>
                         <!--FIN TAB RESPUESTA-->  
                        
                           <!--TAB ESTADO-->           
                              <div role="tabpanel" class="tab-pane " id="states">
                                               <br> <br>
                                                 <?php echo $this->Form->create('Ticket', array('action'=>'edit' , 'id'=>'formEditStatus',
                                                             'class' => 'form-horizontal',  
                                                             'inputDefaults' => array(  
                                                             'format' => array('before', 'label', 'between', 'input', 'error', 'after'),  
                                                             'div' => array('class' => 'form-group'),  
                                                             'label' => array('class' => 'col-md-4 control-label'),  
                                                             'between' => '<div class="col-md-4">',  
                                                             'after' => '</div>' )));?> 

                                                         <fieldset>
                                                              <?php  
                                                                     echo $this->Form->input('state_id', array ('class' => 'form-control',  'label'=>array('class' => 'col-md-4 control-label','text'=>__('Estado:')) , 'options'=>$states ));
                                                                    //   id de ticket
                                                                     echo $this->Form->input('id', array('id'=>'id_edit','type'=>'hidden', 'value' =>$id));
                                                               ?>
                                                        </fieldset>

                                                     <center>
                                                             <?php echo $this->Form->submit('Cambiar Estado', array('class' => 'btn btn-primary','div' => false)); ?> 
                                                     </center>                      
                                                 <?php echo $this->Form->end(); ?>
                                                <!--<br>--> 
                         </div>
                         <!--FIN TAB ESTADO--> 
                         
                     <!--TAB DE NOTA INTERNA--> 
                                <div role="tabpanel" class="tab-pane" id="note">
                                       <br> <br>
                                                 <?php echo $this->Form->create('Ticket', array('action'=>'edit' , 'id'=>'formEditNote',
                                                             'class' => 'form-horizontal',  
                                                             'inputDefaults' => array(  
                                                             'format' => array('before', 'label', 'between', 'input', 'error', 'after'),  
                                                             'div' => array('class' => 'form-group'),  
                                                             'label' => array('class' => 'col-md-4 control-label'),  
                                                             'between' => '<div class="col-md-4">',  
                                                             'after' => '</div>' )));?> 

                                                         <fieldset>
                                                             <center>
                                                             <div class="alert alert-info">
                                                                      <strong>Nota:</strong> Esta información será utilizada para la Bitácora Personal. 
                                                             </div>
                                                            </center>
                                                              <?php  
                                                               
                                                                echo $this->Form->input('symptom', array('label' => array('id'=>'description_edit','class' => 'col-md-4 control-label',
                                                                                                             'text'=>__('Problema*:')), 'class' => 'form-control input-md'));
                                                                echo $this->Form->input('solution', array('label' => array('id'=>'description_edit','class' => 'col-md-4 control-label',
                                                                                                             'text'=>__('Solución*:')), 'class' => 'form-control input-md'));
                                                                echo $this->Form->input('id', array('id'=>'id_edit','type'=>'hidden', 'value' =>$id));
                                                            //  id de tickets_users
                                                               
                                                                
                                                                ?>
                                                        </fieldset>

                                                      <center>
                                                             <?php echo $this->Form->submit('Guardar Nota', array('class' => 'btn btn-primary','div' => false)); ?> 
                                                     </center>                      
                                                 <?php echo $this->Form->end();?>




                                </div> 

                               <!--TAB DE TRANSFERIR AREA--> 
                            <div role="tabpanel" class="tab-pane" id="departament">

                               <br> <br>
                                 <?php echo $this->Form->create('Ticket', array( 'action'=>'edit' , 'id'=>'formEditGroup',
                                             'class' => 'form-horizontal',  
                                             'inputDefaults' => array(  
                                             'format' => array('before', 'label', 'between', 'input', 'error', 'after'),  
                                             'div' => array('class' => 'form-group'),  
                                             'label' => array('class' => 'col-md-4 control-label'),  
                                             'between' => '<div class="col-md-4">',  
                                             'after' => '</div>' )));?> 
 
                                         <fieldset>
                                              <?php  
                                              //tecnico facultad
//                                                     if (($this->Session->read('Auth.User.role_id') == 4  )&&($this->Session->read('Auth.User.group_id') == 5  )) {
//                                                       echo $this->Form->input('group_id', array ('class' => 'form-control',  'label'=>array('class' => 'col-md-4 control-label','text'=>__('Área:')),'options' => $groups1 ));
//                                                     }
                                                     //DIRECTOR y tecnico facultad
                                                      if (($this->Session->read('Auth.User.group_id') == 6 )|| ($this->Session->read('Auth.User.group_id') == 5 ))   {
                                                       echo $this->Form->input('group_id', array ('class' => 'form-control',  'label'=>array('class' => 'col-md-4 control-label','text'=>__('Área:')),'options' => $groups2 ));

                                                     }
                                                     //JEFE DE AREA
                                                     if ($this->Session->read('Auth.User.role_id') == 3 )   {
                                                       echo $this->Form->input('group_id', array ('class' => 'form-control',  'label'=>array('class' => 'col-md-4 control-label','text'=>__('Área:')),'options' => $groups3 ));

                                                     }
                                                      if ($this->Session->read('Auth.User.role_id') == 1 ) {
                                                        echo $this->Form->input('group_id', array ('class' => 'form-control',  'label'=>array('class' => 'col-md-4 control-label','text'=>__('Área:')),'options' => $groups ));
                                                     }
                                                    echo $this->Form->input('id', array('id'=>'id_edit','type'=>'hidden', 'value' =>$id));
                                                   // echo $this->Form->input('state_id', array('id'=>'id_edit','type'=>'hidden','value' =>2));
                                              ?>
                                        </fieldset>

                                      <center>
                                             <?php echo $this->Form->submit('Trasferir', array('class' => 'btn btn-primary','div' => false)); ?> 
                                     </center>                      
                                 <?php echo $this->Form->end();?>   
                            </div>

                                <!--TAB DE ASIGNAR TECNICO--> 
                            <div role="tabpanel" class="tab-pane" id="technician">
                              <br> <br>
                                 <?php echo $this->Form->create('Ticket', array( 'action'=>'edit' , 'id'=>'formEditTech',
                                             'class' => 'form-horizontal',  
                                             'inputDefaults' => array(  
                                             'format' => array('before', 'label', 'between', 'input', 'error', 'after'),  
                                             'div' => array('class' => 'form-group'),  
                                             'label' => array('class' => 'col-md-4 control-label'),  
                                             'between' => '<div class="col-md-4">',  
                                             'after' => '</div>' )));?> 

                                         <fieldset>
                                              <?php  
                                                    if (($this->Session->read('Auth.User.role_id') == 3)&&($this->Session->read('Auth.User.group_id')==1)) {
                                                    echo $this->Form->input('tech_id', array ('class' => 'form-control',  'label'=>array('class' => 'col-md-4 control-label','text'=>__('Seleccione Técnico:')),'options' =>  $technicians1 ));
                                                     }
                                                     if (($this->Session->read('Auth.User.role_id') == 3)&&($this->Session->read('Auth.User.group_id')==2)) {
                                                    echo $this->Form->input('tech_id', array ('class' => 'form-control',  'label'=>array('class' => 'col-md-4 control-label','text'=>__('Seleccione Técnico:')),'options' =>  $technicians2 ));
                                                     }
                                                     if (($this->Session->read('Auth.User.role_id') == 3)&&($this->Session->read('Auth.User.group_id')==3)) {
                                                    echo $this->Form->input('tech_id', array ('class' => 'form-control',  'label'=>array('class' => 'col-md-4 control-label','text'=>__('Seleccione Técnico:')),'options' =>  $technicians3 ));
                                                     }
//                                                     if (($this->Session->read('Auth.User.role_id') == 2)&&($this->Session->read('Auth.User.group_id')==5)) {
//                                                    echo $this->Form->input('tech_id', array ('class' => 'form-control',  'label'=>array('class' => 'col-md-4 control-label','text'=>__('Seleccione Técnico:')),'options' =>  $technicians4 ));
//                                                     }
                                                      if ($this->Session->read('Auth.User.group_id') == 5) {
                                                    echo $this->Form->input('tech_id', array ('class' => 'form-control',  'label'=>array('class' => 'col-md-4 control-label','text'=>__('Seleccione Técnico:')),'options' =>  $technicians4 ));
                                                     }
                                                     
                                                    if ($this->Session->read('Auth.User.role_id') == 1) {
                                                    echo $this->Form->input('tech_id', array ('class' => 'form-control',  'label'=>array('class' => 'col-md-4 control-label','text'=>__('Seleccione Técnico:')),'options' =>  $technicians ));
                                                     }
                                                    echo $this->Form->input('id', array('id'=>'id_edit','type'=>'hidden','value' =>$id));
                                                   
                                              ?>
                                        </fieldset>

                                      <center>
                                             <?php echo $this->Form->submit('Asignar', array('class' => 'btn btn-primary','div' => false)); ?> 
                                     </center>                      
                                 <?php echo $this->Form->end();?>
                           </div>
                          </div>

                                        </div>

                        </div> 
               </div>

                         
   <!--FIN BODY-->                        
 <!-- /.panel -->
             </div>
                <!-- /.col-lg-12 -->
    </div>
                
 </div>
  <!--FIN VIEW-->             
            
        </div>
    </div>
        
   <!--FIN MENU TICKET--> 
       
       
                </div>
                 
                <!-- /.col-lg-12 -->
            </div>
     
   <!-- /.row -->

            <!-- /.row -->
           
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

 

    
    
    <!-- INICIO SCRIPTS-->

            <!-- jQuery Version 1.11.0 -->
            <?php echo $this->Html->script('/js/jquery-1.11.0.js');?> 
             <!-- Bootstrap Core JavaScript -->
            <?php echo $this->Html->script('/js/bootstrap.min.js');?> 
            <!-- Metis Menu Plugin JavaScript -->
            <?php echo $this->Html->script('/js/plugins/metisMenu/metisMenu.min.js');?>
             <!--DataBases Javascript-->
            <?php echo $this->Html->script('/js/plugins/dataTables/jquery.dataTables.js');?> 
            <?php echo $this->Html->script('/js/plugins/dataTables/dataTables.bootstrap.js');?> 
            <!-- Custom Theme JavaScript -->
            <?php echo $this->Html->script('/js/sb-admin-2.js');?> 
             <script src="js/jasny-bootstrap.min.js"></script>
        <!-- Page-Level Demo Scripts - Tables - Use for reference -->
           
       
        <script>
            $(document).ready(function() {
                $('#listaroles').dataTable();
              
            });
            

        </script>
    
        <!--SCRIPT PARA BORRA DATOS ALMACENADOS EN EL MODAL-->  
<!--        <script>
        
        $('body').on('hidden.bs.modal', '.modal', function () {
            $(this).removeData('bs.modal');
        });
         </script>-->
        
            
   <!-- FIN SCRIPTS-->
    
    
</body>

</html>
