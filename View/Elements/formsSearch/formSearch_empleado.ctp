<?php echo $this->Form->create('Empleado',array('type'=>'get','url'=>'index', 'novalidate' => true));?>
<div class="form-group">
    <?php echo $this->Form->input('documento_nro' , array('label' => false, 'class' => 'form-control', 'Placeholder' => 'Ingrese Nº de documento...'));	?>
</div>
<div class="text-center">
    <span class="link"><?php echo $this->Form->button('<span class="glyphicon glyphicon-search"></span> BUSCAR', array('class' => 'submit', 'class' => 'btn btn-primary')); ?>
    </span>
    <?php echo $this->Form->end(); ?>
</div>	
