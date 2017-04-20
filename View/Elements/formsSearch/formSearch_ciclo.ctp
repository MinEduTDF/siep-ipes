<?php echo $this->Form->create('Ciclo',array('type'=>'get','url'=>'index', 'novalidate' => true));?>
<div class="form-group">
   <?php echo $this->Form->input('nombre', array('label' => false, 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Ingrese el año con formato AAAA', 'Placeholder' => 'Ingrese año del ciclo...'));?>
</div>
<div class="text-center">
    <span class="link"><?php echo $this->Form->button('<span class="glyphicon glyphicon-search"></span> BUSCAR', array('class' => 'submit', 'class' => 'btn btn-primary')); ?>
    </span>
    <?php echo $this->Form->end(); ?>
</div>
