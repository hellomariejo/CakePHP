
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

    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    

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
                            
                            <a href="#"><i class="fa fa-cogs"></i> Administración de Personas<span class="fa arrow"></span></a>
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
                            
                            <a href="#"><i class="fa fa-cogs"></i> Administración de Tickets<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                     <?php echo $this->Html->link(__(' Tipo de Tickets'), array('controller' => 'TicketTypes', 'action' => 'index'),array('escape' => false)); ?>
                                </li>
                                 <li>
                                     <?php echo $this->Html->link(__('Estados del Ticket'), array('controller' => 'States', 'action' => 'index'),array('escape' => false)); ?>
                                </li>
                                 <li>
                                     <?php echo $this->Html->link(__('Prioridades del Ticket'), array('controller' => 'Priorities', 'action' => 'index'),array('escape' => false)); ?>
                                </li>
<!--                                <li>
                                     <?php echo $this->Html->link(__('Listado de Tickets'), array('controller' => 'Tickets', 'action' => 'index'),array('escape' => false)); ?>
                                </li>-->
                               
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
                          <?php echo $this->Html->link('<i class="fa fa-flag"></i> '.__(' Reportes '), array('controller' => 'Tickets', 'action' => 'view_pdf'),array('escape' => false)); ?>
                        </li>
                        
                        
                        
                       
                       
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            
           <?php  } else { ?>
               
               
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
                            <?php echo $this->Html->link('<i class="fa fa-dashboard fa-fw"></i> '.__('Inicio'), array('controller' => 'pages', 'action' => 'display', 'home'),array('escape' => false)); ?>
                            
                        </li>
                                <li>
                                     <?php echo $this->Html->link('<span class="glyphicon glyphicon-inbox" aria-hidden="true"></span> '.__('Mis Tickets'), array('controller' => 'Tickets', 'action' => 'index'),array('escape' => false)); ?>
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

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
  
                
 
                
                <div class="col-lg-12">
                    <h3 class="page-header"><?php echo '<i class="fa fa-flag"></i>'.__('  Reportes');?></h3>
                 <!--INICIO PANEL-->  
                   <div class="panel-body">
                      <!--TODOS LOS TICKETS-->
                         <div class="col-lg-3 col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-tasks fa-4x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">
                                                <?php 
                                                  if ($this->Session->read('Auth.User.role_id') == 1 )
                                                 { 
                                                 echo $count1;
                                                 }
                                                 if(($this->Session->read('Auth.User.role_id') == 2 )|| ($this->Session->read('Auth.User.role_id') == 3 )|| (($this->Session->read('Auth.User.role_id') == 4 )&& ($this->Session->read('Auth.User.group_id') == 5 ))) {
                                                 echo $count4;
                                                 }
                                                 if(($this->Session->read('Auth.User.role_id') == 4 )&& (($this->Session->read('Auth.User.group_id') == 1 )|| ($this->Session->read('Auth.User.group_id') == 2 )|| ($this->Session->read('Auth.User.group_id') == 3 ))) { 
                                                 echo $count7;
                                                 }
                                               ?>
                                         </div>
                                            <div><?php echo __('Todos los  Tickets')?></div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#">
                                    <div class="panel-footer">
                                        <span class="pull-left">
                                           <?php 
                                                echo '<i class="fa fa-file-pdf-o"></i>'.$this->Html->link(__(' Generar PDF'),'#',array( 'onclick' => "var openWin = window.open('".$this->Html->url(array('action'=>'view_all_pdf', 'ext' =>'pdf'))."', '_blank', 'toolbar=1,scrollbars=1,location=0,status=1,menubar=0,resizable=1,width=700,height=600');  return false;")); 
//                                                echo $this->Html->link('<i class="fa fa-file-pdf-o"></i>'.__(' Generar PDF'), array('action' => 'view_all_pdf', 'ext' => 'pdf'),array('escape' => false));?>
                                        </span>
                                        <!--<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>-->
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!--TICKETS NUEVOS-->
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-green">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-file-o fa-4x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">
                                                <?php 
                                                  
                                                  if ($this->Session->read('Auth.User.role_id') == 1 )
                                                 { 
                                                 echo $count_new;
                                                 }
                                                 if(($this->Session->read('Auth.User.role_id') == 2 )|| ($this->Session->read('Auth.User.role_id') == 3 )|| (($this->Session->read('Auth.User.role_id') == 4 )&& ($this->Session->read('Auth.User.group_id') == 5 ))) {
                                                 echo $count_new1;
                                                 }
                                                 if(($this->Session->read('Auth.User.role_id') == 4 )&& (($this->Session->read('Auth.User.group_id') == 1 )|| ($this->Session->read('Auth.User.group_id') == 2 )|| ($this->Session->read('Auth.User.group_id') == 3 ))) { 
                                                 echo $count_new2;
                                                 }
                                               ?>
                                                
                                            </div>
                                            <div><?php echo __('Tickets Nuevos')?></div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#">
                                    <div class="panel-footer">
                                        <span class="pull-left">
                                           <?php 
                                            echo '<i class="fa fa-file-pdf-o"></i>'.$this->Html->link(__(' Generar PDF'),'#',array( 'onclick' => "var openWin = window.open('".$this->Html->url(array('action'=>'view_new_pdf', 'ext' =>'pdf'))."', '_blank', 'toolbar=1,scrollbars=1,location=0,status=1,menubar=0,resizable=1,width=700,height=600');  return false;")); 
//                                            echo $this->Html->link('<i class="fa fa-file-pdf-o"></i>'.__(' Generar PDF'), array('action' => 'view_new_pdf', 'ext' => 'pdf'),array('escape' => false));?>
                                        </span>
                                        <!--<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>-->
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                          <!--TICKETS ABIERTOS-->
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-yellow">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-file-text-o fa-4x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                             <div class="huge">
                                                 <?php 
                                                  if ($this->Session->read('Auth.User.role_id') == 1 )
                                                 { 
                                                 echo $count2;
                                                 }
                                                 if(($this->Session->read('Auth.User.role_id') == 2 )|| ($this->Session->read('Auth.User.role_id') == 3 )|| (($this->Session->read('Auth.User.role_id') == 4 )&& ($this->Session->read('Auth.User.group_id') == 5 ))) {
                                                 echo $count5;
                                                 }
                                                 if(($this->Session->read('Auth.User.role_id') == 4 )&& (($this->Session->read('Auth.User.group_id') == 1 )|| ($this->Session->read('Auth.User.group_id') == 2 )|| ($this->Session->read('Auth.User.group_id') == 3 ))) { 
                                                 echo $count8;
                                                 }
                                                 ?>
                                             </div>
                                            <div><?php echo __('Tickets Abiertos')?></div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#">
                                    <div class="panel-footer">
                                        <span class="pull-left">
                                           <?php 
                                            echo '<i class="fa fa-file-pdf-o"></i>'.$this->Html->link(__(' Generar PDF'),'#',array( 'onclick' => "var openWin = window.open('".$this->Html->url(array('action'=>'view_open_pdf', 'ext' =>'pdf'))."', '_blank', 'toolbar=1,scrollbars=1,location=0,status=1,menubar=0,resizable=1,width=700,height=600');  return false;")); 

//                                           echo $this->Html->link('<i class="fa fa-file-pdf-o"></i>'.__(' Generar PDF'), array('action' => 'view_open_pdf', 'ext' => 'pdf'),array('escape' => false));?>
                                        </span>
                                        <!--<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>-->
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                           <!--TICKETS CERRADOS-->
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-red">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-file-text fa-4x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                             <div class="huge">
                                                 <?php
                                                  if ($this->Session->read('Auth.User.role_id') == 1 )
                                                 { 
                                                 echo $count3;
                                                 }
                                                 if(($this->Session->read('Auth.User.role_id') == 2 )|| ($this->Session->read('Auth.User.role_id') == 3 )|| (($this->Session->read('Auth.User.role_id') == 4 )&& ($this->Session->read('Auth.User.group_id') == 5 ))) {
                                                 echo $count6;
                                                 }
                                                 if(($this->Session->read('Auth.User.role_id') == 4 )&& (($this->Session->read('Auth.User.group_id') == 1 )|| ($this->Session->read('Auth.User.group_id') == 2 )|| ($this->Session->read('Auth.User.group_id') == 3 ))) { 
                                                 echo $count9;
                                                 }
                                                 ?>
                                             </div>
                                            <div><?php echo __('Tickets Cerrados')?></div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#">
                                    <div class="panel-footer">
                                        <span class="pull-left">
                                           <?php
                                                echo '<i class="fa fa-file-pdf-o"></i>'.$this->Html->link(__(' Generar PDF'),'#',array( 'onclick' => "var openWin = window.open('".$this->Html->url(array('action'=>'view_closed_pdf', 'ext' =>'pdf'))."', '_blank', 'toolbar=1,scrollbars=1,location=0,status=1,menubar=0,resizable=1,width=700,height=600');  return false;")); 

//                                           echo $this->Html->link('<i class="fa fa-file-pdf-o"></i>'.__(' Generar PDF'), array('action' => 'view_closed_pdf', 'ext' => 'pdf'),array('escape' => false));?>
                                        </span>
                                        <!--<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>-->
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
 
                           
<!--  Modal DEPARTAMENTOS -->
   <div class="modal fade" id="Edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel"> <i class="fa fa-building "></i><?php echo __(' Seleccione Facultad o Dependencia:'); ?>  </h4>
                  </div>
  <div class="modal-body">         
      
      
      
        <div class="panel-body">
            
            <div class="table-responsive" >
                               <table class="table table-striped" id="listadepartamentos" >
                                    <thead id="tblHead">
                                      <tr>

                                        <th>Área</th>
                                        <th class="text-right">Acción</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                                <?php foreach ($departaments as $k =>$departament): ?>
                                              <tr>
                                                  <td><?php  echo $departament['Departament']['description'];?> </td>
                                                 <td class="text-right">
                                                    <?php       
                                                 echo '<i class="fa fa-file-pdf-o"></i>'.$this->Html->link(__(' Generar PDF'),'#',array( 'onclick' => "var openWin = window.open('".$this->Html->url(array('action'=>'view_dep_pdf', 'ext' =>'pdf',$departament['Departament']['id']))."', '_blank', 'toolbar=1,scrollbars=1,location=0,status=1,menubar=0,resizable=1,width=700,height=600');  return false;")); 
                                                    ?>
                                                </td>
                                              </tr>
                                              <?php endforeach; ?>   
                                    </tbody>
                              </table>
                            </div>
   </div>
  </div>
                     
 </div>                
  </div>
 </div> 


<!--  Modal AREAS -->
   <div class="modal fade" id="Edit1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel"><i class="fa fa-users "></i><?php echo __(' Seleccione Área:'); ?>  </h4>
                  </div>
  <div class="modal-body">         
      
     
                  <div class="panel-body">

                              <div class="table-responsive">
                               <table class="table table-striped" >
                                    <thead id="tblHead">
                                      <tr>

                                        <th>Área</th>
                                        <th class="text-right">Acción</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                                 <?php foreach ($groups as $k =>$group): ?>
                                              <tr>
                                                  <td><?php  echo $group['Group']['description'];  ;?> </td>
                                                 <td class="text-right">
                                                    <?php       
                                                         echo '<i class="fa fa-file-pdf-o"></i>'.$this->Html->link(__(' Generar PDF'),'#',array( 'onclick' => "var openWin = window.open('".$this->Html->url(array('action'=>'view_group_pdf', 'ext' =>'pdf',$group['Group']['id']))."', '_blank', 'toolbar=1,scrollbars=1,location=0,status=1,menubar=0,resizable=1,width=700,height=600');  return false;")); 
                                                    ?>
                                                </td>
                                              </tr>
                                              <?php endforeach; ?>   
                                    </tbody>
                              </table>
                            </div>

                    </div>
          
       
  </div>
                     
</div>                
</div>
</div> 
<!--fin modal areas-->


<!--  Modal tecnico -->
   <div class="modal fade" id="Edit2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel"><i class="fa fa-users "></i><?php echo __(' Seleccione Técnico:'); ?>  </h4>
                  </div>
  <div class="modal-body">         
      
      
      <div class="panel-body">
          <div class="table-responsive">
           <table class="table table-striped" id="listatech">
                <thead id="tblHead">
                  <tr>
                    <th>Nombre</th>
                    <th>Área</th>
                    <th class="text-right">Acción</th>
                  </tr>
                </thead>
                <tbody>
                            <?php foreach ($techs as $k =>$tech): ?>
                          <tr>
                             <td><?php echo $tech['Tech']['name'].' '.$tech['Tech']['lastname'];?></td>
                             <td><?php echo $tech['Group']['description'];?> </td>
                             <td class="text-right">
                                <?php       
                                echo '<i class="fa fa-file-pdf-o"></i>'.$this->Html->link(__(' Generar PDF'),'#',array( 'onclick' => "var openWin = window.open('".$this->Html->url(array('action'=>'view_tech_pdf', 'ext' =>'pdf',$tech['Tech']['id']))."', '_blank', 'toolbar=1,scrollbars=1,location=0,status=1,menubar=0,resizable=1,width=700,height=600');  return false;")); 
                                ?>
                            </td>
                          </tr>
                          <?php endforeach; ?>   
                </tbody>
          </table>
        </div>
                
        </div>
    
  </div>
                     
        </div>                
     </div>
 </div> 
<!--fin modal tecnico-->

  <?php if (($this->Session->read('Auth.User.role_id') == 1 )|| ($this->Session->read('Auth.User.group_id') == 6 )) { ?>





      <!--TICKETS POR FACULTAD-->   
                         <div class="col-lg-3 col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-building fa-4x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <!--  <div class="huge">
                                         </div>-->
                                            <!--ADMINISTRADOR-->
                                   
                                            <div><?php echo __('Tickets por Facultad').'<br>'.__('Dependencia')?></div>
                                  
                                  
                                        </div>
                                    </div>
                                </div>
                                <a href="#">
                                    <div class="panel-footer">
                                       
                                        <span class="pull-left">
                                         
                                             <?php  echo $this->Html->link('<i class="fa fa-file-pdf-o"></i>'.__(' Seleccionar :'),
                                                        array('action'=>'none'), 
                                                        array( 'class'=>'btn btn-outline btn-primary','data-toggle'=> 'modal','data-target' => '#Edit','escape' => false), 
                                                        false);
                                             ?>
                                         </span>
                                       
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
      
           
             
<!--FIN ADMINISTRADOR-->
     <?php }?> 
                                                          
   <?php if (($this->Session->read('Auth.User.role_id') == 1 )|| ($this->Session->read('Auth.User.group_id') == 6 ) ||($this->Session->read('Auth.User.role_id') == 3)) { ?>                      <!--TICKETS POR AREA-->
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-green">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-users fa-4x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            
                                             <div><?php echo __('Tickets').'<br>'.__('por Área')?></div> <br>
                                        </div>
                                    </div>
                                </div>
                                <a href="#">
                                    <div class="panel-footer">
                                        <span class="pull-left">
                                            <?php if ($this->Session->read('Auth.User.role_id') == 3 ) {?>
                                            <?php
                                           
                                            echo '<i class="fa fa-file-pdf-o"></i>'.'  <br>'.$this->Html->link(__(' Generar PDF'),'#',array( 'onclick' => "var openWin = window.open('".$this->Html->url(array('action'=>'view_group_pdf', 'ext' =>'pdf',$this->Session->read('Auth.User.group_id')))."', '_blank', 'toolbar=1,scrollbars=1,location=0,status=1,menubar=0,resizable=1,width=700,height=600');  return false;")); 

                                            ?>

                                         <?php } else {?>  
                                            
                                            <?php  echo $this->Html->link('<i class="fa fa-file-pdf-o"></i>'.__(' Seleccionar:'),
                                                        array('action'=>'none'), 
                                                        array( 'class'=>'btn btn-outline btn-success','data-toggle'=> 'modal','data-target' => '#Edit1','escape' => false), 
                                                        false);
                                         }?>
                                        </span>
                                         
                                       
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
   
    <!--TICKETS POR TECNICO-->
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-yellow">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-user fa-4x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            
                                            <div><?php echo __('Tickets por ').'<br>'.__('Técnico')?></div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#">
                                    <div class="panel-footer">
                                        <span class="pull-left">
                                         
                                             <?php  echo $this->Html->link('<i class="fa fa-file-pdf-o"></i>'.__(' Seleccionar :'),
                                                        array('action'=>'none'), 
                                                        array( 'class'=>'btn btn-outline btn-warning','data-toggle'=> 'modal','data-target' => '#Edit2','escape' => false), 
                                                        false);
                                             ?>
                                         </span>
                                        <!--<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>-->
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
      
  <?php }?> 
                         
                    </div>

                    
                    
                 </div>
                 <!--FIN PANEL-->
                <!-- /.col-lg-12 -->
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    
    
    
    
    <!--SCRIPTS-->
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
    
 <script>
            $(document).ready(function() {
                $('#listatech').dataTable();
                 $('#listadepartamentos').dataTable();
                
                  
              
            });
        </script>
</body>

</html>

