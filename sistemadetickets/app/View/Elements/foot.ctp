<br> <br>
<div class="panel panel-heading">
  
    <div class="alert alert-info" role="alert">
      <center>
          <h6 style="color: #005f8d">
           Dirección: Panamericana Sur km 1 1/2, Riobamba - Ecuador | Teléfono: 593 (03) 2 998-200 | Telefax: (03) 2 317-001 | Código Postal: EC060155 <br>
           <br>
         
         <?php 
         
         echo $this->Html->link(__('Términos de Uso  '), array('controller'=>'pages', 'action'=>'termsofuse'),array('escape' => false)); 
         echo '  |  ';
         echo $this->Html->link(__(' Acerca de'), array('controller'=>'pages', 'action'=>'about'),array('escape' => false));

         ?>
           </h6>
      </center>
  </div>
</div>