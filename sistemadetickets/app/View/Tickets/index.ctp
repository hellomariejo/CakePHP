
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
               
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i> 
                        <!--ADMINISTRADOR-->
                         <?php   if ($this->Session->read('Auth.User.role_id') == 1 ) { ?>
                         <?php echo '(<b>'.$count_new.'</b>)'; }?>
                        <!--DIRECTORES, JEFE DE AREA, TECNICO FAC-->
                         <?php if(($this->Session->read('Auth.User.role_id') == 2 )|| ($this->Session->read('Auth.User.role_id') == 3 )|| (($this->Session->read('Auth.User.role_id') == 4 )&& ($this->Session->read('Auth.User.group_id') == 5 ))) { ?>
                         <?php echo '(<b>'.$count_new1.'</b>)'; }?>
                         <!--TECNICO DTIC-->
                         <?php if(($this->Session->read('Auth.User.role_id') == 4 )&& (($this->Session->read('Auth.User.group_id') == 1 )|| ($this->Session->read('Auth.User.group_id') == 2 )|| ($this->Session->read('Auth.User.group_id') == 3 ))) { ?>
                         <?php echo '(<b>'.$count_new2.'</b>)'; }?>
                        <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                               <!--ADMINISTRADOR-->    
                              <?php   if ($this->Session->read('Auth.User.role_id') == 1 ) { ?>
                                   <?php foreach ($newtickets as $k =>$nt): ?>
                                    <li>
                                        <a href="#">
                                            <div>
                                                <i class="fa fa-ticket"></i> 
                                                  <?php
                                                     echo  $this->Html->link($nt['Ticket']['subject'], array('action'=>'view',$nt['Ticket']['id']) );
                                                   ?>
                                             </div>
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                              <?php endforeach; }?>  

                                <!--DIRECTORES, JEFES DE AREA, TECNICOS DE FACULTAD-->
                                <?php if(($this->Session->read('Auth.User.role_id') == 2 )|| ($this->Session->read('Auth.User.role_id') == 3 )|| (($this->Session->read('Auth.User.role_id') == 4 )&& ($this->Session->read('Auth.User.group_id') == 5 ))) { ?>
                                    <?php foreach ($newtickets1 as $k =>$nt1): ?>
                                    <li>
                                        <a href="#">
                                            <div>
                                                <i class="fa fa-ticket"></i> 
                                                  <?php
                                                     echo  $this->Html->link($nt1['Ticket']['subject'], array('action'=>'view',$nt1['Ticket']['id']) );
                                                   ?>
                                             </div>
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                              <?php endforeach; }?> 

                               <!--TECNICOS DTIC-->
                                   <?php if(($this->Session->read('Auth.User.role_id') == 4 )&& (($this->Session->read('Auth.User.group_id') == 1 )|| ($this->Session->read('Auth.User.group_id') == 2 )|| ($this->Session->read('Auth.User.group_id') == 3 ))) { ?>
                                    <?php foreach ($newtickets2 as $k =>$nt2): ?>
                                    <li>
                                        <a href="#">
                                            <div>
                                                <i class="fa fa-ticket"></i> 
                                                  <?php
                                                     echo  $this->Html->link($nt2['Ticket']['subject'], array('action'=>'view',$nt2['Ticket']['id']) );
                                                   ?>
                                             </div>
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                              <?php endforeach; }?> 
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
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
<!--                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                             /input-group 
                        </li>
                       -->
                        
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
            
             <?php  }  else {
           
          ?>
               
               
                <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Buscar...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <?php echo $this->Html->link('<i class="fa fa-dashboard fa-fw"></i> '.__('Inicio'), array('controller' => 'pages', 'action' => 'display', 'home'),array('escape' => false)); ?>
                            
                        </li>
                       
                       
                         <li>
                                     <?php echo $this->Html->link('<span class="glyphicon glyphicon-inbox" aria-hidden="true"></span> '.__(' Mis Tickets '), array('controller' => 'Tickets', 'action' => 'index'),array('escape' => false)); ?>
                         </li>
                     <li>
                      <?php echo $this->Html->link('<i class="fa fa-flag"></i> '.__(' Reportes '), array('controller' => 'Tickets', 'action' => 'reports'),array('escape' => false)); ?>
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
                    <?php echo $this->Session->flash() ?>
                    
                   
                    <br> <br>
    <!--MENU TICKET-->
         
                <div role="tabpanel">

                  <!-- Nav tabs -->
                  <ul class="nav nav-tabs" role="tablist">
                 <?php   if ($this->Session->read('Auth.User.role_id') == 1 ) { ?> 
                    <li role="presentation" class="active"> <a href="#index" aria-controls="index" role="tab" data-toggle="tab"><?php  echo '<span class="glyphicon glyphicon-tasks" aria-hidden="true"></span>'.__(' Todos los Tickets').'('.$count1.')'?></a></li>
                    <li role="presentation"><a href="#index_ot" aria-controls="#index_ot" role="tab" data-toggle="tab"><?php  echo '<i class="fa fa-file-text-o"></i>'.__(' Ticket Abiertos').'('.$count2.')'?></a></li>
                    <li role="presentation"><a href="#index_ct" aria-controls="index_ct" role="tab" data-toggle="tab"><?php  echo '<i class="fa fa-file-text"></i>'.__(' Ticket Cerrados').'('.$count3.')'?></a></li>
                    <li role="presentation"><a href="#add" aria-controls="add" role="tab" data-toggle="tab"><?php  echo __('<i class="fa fa-plus-square"></i> Nuevo Ticket')?></a></li>

                 <?php }?>
                 <?php if(($this->Session->read('Auth.User.role_id') == 2 )|| ($this->Session->read('Auth.User.role_id') == 3 )|| (($this->Session->read('Auth.User.role_id') == 4 )&& ($this->Session->read('Auth.User.group_id') == 5 ))) { ?>
                    <li role="presentation" class="active"> <a href="#index" aria-controls="index" role="tab" data-toggle="tab"><?php  echo '<span class="glyphicon glyphicon-tasks" aria-hidden="true"></span>'.__(' Todos los Tickets').'('.$count4.')'?></a></li>
                    <li role="presentation"><a href="#index_ot" aria-controls="#index_ot" role="tab" data-toggle="tab"><?php  echo '<i class="fa fa-file-text-o"></i>'.__(' Ticket Abiertos').'('.$count5.')'?></a></li>
                    <li role="presentation"><a href="#index_ct" aria-controls="index_ct" role="tab" data-toggle="tab"><?php  echo '<i class="fa fa-file-text"></i>'.__(' Ticket Cerrados').'('.$count6.')'?></a></li>
                   <li role="presentation"><a href="#add" aria-controls="add" role="tab" data-toggle="tab"><?php  echo __('<i class="fa fa-plus-square"></i> Nuevo Ticket')?></a></li>

                 <?php }?>
                 <?php if(($this->Session->read('Auth.User.role_id') == 4 )&& (($this->Session->read('Auth.User.group_id') == 1 )|| ($this->Session->read('Auth.User.group_id') == 2 )|| ($this->Session->read('Auth.User.group_id') == 3 ))) { ?>
                 <li role="presentation" class="active"> <a href="#index" aria-controls="index" role="tab" data-toggle="tab"><?php  echo '<span class="glyphicon glyphicon-tasks" aria-hidden="true"></span>'.__(' Todos los Tickets').'('.$count7.')'?></a></li>
                 <li role="presentation"><a href="#index_ot" aria-controls="#index_ot" role="tab" data-toggle="tab"><?php  echo '<i class="fa fa-file-text-o"></i>'.__(' Ticket Abiertos').'('.$count8.')'?></a></li>
                  <li role="presentation"><a href="#index_ct" aria-controls="index_ct" role="tab" data-toggle="tab"><?php  echo '<i class="fa fa-file-text"></i>'.__(' Ticket Cerrados').'('.$count9.')'?></a></li>
                  <li role="presentation"><a href="#add" aria-controls="add" role="tab" data-toggle="tab"><?php  echo __('<i class="fa fa-plus-square"></i> Nuevo Ticket')?></a></li>
                 <?php }?>
                    
                  <!--<li role="presentation"><a href="#add" aria-controls="add" role="tab" data-toggle="tab"><?php  echo __('<i class="fa fa-plus-square"></i> Nuevo Ticket')?></a></li>-->
                  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
       <!--TICKETS TODOS-->              
         <div role="tabpanel" class="tab-pane active" id="index">
           <br>
              <div class="row">
                    <div class="col-lg-12">
                             <!--INICIO TABLA-->
                            <div class="panel panel-default" id="tablatickets">
                                <div class="panel-heading">
                                    <?php echo __('Todos');?>
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="listatickets">
                                            <thead>
                                                <tr>
                                                    <th style="width: 53px " ><?php echo __('Ticket')?></th>
                                                    <th style="width: 80px "><?php echo __('Creado')?></th>
                                                    <th><?php echo __('Asunto')?></th>
                                                    <th ><?php echo __('Para')?></th>
                                                    <th ><?php echo __('Técnico Asignado')?></th>
                                                     <th ><?php echo __('Tipo')?></th>
                                                    <th><?php echo __('Prioridad')?></th>
                                                 </tr>
                                            </thead>
                                            <tbody >
                                                 <!--ADMNISTRADOR-->
                                                 <?php if ($this->Session->read('Auth.User.role_id') == 1 ) { ?>
                                                 <?php foreach ($tickets as $k =>$ticket): ?>

                                                        <tr class="odd gradeX">
                                                            <td ><?php echo $this->Html->link($ticket['Ticket']['id'],array('action'=>'view',$ticket['Ticket']['id']))?></td>
                                                            <td><?php echo $ticket['Ticket']['created'] ?></td>
                                                            <td ><?php echo $this->Html->link($ticket['Ticket']['subject'],array('action'=>'view',$ticket['Ticket']['id']) )?></td>
                                                            <td><?php echo $ticket['Group']['description'] ?></td>
                                                             <td><?php echo $ticket['Tech']['name'].' '.$ticket['Tech']['lastname'] ?></td>
                                                            <td><?php echo $ticket['TicketType']['description'] ?></td>
                                                            
                                                            <td ><?php echo $ticket['Priority']['description'] ?></td>
                                                            
                                                        </tr>
                                                  <?php endforeach;
                                                             } ?> 
                                                 <!--DIRECTORES Y JEFES DE AREA Y TECNICO FAC-->
                                                  <?php if(($this->Session->read('Auth.User.role_id') == 2 )|| ($this->Session->read('Auth.User.role_id') == 3 )|| (($this->Session->read('Auth.User.role_id') == 4 )&& ($this->Session->read('Auth.User.group_id') == 5 ))) { ?>
                                                     <?php foreach ($tickets1 as $k =>$ticket): ?>

                                                                <tr class="odd gradeX">
                                                                    <td ><?php echo $this->Html->link($ticket['Ticket']['id'],array('action'=>'view',$ticket['Ticket']['id']), false )?></td>
                                                                    <td><?php echo $ticket['Ticket']['created'] ?></td>
                                                                    <td ><?php echo $this->Html->link($ticket['Ticket']['subject'],array('action'=>'view',$ticket['Ticket']['id']), false )?></td>
                                                                    <td><?php echo $ticket['Group']['description'] ?></td>
                                                                    <td><?php echo $ticket['Tech']['name'].' '.$ticket['Tech']['lastname'] ?></td>
                                                                     <td><?php echo $ticket['TicketType']['description'] ?></td>
                                                                    <td><?php echo $ticket['Priority']['description'] ?></td>
                                                               </tr>
                                               <?php endforeach;
                                                     } ?> 
                                              <!-- TECNICO DTIC-->
                                             <?php if(($this->Session->read('Auth.User.role_id') == 4 )&& (($this->Session->read('Auth.User.group_id') == 1 )|| ($this->Session->read('Auth.User.group_id') == 2 )|| ($this->Session->read('Auth.User.group_id') == 3 ))) { ?>
                                             <?php foreach ($tickets2 as $k =>$ticket): ?>

                                                            <tr class="odd gradeX">
                                                                <td ><?php echo $this->Html->link($ticket['Ticket']['id'],array('action'=>'view',$ticket['Ticket']['id']), false )?></td>
                                                                <td><?php echo $ticket['Ticket']['created'] ?></td>
                                                                <td ><?php echo $this->Html->link($ticket['Ticket']['subject'],array('action'=>'view',$ticket['Ticket']['id']), false )?></td>
                                                                <td><?php echo $ticket['Group']['description'] ?></td>
                                                                 <td><?php echo $ticket['Tech']['name'].' '.$ticket['Tech']['lastname'] ?></td>
                                                                 <td><?php echo $ticket['TicketType']['description'] ?></td>
                                                                <td><?php echo $ticket['Priority']['description'] ?></td>
                                                           </tr>
                                           <?php endforeach;
                                                 } ?>              
                                                               
                                                            
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->

                                </div>
                                <!-- /.panel-body -->
                            </div>
                                        <!-- /.panel -->
                    </div>
                                    <!-- /.col-lg-12 -->
                </div>
      </div>
    <!--FIN TICKETS TODOS-->
        
    <!--TICKETS ABIERTOS--> 
      <div role="tabpanel" class="tab-pane" id="index_ot">
                    <br>
                    <div class="row">
                            <div class="col-lg-12">

                      <!--INICIO TABLA-->
                                        <div class="panel panel-default" id="tablatickets2">
                                            <div class="panel-heading">
                                                <?php echo __('Abiertos');?>
                                            </div>
                                            <!-- /.panel-heading -->
                                            <div class="panel-body">
                                                <div class="table-responsive">
                                                    <table class="table table-striped table-bordered table-hover" id="listatickets2">
                                                        <thead>
                                                            <tr>
                                                                <th style="width: 53px " ><?php echo __('Ticket')?></th>
                                                                <th style="width: 80px "><?php echo __('Creado')?></th>
                                                                <th><?php echo __('Asunto')?></th>
                                                                <th ><?php echo __('Para')?></th>
                                                                  <th ><?php echo __('Técnico Asignado')?></th>
                                                                  <th ><?php echo __('Tipo')?></th>
                                                                 <th><?php echo __('Prioridad')?></th>
                                                                 


                                                             </tr>
                                                        </thead>
                                                        <tbody >
                                                             <?php if ($this->Session->read('Auth.User.role_id') == 1 ) { ?>
                                                             <?php foreach ($opentickets as $k =>$openticket): ?>

                                                                    <tr class="odd gradeX">
                                                                        <td ><?php echo $this->Html->link($openticket['Ticket']['id'],array('action'=>'view',$openticket['Ticket']['id']), false )?></td>
                                                                        <td><?php echo $openticket['Ticket']['created'] ?></td>
                                                                        <td ><?php echo $this->Html->link($openticket['Ticket']['subject'],array('action'=>'view',$openticket['Ticket']['id']), false )?></td>
                                                                         <td><?php echo $openticket['Group']['description'] ?></td>
                                                                          <td><?php echo $openticket['Tech']['name'].' '.$openticket['Tech']['lastname'] ?></td>
                                                                           <td><?php echo $openticket['TicketType']['description'] ?></td>
                                                                         <td><?php echo $openticket['Priority']['description'] ?></td>
                                                                        
                                                                   </tr>
                                                             <?php endforeach; 
                                                             }?>
                                                             <!--DIRECTORES Y JEFES DE AREA Y TECNICO FAC-->
                                                                <?php if(($this->Session->read('Auth.User.role_id') == 2 )|| ($this->Session->read('Auth.User.role_id') == 3 )|| (($this->Session->read('Auth.User.role_id') == 4 )&& ($this->Session->read('Auth.User.group_id') == 5 ))) { ?>
                                                                 <?php foreach ($opentickets1 as $k =>$openticket): ?>

                                                                        <tr class="odd gradeX">
                                                                            <td ><?php echo $this->Html->link($openticket['Ticket']['id'],array('action'=>'view',$openticket['Ticket']['id']), false )?></td>
                                                                            <td><?php echo $openticket['Ticket']['created'] ?></td>
                                                                            <td ><?php echo $this->Html->link($openticket['Ticket']['subject'],array('action'=>'view',$openticket['Ticket']['id']), false )?></td>
                                                                             <td><?php echo $openticket['Group']['description'] ?></td>
                                                                             <td><?php echo $openticket['Tech']['name'].' '.$openticket['Tech']['lastname'] ?></td>
                                                                           <td><?php echo $openticket['TicketType']['description'] ?></td>
                                                                             <td><?php echo $openticket['Priority']['description'] ?></td>

                                                                       </tr>
                                                                 <?php endforeach; 
                                                                 }?> 
                                                         <!-- TECNICO DTIC-->
                                                         <?php if(($this->Session->read('Auth.User.role_id') == 4 )&& (($this->Session->read('Auth.User.group_id') == 1 )|| ($this->Session->read('Auth.User.group_id') == 2 )|| ($this->Session->read('Auth.User.group_id') == 3 ))) { ?>
                                                         <?php foreach ($opentickets2 as $k =>$openticket): ?>

                                                                        <tr class="odd gradeX">
                                                                            <td ><?php echo $this->Html->link($openticket['Ticket']['id'],array('action'=>'view',$openticket['Ticket']['id']), false )?></td>
                                                                            <td><?php echo $openticket['Ticket']['created'] ?></td>
                                                                            <td ><?php echo $this->Html->link($openticket['Ticket']['subject'],array('action'=>'view',$openticket['Ticket']['id']), false )?></td>
                                                                             <td><?php echo $openticket['Group']['description'] ?></td>
                                                                             <td><?php echo $openticket['Tech']['name'].' '.$openticket['Tech']['lastname'] ?></td>
                                                                           <td><?php echo $openticket['TicketType']['description'] ?></td>
                                                                             <td><?php echo $openticket['Priority']['description'] ?></td>
                                                                       </tr>
                                                       <?php endforeach;
                                                             } ?>      
                                                                   
                                                        </tbody>
                                                    </table>
                                                   <!--FIN TABLA-->
                                                </div>
                                                <!-- /.table-responsive -->

                                            </div>
                                            <!-- /.panel-body -->
                                        </div>
                                        <!-- /.panel -->
                                    </div>
                                    <!-- /.col-lg-12 -->
                                </div>
     </div>
     <!--FIN TICKETS ABIERTOS-->
     
      <!--TICKETS CERRADOS-->
      <div role="tabpanel" class="tab-pane" id="index_ct">
      <br>
                    <div class="row">
                            <div class="col-lg-12">

                      <!--INICIO TABLA-->
                                        <div class="panel panel-default" id="tablatickets3">
                                            <div class="panel-heading">
                                                <?php echo __('Cerrados');?>
                                            </div>
                                            <!-- /.panel-heading -->
                                            <div class="panel-body">
                                                <div class="table-responsive">
                                                    <table class="table table-striped table-bordered table-hover" id="listatickets3">
                                                        <thead>
                                                            <tr>
                                                                <th style="width: 53px " ><?php echo __('Ticket')?></th>
                                                                <th style="width: 80px "><?php echo __('Creado')?></th>
                                                                <th><?php echo __('Asunto')?></th>
                                                                <th ><?php echo __('Para')?></th>
                                                                 <th ><?php echo __('Técnico Asignado')?></th>
                                                                  <th ><?php echo __('Tipo')?></th>
                                                                 <th><?php echo __('Prioridad')?></th>
                                                                 


                                                             </tr>
                                                        </thead>
                                                        <tbody >
                                                             <?php if ($this->Session->read('Auth.User.role_id') == 1 ) { ?>
                                                             <?php foreach ($closedtickets as $k =>$closedticket): ?>

                                                                    <tr class="odd gradeX">
                                                                        <td ><?php echo $this->Html->link($closedticket['Ticket']['id'],array('action'=>'view',$closedticket['Ticket']['id']), false )?></td>
                                                                        <td><?php echo $closedticket['Ticket']['created'] ?></td>
                                                                        <td ><?php echo $this->Html->link($closedticket['Ticket']['subject'],array('action'=>'view',$closedticket['Ticket']['id']), false )?></td>
                                                                         <td><?php echo $closedticket['Group']['description'] ?></td>
                                                                         <td><?php echo $openticket['Tech']['name'].' '.$openticket['Tech']['lastname'] ?></td>
                                                                           <td><?php echo $openticket['TicketType']['description'] ?></td>
                                                                         <td><?php echo $closedticket['Priority']['description'] ?></td>
                                                                       
                                                                   </tr>
                                                             <?php endforeach;
                                                             } ?> 
                                                             <!--DIRECTORES Y JEFES DE AREA Y TECNICO FAC-->
                                                            <?php if(($this->Session->read('Auth.User.role_id') == 2 )|| ($this->Session->read('Auth.User.role_id') == 3 )|| (($this->Session->read('Auth.User.role_id') == 4 )&& ($this->Session->read('Auth.User.group_id') == 5 ))) { ?>
                                                             <?php foreach ($closedtickets1 as $k =>$closedticket): ?>

                                                                    <tr class="odd gradeX">
                                                                        <td ><?php echo $this->Html->link($closedticket['Ticket']['id'],array('action'=>'view',$closedticket['Ticket']['id']), false )?></td>
                                                                        <td><?php echo $closedticket['Ticket']['created'] ?></td>
                                                                        <td ><?php echo $this->Html->link($closedticket['Ticket']['subject'],array('action'=>'view',$closedticket['Ticket']['id']), false )?></td>
                                                                        <td><?php echo $closedticket['Group']['description'] ?></td>
                                                                        <td><?php echo $openticket['Tech']['name'].' '.$openticket['Tech']['lastname'] ?></td>
                                                                           <td><?php echo $openticket['TicketType']['description'] ?></td>
                                                                        <td><?php echo $closedticket['Priority']['description'] ?></td>
                                                                       
                                                                   </tr>
                                                             <?php endforeach;
                                                             } ?> 
                                                             
                                                          <!-- TECNICO DTIC-->
                                                         <?php if(($this->Session->read('Auth.User.role_id') == 4 )&& (($this->Session->read('Auth.User.group_id') == 1 )|| ($this->Session->read('Auth.User.group_id') == 2 )|| ($this->Session->read('Auth.User.group_id') == 3 ))) { ?>
                                                         <?php foreach ($closedtickets2 as $k =>$closedticket): ?>

                                                                        <tr class="odd gradeX">
                                                                        <td ><?php echo $this->Html->link($closedticket['Ticket']['id'],array('action'=>'view',$closedticket['Ticket']['id']), false )?></td>
                                                                        <td><?php echo $closedticket['Ticket']['created'] ?></td>
                                                                        <td ><?php echo $this->Html->link($closedticket['Ticket']['subject'],array('action'=>'view',$closedticket['Ticket']['id']), false )?></td>
                                                                        <td><?php echo $closedticket['Group']['description'] ?></td>
                                                                        <td><?php echo $openticket['Tech']['name'].' '.$openticket['Tech']['lastname'] ?></td>
                                                                           <td><?php echo $openticket['TicketType']['description'] ?></td>
                                                                        <td><?php echo $closedticket['Priority']['description'] ?></td>
                                                                           
                                                                       </tr>
                                                       <?php endforeach;
                                                             } ?>   
                                                                    
                                                        </tbody>
                                                    </table>
                                                   <!--FIN TABLA-->
                                                </div>
                                                <!-- /.table-responsive -->

                                            </div>
                                            <!-- /.panel-body -->
                                        </div>
                                        <!-- /.panel -->
                                    </div>
                                    <!-- /.col-lg-12 -->
                                </div>
      
      
      </div>
      <!--FIN TICKETS CERRADOS-->

      
      
      
      
        <!--NUEVO TICKET-->
  <div role="tabpanel" class="tab-pane" id="add">

  <!-- Form Crear -->
  <br> <br>
  
                    <?php echo $this->Form->create('Ticket', array( 'action'=>'add',  
                         'class' => 'form-horizontal',  
                         'inputDefaults' => array(  
                         'format' => array('before', 'label', 'between', 'input', 'error', 'after'),  
                         'div' => array('class' => 'form-group'),  
                         'label' => array('class' => 'col-md-4 control-label'),  
                         'between' => '<div class="col-md-4">',  
                         'after' => '</div>' )));?> 
                 
                     <fieldset>
                          <center>
                              <div class="alert alert-info" style="width: 60%">
                                  <strong>  ( * ) Campos Obligatorios </strong> 
                             </div>
                            </center>
                       <?php  
                            
                            echo $this->Form->input('user_id', array('label' => array('class' => 'col-md-4 control-label', 'text'=>__('Solicitante:')), 'class' => 'form-control input-md','options'=> $client));
                            echo $this->Form->input('ticket_type_id', array ('class' => 'form-control',  'label'=>array('class' => 'col-md-4 control-label','text'=>__('* Tipo:')) , 'options' => $ticket_types,'empty' => '--Seleccione un Tipo--' ));
                  
                    //Origen del TICKET
                            //si es director de dependencia o tecnico de facultad
                            if (($this->Session->read('Auth.User.group_id') == 7)|| ($this->Session->read('Auth.User.group_id') == 5)|| ($this->Session->read('Auth.User.group_id') == 4)){
                            echo $this->Form->input('departament_id', array ('class' => 'form-control',  'label'=>array('class' => 'col-md-4 control-label','text'=>__('* De (Departamento):')),'options' => $departaments,'empty' => '--Seleccione un Departamento--' ));
                             }
                            // si es personal dtic
                            if (($this->Session->read('Auth.User.group_id') == 1)|| ($this->Session->read('Auth.User.group_id') == 2)|| ($this->Session->read('Auth.User.group_id') == 3)|| ($this->Session->read('Auth.User.group_id') == 6)){
                            echo $this->Form->input('departament_id', array ('class' => 'form-control',  'label'=>array('class' => 'col-md-4 control-label','text'=>__('* De (Departamento):')),'value' => 5,'type'=>'hidden'));
                            }
                             
                   
                    //PARA AREA:        
                            //DIRECTOR DTIC
                            if ($this->Session->read('Auth.User.group_id') == 6)
                            { 
                            echo $this->Form->input('group_id', array ('class' => 'form-control',  'label'=>array('class' => 'col-md-4 control-label','text'=>__('* Para (Área DTIC):')) ,'options' => $groups1 ,'empty' => '--Seleccione un Área--'));
                            }
                            
                            //SI EL GRUPO ES DIRECCION DEPENDENCIA
                            if ($this->Session->read('Auth.User.group_id') == 7){
                            echo $this->Form->input('group_id', array ('class' => 'form-control',  'label'=>array('class' => 'col-md-4 control-label','text'=>__('* Para (Área DTIC):')) ,'options' => $groups2,'empty' => '--Seleccione un Área--' ));
                            }
                            //JEFE DE AREA O TEC DTIC
                             if (($this->Session->read('Auth.User.role_id') == 3) ||(($this->Session->read('Auth.User.role_id') == 4)&& (($this->Session->read('Auth.User.group_id') == 1)||(($this->Session->read('Auth.User.group_id') == 2))||($this->Session->read('Auth.User.group_id') == 3))))
                            { 
                            echo $this->Form->input('group_id', array ('class' => 'form-control',  'label'=>array('class' => 'col-md-4 control-label','text'=>__('* Para (Área DTIC):')) ,'options' => $groups3,'empty' => '--Seleccione un Área--'  ));
                            }
                            
                            //TECNICO FACULTAD
                             if ($this->Session->read('Auth.User.group_id') == 5 )
                            { 
                            echo $this->Form->input('group_id', array ('class' => 'form-control',  'label'=>array('class' => 'col-md-4 control-label','text'=>__('* Para (Área DTIC):')) ,'options' => $groups4,'empty' => '--Seleccione un Área--' ));
                            }
                            //PARA: SI ES ADMINISTRADOR
                            if ($this->Session->read('Auth.User.role_id') == 1){
                            echo $this->Form->input('group_id', array ('class' => 'form-control',  'label'=>array('class' => 'col-md-4 control-label','text'=>__('* Para (Área DTIC):')) ,'options' => $groups,'empty' => '--Seleccione un Área--' ));
                            }
                 //FIN PARA    
                            
                            echo $this->Form->input('subject', array('label' => array('class' => 'col-md-4 control-label', 'text'=>__('* Asunto:')), 'class' => 'form-control input-md'));
                            echo $this->Form->input('description', array('label' => array('class' => 'col-md-4 control-label', 'text'=>__('* Descripción:')), 'class' => 'form-control input-md'));                          
                            echo $this->Form->input('priority_id', array ('class' => 'form-control',  'label'=>array('class' => 'col-md-4 control-label','text'=>__('Prioridad:')) ,'options' => $priorities, 'empty' => '--Seleccione la Prioridad--' ));
                            echo $this->Form->input('state_id', array ('class' => 'form-control',  'label'=>array('class' => 'col-md-4 control-label','text'=>__('Estado:')) ,'type' => 'text', 'value'=>1,'type'=>'hidden' ));

                        ?>  
                            
                         <div class='form-group'>
                            <label class="col-md-4 control-label" for="button1id"></label>
                            <div class="col-md-8">
                                <?php
                                echo $this->Form->submit(__('Generar Ticket'), array('class' => 'btn btn-primary','escape' => false,'div' => false));         
                                echo $this->Html->link(__('Cancelar'),array('action'=>'index'), array( 'class'=>'btn btn-default','escape' => false), false);
                               ?>
                            </div>
                         </div>
                    </fieldset>
                        <?php echo $this->Form->end() ?>
        <!-- /Form End Crear  -->   


            
           </div>
        <!--FIN NUEVO TICKET-->
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
            
        <!-- Page-Level Demo Scripts - Tables - Use for reference -->
           
        <script>
            $(document).ready(function() {
                $('#listatickets').dataTable();
                 $('#listatickets2').dataTable();
                  $('#listatickets3').dataTable();
                  
              
            });
        </script>
    
        <!--SCRIPT PARA BORRA DATOS ALMACENADOS EN EL MODAL-->  
        <script>
        
        $('body').on('hidden.bs.modal', '.modal', function () {
            $(this).removeData('bs.modal');
        });
         </script>
        
            
   <!-- FIN SCRIPTS-->
    
    
</body>

</html>
