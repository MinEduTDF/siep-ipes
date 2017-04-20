<?php echo $this->Html->script(array('acordeon', 'slider')); ?>
<?php echo $this->Html->css('slider'); ?>
<!-- start main -->
<div class="TituloSec">Mesa de <?php echo ($mesaexamen['Mesaexamen']['turno']); ?></div>
<div id="ContenidoSec">
    <div class="row">
        <div class="col-md-8">	
	        <div class="unit">
 		        <div class="row perfil">
                    <!--Datos generales-->
                    <div class="col-md-6 col-sm-4 col-xs-12">	
                        <b><?php echo __('Ciclo:'); ?></b>
                           <?php echo $this->Html->link($mesaexamen['Ciclo']['nombre'], array('controller' => 'ciclos', 'action' => 'view', $mesaexamen['Ciclo']['id'])); ?></p>
                        <b><?php echo __('Titulacion:'); ?></b>
                           <?php echo $this->Html->link($mesaexamen['Titulacion']['nombre'], array('controller' => 'titulacions', 'action' => 'view', $mesaexamen['Titulacion']['id'])); ?></p>
                        <b><?php echo __('Materia:'); ?></b>
                           <?php echo $this->Html->link($mesaexamen['Materia']['alia'], array('controller' => 'materias', 'action' => 'view', $mesaexamen['Materia']['id'])); ?></p>
                        <b><?php echo __('Creado:'); ?></b>
                           <?php echo h($mesaexamen['Mesaexamen']['created']); ?></p>
                        <b><?php echo __('Modificado:'); ?></b>
                           <?php echo h($mesaexamen['Mesaexamen']['modified']); ?></p>
                    </div><!--/Datos generales-->
                    <div class="col-md-6 col-sm-4 col-xs-12">
                    <!--Datos específicos-->
                     <div id="click_01" class="titulo_acordeon_datos">Detalle <span class="caret"></span></div>
                         <div id="acordeon_01">
                             <div class="unit">
                                 <b><?php echo __('Mesa Especial:'); ?></b>
                                     <?php echo h($mesaexamen['Mesaexamen']['mesa_especial']); ?></p>
                                  <b><?php echo __('Turno:'); ?></b>
                                     <?php echo h($mesaexamen['Mesaexamen']['turno']); ?></p>
                                  <b><?php echo __('Acta Nro:'); ?></b>
                                     <?php echo h($mesaexamen['Mesaexamen']['acta_nro']); ?></p>
                                  <b><?php echo __('Libro Nro:'); ?></b>
                                     <?php echo h($mesaexamen['Mesaexamen']['libro_nro']); ?></p>
                                  <b><?php echo __('Folio Nro:'); ?></b>
                                     <?php echo h($mesaexamen['Mesaexamen']['folio_nro']); ?></p>
                                  <b><?php echo __('Seccion:'); ?></b>
                                     <?php echo h($mesaexamen['Mesaexamen']['seccion']); ?></p>
                                  <b><?php echo __('Aula:'); ?></b>
                                     <?php echo h($mesaexamen['Mesaexamen']['aula']); ?></p>
                                  <b><?php echo __('Modalidad:'); ?></b>
                                     <?php echo h($mesaexamen['Mesaexamen']['modalidad']); ?></p>
                             </div>
                        </div><!--/Datos específicos-->
                        <!--Datos de los integrantes-->
                        <div id="click_02" class="titulo_acordeon_datos">Integrantes <span class="caret"></span></div>
                        <div id="acordeon_02">
                             <div class="unit">
                                  <b><?php echo __('Presidente:'); ?></b>
                                     <?php echo h($mesaexamen['Mesaexamen']['presidente']); ?></p>
                                  <b><?php echo __('Vocal Uno:'); ?></b>
                                     <?php echo h($mesaexamen['Mesaexamen']['vocal_uno']); ?></p>
                                  <b><?php echo __('Vocal Dos:'); ?></b>
                                     <?php echo h($mesaexamen['Mesaexamen']['vocal_dos']); ?></p>
                             </div>         
                        </div><!--/Datos de los integrantes-->
                        <!--Observaciones-->
                        <div id="click_03" class="titulo_acordeon_datos">Observaciones <span class="caret"></span></div>
                        <div id="acordeon_03">
                             <div class="unit">
                                  <?php echo h($mesaexamen['Mesaexamen']['observaciones']); ?></p>
                             </div>         
                        </div><!--/Observaciones-->
                    </div>
                </div>
             </div>
          </div>
          <div class="col-md-4">
          <div class="unit">
              <div class="subtitulo">Opciones</div>
              <div class="opcion"><?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $mesaexamen['Mesaexamen']['id'])); ?> </div>
              <div class="opcion"><?php echo $this->Html->link(__('Borrar'), array('action' => 'delete', $mesaexamen['Mesaexamen']['id']), null, sprintf(__('Esta seguro de borrar la mesa de exámen %s?'), $mesaexamen['Mesaexamen']['id'])); ?></div>
              <div class="opcion"><?php echo $this->Html->link(__('Listar Mesas'), array('action' => 'index')); ?></div>
          </div>
     </div>
</div>
<!-- end main -->
<!-- Alumnos Relacionados -->
<div id="click_04" class="titulo_acordeon">Alumnos Relacionados <span class="caret"></span></div>
    <div id="acordeon_04">
		<div class="row">
	        <?php if (!empty($mesaexamen['Alumno'])):?>
  			<div class="col-xs-12 col-sm-6 col-md-8">
	            <?php foreach ($mesaexamen['Alumno'] as $alumno): ?>
	            <div class="col-md-6">
            <div class="unit">
                <?php echo '<b>Nombre:</b> '.($this->Html->link($alumno['nombres'], array('controller' => 'alumnos', 'action' => 'view', $alumno['id']))
			                                ." ".($this->Html->link($alumno['apellidos'], array('controller' => 'alumnos', 'action' => 'view', $alumno['id']))));?><br>
                <?php echo '<b>Documento:</b> '.$alumno['documento_tipo'].' '.$alumno['documento_nro'];?><br>
                <?php echo '<b>Email:</b> '.$alumno['email'];?><br>
                <?php echo '<b>Tel:</b> '.$alumno['telefono_nro'];?><br>
                <div class="text-right">
					<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-edit"></i>'), array('controller' => 'alumnos', 'action' => 'edit', $alumno['id']), array('class' => 'btn btn-danger', 'escape' => false)); ?>
                    <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), array('controller' => 'alumnos', 'action' => 'view', $alumno['id']), array('class' => 'btn btn-success', 'escape' => false)); ?>
                    <!--<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-trash"></i>'), array('controller' => 'alumnos', 'action' => 'delete', $alumno['id']), null, sprintf(__('Are you sure you want to delete # %s?'), $alumno['id'])); ?>-->
                </div>
            </div>
        </div>
		<?php endforeach; ?>
    </div>
	<?php else: echo '<div class="col-md-12"><div class="unit text-center">No se encuentran relaciones.</div></div>'; ?>
    <?php endif; ?>
</div>
</div>
<!-- end Alumnos Relacionados -->
