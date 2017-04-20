<div class="horarios form">
<?php echo $this->Form->create('Horario');?>
	<fieldset>
 		<legend><?php echo __('Editar Horario'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('fechaCreacion');
		echo $this->Form->input('dia');
		echo $this->Form->input('horaInicio');
		echo $this->Form->input('horaFin');
		echo $this->Form->input('Cargo');
	?>
	</fieldset>
<?php  echo $this->Form->input('id', array('type' => 'hidden'));
       echo $this->Form->end(__('Grabar'));
?>
</div>
<div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Borrar'), array('action' => 'delete', $this->Form->value('Horario.id')), null, sprintf(__('Are you sure you want to delete # %s?'), $this->Form->value('Horario.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Horarios'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Listar Cargos'), array('controller' => 'cargos', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Cargo'), array('controller' => 'cargos', 'action' => 'add')); ?> </li>-->
	</ul>
</div>