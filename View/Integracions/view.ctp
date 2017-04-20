<!-- *********** Acordeon ************* -->
<?php echo $this->Html->script('acordeon'); ?>
<!-- ************************************** -->

<!-- start main -->
<div class="TituloSec">Integración</div>
<div id="ContenidoSec">

<div class="row">
   <div class="col-md-8">	
	 <div class="unit">
 		<div class="row perfil">
  		

   <div class="col-md-4 col-sm-6 col-xs-8">	
	
    		<b><?php echo __('Institución integradora:'); ?></b>
			
			<?php echo ($this->Html->link($integracion['Centro']['sigla'], array('controller' => 'centros', 'action' => 'view', $integracion['Centro']['id']))); ?></p>

            <b><?php echo __('Docente integrador:'); ?></b>
			
			<?php echo ($integracion['Integracion']['docente_nombre_completo']); ?></p>

             <b><?php echo __('Inicio:'); ?></b>
			
			<?php echo ($this->Html->formatTime($integracion['Integracion']['fecha_inicio'])); ?></p>

            <b><?php echo __('Finalización:'); ?></b>
			
			<?php echo ($this->Html->formatTime($integracion['Integracion']['fecha_fin'])); ?></p>

    </div><div class="col-md-4 col-sm-6 col-xs-8">
            
            <b><?php echo __('Discapacidad trabajada:'); ?></b>
			
			<?php echo ($integracion['Integracion']['tipo_discapacidad']); ?></p>

            <b><?php echo __('Descripción:'); ?></b>
			
			<?php echo ($integracion['Integracion']['observaciones']); ?></p>
            
            <b><?php echo __('Informe adjunto:'); ?></b>
			
			<?php echo ($integracion['Integracion']['informe']); ?></p>

		  </div>
 	</div>
 </div>
</div>

<div class="col-md-4">
 <div class="unit">
 			<div class="subtitulo">Opciones</div>
		    <div class="opcion"><?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $integracion['Integracion']['id'])); ?> </div>
			<div class="opcion"><?php echo $this->Html->link(__('Borrar'), array('action' => 'delete', $integracion['Integracion']['id']), null, sprintf(__('Esta seguro de borrar la integración %s?'), $integracion['Integracion']['id'])); ?></div>
			<div class="opcion"><?php echo $this->Html->link(__('Exportar a PDF'), array('action' => 'view', $integracion['Integracion']['id'], 'ext' => 'pdf')); ?></div>
			<!--<div class="opcion"><?php echo $this->Html->link(__('Listar Alumnos'), array('controller' => 'alumnos', 'action' => 'index')); ?> </div>	
			<div class="opcion"><?php echo $this->Html->link(__('Listar Centros'), array('controller' => 'centros', 'action' => 'index')); ?> </div>
			<div class="opcion"><?php echo $this->Html->link(__('Listar Cursos'), array('controller' => 'cursos', 'action' => 'index')); ?> </div>
			<div class="opcion"><?php echo $this->Html->link(__('Listar Materias'), array('controller' => 'materias', 'action' => 'index')); ?> </div>-->
	</div>
</div>
</div>
 <!-- end main -->