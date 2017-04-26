<?php
App::uses('AppController', 'Controller');

class InscripcionsMateriasController extends AppController {

	var $name = 'InscripcionsMaterias';
    var $helpers = array('Session', 'Form', 'Time', 'Js');
    var $components = array('Auth','Session', 'RequestHandler');
   	var $paginate = array('InscripcionsMateria' => array('limit' => 2, 'order' => 'InscripcionsMateria.materia_id ASC'));

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->InscripcionsMateria->recursive = 1;
		$this->paginate['InscripcionsMateria']['limit'] = 8;
		$this->paginate['InscripcionsMateria']['order'] = array('InscripcionsMateria.materia_id' => 'ASC');
		
		$cicloIdActual = $this->getLastCicloId();
		$estado2 = array("COMPLETA", "PENDIENTE");
		if($this->Auth->user('role') === 'admin') {
			$userCentroId = $this->getUserCentroId();
			$this->paginate['InscripcionsMateria']['conditions'] = array('Inscripcion.ciclo_id' => $cicloIdActual, 'Inscripcion.estado' => $estado2, 'Inscripcion.centro_id' => $userCentroId);
		} else {
			$this->paginate['InscripcionsMateria']['conditions'] = array('Inscripcion.ciclo_id' => $cicloIdActual, 'Inscripcion.estado' => $estado2);		
		}

		$this->loadModel('Ciclo');
		$this->loadModel('Centro');
		$this->loadModel('Alumno');
		$ciclosId = $this->InscripcionsMateria->Inscripcion->find('list', array('fields'=>array('ciclo_id')));
        $ciclos = $this->Ciclo->find('list', array('fields'=>array('nombre'), 'conditions' => array('id' => $ciclosId)));
        // Carga el combobox de los cursos según la institución correspondiente.
        if($this->Auth->user('role') === 'admin') {
          $materias = $this->InscripcionsMateria->Materia->find('list', array('fields'=>array('id', 'alia')));    
        } else {
          $materias = $this->InscripcionsMateria->Materia->find('list', array('fields'=>array('id', 'alia')));  
        }	
        $centrosId = $this->InscripcionsMateria->Materia->Inscripcion->find('list', array('fields'=>array('centro_id')));
        $centros = $this->Centro->find('list', array('fields'=>array('sigla'), 'conditions' => array('id' => $centrosId)));
        $ciclos = $this->Ciclo->find('list', array('fields'=>array('nombre'), 'conditions' => array('id' => $ciclosId)));
		$inscripcions = $this->InscripcionsMateria->Inscripcion->find('list', array('fields'=>array('id', 'legajo_nro')));
        $alumnosId = $this->InscripcionsMateria->Inscripcion->find('list', array('fields'=>array('alumno_id')));
        $alumnos = $this->Alumno->find('list', array('fields'=>array('nombre_completo_alumno'), 'conditions' => array('id' => $alumnosId)));
  
  		$this->redirectToNamed();
		
		$conditions = array();
		
		if(!empty($this->params['named']['centro_id']))
		{
			$conditions['Inscripcion.centro_id ='] = $this->params['named']['centro_id'];
		}
		if(!empty($this->params['named']['materia_id']))
		{
			$conditions['InscripcionsMateria.materia_id ='] = $this->params['named']['materia_id'];
		}
		if(!empty($this->params['named']['inscripcion_id']))
		{
			$conditions['InscripcionsMateria.inscripcion_id ='] = $this->params['named']['inscripcion_id'];
		}
		$InscripcionsMateria = $this->paginate('InscripcionsMateria', $conditions);
		$this->set(compact('InscripcionsMateria', 'cicloActual', 'materias', 'inscripcions', 'ciclos', 'alumnos', 'centros'));
   }
}
