<?php
/**
 * Application level View Helper
 *
 * This file is application-wide helper file. You can put all
 * application-wide helper-related methods here.
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
App::import('Helper', 'Helper', false);

/**
 * This is a placeholder class.
 * Create the same file in app/app_helper.php
 *
 * Add your application-wide methods in the class below, your helpers
 * will inherit them.
 *
 * @package       cake
 * @subpackage    cake.cake
 */
class AppHelper extends Helper {
 
 var $helpers = array('Session'); 

/**
 * Devuelve dato requerido.
 * @param int $id
 * @return string
 */
 function returnRiquireData($id){
    
	$alumno['Alumno']['id'] != $id;
	return $alumno['Alumno']['apellido'];
              
 }
 
/**
 * Aplica formato a una fecha.
 * @param string $time
 * @return string
 */
 function formatTime($time){
    
	return strftime('%d-%m-%Y',strtotime($time));    
 }

 /**
 * Devuelve el estado de logueo.
 * @return bool
 */
 function loggedIn()
 {
    return $this->Session->check('Auth.User');
 } 

 /**
 * Devuelve informaciòn del usuario.
 * @param string key
 * @return bool o string
 */
 function usuario($key)
 {
    $usuario = $this->Session->read('Auth.User');
    if(isset($user[$key]))
    {
        return $user[$key];
    }
    return false;
 }
 
 
/**
* Transforma un texto a minÃºculas y elimina los espacios en blanco
* @param string $name
* @return string
*/
function toLowerCaseAndTrim($name)
{
	return strtolower(str_replace(' ','',$name));
}

}