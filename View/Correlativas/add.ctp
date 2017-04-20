<div class="correlativas form">
<?php echo $this->Form->create('Correlativa'); ?>
	<fieldset>
		<legend><?php echo __('Add Correlativa'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
		echo $this->Form->input('alia');
		echo $this->Form->input('tipo');
		echo $this->Form->input('Materia');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Correlativas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Materias'), array('controller' => 'materias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Materia'), array('controller' => 'materias', 'action' => 'add')); ?> </li>
	</ul>
</div>
