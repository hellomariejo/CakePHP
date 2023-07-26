 <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-pencil"></i><?php echo __(' Editar Tipo de Ticket'); ?>  </h4>
</div>
                      
   <div class="modal-body">
                  
    <!-- Form EDITAR -->

                 <?php echo $this->Form->create('TicketType', array( 'action'=>'edit' , 'id'=>'formEdit',
                         'class' => 'form-horizontal',  
                         'inputDefaults' => array(  
                         'format' => array('before', 'label', 'between', 'input', 'error', 'after'),  
                         'div' => array('class' => 'form-group'),  
                         'label' => array('class' => 'col-md-4 control-label'),  
                         'between' => '<div class="col-md-4">',  
                         'after' => '</div>' )));?> 
                 
                     <fieldset>
                          <?php  
                            echo $this->Form->input('description', array('label' => array('id'=>'description_edit','class' => 'col-md-4 control-label',
                                                                         'text'=>__('Descripción')), 'class' => 'form-control input-md'));
                            
                           echo $this->Form->input('id', array('id'=>'id_edit','type'=>'hidden'));
                            ?>
                    </fieldset>

         <!-- /Form End Crear  -->             
         
<!--                   </form>-->
        
                     <div class="modal-footer">
                         <?php echo $this->Form->button('Cancelar', array('type'=>'button', 'class'=>'btn btn-default', 'data-dismiss'=>'modal')); ?> 
                         <?php echo $this->Form->submit('Guardar', array('class' => 'btn btn-primary','div' => false)); ?> 
                    </div>
                  
               <?php echo $this->Form->end();?>
      </div>