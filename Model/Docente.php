<?php
class Docente extends AppModel {
	
	var $name = 'Docente';
    //var $displayField = 'apellido';
	public $virtualFields = array('nombre_completo_docente'=> 'CONCAT(Docente.primerNombre, " ", Docente.apellido)');
	
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'Licencia' => array(
			'className' => 'Licencia',
			'foreignKey' => 'docente_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Titulo' => array(
			'className' => 'Titulo',
			'foreignKey' => 'docente_id',
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

    var $hasAndBelongsToMany = array(
		'Cargo' => array(
			'className' => 'Cargo',
			'joinTable' => 'cargos_docentes',
			'foreignKey' => 'docente_id',
			'associationForeignKey' => 'cargo_id',
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
	);

    //Validaciones

        var $validate = array(
                   'primerNombre' => array(
                           'minLength' => array(
                           'rule' => array('minLength',3),
                           'allowEmpty' => false,
                           'message' => 'El Nombre no es valido. Indicar uno igual o mayor a tres letras.'
                           )
                   ),
                   'apellido' => array(
                           'minLength' => array(
                           'rule' => array('minLength',3),
                           'allowEmpty' => false,
                           'message' => 'El Apellido no es valido. Indicar uno igual o mayor a tres letras.'
                           )
                   ),
                   'dni' => array(
                           'numeric' => array(
                           'rule' => 'numeric',
                           'allowEmpty' => false,
                           'message' => 'El DNI no es valido. Indicar numero sin puntos.'
                           ),
						   'isUnique' => array(
	                       'rule' => 'isUnique',
	                       'message' => 'Este DNI de docente esta siendo usado.'
	                     )
                   ),
                   'direccion' => array(
                           'minLength' => array(
                           'rule' => array('minLength',5),                          
                           'allowEmpty' => false,
                           'message' => 'La direccion no es valida. Indicar una que contenga numeros y letras.'
                           )
                   ),
                   'telefono' => array(
                           'minLength' => array(
                           'rule' => array('minLength',6),
                           'allowEmpty' => false,
                           'message' => 'El telefono no es valido. Indicar uno de referencia solo con numeros y sin espacios.'
                           )
                   ),
                                       
                   'mail' => array(
                           'email' => array(
                           'rule' => 'email',
                           'allowEmpty' => true,
                           'message' => 'El email no es valido. Indicar email valido.'
                           )
                   ),
                   'ciudad' => array(
                           'minLength' => array(
                           'rule' => array('minLength',5),                          
                           'allowEmpty' => false,
                           'message' => 'La ciudad no es valida. Indicar una de las opciones.'
                           )
                   )
        );
   
}
?>