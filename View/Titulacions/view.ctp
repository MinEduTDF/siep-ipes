<?php echo $this->Html->script(array('acordeon', 'slider')); ?>
<?php echo $this->Html->css('slider.css'); ?>
<!-- start main -->
<div class="TituloSec"><?php echo ($titulacions['Titulacion']['nombre']); ?></div>
   <div id="ContenidoSec">
      <div class="row">
         <div class="col-md-8">	
	        <div class="unit">
 		       <div class="row perfil">
                  <div class="col-md-4 col-sm-6 col-xs-8">
                      <div id="click_01" class="titulo_acordeon_datos">Datos Generales <span class="caret"></span></div>
                      <div id="acordeon_01">
                         <div class="unit">
                              <b><?php echo __('Orientación:'); ?></b>
                              <?php echo ($titulacions['Titulacion']['orientacion']); ?></p>
                              <b><?php echo __('Edad mínima:'); ?></b>
                              <?php echo ($titulacions['Titulacion']['edad_minima']); ?></p>
                              <b><?php echo __('Certificación:'); ?></b>
                              <?php echo ($titulacions['Titulacion']['certificacion']); ?></p>
                              <b><?php echo __('Condición de ingreso:'); ?></b>
                              <?php echo ($titulacions['Titulacion']['condicion_ingreso']); ?></p>
                              <b><?php echo __('Ciclo de implementación:'); ?></b>
                              <?php echo ($titulacions['Titulacion']['ciclo_implementacion']); ?></p>
                              <b><?php echo __('Ciclo de finalización:'); ?></b>
                              <?php echo ($titulacions['Titulacion']['ciclo_finalizacion']); ?></p>
                              <b><?php echo __('A término:'); ?></b>
                              <?php echo $titulacions['Titulacion']['a_termino']; ?></p>
                         </div>
                      </div>    
                  </div>            
                  <div class="col-md-4 col-sm-6 col-xs-8">
                      <div id="click_02" class="titulo_acordeon_datos">Datos Específicos <span class="caret"></span></div>
                      <div id="acordeon_02">
                         <div class="unit">            
                              <b><?php echo __('Organización del Plan:'); ?></b>
                              <?php echo ($titulacions['Titulacion']['organizacion_plan']); ?></p>
                              <b><?php echo __('Organización de la cursada:'); ?></b>
                              <?php echo ($titulacions['Titulacion']['organizacion_cursada']); ?></p>
                              <b><?php echo __('Forma del dictado:'); ?></b>
                              <?php echo ($titulacions['Titulacion']['forma_dictado']); ?></p>
                              <b><?php echo __('Carga horaria en:'); ?></b>
                              <?php echo ($titulacions['Titulacion']['carga_horaria_en']); ?></p>
                              <b><?php echo __('Carga horaria:'); ?></b>
                              <?php echo ($titulacions['Titulacion']['carga_horaria']); ?></p>
                              <b><?php echo __('Tiene articulación:'); ?></b>
                              <?php echo ($titulacions['Titulacion']['tiene_articulacion']); ?></p>
                              <b><?php echo __('Duración:'); ?></b>
                              <?php echo ($titulacions['Titulacion']['duracion']); ?></p>
                               <b><?php echo __('Duración en:'); ?></b>
                              <?php echo ($titulacions['Titulacion']['duracion_en']); ?></p>
                         </div>
                      </div>
                  </div>       
                  <div class="col-md-4 col-sm-6 col-xs-8">
                      <div id="click_03" class="titulo_acordeon_datos">Normativas <span class="caret"></span></div>
                      <div id="acordeon_03">
                         <div class="unit">
                              <b><?php echo __('Norma aprobada jurisdiccional:'); ?></b>
                              <?php echo ($titulacions['Titulacion']['norma_aprob_jur_tipo']); ?></p>
                              <b><?php echo __('Norma aprobada jurisdiccional tipo:'); ?></b>
                              <?php echo ($titulacions['Titulacion']['norma_aprob_jur_tipo']); ?></p>
                              <b><?php echo __('Norma aprobada jurisdiccional nro:'); ?></b>
                              <?php echo ($titulacions['Titulacion']['norma_aprob_jur_nro']); ?></p>
                              <b><?php echo __('Norma aprobada jurisdiccional año:'); ?></b>
                              <?php echo ($titulacions['Titulacion']['norma_aprob_jur_anio']); ?></p>
                              <b><?php echo __('Norma de validez nacional tipo:'); ?></b>
                              <?php echo ($titulacions['Titulacion']['norma_val_nac_tipo']); ?></p>
                              <b><?php echo __('Norma de validez nacional nro:'); ?></b>
                              <?php echo ($titulacions['Titulacion']['norma_val_nac_nro']); ?></p>
                              <b><?php echo __('Norma de validez nacional año:'); ?></b>
                              <?php echo ($titulacions['Titulacion']['norma_val_nac_anio']); ?></p>
                              <b><?php echo __('Norma de ratificación  jurisdiccional tipo:'); ?></b>
                              <?php echo ($titulacions['Titulacion']['norma_ratif_jur_tipo']); ?></p>
                              <b><?php echo __('Norma de ratificación  jurisdiccional nro:'); ?></b>
                              <?php echo ($titulacions['Titulacion']['norma_ratif_jur_nro']); ?></p>
                              <b><?php echo __('Norma de ratificación  jurisdiccional año:'); ?></b>
                              <?php echo ($titulacions['Titulacion']['norma_ratif_jur_anio']); ?></p>
                              <b><?php echo __('Norma de homologación tipo:'); ?></b>
                              <?php echo ($titulacions['Titulacion']['norma_homologacion_tipo']); ?></p>
                              <b><?php echo __('Norma de homologación nro:'); ?></b>
                              <?php echo ($titulacions['Titulacion']['norma_homologacion_nro']); ?></p>
                              <b><?php echo __('Norma de homologación año:'); ?></b>
                              <?php echo ($titulacions['Titulacion']['norma_homologacion_anio']); ?></p>
                         </div>
                     </div>
		         </div>
 	         </div>
         </div>
     </div>
   <div class="col-md-4">
       <div class="unit">
            <div class="subtitulo">Opciones</div>
            <div class="opcion"><?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $titulacions['Titulacion']['id'])); ?></div>
            <div class="opcion"><?php echo $this->Html->link(__('Borrar'), array('action' => 'delete', $titulacions['Titulacion']['id']), null, sprintf(__('Esta seguro de borrar la titulación %s?'), $titulacions['Titulacion']['nombre'])); ?></div>
            <div class="opcion"><?php echo $this->Html->link('Listar Titulaciones', array('controller' => 'titulacions', 'action' => 'index')); ?></div>
       </div>
    </div>
 </div>
<!-- end main -->
<!-- Cursos Relacionados -->
<div id="click_04" class="titulo_acordeon">Secciones Relacionadas <span class="caret"></span></div>
<div id="acordeon_04">
		<div class="row">
	        <?php if (!empty($titulacions['Curso'])):?>
            <!-- Swiper -->
            <div class="swiper-container" style="height: 200px;">
                <div class="swiper-wrapper" >
	                <?php foreach ($titulacions['Curso'] as $curso): ?>
                    <div class="swiper-slide">
                        <div class="col-md-6">
                            <div class="unit">
                                <?php echo '<b>Anio y División:</b> '.($this->Html->link($curso['anio'], array('controller' => 'cursos', 'action' => 'view', $curso['id']))
                                                                     ." ".($this->Html->link($curso['division'], array('controller' => 'cursos', 'action' => 'view', $curso['id']))));?><br>
                                <?php echo '<b>Turno:</b> '.$curso['turno'];?><br>
                                <?php echo '<b>AulaNro:</b> '.$curso['aula_nro'];?><br>
                                <?php echo '<b>Cursada:</b> '.$curso['organizacion_cursada'];?><br>
                                <div class="text-right">
									<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-edit"></i>'), array('controller' => 'cursos', 'action' => 'edit', $curso['id']), array('class' => 'btn btn-warning','escape' => false)); ?>
                                    <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), array('controller' => 'cursos', 'action' => 'view', $curso['id']), array('class' => 'btn btn-success','escape' => false)); ?>
                                    <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-trash"></i>'), array('controller' => 'cursos', 'action' => 'delete', $curso['id']), array('class' => 'btn btn-danger','escape' => false)); ?>
                                </div>
		                    </div>
	                    </div>
</i>                    </div>
		  	        <?php endforeach; ?>
			    </div>
			    <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
                </div>
                <!-- Include plugin after Swiper -->
				<?php else: echo '<div class="col-md-12"><div class="unit text-center">No se encuentran relaciones.</div></div>'; ?>
                <?php endif; ?>
            </div>
        </div>
        <!-- end Cursos Relacionados -->
    </div>
    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        paginationClickable: true,
    });
    </script>
</div>    