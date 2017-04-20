<?php
class Correlativa extends AppModel {
	var $name = 'Correlativa';
    var $displayField = 'alia';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasAndBelongsToMany = array(
		'Materia' => array(
			'className' => 'Materia',
			'joinTable' => 'correlativas_materias',
			'foreignKey' => 'correlativa_id',
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
                   'nombre' => array(
                           'required' => array(
						   'rule' => 'notBlank',
						   'required' => 'create',
                           'message' => 'Indicar un nombre.'
                           )
				    ),
                   'alia' => array(
                           'required' => array(
						   'rule' => 'notBlank',
						   'required' => 'create',
                           'message' => 'Indicar un alia.'
                           ),
						   'isUnique' => array(
	                       'rule' => 'isUnique',
	                       'message' => 'Este alias de materia esta siendo usado.'
	                     )
                   ),
                   'tipo' => array(
                           'required' => array(
						   'rule' => 'notBlank',
						   'required' => 'create',
                           'message' => 'Indicar un tipo.'
                           )
				    ),
            );
}
?>
