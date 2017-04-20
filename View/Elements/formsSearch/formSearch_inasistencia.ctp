<?php echo $this->Form->create('Inasistencia',array('type'=>'get','url'=>'index', 'novalidate' => true));?>
<div class="form-group">
	<?php 
	    echo $this->Form->input('alumno_id', array('label' => false, 'empty' => 'Ingrese un alumno...', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción'));
	?><br>
    <?php 
		$tipos = array('un cuarto' => 'un cuarto' ,'media' => 'media', 'completa' => 'completa');
		echo $this->Form->input('tipo', array('label' => false, 'options' => $tipos, 'empty' => 'Ingrese un tipo...', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción'));
    ?><br>
    <?php
		$tipos_justificado = array('Si' => 'Si', 'No' => 'No', 'Pendiente' => 'Pendiente');
		echo $this->Form->input('justificado', array('label' => false, 'options' => $tipos_justificado, 'empty' => 'Ingrese un tipo de justificación...', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción'));
    ?><br> 
    <?php
		$tipos_causa = array('Sin causa' => 'Sin causa', 'Razones particulares' => 'Razones particulares', 'Enfermedad' => 'Enfermedad',
							 'Fenómenos meteorológicos' => 'Fenómenos meteorológicos', 'Donación de sangre' => 'Donación de sangre',
							 'Obligaciones cívico_militares' => 'Obligaciones cívico_militares', 'Paro de transporte' => 'Paro de transporte');
		echo $this->Form->input('causa', array('label' => false, 'options' => $tipos_causa, 'empty' => 'Ingrese una causa...', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción'));
    ?>
</div>
<div class="text-center">
    <span class="link"><?php echo $this->Form->button('<span class="glyphicon glyphicon-search"></span> BUSCAR', array('class' => 'submit', 'class' => 'btn btn-primary')); ?>
    </span>
    <?php echo $this->Form->end(); ?>
</div>
