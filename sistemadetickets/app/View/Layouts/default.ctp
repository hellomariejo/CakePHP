<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', '   ');
?>
 
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
	<?php
           echo   __('SDSI-DTIC');?>
            
	</title>
    
    

	<?php
		//echo $this->Html->meta('icon');
              
		//echo $this->Html->css('cake.generic');
               //HOJAS DE ESTILO PARA TODAS LAS PAGINAS
//                echo $this->Html->image('/img/banner.jpg', array('width'=>'1225px'));
               echo $this->element('header');
                echo $this->Html->css('/css/bootstrap.min.css');
                echo $this->Html->css('/css/plugins/metisMenu/metisMenu.min.css');
                echo $this->Html->css('/css/sb-admin-2.css');
                echo $this->Html->css('/font-awesome-4.1.0/css/font-awesome.min.css');
                //SCRIPTS PARA TODAS LAS PAGINAS
                echo $this->Html->script('/js/jquery-1.11.0.js');
                echo $this->Html->script('/js/bootstrap.min.js');
                echo $this->Html->script('/js/plugins/metisMenu/metisMenu.min.js');
                echo $this->Html->script('/js/sb-admin-2.js');
		
                echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body >
	<div id="container">
		<div id="header">
               
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
                    
                    
                      
		</div>
             
		<div id="footer">
                     
			
                   
		</div>
            
	</div>
    

	<?php 
       echo $this->element('sql_dump'); 
       echo $this->element('foot');
        ?>
    
</body>
</html>
