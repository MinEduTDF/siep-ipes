<?php
class MateriasController extends AppController {

	var $name = 'Materias';
    var $helpers = array('Form', 'Time', 'Js');
	var $components = array('Session', 'RequestHandler');
	public $paginate = array('Materia' => array('limit' => 6, 'order' => 'Materia.alia DESC'));

    public function beforeFilter() {
        parent::beforeFilter();
        //Si el usuario tiene un rol de superadmin le damos acceso a todo.
        //Si no es así (se trata de un usuario "admin o usuario") tendrá acceso sólo a las acciones que les correspondan.
        if(($this->Auth->user('role') === 'superadmin')  || ($this->Auth->user('role') === 'admin')) {
	        $this->Auth->allow();
	    } elseif ($this->Auth->user('role') === 'usuario') { 
	        $this->Auth->allow('index', 'view');
	    } 
    }

    public function sanitize($string, $force_lowercase = true, $anal = false) {
    $strip = array("~", "`", "!", "@", "#", "$", "%", "^", "&", "*", "(", ")", "_", "=", "+", "[", "{", "]","}", "\\", "|", ";", ":", "\"", "'", "&#8216;", "&#8217;", "&#8220;", "&#8221;", "&#8211;", "&#8212;","â€", "â€", ",", "<",">", "/", "?");
    $clean = trim(str_replace($strip, "", strip_tags($string)));
    $clean = preg_replace('/\s+/', "-", $clean);
    $clean = ($anal) ? preg_replace("/[^a-zA-Z0-9]/", "", $clean) : $clean ;
    return ($force_lowercase) ?
        (function_exists('mb_strtolower')) ?
            mb_strtolower($clean, 'UTF-8') :
            strtolower($clean) :
        $clean;
    }

	public function index() {
		$this->Materia->recursive = 1;
		$this->paginate['Materia']['limit'] = 6;
		$this->paginate['Materia']['order'] = $this->Materia->Curso->find('list', array('fields'=>array('id', 'nombre_completo_curso'), 'order'=>'Curso.anio ASC'));
		$userCentroId = $this->getUserCentroId();
		$centrosId = $this->Materia->Curso->find('list', array('fields'=>array('centro_id')));
        if($this->Auth->user('role') === 'admin') {
		$this->paginate['Materia']['conditions'] = array($centrosId => $userCentroId);
		}
		
        $this->loadModel('Centro');
        
        $centros = $this->Centro->find('list', array('fields'=>array('sigla'), 'conditions' => array('id' => $centrosId)));
        $cursosId = $this->Materia->find('list', array('fields'=>array('curso_id')));
        $cursos = $this->Materia->Curso->find('list', array('fields'=>array('nombre_completo_curso'), 'conditions' => array('id' => $cursosId)));

		$this->redirectToNamed();
		$conditions = array();
		
		if(!empty($this->params['named']['centro_id']))
		{
			$conditions['Curso.centro_id ='] = $this->params['named']['centro_id'];
		}
		if(!empty($this->params['named']['curso_id']))
		{
			$conditions['Materia.curso_id ='] = $this->params['named']['curso_id'];
		}
		if(!empty($this->params['named']['alia']))
		{
			$conditions['Materia.alia ='] = $this->params['named']['alia'];
		}
		
		$materias = $this->paginate('Materia', $conditions);
		$this->set(compact('materias', 'cursos', 'centros'));
	}

	public function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Materia no valida.'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('materia', $this->Materia->read(null, $id));

		//Genera nombres en los datos relacionados.
		$horarioCicloId = $this->Materia->Horario->find('list', array('fields'=>array('ciclo_id')));
		$this->loadModel('Ciclo');
		$cicloNombre = $this->Ciclo->find('list', array('fields'=>array('nombre'), 'conditions'=>array('id'=>$horarioCicloId)));
		$horarioMateriaId = $this->Materia->Horario->find('list', array('fields'=>array('materia_id')));
		$this->loadModel('Materia');
		$materiaAlia = $this->Materia->find('list', array('fields'=>array('alia'), 'conditions'=>array('id'=>$horarioMateriaId)));
		$inscripcionAlumnoId = $this->Materia->Inscripcion->find('list', array('fields'=>array('alumno_id')));
		$this->loadModel('Alumno');
		$alumnoNombre = $this->Alumno->find('list', array('fields'=>array('nombre_completo_alumno'), 'conditions'=>array('id'=>$inscripcionAlumnoId)));
		$this->set(compact('cicloNombre', 'materiaAlia', 'alumnoNombre'));
	}

	
	public function add() {
        //abort if cancel button was pressed  
        if(isset($this->params['data']['cancel'])){
                $this->Session->setFlash('Los cambios no fueron guardados. Agregación cancelada.', 'default', array('class' => 'alert alert-warning'));
                $this->redirect( array( 'action' => 'index' ));
		}
        if ($this->request->is('post')) {
            $this->Materia->create();
            if(empty($this->data['Materia']['contenido']['name'])){
               unset($this->request->data['Materia']['contenido']);
            }
	        if(!empty($this->data['Materia']['contenido']['name'])){
			   $file=$this->data['Materia']['contenido'];
			   $file['name']=$this->sanitize($file['name']);
			   $this->request->data['Materia']['contenido'] = time().$file['name'];
			   if($this->Materia->save($this->request->data)) {
				  move_uploaded_file($file['tmp_name'], APP . 'webroot/files/materias/' .DS. time().$file['name']);  
				  $this->Session->setFlash(__('Los Contenidos se guardaron.'));
				  //return $this->redirect(array('action' => 'index'));
				  $inserted_id = $this->Materia->id;
				  $this->redirect(array('action' => 'view', $inserted_id));
		       }
	        }
           $this->Session->setFlash(__('Los Contenidos no se guardaron.'));
        }
        $cursos = $this->Materia->Curso->find('list', array('fields'=>array('id','nombre_completo_curso')));
        $this->set(compact('cursos'));
    }
	
	public function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash('Materia no valida.', 'default', array('class' => 'alert alert-warning'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
		  //abort if cancel button was pressed  
          if(isset($this->params['data']['cancel'])){
                $this->Session->setFlash('Los cambios no fueron guardados. Edición cancelada.', 'default', array('class' => 'alert alert-warning'));
                $this->redirect( array( 'action' => 'index' ));
		  }
		  if ($this->Materia->save($this->data)) {
				$this->Session->setFlash('La materia ha sido grabada.', 'default', array('class' => 'alert alert-success'));
				//$this->redirect(array('action' => 'index'));
				$inserted_id = $this->Materia->id;
				$this->redirect(array('action' => 'view', $inserted_id));
			} else {
				$this->Session->setFlash('La materia no ha sido grabada. Intentelo nuevamente.', 'default', array('class' => 'alert alert-danger'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Materia->read(null, $id);
		}
		$cursos = $this->Materia->Curso->find('list', array('fields'=>array('id','nombre_completo_curso')));
		$this->set(compact('cursos', 'alumnos'));
	}
   

	public function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash('Id no valido para materia.', 'default', array('class' => 'alert alert-warning'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Materia->delete($id)) {
			$this->Session->setFlash('La materia ha sido borrada.', 'default', array('class' => 'alert alert-success'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash('Materia no fue borrada.', 'default', array('class' => 'alert alert-danger'));
		$this->redirect(array('action' => 'index'));
	}
}
?>