<?php
class IntegracionsController extends AppController {

	var $name = 'Integracions';
    var $helpers = array('Session');
	var $components = array('Auth','Session');
	var $paginate = array('Integracions' => array('limit' => 4, 'order' => 'Integracions.id'));

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash('Integracion no valido', 'default', array('class' => 'alert alert-warning'));
			$this->redirect(array('controller' => 'alumnos','action' => 'index'));
		}
		$this->set('integracion', $this->Integracion->read(null, $id));
	}

	function add() {
		  //abort if cancel button was pressed  
          if(isset($this->params['data']['cancel'])){
                $this->Session->setFlash('Los cambios no fueron guardados. Agregación cancelada.', 'default', array('class' => 'alert alert-warning'));
                $this->redirect( array( 'action' => 'index' ));
		  }
  		  if (!empty($this->data)) {
			$this->Integracion->create();
			if ($this->Integracion->save($this->data)) {
				$this->Session->setFlash('La Integracion ha sido grabada.', 'default', array('class' => 'alert alert-success'));
				//$this->redirect(array('controller' => 'alumnos','action' => 'index'));
				$inserted_id = $this->Integracion->id;
				$this->redirect(array('action' => 'view', $inserted_id));
			} else {
				$this->Session->setFlash('La Integracion no fue grabada. Intente nuevamente.', 'default', array('class' => 'alert alert-danger'));
			}
		}
		$alumnos = $this->Integracion->Alumno->find('list', array('fields'=>array('id',                                                    'nombre_completo_alumno')));
		$centros = $this->Integracion->Centro->find('list', array('fields' => array('id', 'sigla')));
		$ciclos = $this->Integracion->Ciclo->find('list');
		$this->set(compact('alumnos', 'centros', 'ciclos'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash('Integracion no valida', 'default', array('class' => 'alert alert-warning'));
			$this->redirect(array('controller' => 'alumnos','action' => 'index'));
		}
		if (!empty($this->data)) {
		  //abort if cancel button was pressed  
            if(isset($this->params['data']['cancel'])){
                $this->Session->setFlash('Los cambios no fueron guardados. Edición cancelada.', 'default', array('class' => 'alert alert-warning'));
                $this->redirect( array( 'action' => 'index' ));
		  }
			if ($this->Integracion->save($this->data)) {
				$this->Session->setFlash('La integracion ha sido grabada.', 'default', array('class' => 'alert alert-success'));
				//$this->redirect(array('controller' => 'alumnos','action' => 'index'));
				$inserted_id = $this->Integracion->id;
    			$this->redirect(array('action' => 'view', $inserted_id));
 			} else {
				$this->Session->setFlash('La integracion no fue grabada. Intente nuevamente.', array('class' => 'alert alert-danger'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Integracion->read(null, $id);
		}
		$alumnos = $this->Integracion->Alumno->find('list', array('fields'=>array('id',                                                    'nombre_completo_alumno')));
		$centros = $this->Integracion->Centro->find('list', array('fields' => array('id', 'sigla')));
		$ciclos = $this->Integracion->Ciclo->find('list');
		$this->set(compact('alumnos', 'centros', 'ciclos'));

	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash('Id no valido para integracion.', 'default', array('class' => 'alert alert-warning'));
			$this->redirect(array('controller' => 'alumnos','action' => 'index'));
		}
		if ($this->Integracion->delete($id)) {
			$this->Session->setFlash('La Integracion ha sido borrada.', 'default', array('class' => 'alert alert-success'));
			$this->redirect(array('controller' => 'alumnos','action' => 'index'));
		}
		$this->Session->setFlash('La Integracion no fue borrado.', 'default', array('class' => 'alert alert-danger'));
		$this->redirect(array('controller' => 'alumnos','action' => 'index'));
	}
}
?>