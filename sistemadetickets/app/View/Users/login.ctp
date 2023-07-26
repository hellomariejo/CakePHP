
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
</head>
<body >
  <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><center> <?php echo __('Bienvenid@ a SDSI-DTIC');?></center></h3>
                   </div>         
           <div class="panel-body">
               <?php echo  $this->Session->flash();
                    // echo $this->Session->flash('auth');
               ?>
                <p>Introduzca usuario y contraseña para continuar.</p>
               <!--INICIO DEL FORM LOGIN-->
                     <?php echo $this->Form->create('User', array('action'=>'login','inputDefaults' => array(
                                            'format' => array('before','between', 'input', 'after'),   'between' => '<div class="form-group">',   'after' => '</div>') )); ?>
                                      <fieldset>
                                            <?php echo $this->Form->input('username', array( 'placeholder' => 'Usuario' , 'class'=>"form-control")); ?>
                                           <?php echo $this->Form->input('password', array('placeholder' => 'Password','class'=>"form-control",'type' => 'password')); ?>
                                         </fieldset> 
                     <?php echo $this->Form->submit('Iniciar Sesión', array( 'class' => 'btn btn-lg btn-success btn-block'));?>
                     <?php echo $this->Form->end();?>    
              <!--FIN DEL FORM LOGIM--> 
        </div>
    </div>
 </div>
        </div>
    </div>
</body>
</html>
