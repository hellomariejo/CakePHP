


<?php
$this->layout=false;
?>

<div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-pencil"></i> <?php  echo __('Editar Usuario');?></h4>
</div>
                      
                     
   <div class="modal-body">
                  
    <!-- Form EDITAR -->

                 <?php echo $this->Form->create('User', array( 'action'=>'edit' , 'id'=>'formEdit', 
                         'class' => 'form-horizontal',  
                         'inputDefaults' => array(  
                         'format' => array('before', 'label', 'between', 'input', 'error', 'after'),  
                         'div' => array('class' => 'form-group'),  
                         'label' => array('class' => 'col-md-4 control-label'),  
                         'between' => '<div class="col-md-4">',  
                         'after' => '</div>' )));
                 ?> 
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
                                                    'label'=>array('class' => 'col-md-4 control-label','text'=>__('Rol')) ,'options' => $roles,
                                                    ));
                           
                            echo $this->Form->input('group_id', array('class' => 'form-control',
                                                    'label'=>array('class' => 'col-md-4 control-label','text'=>__('Grupo')), 
                                                    'options' => $groups));
                           echo $this->Form->input('id', array('id'=>'id_edit','type'=>'hidden'));
                            ?>

                           
                                
                    </fieldset>

         <!-- /Form End Editar               
             
         
<!--                   </form>-->
            
                     <div class="modal-footer">
                         <?php echo $this->Form->button('Cancelar', array('type'=>'button', 'class'=>'btn btn-default', 'data-dismiss'=>'modal')); ?> 
                         <?php
                         echo $this->Form->submit('Guardar', array('class' => 'btn btn-primary','div' => false));
                         ?> 
                    </div>
                  
               <?php 
                echo $this->Form->end();
               ?>
       </div> 
 

      