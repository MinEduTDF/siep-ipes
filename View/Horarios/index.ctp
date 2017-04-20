<div class="horarios index">
	<h2><?php echo __('Horarios');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<!--<th><?php echo $this->Paginator->sort('id');?></th>-->
			<th><?php echo $this->Paginator->sort('fechaCreacion');?></th>
			<th><?php echo $this->Paginator->sort('dia');?></th>
			<th><?php echo $this->Paginator->sort('horaInicio');?></th>
			<th><?php echo $this->Paginator->sort('horaFin');?></th>
			<th class="actions"><?php echo __('Opciones');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($horarios as $horario):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<!--<td><?php echo $horario['Horario']['id']; ?>&nbsp;</td>-->
		<td><?php echo $this->Html->formatTime($horario['Horario']['fechaCreacion']); ?>&nbsp;</td>
		<td><?php echo $horario['Horario']['dia']; ?>&nbsp;</td>
		<td><?php echo $horario['Horario']['horaInicio']; ?>&nbsp;</td>
		<td><?php echo $horario['Horario']['horaFin']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $horario['Horario']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $horario['Horario']['id'])); ?>
			<!--<?php echo $this->Html->link(__('Borrar'), array('action' => 'delete', $horario['Horario']['id']), null, sprintf(__('Are you sure you want to delete # %s?'), $horario['Horario']['id'])); ?>-->
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%')
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('anterior'), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('siguiente') . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Nuevo Horario'), array('action' => 'add')); ?></li>
		<!--<li><?php echo $this->Html->link(__('Listar Cargos'), array('controller' => 'cargos', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Cargo'), array('controller' => 'cargos', 'action' => 'add')); ?> </li>-->
	</ul>
</div>