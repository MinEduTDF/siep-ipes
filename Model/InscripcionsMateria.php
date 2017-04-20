<?php
App::uses('AppModel', 'Model');
/**
 * CursosInscripcion Model
 *
 * @property Inscripcion $Inscripcion
 * @property Materia $Materia
 */
class InscripcionsMateria extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	var $name = 'InscripcionsMateria';
	public $virtualFields = array('alumnoMateria'=> 'CONCAT(InscripcionsMateria.inscripcion_id, " ", InscripcionsMateria.materia_id)');	


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Inscripcion' => array(
			'className' => 'Inscripcion',
			'foreignKey' => 'inscripcion_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Materia' => array(
			'className' => 'Materia',
			'foreignKey' => 'materia_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
	);
}
