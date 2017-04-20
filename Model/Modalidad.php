<?php
class Modalidad extends AppModel {
	var $name = 'Modalidad';
        var $displayField = 'nombre';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Centro' => array(
			'className' => 'Centro',
			'foreignKey' => 'centro_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'Curso' => array(
			'className' => 'Curso',
			'foreignKey' => 'modalidad_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

	//Validaciones
                   var $validate = array(
                   'nombre' => array(
                           'minLength' => array(
                           'rule' => array('minLength', 5), 
                           'allowEmpty' => false,       
                           'message' => 'Indicar una opcion.'
                           ),
						   'isUnique' => array(
	                       'rule' => 'isUnique',
	                       'message' => 'Este nombre de modalidad esta siendo usado.'
	                     )
                   ),
                   'descripcion' => array(
                           'minLength' => array(
                           'rule' => array('minLength', 4), 
                           'allowEmpty' => true,       
                           'message' => 'Indicar una breve descripcion del cargo.'
                           )
                   )
        );

}
?>