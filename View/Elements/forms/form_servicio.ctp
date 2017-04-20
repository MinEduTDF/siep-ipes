
<!-- *********** DatePicker ************* -->
<?php echo $this->Html->script('datepicker'); ?>
<!-- ************************************** -->

  <div class="row">
  <div class="col-md-6 col-sm-6 col-xs-12">
   
<?php 
        echo $this->Form->input('creado', array('type' => 'text', 'between' => '<br>', 'empty' => '','class' => 'datepicker form-control'));
		echo $this->Form->input('alumno_id', array('label'=>'Alumno', 'between' => '<br>', 'class' => 'form-control'));
		echo $this->Form->input('ciclo_id', array('label'=>'Ciclo', 'between' => '<br>', 'class' => 'form-control'));
		$tipos_servicio = array('Gabinete' => 'Gabinete', 'Domiciliaria' => 'Domiciliaria', 'Hospitalaria' => 'Hospitalaria', 'Comedor' => 'Comedor', 'Beca' => 'Beca');
        echo $this->Form->input('tipo_servicio', array('options' => $tipos_servicio, 'empty' => '', 'between' => '<br>', 'class' => 'form-control'));
		$estados = array('Activo' => 'Activo', 'Desactivo' => 'Desactivo', 'Pendiente' => 'Pendiente');
        echo $this->Form->input('estado', array('options' => $estados, 'empty' => '','between' => '<br>', 'class' => 'form-control'));
		echo $this->Form->input('prestador', array('label'=>'Prestador', 'between' => '<br>', 'class' => 'form-control'));
	
		echo $this->Form->input('docente_profesional_acargo', array('label'=>'Docente Profesional a Cargo', 'between' => '<br>', 'class' => 'form-control'));

echo '</div><div class="col-md-6 col-sm-6 col-xs-12">';

		echo $this->Form->input('tipo_alta', array('label'=>'Tipo de Alta', 'between' => '<br>', 'class' => 'form-control'));
		echo $this->Form->input('fecha_alta', array('type' => 'text', 'between' => '<br>', 'empty' => '','class' => 'datepicker form-control'));
		echo $this->Form->input('fecha_baja', array('type' => 'text', 'between' => '<br>', 'empty' => '','class' => 'datepicker form-control', 'empty' => ''));
		$tipos_baja = array('Fin de ciclo' => 'Fin de ciclo', 'Abandono' => 'Abandono', 'Cambio de Institución' => 'Cambio de Institución');
        echo $this->Form->input('tipo_baja', array('options' => $tipos_baja, 'empty' => '','between' => '<br>', 'class' => 'form-control'));
        echo $this->Form->input('total_dias_asistencia', array('empty' => '','between' => '<br>', 'class' => 'form-control'));
        echo $this->Form->input('total_dias_inasistencia', array('empty' => '','between' => '<br>', 'class' => 'form-control'));
		echo $this->Form->input('observaciones', array('label'=>'Descripción', 'between' => '<br>', 'class' => 'form-control'));
        echo $this->Form->input('informe', array('type' => 'file', 'label' => 'Informe relacionado', 'id' => 'informe', 'class' => 'file', 'data-show-upload' => 'false', 'data-show-caption' => 'true'));
        echo $this->Form->input('informe_dir', array('type' => 'hidden'));
	
?>

</div></div>