<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
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
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('AuthComponent', 'Controller/Component');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
    
       
      public $helpers = array('Html', 'Form');
      
    public $components = array(
        'Session', 'Cookie',
        'Auth' => array(
            'loginRedirect' => array(
                'controller' => 'pages','action' => 'display'
                , 'home'
            ),
            'logoutRedirect' => array(
                'controller' => 'Users',
                'action' => 'login'
                
            ),
            'authenticate' => array(
                'Form' => array(
                    'passwordHasher' => array(
                    'className' => 'Simple',
                    'hashType' => 'sha1'
                    )
                )
            ),
            
        )
    );

     public function beforeFilter()
    {    $this->Auth->autoRedirect = false;
          $this->Auth->allow('login');
          $this->Auth->authError = __('Debe estar logeado para poder ver a esta página.');
          $this->Auth->userModel = 'User';
          $this->Auth->fields = array('username' => 'username', 'password' => 'password');// 
          
             }    

}
