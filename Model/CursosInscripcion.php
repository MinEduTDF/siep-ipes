<?php
App::uses('AppModel', 'Model');
/**
 * CursosInscripcion Model
 *
 * @property Curso $Curso
 * @property Inscripcion $Inscripcion
 */
class CursosInscripcion extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	var $name = 'CursosInscripcion';
	public $virtualFields = array('matricula'=> 'CONCAT(CursosInscripcion.curso_id, " ", CursosInscripcion.inscripcion_id)');	


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Curso' => array(
			'className' => 'Curso',
			'foreignKey' => 'curso_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Inscripcion' => array(
			'className' => 'Inscripcion',
			'foreignKey' => 'inscripcion_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
