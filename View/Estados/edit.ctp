<div class="estados form">
<?php echo $this->Form->create('Estado');?>
	<fieldset>
 		<legend><?php echo __('Editar Estado'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
	?>
	</fieldset>
<?php  echo $this->Form->input('id', array('type' => 'hidden'));
       echo $this->Form->end(__('Grabar'));
?>
</div>
<div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Borrar Estado'), array('action' => 'delete', $this->Form->value('Estado.id')), null, sprintf(__('Are you sure you want to delete # %s?'), $this->Form->value('Estado.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Estados'), array('action' => 'index'));?></li>
		<!--<li><?php echo $this->Html->link(__('Listar Cargos'), array('controller' => 'cargos', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Cargo'), array('controller' => 'cargos', 'action' => 'add')); ?> </li>-->
	</ul>
</div>