<?php
class Familiar extends AppModel {
	
	var $name = 'Familiar';
    //var $displayField = 'apellido';
	//public $virtualFields = array('nombre_completo_familiar'=> 'CONCAT(Familiar.primerNombre, " ", Familiar.apellido)');
	
	//The Associations below have been created with all possible keys, those that are not needed can be removed
    
    var $belongsTo = array(
		'Alumno' => array(
			'className' => 'Alumno',
			'foreignKey' => 'alumno_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
		/*'Persona' => array(
			'className' => 'Persona',
			'foreignKey' => 'persona_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
		*/
	);
	
   
  //Validaciones

        var $validate = array(
                   'vinculo' => array(
                           'minLength' => array(
                           'rule' => array('minLength',5),                          
                           'allowEmpty' => false,
                           'message' => 'Indicar una de las opciones de la lista.'
                           )
                   ),
				   'nombre_completo' => array(
                           'required' => array(
						   'rule' => 'notBlank',
                           'required' => 'create',
						   'message' => 'Indicar un nombre.'
                           )
					),
				   'cuit_cuil' => array(
                          'required' => array(
						   'rule' => 'notBlank',
                           'required' => 'create',
						   'message' => 'Indicar un CUIT/CUIL.'
                           ),
                           'maxlength' => array(
                           'rule' => array('maxLength',11),
                           'allowEmpty' => false,
                           'message' => 'Indicar sin puntos ni espacios.'
                           ),
						   'isUnique' => array(
	                       'rule' => 'isUnique',
	                       'message' => 'Este CUIT/CUIL esta siendo usado.'
	                     )
                   ),
				   'ocupacion' => array(
                           'required' => array(
						   'rule' => 'notBlank',
                           'required' => 'create',
						   'message' => 'Indicar una ocupación.'
                           )
                   ),
				   'lugar_de_trabajo' => array(
                           'required' => array(
						   'rule' => 'notBlank',
                           'required' => 'create',
						   'message' => 'Indicar un lugar de trabajo.'
                           )
                   ),
				   'nacionalidad' => array(
                           'required' => array(
						   'rule' => 'notBlank',
                           'required' => 'create',
						   'message' => 'Indicar una nacionalidad.'
                           )
                   ),
				   'telefono_nro' => array(
                           'required' => array(
						   'rule' => 'notBlank',
                           'required' => 'create',
						   'message' => 'Indicar un nº de teléfono.'
                           )
                   ),
                   'email' => array(
                           'required' => array(
						   'rule' => 'notBlank',
                           'required' => 'create',
						   'message' => 'Indicar un email.'
                           ),
						   'email' => array(
                           'rule' => 'email',
                           'allowEmpty' => true,
                           'message' => 'Indicar un email válido.'
                           ),
                   ),
                   'domicilio' => array(
                           'required' => array(
						   'rule' => 'notBlank',
                           'required' => 'create',
						   'message' => 'Indicar un domicilio.'
                           ),
						   'alphaNumeric' => array(
						   'rule' => 'alphaNumeric',
						   'message' => 'Sólo se permiten letras y números.',
						   'last' => false
						   )
                   ),
				   'asentamiento' => array(
                           'required' => array(
						   'rule' => 'notBlank',
                           'required' => 'create',
						   'message' => 'Indicar un asentamiento.'
                           )
                   ),	   
				   'barrio' => array(
                           'required' => array(
						   'rule' => 'notBlank',
                           'required' => 'create',
						   'message' => 'Indicar un barrio.'
                           )
                   ),	   
                   'ciudad' => array(
                           'required' => array(
						   'rule' => 'notBlank',
                           'required' => 'create',
						   'message' => 'Indicar una ciudad.'
                           )
                   )                   
        );
}
?>
