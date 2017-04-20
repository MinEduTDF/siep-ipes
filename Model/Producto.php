<?php
class Producto extends AppModel {
	var $name = 'Producto';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Inventario' => array(
			'className' => 'Inventario',
			'foreignKey' => 'inventario_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

    //Validaciones
                   var $validate = array(  
                   'nombre' => array(
                           'minLength' => array(
                           'rule' => array('minLength',5),
                           'allowEmpty' => false,
                           'message' => 'Indicar nombre del producto.'
                           )  
                   ),
                   'marca' => array(
                           'minLength' => array(
                           'rule' => array('minLength', 2), 
                           'allowEmpty' => false,       
                           'message' => 'Indicar marca del producto con mayusculas (Ejemplo: PAPERMATE).'
                           )
                   ),
                   'cantidad' => array(
                           'numeric' => array(
                           'rule' => 'numeric',
                           'allowEmpty' => false,
                           'message' => 'Indicar solo cantidad del producto con nùmeros (Ejemplo: 4).'
                           )
                   ),
                   'proovedor' => array(
                           'minLength' => array(
                           'rule' => array('minLength', 3), 
                           'allowEmpty' => false,       
                           'message' => 'Indicar nombre del proovedor con mayusculas (Ejemplo: LIBRERIA RAYUELA).'
                           )
                   ),
                   'ubicacion' => array(
                           'minLength' => array(
                           'rule' => array('minLength', 5), 
                           'allowEmpty' => false,       
                           'message' => 'Indicar una opcion.'
                           )
                   ),
                   'areaDestino' => array(
                           'minLength' => array(
                           'rule' => array('minLength', 5), 
                           'allowEmpty' => false,       
                           'message' => 'Indicar una opcion.'
                           )
                   ),
                   'observacion' => array(
                           'minLength' => array(
                           'rule' => array('minLength', 4), 
                           'allowEmpty' => true,       
                           'message' => 'Indicar una breve observacion sobre el producto ingresado.'
                           )
                   )
        );
}
?>