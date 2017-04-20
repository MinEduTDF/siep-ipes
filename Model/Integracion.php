<?php
class Integracion extends AppModel {
	var $name = 'Integracion';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Centro' => array(
			'className' => 'Centro',
			'foreignKey' => 'centro_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
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
		)
	);	

	//Validaciones
                var $validate = array(
                   'docente_nombre_completo' => array(
                           'minLength' => array(
                           'rule' => array('minLength', 3), 
                           'allowEmpty' => false,       
                           'message' => 'Indicar nombres y apellidos.'
                           )
                   ),
				   'fecha_inicio' => array(
                           'date' => array(
                           'rule' => 'date', 
                           'allowEmpty' => false,       
                           'message' => 'Indicar la fecha de inicio de la integración.'
                           )
                   )
         );              
}
?>