
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
                                  <?php echo $this->Html->link('<i class="fa fa-flag"></i> '.__(' Reportes '), array('controller' => 'Tickets', 'action' => 'reports'),array('escape' => false)); ?>
                                </li>
                        
                        
                        
                       
                       
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            
           <?php  } else { ?>
               
               
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
    <!-- Custom Theme JavaScript -->
    <?php echo $this->Html->script('/js/sb-admin-2.js');?> 
   
</body>

</html>

