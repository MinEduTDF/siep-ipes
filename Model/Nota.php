<?php
class Nota extends AppModel {
	var $name = 'Nota';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Alumno' => array(
			'className' => 'Alumno',
			'foreignKey' => 'alumno_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Materia' => array(
			'className' => 'Materia',
			'foreignKey' => 'materia_id',
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
                   'created' => array(
                         'required' => array(
						 'rule' => 'notBlank',
                         'required' => 'create',
						 'message' => 'Indicar una fecha y hora.'
                         )
                   ),
				   'alumno_id' => array(
                         'required' => array(
						 'rule' => 'notBlank',
                         'required' => 'create',
                         'message' => 'Indicar un alumno.'
                         )
                   ),
				   'ciclo_id' => array(
                         'required' => array(
						 'rule' => 'notBlank',
                         'required' => 'create',
                         'message' => 'Indicar un ciclo.'
                         )
                   ),
				   'materia_id' => array(
                         'required' => array(
					     'rule' => 'notBlank',
                         'required' => 'create',
                         'message' => 'Indicar una materia.'
                         )
                   ),
				   'evaluacion_tipo_nota_uno_primer_periodo' => array(
                         'required' => array(
						 'rule' => 'notBlank',
                         'required' => 'create',
                         'message' => 'Indicar un tipo de calificación.'
                         )
                   ),
				   'nota_uno_primer_periodo' => array(
                         'required' => array(
						 'rule' => 'notBlank',
                         'required' => 'create',
                         'message' => 'Indicar una calificación.'
                         ),
						 'range' => array(
						 'rule'    => array('range', -1, 11),
						 'allowEmpty' => false,
						 'message' => 'Indicar un nº entre 0 y 10.'
						 ),
						 'numeric' => array(
						 'rule' => array('decimal', 2), 
						 'allowEmpty' => false,       
						 'message' => 'Indicar un nº con dos decimales.'
						 )
						 /*
						 'maxlength' => array(
						 'rule' => array('maxlength',2), 
						 'allowEmpty' => false,       
						 'message' => 'Indicar una letra.'
						 )*/
				   ),
				   'nota_dos_primer_periodo' => array(
                         'range' => array(
                         'rule'    => array('range', -1, 11),
                         'allowEmpty' => true,
						 'message' => 'Indicar un nº entre 0 y 10.'
                         ),
						 'numeric' => array(
                         'rule' => array('decimal', 2), 
                         'allowEmpty' => true,       
                         'message' => 'Indicar un nº con dos decimales.'
                         )
   				         /*'maxlength' => array(
						 'rule' => array('maxlength',2), 
                         'allowEmpty' => true,       
                         'message' => 'La calificación no es válida. Indicar nota máximo con dos caracteres.'
                         )*/
                   ),
				   'nota_tres_primer_periodo' => array(
                         'range' => array(
                         'rule'    => array('range', -1, 11),
                         'allowEmpty' => true,
						 'message' => 'Indicar un nº entre 0 y 10.'
                         ),
						 'numeric' => array(
                         'rule' => array('decimal', 2), 
                         'allowEmpty' => true,       
                         'message' => 'Indicar un nº con dos decimales.'
                         )
   				         /*'maxlength' => array(
						 'rule' => array('maxlength',2), 
                         'allowEmpty' => true,       
                         'message' => 'La calificación no es válida. Indicar nota máximo con dos caracteres.'
                         )*/
                   ),
				   'promedio_primer_periodo' => array(
						 'range' => array(
						 'rule'    => array('range', -1, 11),
						 'allowEmpty' => true,
						 'message' => 'Indicar un nº entre 0 y 10.'
						 ),
						 'numeric' => array(
						 'rule' => 'numeric', 
						 'allowEmpty' => true,       
						 'message' => 'Indicar un nº sin signos ni decimales.'
						 )
                   ),
                   'desarrollo_personalSocial_primer_periodo' => array(
						 'maxlength' => array(
						 'rule' => array('maxlength',2), 
						 'allowEmpty' => true,       
						 'message' => 'Indicar una letra.'
						 )
                   ),
				   'nota_uno_segundo_periodo' => array(
						 'range' => array(
						 'rule'    => array('range', -1, 11),
						 'allowEmpty' => true,
						 'message' => 'Indicar un nº entre 0 y 10.'
						 ),
						 'numeric' => array(
						 'rule' => array('decimal',2), 
						 'allowEmpty' => true,       
						 'message' => 'Indicar un nº con dos decimales.'
						 )
						 /*'maxlength' => array(
						 'rule' => array('maxlength',2), 
						 'allowEmpty' => true,       
						 'message' => 'Indicar una letra.'
						 )*/
				   ),
				   'nota_dos_segundo_periodo' => array(
						 'range' => array(
						 'rule'    => array('range', -1, 11),
						 'allowEmpty' => true,
						 'message' => 'Indicar un nº entre 0 y 10.'
						 ),
						 'numeric' => array(
						 'rule' => array('decimal',2), 
						 'allowEmpty' => true,       
						 'message' => 'Indicar un nº con dos decimales.'
						 )
						 /*'maxlength' => array(
						 'rule' => array('maxlength',2), 
						 'allowEmpty' => true,       
						 'message' => 'Indicar una letra.'
						)*/
                   ),
				   'nota_tres_segundo_periodo' => array(
						 'range' => array(
						 'rule'    => array('range', -1, 11),
						 'allowEmpty' => true,
						 'message' => 'Indicar un nº entre 0 y 10.'
						 ),
						 'numeric' => array(
						 'rule' => array('decimal',2), 
						 'allowEmpty' => true,       
						 'message' => 'Indicar un nº con dos decimales.'
						 )
						 /*'maxlength' => array(
						 'rule' => array('maxlength',2), 
						 'allowEmpty' => true,       
						 'message' => 'Indicar una letra.'
						 )*/
                   ),
				   'promedio_segundo_periodo' => array(
						 'range' => array(
						 'rule'    => array('range', -1, 11),
						 'allowEmpty' => true,
						 'message' => 'Indicar un nº entre 0 y 10.'
						 ),
						 'numeric' => array(
						 'rule' => 'numeric', 
						 'allowEmpty' => true,       
						 'message' => 'Indicar un nº sin signos ni decimales.'
						 )
                   ),
				   'desarrollo_personalSocial_segundo_periodo' => array(
						 'maxlength' => array(
						 'rule' => array('maxlength',2), 
						 'allowEmpty' => true,       
						 'message' => 'Indicar una letra.'
						 )
                   ),
				   'nota_uno_tercer_periodo' => array(
						 'range' => array(
						 'rule'    => array('range', -1, 11),
						 'allowEmpty' => true,
						 'message' => 'Indicar un nº entre 0 y 10.'
						 ),
						 'numeric' => array(
						 'rule' => array('decimal',2), 
						 'allowEmpty' => true,       
						 'message' => 'Indicar un nº con dos decimales.'
						 )
						 /*'maxlength' => array(
						 'rule' => array('maxlength',2), 
						 'allowEmpty' => true,       
						 'message' => 'Indicar una letra.'
						 )*/
				   ),
				   'nota_dos_tercer_periodo' => array(
						 'range' => array(
						 'rule'    => array('range', -1, 11),
						 'allowEmpty' => true,
						 'message' => 'Indicar un nº entre 0 y 10.'
						 ),
						 'numeric' => array(
						 'rule' => array('decimal',2), 
						 'allowEmpty' => true,       
						 'message' => 'Indicar un nº con dos decimales.'
						 )
						 /*'maxlength' => array(
						 'rule' => array('maxlength',2), 
						 'allowEmpty' => true,       
						 'message' => 'La calificación no es válida. Indicar nota máximo con dos caracteres.'
						 )*/
                   ),
				   'nota_tres_tercer_periodo' => array(
						 'range' => array(
						 'rule'    => array('range', -1, 11),
						 'allowEmpty' => true,
						 'message' => 'Indicar un nº entre 0 y 10.'
						 ),
						 'numeric' => array(
						 'rule' => array('decimal',2), 
						 'allowEmpty' => true,       
						 'message' => 'Indicar un nº con dos decimales.'
						 )
						 /*'maxlength' => array(
						 'rule' => array('maxlength',2), 
						 'allowEmpty' => true,       
						 'message' => 'Indicar una letra.'
						 )*/
                   ),
				   'promedio_tercer_periodo' => array(
						 'range' => array(
						 'rule'    => array('range', -1, 11),
						 'allowEmpty' => true,
						 'message' => 'Indicar un nº entre 0 y 10.'
						 ),
						 'numeric' => array(
						 'rule' => 'numeric', 
						 'allowEmpty' => true,       
						 'message' => 'Indicar un nº sin signos ni decimales.'
						 )
                   ),
				   'desarrollo_personalSocial_tercer_periodo' => array(
						 'maxlength' => array(
						 'rule' => array('maxlength',2), 
						 'allowEmpty' => true,       
						 'message' => 'Indicar una nota.'
						 )
                   ),
				   'promedio_a_termino' => array(
						 'range' => array(
						 'rule'    => array('range', -1, 11),
						 'allowEmpty' => true,
						 'message' => 'Indicar un nº entre 0 y 10.'
						 ),
						 'numeric' => array(
						 'rule' => array('decimal',2), 
						 'allowEmpty' => true,       
						 'message' => 'Indicar un nº con dos decimales.'
						 )
                   ),
				   'nota_en_diciembre' => array(
						 'range' => array(
						 'rule'    => array('range', -1, 11),
						 'allowEmpty' => true,
						 'message' => 'Indicar un nº entre 0 y 10.'
						 ),
						 'numeric' => array(
						 'rule' => array('decimal',2), 
						 'allowEmpty' => true,       
						 'message' => 'Indicar un nº con dos decimales.'
						 )
                   ),
				   'nota_en_marzo' => array(
						 'range' => array(
						 'rule'    => array('range', -1, 11),
						 'allowEmpty' => true,
						 'message' => 'Indicar un nº entre 0 y 10.'
						 ),
						 'numeric' => array(
						 'rule' => array('decimal',2), 
						 'allowEmpty' => true,       
						 'message' => 'Indicar un nº con dos decimales.'
						 )
                   ),
				   'promedio_final' => array(
						 'range' => array(
						 'rule'    => array('range', -1, 11),
						 'allowEmpty' => true,
						 'message' => 'Indicar un nº entre 0 y 10.'
						 ),
						 'numeric' => array(
						 'rule' => array('decimal',2), 
						 'allowEmpty' => true,       
						 'message' => 'Indicar un nº con dos decimales.'
						 )
                   ),
                   'estado' => array(
                         'required' => array(
					     'rule' => 'notBlank',
                         'required' => 'create',
                         'message' => 'Indicar un estado.'
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
		 
		 /**
		 * Ajusta el promedio de las notas del primer cuatrimestre.
		 */
		 function promedioPrimerCuat()
		 {
            
			   $promedio1 = ('Nota.notaPrimeraCuatPrimero'+'Nota.notaSegundaCuatPrimero')/2;
			   $this->updateAll(array('promCuatPrimero='=> $promedio1),
			                    array('Nota.notaPrimeraCuatPrimero!='=> 0,'Nota.notaSegundaCuatPrimero!='=> 0)); 
			   $this->create();				
		 }
}
?>