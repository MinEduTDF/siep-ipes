<div class="correlativas view">
<h2><?php echo __('Correlativa'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($correlativa['Correlativa']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($correlativa['Correlativa']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Alia'); ?></dt>
		<dd>
			<?php echo h($correlativa['Correlativa']['alia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo'); ?></dt>
		<dd>
			<?php echo h($correlativa['Correlativa']['tipo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Correlativa'), array('action' => 'edit', $correlativa['Correlativa']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Correlativa'), array('action' => 'delete', $correlativa['Correlativa']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $correlativa['Correlativa']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Correlativas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Correlativa'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Materias'), array('controller' => 'materias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Materia'), array('controller' => 'materias', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Materias'); ?></h3>
	<?php if (!empty($correlativa['Materia'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Campo Formacion'); ?></th>
		<th><?php echo __('Formato'); ?></th>
		<th><?php echo __('Dictado'); ?></th>
		<th><?php echo __('Obligatoriedad'); ?></th>
		<th><?php echo __('Carga Horaria En'); ?></th>
		<th><?php echo __('Carga Horaria Semanal'); ?></th>
		<th><?php echo __('Duracion En'); ?></th>
		<th><?php echo __('Duracion'); ?></th>
		<th><?php echo __('Escala Numerica'); ?></th>
		<th><?php echo __('Nota Minima'); ?></th>
		<th><?php echo __('Alia'); ?></th>
		<th><?php echo __('Contenido'); ?></th>
		<th><?php echo __('Curso Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($correlativa['Materia'] as $materia): ?>
		<tr>
			<td><?php echo $materia['id']; ?></td>
			<td><?php echo $materia['nombre']; ?></td>
			<td><?php echo $materia['campo_formacion']; ?></td>
			<td><?php echo $materia['formato']; ?></td>
			<td><?php echo $materia['dictado']; ?></td>
			<td><?php echo $materia['obligatoriedad']; ?></td>
			<td><?php echo $materia['carga_horaria_en']; ?></td>
			<td><?php echo $materia['carga_horaria_semanal']; ?></td>
			<td><?php echo $materia['duracion_en']; ?></td>
			<td><?php echo $materia['duracion']; ?></td>
			<td><?php echo $materia['escala_numerica']; ?></td>
			<td><?php echo $materia['nota_minima']; ?></td>
			<td><?php echo $materia['alia']; ?></td>
			<td><?php echo $materia['contenido']; ?></td>
			<td><?php echo $materia['curso_id']; ?></td>
			<td><?php echo $materia['created']; ?></td>
			<td><?php echo $materia['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'materias', 'action' => 'view', $materia['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'materias', 'action' => 'edit', $materia['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'materias', 'action' => 'delete', $materia['id']), array('confirm' => __('Are you sure you want to delete # %s?', $materia['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Materia'), array('controller' => 'materias', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
