
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
                                  <?php echo $this->Html->link('<i class="fa fa-flag"></i> '.__(' Reportes '), array('controller' => 'Tickets', 'action' => 'reports'),array('escape' => false)); ?>
                                </li>
                        
                        
                        
                       
                       
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            
           <?php  } else 
           
          
               
           { ?>
               
               
                <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                           
                            <!-- /input-group -->
                        </li>
                        <li>
                            <?php echo $this->Html->link('<i class="fa fa-dashboard fa-fw"></i> '.__('Inicio'), array('controller' => 'pages', 'action' => 'display', 'home'),array('escape' => false)); ?>
                            
                        </li>
                                <li>
                                         <?php echo $this->Html->link('<span class="glyphicon glyphicon-inbox" aria-hidden="true"></span> '.__(' Mis Tickets'), array('controller' => 'Tickets', 'action' => 'index'),array('escape' => false)); ?>
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
        
        
<!--  Modal Editar -->
   <div class="modal fade" id="edit1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel"><i class="fa fa-pencil"></i> <?php  echo __('Editar Usuario');?></h4>
                  </div>
                      
           <div class="modal-body">
                  
    <!-- Form EDITAR -->
                 <?php echo $this->Form->create('User', array( 'action'=>'edit' ,
                         'class' => 'form-horizontal',  
                         'inputDefaults' => array(  
                         'format' => array('before', 'label', 'between', 'input', 'error', 'after'),  
                         'div' => array('class' => 'form-group'),  
                         'label' => array('class' => 'col-md-4 control-label'),  
                         'between' => '<div class="col-md-4">',  
                         'after' => '</div>' )));?> 
                 
                     <fieldset>
                          <?php  
                             echo $this->Form->input('name', array('label' => array('class' => 'col-md-4 control-label',
                                                                         'text'=>__('Nombre')), 'class' => 'form-control input-md'));
                            echo $this->Form->input('lastname', array('label' => array('class' => 'col-md-4 control-label',
                                                                         'text'=>__('Apellido')), 'class' => 'form-control input-md'));
                            echo $this->Form->input('email', array('label' => array('class' => 'col-md-4 control-label',
                                                                         'text'=>__('Email')), 'class' => 'form-control input-md'));
                            echo $this->Form->input('phone', array('label' => array('class' => 'col-md-4 control-label',
                                                                         'text'=>__('Télefono')), 'class' => 'form-control input-md'));
                            echo $this->Form->input('username', array('label' => array('class' => 'col-md-4 control-label',
                                                                         'text'=>__('Nombre de Usuario')), 'class' => 'form-control input-md'));
                          
                            
                            echo $this->Form->input('validity', array('class' => 'form-control',
                                                    'label'=>array('class' => 'col-md-4 control-label','text'=>__('Validez')), 
                                                    'options' => array('Válido'=>'Válido','Temporalmento no válido'=>'Temporalmento no válido','No válido'=>'No válido')));
                          
                        
                            echo $this->Form->input('role_id',
                                                    array ('class' => 'form-control', 
                                                    'label'=>array('class' => 'col-md-4 control-label','text'=>__('Rol')) 
                                                    ));
                           
                            echo $this->Form->input('group_id', array('class' => 'form-control',
                                                    'label'=>array('class' => 'col-md-4 control-label','text'=>__('Grupo'))
                                                    ));
                         
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
   
<!--MODAL EDITAR CONTRASEÑA-->
<div class="modal fade" id="password" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"  data-backdrop="true"  >
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel"><i class="fa fa-plus-square"></i> <?php  echo __('Cambiar Contraseña');?></h4>
                  </div>
   <div class="modal-body">
   <!-- Form Crear -->
     <?php echo $this->Form->create('User', array('action'=>'change_password' ,'class' => 'form-horizontal',  
                         'inputDefaults' => array(   'format' => array('before', 'label', 'between', 'input', 'error', 'after'),  
                         'div' => array('class' => 'form-group'),  
                         'label' => array('class' => 'col-md-4 control-label'),  
                         'between' => '<div class="col-md-4">',   'after' => '</div>' ),
                            'id'=>'formAdd'));?> 
                    <fieldset>
                          <?php  
                            echo $this->Form->input('password', array( 'label' => array('class' => 'col-md-4 control-label',
                                                                        'text'=>__('Nueva Contraseña')), 'class' => 'form-control input-md',));
                           echo $this->Form->input('password_repeat', array( 'type'=>'password','label' => array('class' => 'col-md-4 control-label',
                                                                             'text'=>__('Repita Contraseña')), 'class' => 'form-control input-md'));
                             echo $this->Form->input('id', array('id'=>'id_edit','type'=>'hidden','value'=>$id));
                            ?>
                    </fieldset>
 
<!--                   </form>-->
            </div>
                     <div class="modal-footer">
                     <?php echo $this->Form->button('Cancelar', array('type'=>'button', 'class'=>'btn btn-default', 'data-dismiss'=>'modal')); ?> 
                      <?php echo $this->Form->submit('Guardar', array('class' => 'btn btn-primary','div' => false, 'id'=>'add')); ?> 
                 </div>
                <?php echo $this->Form->end();?>
        </div> 
                    
     </div>
 </div> 


<!--FIN EDITAR CONTRASEÑA-->  



        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><?php echo __('Perfil de Usuario');?></h1>
                     <?php echo $this->Session->flash() ?>
                    <!--INICIO PANEL BODY-->   
                    <div class="panel-body">
                        
                        
                       <!--INICIO CONTACTO-->
                              <div class="container">
                                  <div class="row">
<!--                                  <div class="col-md-5  toppad  pull-right col-md-offset-3 ">
                                       <?php echo $this->Html->link('<i class="fa fa-pencil"></i> '.__('Editar Usuario'), array('action' => 'edit'),array('escape' => false)); ?>
                                       <br> <br>
                                      
                                  </div>-->
                                    <!--<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad " >-->

                                  <div class="col-md-5">
                                      <div class="panel panel-info">
                                        <div class="panel-heading">
                                          <h3 class="panel-title"> <?php echo $user['User']['name'].' '.$user['User']['lastname'] ?></h3>
                                        
                                        </div>
                                        <div class="panel-body">
                                          <div class="row">
                                            <div class="col-md-3 col-lg-3 " align="center"> 
                                                <?php  echo $this->Html->image('/img/user.png', array('width'=>'100px','class'=>'img-circle')); ?>
                                            </div>

                                           
                                            <div class=" col-md-9 col-lg-9 "> 
                                              <table class="table table-user-information">
                                                <tbody>
                                                  <tr>
                                                    <td><?php echo __('Nombre de Usuario: ')?></td>
                                                    <td><?php echo $user['User']['username']?></td>
                                                  </tr>
                                                   <tr>
                                                    <td><?php echo __('Rol: ')?></td>
                                                    <td><?php echo $user['Role']['description']?></td>
                                                  </tr>
                                                   <tr>
                                                    <td><?php echo __('Área: ')?></td>
                                                    <td><?php echo $user['Group']['description']?></td>
                                                  </tr>
                                                   <tr>
                                                    <td><?php echo __('Email: ')?></td>
                                                    <td><?php echo $user['User']['email']?></td>
                                                  </tr>
                                                   <tr>
                                                    <td><?php echo __('Teléfono: ')?></td>
                                                    <td><?php echo $user['User']['phone']?></td>
                                                  </tr>
                                                   <tr>
                                                    <td><?php echo __('Creado: ')?></td>
                                                    <td><?php echo $user['User']['created']?></td>
                                                  </tr>
                                                   
                                                 </tbody>
                                              </table>

                                             
                                            </div>
                                          </div>
                                        </div>
                                          
  
                                          
                                              <div class="panel-footer clearfix">
                                                     <?php  
                                                     echo $this->Html->link(__('Cambiar Contraseña'),
                                                            array('action'=>'change_password',$user['User']['id']), 
                                                            array( 'class'=>'btn btn-danger','data-toggle'=> 'modal','data-target' => '#password','escape' => false), 
                                                            false);
//                                                  ?>
                                                  
                                                  <span class="pull-right"> 
                                                       
                                                        <?php 
                                                             echo $this->Html->link($this->Html->tag('i', '', array('class' => 'glyphicon glyphicon-pencil')),
                                                             array('action'=>'edit',$user['User']['id']), 
                                                             array( 'class'=>'btn btn-primary','data-toggle'=> 'modal','data-target' => '#edit1','escape' => false), 
                                                             false);
                                                        
                                                        ?>
                                                    </span>
<!--                                                    <a href="edit.html" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                                                        <a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>-->
                                                   
                                                     
                                                </div>

                                      </div>
                                    </div>
                                  </div>
                                </div>
                        
                    <!--FIN CONTACTO-->
                    
                    </div> 
     <!--FIN DE PANEL BODY-->
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
    
    


</body>

</html>

