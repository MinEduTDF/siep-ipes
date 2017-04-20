<?php echo $this->Html->script('acordeon'); ?>
<!-- start main -->
<div class="TituloSec">Usuario: <?php echo ($user['User']['username']); ?></div>
<div id="ContenidoSec">
<div class="row">
   <div class="col-md-8">	
	   <div class="unit">
 		   <div class="row perfil">
               <div class="col-md-4 col-sm-6 col-xs-8">	
                  <b><?php echo __('Id:'); ?></b>
                  <?php echo ($user['User']['id']); ?></p>
                  <b><?php echo __('Empleado:'); ?></b>
                  <?php echo $this->Html->link($user['Empleado']['nombre_completo_empleado'], array('controller' => 'empleados', 'action' => 'view', $user['Empleado']['id'])); ?></p>
                  <b><?php echo __('Rol:'); ?></b>
                  <?php echo ($user['User']['role']); ?></p>
                  <b><?php echo __('Puesto:'); ?></b>
                  <?php echo ($user['User']['puesto']); ?></p>
                  <b><?php echo __('Centro:'); ?></b>
                  <?php echo $this->Html->link($user['Centro']['sigla'], array('controller' => 'centros', 'action' => 'view', $user['Centro']['id'])); ?></p>
 	           </div>
            </div>
       </div>
   </div>
<div class="col-md-4">
 <div class="unit">
 			<div class="subtitulo">Opciones</div>
			<div class="opcion"><?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $user['User']['id'])); ?></div>
			<div class="opcion"><?php echo $this->Html->link(__('Borrar'), array('action' => 'delete', $user['User']['id']), null, sprintf(__('Esta seguro de borrar al usuario %s?'), $user['User']['username'])); ?></div>
			<div class="opcion"><?php echo $this->Html->link(__('Listar Usuarios'), array('action' => 'index')); ?></div>
            </div>
	</div>
  </div>
</div>
 <!-- end main -->   