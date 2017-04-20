<?php
App::uses('AppController', 'Controller');
/**
 * MesaExamens Controller
 *
 * @property MesaExamen $MesaExamen
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class MesaExamensController extends AppController {

   	var $name = 'Mesaexamens';
    var $helpers = array('Session', 'Form', 'Time', 'Js');
	public $components = array('Paginator', 'Flash', 'Auth','Session', 'RequestHandler');
	var $paginate = array('Mesaexamen' => array('limit' => 4, 'order' => 'Mesaexamen.fecha DESC'));

/**
 * index method
 *
 * @return void
 */
	public function index() {
	    
		//$this->MesaExamen->recursive = 0;
		$this->set('mesaexamens', $this->paginate());
        $ciclos = $this->Mesaexamen->Ciclo->find('list');
		$titulacions = $this->Mesaexamen->Titulacion->find('list');
		$materias = $this->Mesaexamen->Materia->find('list');
		$this->redirectToNamed();
		$conditions = array();
		
		if(!empty($this->params['named']['ciclo_id']))
		{
			$conditions['Mesaexamen.ciclo_id ='] = $this->params['named']['ciclo_id'];
		}
		if(!empty($this->params['named']['titulacion_id']))
		{
			$conditions['Mesaexamen.titulacion_id ='] = $this->params['named']['titulacion_id'];
		}
		if(!empty($this->params['named']['materia_id']))
		{
			$conditions['Mesaexamen.materia_id ='] = $this->params['named']['materia_id'];
		}
		if(!empty($this->params['named']['turno']))
		{
			$conditions['Mesaexamen.turno ='] = $this->params['named']['turno'];
		}
		if(!empty($this->params['named']['mesaespecial']))
		{
			$conditions['Mesaexamen.mesaespecial ='] = $this->params['named']['mesaespecial'];
		}
		if(!empty($this->params['named']['acta_nro']))
		{
			$conditions['Mesaexamen.acta_nro ='] = $this->params['named']['acta_nro'];
		}
		$mesaexamens = $this->paginate('Mesaexamen', $conditions);
		
		$this->set(compact('mesaexamens', 'ciclos', 'titulacions', 'materias'));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Mesaexamen->exists($id)) {
			throw new NotFoundException(__('Invalid mesa examen'));
		}
		$options = array('conditions' => array('Mesaexamen.' . $this->Mesaexamen->primaryKey => $id));
		$this->set('mesaexamen', $this->Mesaexamen->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
	  //abort if cancel button was pressed  
        if(isset($this->params['data']['cancel'])){
                $this->Session->setFlash('Los cambios no fueron guardados. Agregación cancelada.', 'default', array('class' => 'alert alert-warning'));
                $this->redirect( array( 'action' => 'index' ));
		  }
		if ($this->request->is('post')) {
			$this->Mesaexamen->create();
			if ($this->Mesaexamen->save($this->request->data)) {
				$this->Session->setFlash('La mesa ha sido grabada', 'default', array('class' => 'alert alert-success'));
				//return $this->redirect(array('action' => 'index'));
				$inserted_id = $this->Mesaexamen->id;
				$this->redirect(array('action' => 'view', $inserted_id));
			} else {
				$this->Session->setFlash('La mesa no fue grabada. Intentelo nuevamente.', 'default', array('class' => 'alert alert-danger'));
			}
		}
		$alumnos = $this->Mesaexamen->Alumno->find('list', array('fields'=>array('id', 'nombre_completo_alumno')));
		$ciclos = $this->Mesaexamen->Ciclo->find('list');
		$titulacions = $this->Mesaexamen->Titulacion->find('list');
		$materias = $this->Mesaexamen->Materia->find('list');
		$this->set(compact('alumnos', 'ciclos', 'titulacions', 'materias'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash('Mesa no valida', 'default', array('class' => 'alert alert-warning'));
			//$this->redirect(array('action' => 'index'));
			$inserted_id = $this->Mesaexamen->id;
			$this->redirect(array('action' => 'view', $inserted_id));
		}
		if (!empty($this->data)) {
		  //abort if cancel button was pressed  
          if(isset($this->params['data']['cancel'])){
                $this->Session->setFlash('Los cambios no fueron guardados. Edición cancelada.', 'default', array('class' => 'alert alert-warning'));
                $this->redirect( array( 'action' => 'index' ));
		  }
		  if ($this->Mesaexamen->save($this->data)) {
				$this->Session->setFlash('La mesa ha sido grabada', 'default', array('class' => 'alert alert-success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('La mesa no fue grabada. Intentelo nuevamente.', 'default', array('class' => 'alert alert-danger'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Mesaexamen->read(null, $id);
		}
		$alumnos = $this->Mesaexamen->Alumno->find('list', array('fields'=>array('id', 'nombre_completo_alumno')));
		$ciclos = $this->Mesaexamen->Ciclo->find('list');
		$titulacions = $this->Mesaexamen->Titulacion->find('list');
		$materias = $this->Mesaexamen->Materia->find('list');
		$this->set(compact('alumnos', 'ciclos', 'titulacions', 'materias'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash('Id no valido para mesa', 'default', array('class' => 'alert alert-warning'));
			$this->redirect(array('action' => 'index'));
		}
		if ($this->Inasistencia->delete($id)) {
			$this->Session->setFlash('La mesa ha sido borrada', 'default', array('class' => 'alert alert-success'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash('La mesa no fue borrado', 'default', array('class' => 'alert alert-danger'));
		$this->redirect(array('action' => 'index'));
	}
}
