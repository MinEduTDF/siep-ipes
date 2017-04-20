<?php
App::uses('AppController', 'Controller');
/**
 * Correlativas Controller
 *
 * @property Correlativa $Correlativa
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class CorrelativasController extends AppController {

    var $name = 'Correlativas';
    public $helpers = array('Session');
	public $components = array('Auth','Session', 'RequestHandler', 'Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Correlativa->recursive = 0;
		$this->set('correlativas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Correlativa->exists($id)) {
			throw new NotFoundException(__('Invalid correlativa'));
		}
		$options = array('conditions' => array('Correlativa.' . $this->Correlativa->primaryKey => $id));
		$this->set('correlativa', $this->Correlativa->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Correlativa->create();
			if ($this->Correlativa->save($this->request->data)) {
				$this->Flash->success(__('The correlativa has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The correlativa could not be saved. Please, try again.'));
			}
		}
		$materias = $this->Correlativa->Materia->find('list');
		$this->set(compact('materias'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Correlativa->exists($id)) {
			throw new NotFoundException(__('Invalid correlativa'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Correlativa->save($this->request->data)) {
				$this->Flash->success(__('The correlativa has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The correlativa could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Correlativa.' . $this->Correlativa->primaryKey => $id));
			$this->request->data = $this->Correlativa->find('first', $options);
		}
		$materias = $this->Correlativa->Materium->find('list');
		$this->set(compact('materias'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Correlativa->id = $id;
		if (!$this->Correlativa->exists()) {
			throw new NotFoundException(__('Invalid correlativa'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Correlativa->delete()) {
			$this->Flash->success(__('The correlativa has been deleted.'));
		} else {
			$this->Flash->error(__('The correlativa could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
