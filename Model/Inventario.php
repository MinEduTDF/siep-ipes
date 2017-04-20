<?php
class Inventario extends AppModel {
	var $name = 'Inventario';
    var $displayField = 'nombre';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Empleado' => array(
			'className' => 'Empleado',
			'foreignKey' => 'empleado_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'Producto' => array(
			'className' => 'Producto',
			'foreignKey' => 'inventario_id',
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
                           'rule' => array('minLength', 3), 
                           'allowEmpty' => false,       
                           'message' => 'El nombre no es valido. Indicar una de las opciones.'
                           ),
						   'isUnique' => array(
	                       'rule' => 'isUnique',
	                       'message' => 'Este nombre de inventario esta siendo usado.'
	                     )
                   ),
                   'fechaCreacion' => array(
                           'date' => array(
                           'rule' => 'date',
                           'allowEmpty' => false,
                           'message' => 'Indicar fecha valida de creacion del inventario.'
                           )
                   ),
				   'fechaModificacion' => array(
                           'date' => array(
                           'rule' => 'date',
                           'allowEmpty' => false,
                           'message' => 'Indicar fecha valida de modificacion del inventario.'
                           )
                   ),
                   'observacion' => array(
                           'minLength' => array(
                           'rule' => array('minLength', 4), 
                           'allowEmpty' => true,       
                           'message' => 'Indicar una breve observacion del inventario.'
                           )
                   )                  
 
         );   
}
?>