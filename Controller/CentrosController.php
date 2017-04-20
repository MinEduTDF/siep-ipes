<?php

App::uses('AppController', 'Controller');

class CentrosController extends AppController {

	var $name = 'Centros';
    public $helpers = array('Form', 'Time', 'Js', 'TinyMCE.TinyMCE');
	public $components = array('Session', 'Paginator', 'RequestHandler');
	var $paginate = array('Centro' => array('limit' => 4, 'order' => 'Centro.cue ASC'));

 	public function beforeFilter() {
        parent::beforeFilter();
        //Si el usuario tiene un rol de superadmin le damos acceso a todo.
        //Si no es así (se trata de un usuario "admin o usuario") tendrá acceso sólo a las acciones que les correspondan.
        if($this->Auth->user('role') === 'superadmin') {
	        $this->Auth->allow();
	    } elseif ($this->Auth->user('role') === 'usuario') { 
	        $this->Auth->allow('index', 'view');
	    } 
    }

 	function index() {
		$this->Centro->recursive = 0;
		$this->set('centros', $this->paginate());
		$this->redirectToNamed();
		$conditions = array();
		
		if(!empty($this->params['named']['cue']))
		{
			$conditions['Centro.cue ='] = $this->params['named']['cue'];
		}
		
		$centros = $this->paginate('Centro', $conditions);
		$this->set(compact('centros'));
	}
	
	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash('Centro no valido', 'default', array('class' => 'alert alert-danger'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('centro', $this->Centro->read(null, $id));
	}

	function add() {
		//abort if cancel button was pressed  
        if(isset($this->params['data']['cancel'])){
                $this->Session->setFlash('Los cambios no fueron guardados. Agregación cancelada.', 'default', array('class' => 'alert alert-warning'));
                $this->redirect( array( 'action' => 'index' ));
		}
		if (!empty($this->data)) {
			$this->Centro->create();
			if ($this->Centro->save($this->data)) {
				$this->Session->setFlash('El centro ha sido grabado', 'default', array('class' => 'alert alert-success'));
				//$this->redirect(array('action' => 'index'));
				$inserted_id = $this->Centro->id;
				$this->redirect(array('action' => 'view', $inserted_id));
			} else {
				$this->Session->setFlash('El centro no fue grabado. Intentelo nuevamente.', 'default', array('class' => 'alert alert-danger'));
			  }
		}
		$empleados = $this->Centro->Empleado->find('list', array('fields'=>array('id', 'nombre_completo_empleado')));
		$this->set(compact('empleados'));
	}

		
	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash('Centro no valido', 'default', array('class' => 'alert alert-warning'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			//abort if cancel button was pressed  
	        if(isset($this->params['data']['cancel'])){
	                $this->Session->setFlash('Los cambios no fueron guardados. Edición cancelada.', 'default', array('class' => 'alert alert-warning'));
	                $this->redirect( array( 'action' => 'index' ));
			}
			if ($this->Centro->save($this->data)) {
				$this->Session->setFlash('El centro ha sido grabado', 'default', array('class' => 'alert alert-success'));
				//$this->redirect(array('action' => 'index'));
				$inserted_id = $this->Centro->id;
				$this->redirect(array('action' => 'view', $inserted_id));
			} else {
				$this->Session->setFlash('El centro no fue grabado. Intentelo nuevamente.', 'default', array('class' => 'alert alert-danger'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Centro->read(null, $id);
		}
		$empleados = $this->Centro->Empleado->find('list');
		$this->set(compact('empleados'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash('id no valido para centro', 'default', array('class' => 'alert alert-warning'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Centro->delete($id)) {
			$this->Session->setFlash('El centro ha sido borrado', 'default', array('class' => 'alert alert-success'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash('El centro no fue borrado. Intentelo nuevamente.', 'default', array('class' => 'alert alert-danger'));
		$this->redirect(array('action' => 'index'));
	}
	
	function imprimir($id = null) {
	
	    $this->idEmpty($id,'index');
		$centro = $this->Centro->read(null, $id);
	    $this->__createCentroPDF($centro);
	}
	
	// metodos privados.
	
	function __createCentroPDF($centro)
	{
		App::import(null,null,true,array(),'vendors/tcpdf/examples/example_001',false);
		Configure::write('debug',0);
        $this->layout = 'pdf'; /* esto utilizara el layout 'pdf.ctp' */
        /* Operaciones que deseamos realizar y variables que pasaremos a la vista. */
        $this->render();
	}
			
}
?>