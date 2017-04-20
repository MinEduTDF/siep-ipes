<?php
class Inscripcion extends AppModel {
	var $name = 'Inscripcion';
	var $displayField = 'legajo_nro';
	
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
		'Centro' => array(
			'className' => 'Centro',
			'foreignKey' => 'centro_id',
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
			'joinTable' => 'cursos_inscripcions',
			'foreignKey' => 'inscripcion_id',
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
			'joinTable' => 'inscripcions_materias',
			'foreignKey' => 'inscripcion_id',
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
				   'empleado_id' => array(
                           'required' => array(
						   'rule' => 'notBlank',
                           'required' => 'create',
						   'message' => 'Indicar un agente.'
                           )
                   ),
				   'ciclo_id' => array(
                           'required' => array(
						   'rule' => 'notBlank',
                           'required' => 'create',
						   'message' => 'Indicar un ciclo.'
                           )
                   ),
				   'centro_id' => array(
                           'required' => array(
						   'rule' => 'notBlank',
                           'required' => 'create',
						   'message' => 'Indicar un centro.'
                           )
                   ),
				   'alumno_id' => array(
                           'required' => array(
						   'rule' => 'notBlank',
                           'required' => 'create',
						   'message' => 'Indicar un alumno.'
                           )
                   ),
				   'legajo_nro' => array(
                           'required' => array(
						   'rule' => 'notBlank',
                           'required' => 'create',
						   'message' => 'Indicar un nº de legajo.'
                           ),
						   'isUnique' => array(
	                       'rule' => 'isUnique',
	                       'message' => 'Este nº de legajo de alumno esta siendo usado.'
	                     )
                   ),
				   
				   'tipo_alta' => array(
                           'required' => array(
						   'rule' => 'notBlank',
                           'required' => 'create',
						   'message' => 'Indicar un tipo de alta.'
                           )
                   ),
                   'fecha_alta' => array(
                           'required' => array(
						   'rule' => 'notBlank',
                           'required' => 'create',
						   'message' => 'Indicar una fecha de alta.'
                           ),
						   'date' => array(
                           'rule' => 'date',
                           'message' => 'Indicar fecha valida.'
                           )
                   ),
				   'cursa' => array(
                           'required' => array(
						   'rule' => 'notBlank',
                           'required' => 'create',
						   'message' => 'Indicar una opción.'
                           )
                   ),
				   'fines' => array(
                           'required' => array(
						   'rule' => 'notBlank',
                           'required' => 'create',
						   'message' => 'Indicar una opción.'
                           )
                   ),
				   'fecha_baja' => array(
                           'date' => array(
                           'rule' => 'date',
                           'allowEmpty' => true,
                           'message' => 'Indicar una fecha válida.'
                           )
                   ),
				   'tipo_baja' => array(
                           'minLength' => array(
                           'rule' => array('minLength', 3), 
                           'allowEmpty' => true,       
                           'message' => 'Indicar una opción.'
                           )
                   ),
				   'motivo_baja' => array(
                           'minLength' => array(
                           'rule' => array('minLength', 3), 
                           'allowEmpty' => true,       
                           'message' => 'Indicar una opción.'
                           )
                   ),
				   'fecha_egreso' => array(
                           'date' => array(
                           'rule' => 'date',
                           'allowEmpty' => true,
                           'message' => 'Indicar una fecha válida.'
                           )
                   ),
				   'acta_nro' => array(
                           'naturalNumber' => array(
                           'rule' => array('naturalNumber', true),
                           'allowEmpty' => true,
						   'message' => 'indicar un nº de acta.'
                           )
                   ),
				   'libro_nro' => array(
                           'naturalNumber' => array(
                           'rule' => array('naturalNumber', true),
                           'allowEmpty' => true,
						   'message' => 'indicar un nº de libro.'
                           )
                   ),
				   'folio_nro' => array(
                           'naturalNumber' => array(
                           'rule' => array('naturalNumber', true),
                           'allowEmpty' => true,
						   'message' => 'indicar un nº de folio.'
                           )
                   ),
				   'fecha_emision_titulo' => array(
                           'date' => array(
                           'rule' => 'date',
                           'allowEmpty' => true,
                           'message' => 'Indicar una fecha válida.'
                           )
                   ),
				   'recursante' => array(
                           'boolean' => array(
                           'rule' => array('boolean'),
					       'message' => 'Indicar una opción'
				           )
                   ),
				   'condicion_aprobacion' => array(
                           'minLength' => array(
                           'rule' => array('minLength', 3), 
                           'allowEmpty' => true,       
                           'message' => 'Indicar una opción.'
                           )
                   ),
				   'fecha_nota' => array(
                           'date' => array(
                           'rule' => 'date',
                           'allowEmpty' => true,
                           'message' => 'Indicar una fecha válida.'
                           )
                   ),
                   'fotocopia_dni' => array(
                           'boolean' => array(
                           'rule' => array('boolean'),
					       'message' => 'Indicar una opción'
				           )
                   ),
				   'certificado_septimo' => array(
                           'boolean' => array(
                           'rule' => array('boolean'),
					       'message' => 'Indicar una opción'
				           )
                   ),
				   'certificado_laboral' => array(
                           'boolean' => array(
                           'rule' => array('boolean'),
					       'message' => 'Indicar una opción'
				           )
                   )
         );              
}
?>