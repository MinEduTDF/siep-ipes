<?php
class Inasistencia extends AppModel {
	
	var $name = 'Inasistencia';
    var $displayField = 'tipo';
		
	//The Associations below have been created with all possible keys, those that are not needed can be removed
    
    var $belongsTo = array(
		'Alumno' => array(
			'className' => 'Alumno',
			'foreignKey' => 'alumno_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Ciclo' => array(
			'className' => 'Ciclo',
			'foreignKey' => 'ciclo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Empleado' => array(
			'className' => 'Empleado',
			'foreignKey' => 'empleado_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	var $hasAndBelongsToMany = array(
		'Curso' => array(
			'className' => 'Curso',
			'joinTable' => 'cursos_inasistencias',
			'foreignKey' => 'inasistencia_id',
			'associationForeignKey' => 'curso_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'Materia' => array(
			'className' => 'Materia',
			'joinTable' => 'inasistencias_materias',
			'foreignKey' => 'inasistencia_id',
			'associationForeignKey' => 'materia_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);
	
   
  //Validaciones

        var $validate = array(
                   'created' => array(
                           'required' => array(
						   'rule' => 'notBlank',
                           'required' => 'create',
						   'message' => 'Indicar una fecha y hora.'
                           )
                   ),
				   'ciclo_id' => array(
                           'required' => array(
						   'rule' => 'notBlank',
                           'required' => 'create',
                           'message' => 'Indicar un ciclo.'
                           )
                   ),
				   'Curso' => array(
                           'required' => array(
						   'rule' => 'notBlank',
                           'required' => 'create',
                           'message' => 'Indicar un curso.'
                           )
                   ),
				   'alumno_id' => array(
                           'required' => array(
						   'rule' => 'notBlank',
                           'required' => 'create',
                           'message' => 'Indicar un alumno.'
                           )
                   ),
				   'Materia' => array(
                           'required' => array(
						   'rule' => 'notBlank',
                           'required' => 'create',
                           'message' => 'Indicar una materia.'
                           )
                   ),
				   'tipo' => array(
                           'required' => array(
						   'rule' => 'notBlank',
                           'required' => 'create',
                           'message' => 'Indicar una de las opciones.'
                           )
                   ),
				   'justificado' => array(
                           'required' => array(
						   'rule' => 'notBlank',
                           'required' => 'create',
                           'message' => 'Indicar una de las opciones.'
                           )
                   ),
                   'causa' => array(
                           'required' => array(
						   'rule' => 'notBlank',
                           'required' => 'create',
                           'message' => 'En caso de que se haya justificado, indicar la causa.'
                           )
                   ),
                   'rule1' => array(
				           'rule'    => array(
				           'extension',array('pdf')),
				           'message' => 'Please upload pdf file only'
				   ),
                   'rule2' => array(
                           'rule' => array('fileSize', '<=', '1MB'),
                           'message' => 'File must be less than 1MB'
                   )
		);
}
?>
