<!-- start main -->
<div class="TituloSec">Alumnos por sección</div>
<div id="ContenidoSec">
  <div id="main">
  <!-- start second nav -->
      <div class="row">
          <div class="col-xs-12 col-sm-8 col-md-8">
          <div class="row">
               <?php foreach ($cursosInscripcions as $cursosInscripcion): ?>
               <?php echo $this->element('cursosInscripcion',array( 'cursosInscripcion' => $cursosInscripcion )); ?>
               <?php endforeach; ?>
           </div>
           <div class="unit text-center">
               <?php echo $this->element('pagination'); ?> 
           </div>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4">
          <div class="unit">
              <div class="subtitulo">Búsqueda</div>
              <br>	 
              <?php echo $this->element('formsSearch/formSearch_cursosInscripcion'); ?>
          </div>
      </div>
  </div>    
</div>
<!-- end main -->


<!--<div class="cursosInscripcions index">
	<h2><?php echo __('Cursos Inscripcions'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('ciclo_id', 'Ciclo'); ?></th>
            <th><?php echo $this->Paginator->sort('curso_id', 'Curso'); ?></th>
			<th><?php echo $this->Paginator->sort('inscripcion_id', 'Legajo Nº'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($cursosInscripcions as $cursosInscripcion): ?>
	<tr>
		<td><?php echo h($cursosInscripcion['CursosInscripcion']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($cursosInscripcion['Inscripcion']['ciclo_id'], array('controller' => 'ciclos', 'action' => 'view', $cursosInscripcion['Inscripcion']['ciclo_id'])); ?>
		</td>
        <td>
			<?php echo $this->Html->link($cursosInscripcion['Curso']['nombre_completo_curso'], array('controller' => 'cursos', 'action' => 'view', $cursosInscripcion['Curso']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($cursosInscripcion['Inscripcion']['legajo_nro'], array('controller' => 'inscripcions', 'action' => 'view', $cursosInscripcion['Inscripcion']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $cursosInscripcion['CursosInscripcion']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Cursos Inscripcion'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Cursos'), array('controller' => 'cursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Curso'), array('controller' => 'cursos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Inscripcions'), array('controller' => 'inscripcions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inscripcion'), array('controller' => 'inscripcions', 'action' => 'add')); ?> </li>
	</ul>
</div>-->
