<?php echo $this->Form->create('Inscripcion',array('type'=>'get','url'=>'index', 'novalidate' => true));?>
<?php if(($current_user['role'] == 'superadmin') || ($current_user['role'] == 'usuario')): ?>
<div class="form-group">
   <?php echo $this->Form->input('centro_id', array('label' => false, 'class' => 'form-control', 'Placeholder' => 'Ingrese una institución...'));	?>
</div><br>
<?php endif; ?>
<div class="form-group">
   <?php echo $this->Form->input('legajo_nro', array('label' => false, 'class' => 'form-control', 'Placeholder' => 'Ingrese nº de legajo...'));	?>
</div>
<div class="form-group">
    <?php
		$estados = array('COMPLETA' => 'COMPLETA', 'PENDIENTE' => 'PENDIENTE', 'BAJA' => 'BAJA');
		echo $this->Form->input('estado', array('label' => false, 'empty' => 'Ingrese un estado...', 'options' => $estados, 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción'));
    ?>
</div>
<hr>
<div class="text-center">
    <span class="link"><?php echo $this->Form->button('<span class="glyphicon glyphicon-search"></span> BUSCAR', array('class' => 'submit', 'class' => 'btn btn-primary')); ?>
    </span>
    <?php echo $this->Form->end(); ?>
</div>
