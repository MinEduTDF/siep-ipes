<div class="correlativas form">
<?php echo $this->Form->create('Correlativa'); ?>
	<fieldset>
		<legend><?php echo __('Edit Correlativa'); ?></legend>
	<?php
		echo $this->Form->input('id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Correlativa.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Correlativa.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Correlativas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Materias'), array('controller' => 'materias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Materia'), array('controller' => 'materias', 'action' => 'add')); ?> </li>
	</ul>
</div>
