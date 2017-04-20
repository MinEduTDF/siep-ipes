<?php
		//echo $this->Form->input('nombre');
		$nombres = array('Librería_3' => 'Librería_3', 'Informática_3' => 'Informática_3', 'Limpieza_3' => 'Limpieza_3',
                  	   'Herramientas_3' => 'Herramientas_3', 'Amoblamientos_3' => 'Amoblamientos_3',
					     'Librería_15' => 'Librería_15', 'Informática_15' => 'Informática_15', 'Limpieza_15' => 'Limpieza_15',
                  	   'Herramientas_15' => 'Herramientas_15', 'Amoblamientos_15' => 'Amoblamientos_15',
					     'Librería_302' => 'Librería_302', 'Informática_302' => 'Informática_302', 'Limpieza_302' => 'Limpieza_302',
                  	   'Herramientas_302' => 'Herramientas_302', 'Amoblamientos_302' => 'Amoblamientos_302',
					     'Librería_364' => 'Librería_364', 'Informática_364' => 'Informática_364', 'Limpieza_364' => 'Limpieza_364',
                  	   'Herramientas_364' => 'Herramientas_364', 'Amoblamientos_364' => 'Amoblamientos_364');
        echo $this->Form->input('nombre', array('options' => $nombres, 'empty' => ''));
		echo $this->Form->input('fechaCreacion', array('type' => 'date', 'dateFormat' => 'DMY'));
		echo $this->Form->input('fechaModificacion', array('type' => 'date', 'dateFormat' => 'DMY'));
		echo $this->Form->input('observacion');
		echo $this->Form->input('empleado_id');
?>