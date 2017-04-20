<?php
App::uses('AppModel', 'Model');

class Alumno extends AppModel {
	
	var $name = 'Alumno';
    //var $displayField = 'apellido';
	public $virtualFields = array('nombre_completo_alumno'=> 'CONCAT(Alumno.apellidos, " ", Alumno.nombres)');
    /*
	public $actsAs = array(
			'Upload.Upload' => array(
				'foto' => array(
					'fields' => array(
						'dir' => 'foto_dir'
					),
					'thumbnailMethod' => 'php',
					'thumbnailSizes' => array(
						'vga' => '640x480',
						'thumb' => '150x150'
					),
					'deleteOnUpdate' => true,
					'deleteFolderOnDelete' => true
				)
			)
		);
	*/
	var $hasMany = array(
		'Familiar' => array(
			'className' => 'Familiar',
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
		),
		'Integracion' => array(
			'className' => 'Integracion',
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
		),
		'Servicio' => array(
			'className' => 'Servicio',
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
		),
		'Inscripcion' => array(
			'className' => 'Inscripcion',
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
		),
		'Inasistencia' => array(
			'className' => 'Inasistencia',
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
		),
		'Nota' => array(
			'className' => 'Nota',
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
   
   /**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	var $hasAndBelongsToMany = array(
		'Mesaexamen' => array(
			'className' => 'Mesaexamen',
			'joinTable' => 'alumnos_mesaexamens',
			'foreignKey' => 'mesaexamen_id',
			'associationForeignKey' => 'alumno_id',
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
                   'created' => array(
                           'required' => array(
						   'rule' => 'notBlank',
                           'required' => 'create',
						   'message' => 'Indicar una fecha y hora.'
                           )
                   ),
				   'nombres' => array(
                           'required' => array(
						   'rule' => 'notBlank',
                           'required' => 'create',
						   'message' => 'Indicar los nombres.'
                           )
                   ),
                   'apellidos' => array(
                           'required' => array(
						   'rule' => 'notBlank',
                           'required' => 'create',
						   'message' => 'Indicar los apellidos.'
                           )
                   ),
				   'sexo' => array(
                           'required' => array(
						   'rule' => 'notBlank',
                           'required' => 'create',
						   'message' => 'Indicar sexo.'
                           )
                   ),
				   'documento_tipo' => array(
                           'required' => array(
						   'rule' => 'notBlank',
                           'required' => 'create',
						   'message' => 'Indicar un tipo de documento.'
                           )
                   ),
                   'documento_nro' => array(
                           'required' => array(
						   'rule' => 'notBlank',
                           'required' => 'create',
						   'message' => 'Indicar un nº de documento.'
                           ),
						   'numeric' => array(
                           'rule' => 'numeric',
                           'allowEmpty' => false,
                           'message' => 'Indicar número sin puntos ni espacios.'
                           ),
						   'isUnique' => array(
	                       'rule' => 'isUnique',
	                       'message' => 'Este documento de alumno esta siendo usado.'
	                     )
                   ),
                   'fecha_nac' => array(
                           'required' => array(
						   'rule' => 'notBlank',
                           'required' => 'create',
                           'message' => 'Indicar una fecha de nacimiento.'
                           ),
						   'date' => array(
						   'rule' => array('date'),
						   //'message' => 'Your custom message here',
						   //'allowEmpty' => false,
						   //'required' => false,
						   //'last' => false, // Stop validation after this rule
						   //'on' => 'create', // Limit validation to 'create' or 'update' operations
						)
                   ),
				   'edad' => array(
					      'numeric' => array(
						  'rule' => array('numeric'),
						  //'message' => 'Your custom message here',
						  'allowEmpty' => true,
						  //'required' => false,
						  //'last' => false, // Stop validation after this rule
						  //'on' => 'create', // Limit validation to 'create' or 'update' operations
					  )
				  ),
				   'pcia_nac' => array(
                           'required' => array(
						   'rule' => 'notBlank',
                           'required' => 'create',
                           'message' => 'Indicar una provincia.'
                           )
                   ),
				   'nacionalidad' => array(
                           'required' => array(
						   'rule' => 'notBlank',
                           'required' => 'create',
                           'message' => 'Indicar una nacionalidad.'
                           )
                   ),
				   'indigena' => array(
                           
                   ),
				  /*
				  'estado_civil' => array(
                           'required' => array(
						   'rule' => 'notBlank',
                           'required' => 'create',
                           'message' => 'Indicar un estado civil.'
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
				   'horario_de_trabajo' => array(
                           'required' => array(
						   'rule' => 'notBlank',
                           'required' => 'create',
                           'message' => 'Indicar un horario de trabajo.'
                           )
                   ),
				   */
				   'telefono_nro' => array(
                           'required' => array(
						   'rule' => 'notBlank',
                           'required' => 'create',
                           'message' => 'Indicar un nº de teléfono.'
                           )
                   ),
                   /*
                   'email' => array(
                           'required' => array(
						   'rule' => 'notBlank',
                           'required' => 'create',
                           'message' => 'Indicar un correo electrónico.'
                           )
                   ),
                   */
                   'calle_nombre' => array(
                           'required' => array(
						   'rule' => 'notBlank',
                           'required' => 'create',
                           'message' => 'Indicar un nombre de calle.'
                           )
                   ),
				   'calle_nro' => array(
                           'required' => array(
						   'rule' => 'notBlank',
                           'required' => 'create',
                           'message' => 'Indicar un nº de calle.'
                           )
					),
					'ciudad' => array(
                           'required' => array(
						   'rule' => 'notBlank',
                           'required' => 'create',
                           'message' => 'Indicar una ciudad.'
						   )
                   ),
				   /*
				   'pendiente' => array(
                           'boolean' => array(
                           'rule' => array('boolean'),
					       'message' => 'Indicar una opción'
				           )
                   ),
                   */
 		   		   /*
 		   		   'foto' => array(
					  'uploadError' => array(
						  'rule' => 'uploadError',
						  'message' => 'Algo anda mal, intente nuevamente',
						  'on' => 'create'
					  ),
					  'isUnderPhpSizeLimit' => array(
						  'rule' => 'isUnderPhpSizeLimit',
						  'message' => 'Archivo excede el límite de tamaño de archivo de subida'
					  ),
					  'isValidMimeType' => array(
						  'rule' => array('isValidMimeType', array('image/jpeg', 'image/png'), false),
						  'message' => 'La imagen no es jpg ni png',
					  ),
					  'isBelowMaxSize' => array(
						  'rule' => array('isBelowMaxSize', 1048576),
						  'message' => 'El tamaño de imagen es demasiado grande'
					  ),
					  'isValidExtension' => array(
						  'rule' => array('isValidExtension', array('jpg', 'png'), false),
						  'message' => 'La imagen no tiene la extension jpg o png'
					  ),
					  'checkUniqueName' => array(
						  'rule' => array('checkUniqueName'),
						  'message' => 'La imagen ya se encuentra registrada',
						  'on' => 'update'
					  ),		
			)
			*/
        );
		
	//Funciones privadas.
	
	function addAsterisco($id){
	   $this->id = $id;
	   $this->saveField('pendientes', 1);
	}
}
?>
