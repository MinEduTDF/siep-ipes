<?php
class Horario extends AppModel {
	var $name = 'Horario';
	var $displayField = 'dia';
	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
	     'Materia' => array(
			'className' => 'Materia',
			'foreignKey' => 'materia_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		) 	
	);
	
	//Validaciones
                    var $validate = array(
                    'dia' => array(
                           'minLength' => array(
                           'rule' => array('minLength', 5), 
                           'allowEmpty' => true,       
                           'message' => 'Indicar una opcion.'
                           )
                   ),
                   
       );

}
?>