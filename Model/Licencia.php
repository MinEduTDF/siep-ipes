<?php
class Licencia extends AppModel {
	var $name = 'Licencia';
	var $displayField = 'articulo';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Docente' => array(
			'className' => 'Docente',
			'foreignKey' => 'docente_id',
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
		),
		'Cargo' => array(
			'className' => 'Cargo',
			'foreignKey' => 'cargo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	//Validaciones
                   var $validate = array(
                   'articulo' => array(
                           'minLength' => array(
                           'rule' => array('minLength', 4), 
                           'allowEmpty' => false,       
                           'message' => 'Indicar nombre del articulo.'
                           )
                   ),
                   'descripcion' => array(
                           'minLength' => array(
                           'rule' => array('minLength', 4), 
                           'allowEmpty' => true,       
                           'message' => 'Indicar una breve descripcion del articulo.'
                           )
                   ),
                   'fechaDesde' => array(
                           'date' => array(
                           'rule' => 'date',
                           'allowEmpty' => false,
                           'message' => 'Indicar fecha de inicio del articulo.'
                           )
                   ),
                   'fechaHasta' => array(
                           'date' => array(
                           'rule' => 'date',
                           'allowEmpty' => true,
                           'message' => 'Indicar fecha de finalizacion del articulo.'
                           )
                   ),
                   'observacion' => array(
                           'minLength' => array(
                           'rule' => array('minLength', 4), 
                           'allowEmpty' => true,       
                           'message' => 'Indicar una breve observacion.'
                           )
                   )
        );
}
?>