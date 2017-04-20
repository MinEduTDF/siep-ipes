<?php
class ServiciosController extends AppController {

	var $name = 'Servicios';
    var $helpers = array('Session');
	public $components = array('Auth','Session', 'RequestHandler');
	var $paginate = array('Servicio' => array('limit' => 3, 'order' => 'Servicio.id DESC'));

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash('Servicio no valido', 'default', array('class' => 'alert alert-warning'));
			$this->redirect(array('controller' => 'alumnos','action' => 'index'));
		}
		$this->set('servicio', $this->Servicio->read(null, $id));
				
	}

	function add() {
		  //abort if cancel button was pressed  
          if(isset($this->params['data']['cancel'])){
                $this->Session->setFlash('Los cambios no fueron guardados. Agregación cancelada.', 'default', array('class' => 'alert alert-warning'));
                $this->redirect( array( 'action' => 'index' ));
		  }
		  if (!empty($this->data)) {
			$this->Servicio->create();
			if ($this->Servicio->save($this->data)) {
				$this->Session->setFlash('El servicio ha sido grabado', 'default', array('class' => 'alert alert-success'));
				$this->redirect(array('controller' => 'alumnos','action' => 'index'));
			} else {
				$this->Session->setFlash('El servicio no ha sido grabado. Intentelo nuevamente.', 'default', array('class' => 'alert alert-danger'));
			}
		}
		$alumnos = $this->Servicio->Alumno->find('list', array('fields'=>array('id', 'nombre_completo_alumno')));
		$ciclos = $this->Servicio->Ciclo->find('list');
		$this->set(compact('alumnos', 'ciclos'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash('Servicio no valido', 'default', array('class' => 'alert alert-warning'));
			$this->redirect(array('controller' => 'alumnos','action' => 'index'));
		}
		if (!empty($this->data)) {
		  //abort if cancel button was pressed  
            if(isset($this->params['data']['cancel'])){
                $this->Session->setFlash('Los cambios no fueron guardados. Edición cancelada.', 'default', array('class' => 'alert alert-warning'));
                $this->redirect( array( 'action' => 'index' ));
		  }
			if ($this->Servicio->save($this->data)) {
				$this->Session->setFlash('El servicio ha sido grabado', 'default', array('class' => 'alert alert-success'));
				$this->redirect(array('controller' => 'alumnos','action' => 'index'));
			} else {
				$this->Session->setFlash('El servicio no ha sido grabado. Intentelo nuevamente.', 'default', array('class' => 'alert alert-danger'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Servicio->read(null, $id);
		}
		$alumnos = $this->Servicio->Alumno->find('list', array('fields'=>array('id', 'nombre_completo_alumno')));
		$ciclos = $this->Servicio->Ciclo->find('list');
		$this->set(compact('alumnos', 'ciclos'));

	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash('Id no valido para servicio', 'default', array('class' => 'alert alert-warning'));
			$this->redirect(array('controller' => 'alumnos','action' => 'index'));
		}
		if ($this->Servicio->delete($id)) {
			$this->Session->setFlash('El Servicio ha sido borrado', 'default', array('class' => 'alert alert-success'));
			$this->redirect(array('controller' => 'alumnos','action' => 'index'));
		}
		$this->Session->setFlash('El Servicio no fue borrado', 'default', array('class' => 'alert alert-danger'));
		$this->redirect(array('controller' => 'alumnos','action' => 'index'));
	}
}
?>
