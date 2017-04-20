<div class="estados index">
	<h2><?php echo __('Estados');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('nombre');?></th>
			<th class="actions"><?php echo __('Opciones');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($estados as $estado):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $estado['Estado']['id']; ?>&nbsp;</td>
		<td><?php echo $estado['Estado']['nombre']; ?>&nbsp;</td>
	    <td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $estado['Estado']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $estado['Estado']['id'])); ?>
			<!--<?php echo $this->Html->link(__('Borrar'), array('action' => 'delete', $estado['Estado']['id']), null, sprintf(__('Esta seguro de borrar el estado %s?'), $estado['Estado']['id'])); ?>-->
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
		<li><?php echo $this->Html->link(__('Nuevo Estado'), array('action' => 'add')); ?></li>
	</ul>
</div>