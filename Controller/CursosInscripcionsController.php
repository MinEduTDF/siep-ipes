<?php
App::uses('AppController', 'Controller');

class CursosInscripcionsController extends AppController {

	var $name = 'CursosInscripcions';
    var $helpers = array('Session', 'Form', 'Time', 'Js');
    var $components = array('Auth','Session', 'RequestHandler');
   	var $paginate = array('CursosInscripcion' => array('limit' => 2, 'order' => 'CursosInscripcion.curso_id ASC'));

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CursosInscripcion->recursive = 1;
		$this->paginate['CursosInscripcion']['limit'] = 8;
		$this->paginate['CursosInscripcion']['order'] = array('CursosInscripcion.curso_id' => 'ASC');
		
		$cicloIdActual = $this->getLastCicloId();
		$estado2 = array("COMPLETA", "PENDIENTE");
		if($this->Auth->user('role') === 'admin') {
			$userCentroId = $this->getUserCentroId();
			$this->paginate['CursosInscripcion']['conditions'] = array('Inscripcion.ciclo_id' => $cicloIdActual, 'Inscripcion.estado' => $estado2, 'Inscripcion.centro_id' => $userCentroId);
		} else {
			$this->paginate['CursosInscripcion']['conditions'] = array('Inscripcion.ciclo_id' => $cicloIdActual, 'Inscripcion.estado' => $estado2);		
		}

		$this->loadModel('Ciclo');
		$this->loadModel('Centro');
		$this->loadModel('Alumno');
		$ciclosId = $this->CursosInscripcion->Inscripcion->find('list', array('fields'=>array('ciclo_id')));
        $ciclos = $this->Ciclo->find('list', array('fields'=>array('nombre'), 'conditions' => array('id' => $ciclosId)));
        // Carga el combobox de los cursos según la institución correspondiente.
        if($this->Auth->user('role') === 'admin') {
          $cursos = $this->CursosInscripcion->Curso->find('list', array('fields'=>array('id', 'nombre_completo_curso'), 'conditions' => array('centro_id' => $userCentroId)));    
        } else {
          $cursos = $this->CursosInscripcion->Curso->find('list', array('fields'=>array('id', 'nombre_completo_curso')));  
        }	
        $centrosId = $this->CursosInscripcion->Inscripcion->find('list', array('fields'=>array('centro_id')));
        $centros = $this->Centro->find('list', array('fields'=>array('sigla'), 'conditions' => array('id' => $centrosId)));
        $ciclos = $this->Ciclo->find('list', array('fields'=>array('nombre'), 'conditions' => array('id' => $ciclosId)));
		$inscripcions = $this->CursosInscripcion->Inscripcion->find('list', array('fields'=>array('id', 'legajo_nro')));
        $alumnosId = $this->CursosInscripcion->Inscripcion->find('list', array('fields'=>array('alumno_id')));
        $alumnos = $this->Alumno->find('list', array('fields'=>array('nombre_completo_alumno'), 'conditions' => array('id' => $alumnosId)));
  
  		$this->redirectToNamed();
		
		$conditions = array();
		
		if(!empty($this->params['named']['centro_id']))
		{
			$conditions['Inscripcion.centro_id ='] = $this->params['named']['centro_id'];
		}
		if(!empty($this->params['named']['curso_id']))
		{
			$conditions['CursosInscripcion.curso_id ='] = $this->params['named']['curso_id'];
		}
		if(!empty($this->params['named']['inscripcion_id']))
		{
			$conditions['CursosInscripcion.inscripcion_id ='] = $this->params['named']['inscripcion_id'];
		}
		$cursosInscripcions = $this->paginate('CursosInscripcion', $conditions);
		$this->set(compact('cursosInscripcions', 'cicloActual', 'cursos', 'inscripcions', 'ciclos', 'alumnos', 'centros', 'materias'));
   }
}
