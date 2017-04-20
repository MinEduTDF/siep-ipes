<div class="horarios view">
<h2><?php echo __('Horario');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $horario['Horario']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('FechaCreacion'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $horario['Horario']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Dia'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $horario['Horario']['dia']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('HoraInicio'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $horario['Horario']['horaInicio']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('HoraFin'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $horario['Horario']['horaFin']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Horario'), array('action' => 'edit', $horario['Horario']['id'])); ?> </li>
		<!--<li><?php echo $this->Html->link(__('Borrar Horario'), array('action' => 'delete', $horario['Horario']['id']), null, sprintf(__('Are you sure you want to delete # %s?'), $horario['Horario']['id'])); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Horarios'), array('action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Horario'), array('action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Cargos'), array('controller' => 'cargos', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Cargo'), array('controller' => 'cargos', 'action' => 'add')); ?> </li>-->
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Cargos Relacionados');?></h3>
	<?php if (!empty($horario['Cargo'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<!--<th><?php echo __('Id'); ?></th>-->
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Tipo'); ?></th>
		<th><?php echo __('ResolucionNro'); ?></th>
		<th><?php echo __('HsCatedra'); ?></th>
		<!--<th><?php echo __('HsReloj'); ?></th>-->
		<th><?php echo __('Area'); ?></th>
		<th><?php echo __('Puesto'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<th><?php echo __('Creacion'); ?></th>
		<th><?php echo __('Cierre'); ?></th>
		<th><?php echo __('Alta'); ?></th>
		<th><?php echo __('Baja'); ?></th>
		<th><?php echo __('Cambio de Situacion'); ?></th>
		<th><?php echo __('Estado'); ?></th>
		<th><?php echo __('Centro Id'); ?></th>
		<th><?php echo __('Curso Id'); ?></th>
		<th><?php echo __('Materia Id'); ?></th>
		<th class="actions"><?php echo __('Opciones');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($horario['Cargo'] as $cargo):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<!--<td><?php echo $cargo['id'];?></td>-->
			<td><?php echo $cargo['nombre'];?></td>
			<td><?php echo $cargo['tipo'];?></td>
			<td><?php echo $cargo['resolucionNro'];?></td>
			<td><?php echo $cargo['hsCatedra'];?></td>
			<!--<td><?php echo $cargo['hsReloj'];?></td>-->
			<td><?php echo $cargo['area'];?></td>
			<td><?php echo $cargo['puesto'];?></td>
			<td><?php echo $cargo['descricpion'];?></td>
			<td><?php echo $cargo['fechaCreacion'];?></td>
			<td><?php echo $cargo['fechaCierre'];?></td>
			<td><?php echo $cargo['fechaAltaPersona'];?></td>
			<td><?php echo $cargo['fechaBajaPersona'];?></td>
			<td><?php echo $cargo['fechaCambioSituacionPersona'];?></td>
			<td><?php echo $cargo['estado'];?></td>
			<td><?php echo ($this->Html->link($cargo['centro_id'], array('controller' => 'centros', 'action' => 'view', $cargo['centro_id'])));?></td>
			<td><?php echo ($this->Html->link($cargo['curso_id'], array('controller' => 'centros', 'action' => 'view', $cargo['curso_id'])));?></td>
			<td><?php echo ($this->Html->link($cargo['materia_id'], array('controller' => 'centros', 'action' => 'view', $cargo['materia_id'])));?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'cargos', 'action' => 'view', $cargo['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'cargos', 'action' => 'edit', $cargo['id'])); ?>
				<!--?php echo $this->Html->link(__('Borrar'), array('controller' => 'cargos', 'action' => 'delete', $cargo['id']), null, sprintf(__('Are you sure you want to delete # %s?'), $cargo['id'])); ?>-->
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<!--<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Cargo'), array('controller' => 'cargos', 'action' => 'add'));?> </li>
		</ul>
	</div>-->
</div>
