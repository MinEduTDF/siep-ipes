<?php
class FamiliarsController extends AppController {

	var $name = 'Familiars';
    var $helpers = array('Session');
	var $components = array('Auth','Session');
	var $paginate = array('Familiar' => array('limit' => 3, 'order' => 'Familiar.id DESC'));

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash('Familiar no valido', 'default', array('class' => 'alert alert-warning'));
			$this->redirect(array('controller' => 'alumnos','action' => 'index'));
		}
		$this->set('familiar', $this->Familiar->read(null, $id));
				
	}

	function add() {
		  //abort if cancel button was pressed  
          if(isset($this->params['data']['cancel'])){
                $this->Session->setFlash('Los cambios no fueron guardados. Agregación cancelada.', 'default', array('class' => 'alert alert-warning'));
                $this->redirect(array('controller' => 'alumnos','action' => 'index'));
				
		  }
   		  if (!empty($this->data)) {
			$this->Familiar->create();
			if ($this->Familiar->save($this->data)) {
				$this->Session->setFlash('El familiar ha sido grabado', 'default', array('class' => 'alert alert-success'));
				$inserted_id = $this->Familiar->id;
				$this->redirect(array('action' => 'view', $inserted_id));
			} else {
				$this->Session->setFlash('El familiar no fue grabado. Intentelo nuevamente.', 'default', array('class' => 'alert alert-danger'));
			}
		}
		$alumnos = $this->Familiar->Alumno->find('list', array('fields'=>array('id', 'nombre_completo_alumno')));
		$this->set(compact('alumnos'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash('Familiar no valido', 'default', array('class' => 'alert alert-warning'));
			$this->redirect(array('controller' => 'alumnos','action' => 'index'));
		}
		if (!empty($this->data)) {
		  //abort if cancel button was pressed  
          if(isset($this->params['data']['cancel'])){
                $this->Session->setFlash('Los cambios no fueron guardados. Edición cancelada.', 'default', array('class' => 'alert alert-warning'));
                $this->redirect( array('controller' => 'alumnos','action' => 'view', $id));
		  }
		  if ($this->Familiar->save($this->data)) {
				$this->Session->setFlash('El familiar ha sido grabado', 'default', array('class' => 'alert alert-success'));
				//$this->redirect($this->referer());
				//$this->redirect(array('controller' => 'alumnos','action' => 'index'));
				$inserted_id = $this->Familiar->id;
				$this->redirect(array('action' => 'view', $inserted_id));
			} else {
				$this->Session->setFlash('El familiar no fue grabado. Intentelo nuevamente.', 'default', array('class' => 'alert alert-danger'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Familiar->read(null, $id);
		}
		$alumnos = $this->Familiar->Alumno->find('list', array('fields'=>array('id', 'nombre_completo_alumno')));
		$this->set(compact('alumnos'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash('Id no valido para familiar', 'default', array('class' => 'alert alert-warning'));
			$this->redirect(array('controller' => 'alumnos','action' => 'index'));
		}
		if ($this->Familiar->delete($id)) {
			$this->Session->setFlash('El Familiar ha sido borrado', 'default', array('class' => 'alert alert-success'));
			$this->redirect(array('controller' => 'alumnos','action' => 'index'));
		}
		$this->Session->setFlash('Familiar no fue borrado', 'default', array('class' => 'alert alert-danger'));
		$this->redirect(array('controller' => 'alumnos','action' => 'index'));
	}
}
?>
