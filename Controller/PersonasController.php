<?php/*
class PersonasController extends AppController {

	var $name = 'Personas';
	var $paginate = array('Persona' => array('limit' => 3, 'order' => 'Persona.id DESC'));

	/*
	function beforeFilter(){

        parent::beforeFilter();
	//	$this->Auth->allowedActions = array('index', 'view');
    }
	*/
	
	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Persona no valida'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('persona', $this->Persona->read(null, $id));
				
	}

	function add() {
		if (!empty($this->data)) {
			$this->Persona->create();
			if ($this->Persona->save($this->data)) {
				$this->Session->setFlash(__('La persona ha sido grabado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('La persona no ha sido grabado. Favor, intentelo nuevamente.'));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Persona no valida'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Persona->save($this->data)) {
				$this->Session->setFlash(__('La persona ha sido grabado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('La persona no ha sido grabado. Favor, intentelo nuevamente.'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Persona->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Id no valido para persona'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Persona->delete($id)) {
			$this->Session->setFlash(__('Persona borrado'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Persona no fue borrado'));
		$this->redirect(array('action' => 'index'));
	}
}
*/?>
