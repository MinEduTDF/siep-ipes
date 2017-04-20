<?php
App::uses('AppController', 'Controller');

class GraficosController extends AppController {
	var $name = 'Graficos';

    var $helpers = array('Session');
	public $components = array('Auth','Session', 'RequestHandler');
	
	function beforeFilter(){
		parent::beforeFilter();
	}

	
	public function index() {
    } 

    public function i_x_curso() {

	}

	public function r_x_curso() {

	}

	public function a_x_curso() {

	}

}
?>