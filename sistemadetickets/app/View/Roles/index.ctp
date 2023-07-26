
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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">
<?php 
    if ($this->Session->read('Auth.User.role_id') == 1)                                
    {
?>
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
                        </li>-->
                       
                        
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
                                     <?php echo $this->Html->link(__('Estados del Ticket'), array('controller' => 'States', 'action' => 'index'),array('escape' => false)); ?>
                                </li>
                                 <li>
                                     <?php echo $this->Html->link(__('Prioridades del Ticket'), array('controller' => 'Priorities', 'action' => 'index'),array('escape' => false)); ?>
                                </li>
<!--                                <li>
                                     <?php echo $this->Html->link(__('Listado de Tickets'), array('controller' => 'tickets', 'action' => 'index'),array('escape' => false)); ?>
                                </li>-->
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <?php echo $this->Html->link(__('<i class="fa fa-cogs"></i> Departamentos/Facultades ESPOCH'), array('controller' => 'Departaments', 'action' => 'index'),array('escape' => false)); ?>
                        </li>
                         <li>
                          <?php echo $this->Html->link('<span class="glyphicon glyphicon-inbox" aria-hidden="true"></span> '.__('Tickets '), array('controller' => 'Tickets', 'action' => 'index'),array('escape' => false)); ?>
                        </li>
                        <li>
                                  <?php echo $this->Html->link('<i class="fa fa-flag"></i> '.__(' Reportes '), array('controller' => 'Tickets', 'action' => 'reports'),array('escape' => false)); ?>
                                </li>
                        
                        
                        
                            <!-- /.nav-second-level -->
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
 
        
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> <?php echo __('Roles');?> </h1> 
                    <?php echo $this->Session->flash() ?>
  <!--BOTON NUEVO USUARIO-->
                  
                    
                     <?php  
//                     echo $this->Html->link(__('<i class="fa fa-plus-square"></i> Nuevo'),
//                            array('action'=>'add'), 
//                            array( 'class'=>'btn btn-primary','data-toggle'=> 'modal','data-target' => '#add','escape' => false), 
//                            false);
                     ?>
       
                    
        <!--FIN BOTON NUEVO USUARIO-->   
                </div>
                 
                <!-- /.col-lg-12 -->
            </div>
            
            
<!-- Modal Crear-->
            <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span> </button>
                    <h4 class="modal-title" id="myModalLabel"><i class="fa fa-plus-square"></i> <?php  echo __('Nuevo Rol');?></h4>
                  </div>
       
    <div class="modal-body">
 <!-- Form CREAR -->
  <?php echo $this->Form->create('Role', array( 'action'=>'add',  'class' => 'form-horizontal',  
         'inputDefaults' => array( 'format' => array('before', 'label', 'between', 'input', 'error', 'after'),  
         'div' => array('class' => 'form-group'),  
         'label' => array('class' => 'col-md-4 control-label'),  
         'between' => '<div class="col-md-4">',  
         'after' => '</div>' )));?> 
                 
                 <fieldset>
                      <?php  
                        echo $this->Form->input('description', array('label' => array('class' => 'col-md-4 control-label', 'text'=>__('Descripción')), 'class' => 'form-control input-md'));
                        echo $this->Form->input('validity', array('class' => 'form-control',
                                                'label'=>array('class' => 'col-md-4 control-label','text'=>__('Validez')), 
                                                'options' => array('Válido'=>'Válido','Temporalmento no válido'=>'Temporalmento no válido','No válido'=>'No válido')));
                       ?>
                </fieldset>

         <!-- /Form End Crear  -->             
<!--  </FORM CREAR END>-->
  </div>
                     <div class="modal-footer">
                         <?php echo $this->Form->button('Cancelar', array('type'=>'button', 'class'=>'btn btn-default', 'data-dismiss'=>'modal')); ?> 
                         <?php echo $this->Form->submit('Guardar', array('class' => 'btn btn-primary','div' => false, 'id'=>'add')); ?> 
                    </div>
                <?php echo $this->Form->end();?>
        </div> 
     </div>
 </div> 
<!-- /End Modal Crear -->
   
 

<!--  Modal Editar -->
   <div class="modal fade" id="Edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel"><i class="fa fa-pencil"></i><?php echo __(' Editar Grupo'); ?>  </h4>
                  </div>
  <div class="modal-body">                 
    <!-- Form EDITAR -->
                 <?php echo $this->Form->create('Role', array( 'action'=>'edit' , 'id'=>'formEdit', 'class' => 'form-horizontal',  
                         'inputDefaults' => array(     'format' => array('before', 'label', 'between', 'input', 'error', 'after'),  
                         'div' => array('class' => 'form-group'),  
                         'label' => array('class' => 'col-md-4 control-label'),  
                         'between' => '<div class="col-md-4">',  
                         'after' => '</div>' )));?> 
                 
                     <fieldset>
                          <?php  
                            echo $this->Form->input('description', array('readonly'=>'readonly','label' => array('id'=>'description_edit','class' => 'col-md-4 control-label',
                                                                         'text'=>__('Descripción')), 'class' => 'form-control input-md'));
                            echo $this->Form->input('validity', array('id'=>'validity_edit','class' => 'form-control',
                                                    'label'=>array('class' => 'col-md-4 control-label','text'=>__('Validez')), 
                                                    'options' => array('Válido'=>'Válido','Temporalmento no válido'=>'Temporalmento no válido','No válido'=>'No válido')));
                           echo $this->Form->input('id', array('id'=>'id_edit','type'=>'hidden'));
                            ?>
                    </fieldset>

   <!-- /Form End Editar  -->                     
<!--                   </form>-->
            </div>
                     <div class="modal-footer">
                         <?php echo $this->Form->button('Cancelar', array('type'=>'button', 'class'=>'btn btn-default', 'data-dismiss'=>'modal')); ?> 
                         <?php echo $this->Form->submit('Guardar', array('class' => 'btn btn-primary','div' => false)); ?> 
                    </div>
        <?php echo $this->Form->end();?>
        </div>                
     </div>
 </div> 

<!--  /End Modal Editar -->
                 

            
            
            
      
   <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">                
  <!--INICIO TABLA-->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <?php echo __('Listado de Roles ');?>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="listaroles">
                                    <thead>
                                        <tr>
                                            <th><?php echo __('Id')?></th>
                                            <th><?php echo __('Descripción')?></th>
                                            <th><?php echo __('Validez')?></th>
                                            <th style="width: 55px"><?php echo __('Acciones')?></th>
                                         </tr>
                                    </thead>
                                    <tbody>
                                         <?php foreach ($roles as $k =>$role): ?>
    
                                                <tr class="odd gradeX">
                                                    <td><?php echo $role['Role']['id'] ?></td>
                                                    <td><?php echo $role['Role']['description'] ?></td>
                                                    <td><?php echo $role['Role']['validity'] ?></td>
                                                    <td>
                                                        
                                                <?php  echo $this->Html->link($this->Html->tag('i', '', array('class' => 'glyphicon glyphicon-pencil')),
                                                             array('action'=>'edit',$role['Role']['id']), 
                                                             array( 'class'=>'btn btn-primary','data-toggle'=> 'modal','data-target' => '#Edit','escape' => false), 
                                                             false); ?>   &nbsp;
                                                <?php 
//                                                echo $this->Form->postLink($this->Html->tag('i', '', array('class' => 'glyphicon glyphicon-trash')), 
//                                                           
//                                                           array('action' => 'delete', $role['Role']['id']), 
//                                                           array('confirm' => __('Realmente desea eliminar al Rol ') . $role['Role']['description']. '?',
//                                                              'class'=>'btn btn-danger', 'escape' => false));
                                                ?>
                                                    </td>

                                                </tr>
                                         <?php endforeach; ?>   
     
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
            <!-- /.row -->
 <?php  }  else { ?>
              
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
                        </li>-->
                       
                        
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
            <!-- /.navbar-static-side -->
               
               
               
               
        </nav>
 
        
          <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
                
                
                <div class="col-lg-12">
                    <h1 class="page-header"><?php echo __('Inicio');?></h1>
                    <center>
                        <h4  style="color: #269abc"><?php echo __('ESTRUCTURA DEL SERVICIO TÉCNICO DE USUARIOS DEL SDSI-DTIC');?></h4>
                    </center>   
                    <div class="panel-body">
                        
                        
                       <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
                          <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                           
                          </ol>

  <!-- Wrapper for slides -->
                              <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <center>
                                   <img src="img/estructura.jpg" >
                                    </center>
                                    
                                    </div>

                                <div class="item">
                                    <center>
                                         <img src="img/dtic.png"  style="width: 650px">
                                   </center>
                                    
                                    
                                  </div>

                                
                              </div>

  <!-- Left and right controls -->
                          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                          </a>
                </div>
                    
                    
                </div>
                <!-- /.col-lg-12 -->
                </div>
            </div>
            <!-- /.row -->
        </div>
               
        <?php   } ?>           
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
                $('#listaroles').dataTable();
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
