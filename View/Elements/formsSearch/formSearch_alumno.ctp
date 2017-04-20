<?php echo $this->Form->create('Alumno',array('type'=>'get','url'=>'index', 'novalidate' => true));?>
<?php if(($current_user['role'] == 'superadmin') || ($current_user['role'] == 'usuario')): ?>
<div class="form-group">
   <?php echo $this->Form->input('centro_id' , array('label' => false, 'class' => 'form-control', 'Placeholder' => 'Ingrese una institución...'));	?>
</div>
<hr>
<?php endif; ?>
<div class="form-group">
   <?php echo $this->Form->input('documento_nro' , array('label' => false, 'class' => 'form-control', 'Placeholder' => 'Ingrese un nº de documento...'));	?>
</div>
<hr>
<div class="text-center">
    <span class="link"><?php echo $this->Form->button('<span class="glyphicon glyphicon-search"></span> BUSCAR', array('class' => 'submit', 'class' => 'btn btn-primary')); ?>
    </span>
    <?php echo $this->Form->end(); ?>
</div>