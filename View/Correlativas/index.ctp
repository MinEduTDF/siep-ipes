<div class="correlativas index">
	<h2><?php echo __('Correlativas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('alia'); ?></th>
			<th><?php echo $this->Paginator->sort('tipo'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($correlativas as $correlativa): ?>
	<tr>
		<td><?php echo h($correlativa['Correlativa']['id']); ?>&nbsp;</td>
		<td><?php echo h($correlativa['Correlativa']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($correlativa['Correlativa']['alia']); ?>&nbsp;</td>
		<td><?php echo h($correlativa['Correlativa']['tipo']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $correlativa['Correlativa']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $correlativa['Correlativa']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $correlativa['Correlativa']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $correlativa['Correlativa']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Correlativa'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Materias'), array('controller' => 'materias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Materia'), array('controller' => 'materias', 'action' => 'add')); ?> </li>
	</ul>
</div>
