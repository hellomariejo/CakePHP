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
                             echo $this->Form->input('id', array('id'=>'id_edit','type'=>'hidden'));
                            ?>
                    </fieldset>
 
<!--                   </form>-->
            </div>
                     <div class="modal-footer">
                         <?php 
                         echo $this->Form->button('Cancelar', array('type'=>'button', 'class'=>'btn btn-default', 'data-dismiss'=>'modal')); 
                        
                         echo $this->Form->submit('Guardar', array('class' => 'btn btn-primary','div' => false));
                         ?> 
                    </div>
                  
               <?php 
                echo $this->Form->end();
               ?>
        </div> 