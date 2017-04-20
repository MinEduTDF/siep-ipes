<?php echo $this->Form->create('MesaExamen',array('type'=>'get','action'=>'url', 'novalidate' => true));?>
<div class="form-group">
    <?php   
        echo $this->Form->input('ciclo_id', array('label' => false, 'empty' => 'Ingrese un ciclo...', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción')); ?>
    <br>
	<?php
	    echo $this->Form->input('titulacion_id', array('label'=>false, 'empty' => 'Ingrese una titulación...', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción')); ?>
    <br>
    <?php
	    echo $this->Form->input('materia_id', array('label'=>false, 'empty' => 'Ingrese una materia...', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción')); ?>
    <br>
	<?php 
 	    $turnos = array('Marzo' => 'Marzo', 'Julio'=>'Julio', 'Diciembre'=>'Diciembre');
        echo $this->Form->input('turno', array('label' => false, 'empty' => 'Ingrese un turno...', 'options' => $turnos, 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción'));
    ?><br>
    <?php
		echo $this->Form->input('mesaespecial', array('label' => false, 'empty' => 'Ingrese mesa especial...', 'options' => $turnos, 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción'));
	?><br> 
	<?php
		echo $this->Form->input('acta_nro', array('label' => false, 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción', 'Placeholder' => 'Ingrese un nº de acta...'));
	?>
</div>
<div class="text-center">
    <span class="link"><?php echo $this->Form->button('<span class="glyphicon glyphicon-search"></span> BUSCAR', array('class' => 'submit', 'class' => 'btn btn-primary')); ?>
    </span>
    <?php echo $this->Form->end(); ?>
</div>
