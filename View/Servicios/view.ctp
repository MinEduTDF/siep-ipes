<!-- *********** Acordeon ************* -->
<?php echo $this->Html->script('acordeon'); ?>
<!-- ************************************** -->

<!-- start main -->
<div class="TituloSec">Servicio de <?php echo $servicio['Servicio']['tipo_servicio']; ?></div>
<div id="ContenidoSec">

<div class="row">
   <div class="col-md-8">	
	 <div class="unit">
 		<div class="row perfil">
  		

   <div class="col-md-6 col-sm-6 col-xs-5">	
	
	 <b>Fecha de creación del registro:</b>		
     <?php echo ($this->Html->formatTime($servicio['Servicio']['creado'])); ?></p>

     <!--<b>Tipo de servicio:</b>		
     <?php echo $servicio['Servicio']['tipo_servicio']; ?></p>-->
 
     <b>Fecha de solicitud:</b>		  
     <?php echo ($this->Html->formatTime(($servicio['Servicio']['fecha_solicitud_servicio']))); ?></p>
     
     <b>Estado:</b>		
     <?php echo $servicio['Servicio']['estado']; ?></p>

     <b>Institución prestadora:</b>		  
     <?php echo ($servicio['Servicio']['prestador']); ?></p>

     <b>Referente a cargo:</b>		  
     <?php echo ($servicio['Servicio']['docente_profesional_acargo']); ?></p>

  </div><div class="col-md-6 col-sm-6 col-xs-5">	

     <b>Tipo de alta:</b>		  
     <?php echo ($servicio['Servicio']['tipo_alta']); ?></p>

     <b>Fecha de alta:</b>		  
     <?php echo ($this->Html->formatTime(($servicio['Servicio']['fecha_alta']))); ?></p>

     <b>Tipo de baja:</b>		  
     <?php echo ($servicio['Servicio']['tipo_baja']); ?></p>

     <b>Fecha de baja:</b>		  
     <?php echo ($this->Html->formatTime(($servicio['Servicio']['fecha_baja']))); ?></p> 

     <b>Total de días que asistió:</b>		  
     <?php echo ($servicio['Servicio']['total_dias_asistencia']); ?></p>

     <b>Total de días que no asistió:</b>		  
     <?php echo ($servicio['Servicio']['total_dias_inasistencia']); ?></p>

     <b>Descripción:</b>		  
     <?php echo $servicio['Servicio']['observaciones']; ?></p>
     
     <b>Informe adjunto:</b>		
     <?php echo $servicio['Servicio']['informe']; ?></p> 
			  </div>
            </div>
		</div>
	</div>

<div class="col-md-4">
 <div class="unit">
 			<div class="subtitulo">Opciones</div>
		    <div class="opcion"><?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $servicio['Servicio']['id'])); ?> </div>
			<div class="opcion"><?php echo $this->Html->link(__('Borrar'), array('action' => 'delete', $servicio['Servicio']['id'] ), null, sprintf(__('Esta seguro de borrar el servicio "'.$servicio['Servicio']['id'].'"'), $this->Form->value('Servicio.id'))); ?></div>
			<div class="opcion"><?php echo $this->Html->link(__('Exportar a PDF'), array('action' => 'view', $servicio['Servicio']['id'], 'ext' => 'pdf')); ?></div>
	</div>
</div>
</div>
 <!-- end main -->