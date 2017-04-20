<?php /*
class Persona extends AppModel {
	
	var $name = 'Persona';
    //var $displayField = 'apellido';
	public $virtualFields = array('nombre_completo_persona'=> 'CONCAT(Persona.nombres, " ", Persona.apellidos)');
	
	//The Associations below have been created with all possible keys, those that are not needed can be removed

    var $hasMany = array(
		'Familiares' => array(
			'className' => 'Familiares',
			'foreignKey' => 'alumno_id',
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
                   'nombres' => array(
                           'minLength' => array(
                           'rule' => array('minLength',3),
                           'allowEmpty' => false,
                           'message' => 'El Nombre no es valido. Indicar uno igual o mayor a tres letras.'
                           )
                   ),
                   'apellidos' => array(
                           'minLength' => array(
                           'rule' => array('minLength',3),
                           'allowEmpty' => false,
                           'message' => 'El Apellido no es valido. Indicar uno igual o mayor a tres letras.'
                           )
                   ),
				   'dni_tipo' => array(
                           'minLength' => array(
                           'rule' => array('minLength',5),                          
                           'allowEmpty' => false,
                           'message' => 'El tipo de dni no es valida. Indicar una de las opciones.'
                           )
                   ),
                   'dni_nro' => array(
                           'numeric' => array(
                           'rule' => 'numeric',
                           'allowEmpty' => false,
                           'message' => 'El DNI no es valido. Indicar DNI sin puntos.'
                           ),
						   'isUnique' => array(
	                       'rule' => 'isUnique',
	                       'message' => 'Este DNI de alumno esta siendo usado.'
	                     )
                   ),
				   'ocupacion' => array(
                           'minLength' => array(
                           'rule' => array('minLength',5),                          
                           'allowEmpty' => false,
                           'message' => 'La ocupacion no es valida. Indicar una de las opciones.'
                           )
                   ),
				   'lugar_nac' => array(
                           'minLength' => array(
                           'rule' => array('minLength',5),                          
                           'allowEmpty' => false,
                           'message' => 'El lugar no es valida.'
                           )
                   ),
				   'nacionalidad' => array(
                           'minLength' => array(
                           'rule' => array('minLength',5),                          
                           'allowEmpty' => false,
                           'message' => 'La nacionalidad no es valida. Indicar una de las opciones.'
                           )
                   ),
				   'telefono_nro' => array(
                           'minLength' => array(
                           'rule' => array('minLength',6),
                           'allowEmpty' => false,
                           'message' => 'El telefono no es valido. Indicar uno de referencia solo con numeros y sin espacios.'
                           )
                   ),
                   'email' => array(
                           'email' => array(
                           'rule' => 'email',
                           'allowEmpty' => true,
                           'message' => 'El email no es valido. Indicar email valido.'
                           )
                   ),
                   'calle_nombre' => array(
                           'minLength' => array(
                           'rule' => array('minLength',5),                          
                           'allowEmpty' => false,
                           'message' => 'La direccion no es valida.'
                           )
                   ),
				   'calle_nro' => array(
                           'numeric' => array(
                           'rule' => 'numeric',
                           'allowEmpty' => false,
                           'message' => 'El numero no es valido.'
                           )
					),
					'barrio' => array(
                           'minLength' => array(
                           'rule' => array('minLength',5),                          
                           'allowEmpty' => false,
                           'message' => 'El nombre del barrio no es valida.'
                           )
                   ),	   
                   'ciudad' => array(
                           'minLength' => array(
                           'rule' => array('minLength',5),                          
                           'allowEmpty' => false,
                           'message' => 'La ciudad no es valida. Indicar una de las opciones.'
                           )
                   ),
                         
        );

}
*/?>