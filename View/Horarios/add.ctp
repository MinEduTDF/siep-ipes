<div class="horarios form">
<?php echo $this->Form->create('Horario');?>
	<fieldset>
 		<legend><?php echo __('Agregar Horario'); ?></legend>
	<?php
		echo $this->Form->input('ciclo_id', array('label' => 'Ciclo'));
		echo $this->Form->input('fechaCreacion', array('type' => 'date', 'dateFormat' => 'DMY'));
		//echo $this->Form->input('dia');
		$dias = array('Lunes' => 'Lunes', 'Martes' => 'Martes', 'Miércoles' => 'Miércoles',
		              'Jueves' => 'Jueves', 'Viernes' => 'Viernes', 'Sábado' => 'Sábado');
        echo $this->Form->input('dia', array('options' => $dias, 'empty' => ''));
		//echo $this->Form->input('horaInicio');
		echo $this->Form->input('horaInicio', array('type' => 'time', 'timeFormat' => 24));
		//echo $this->Form->input('horaFin');
		echo $this->Form->input('horaFin', array('type' => 'time', 'timeFormat' => 24));
		echo $this->Form->input('Materia');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Grabar'));?>
</div>
<div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar Horarios'), array('action' => 'index'));?></li>
		<!--<li><?php echo $this->Html->link(__('Listar Cargos'), array('controller' => 'cargos', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Cargo'), array('controller' => 'cargos', 'action' => 'add')); ?> </li>-->
	</ul>
</div>