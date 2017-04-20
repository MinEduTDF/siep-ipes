<?php echo $this->Html->script('acordeon'); ?>
<!-- start main -->
<div class="TituloSec">Calificaciones</div>
<div id="ContenidoSec">
    <div class="row">
        <div class="col-md-8">	
            <div class="unit">
                <div class="row">
                <!--<h3>Datos del Alumno</h3>-->
                     <div class="col-md-4 col-sm-4 col-xs-12">	
                          <b>Alumno:</b> <?php echo ($this->Html->link($nota['Alumno']['nombre_completo_alumno'], array('controller' => 'alumnos', 'action' => 'view', $nota['Alumno']['id']))); ?></p>
                          <!--<b>Curso:</b>		
                          <?php echo ($this->Html->link($nota['Curso']['nombre_completo_curso'], array('controller' => 'materias', 'action' => 'view', $nota['Curso']['id']))); ?></p>-->
                          <b>Espacio:</b> <?php echo ($this->Html->link($nota['Materia']['alia'], array('controller' => 'materias', 'action' => 'view', $nota['Materia']['id']))); ?></p>
                           <b>Ciclo:</b> <?php echo ($this->Html->link($nota['Ciclo']['nombre'], array('controller' => 'ciclos', 'action' => 'view', $nota['Ciclo']['id']))); ?></p>
                           <b>Estado:</b> <?php if($nota['Nota']['estado'] == "En curso"){; ?><span class="label label-default"><?php echo $nota['Nota']['estado']; ?></span><?php } else if($nota['Nota']['estado'] == "Abandonada"){; ?><span class="label label-info"><?php echo $nota['Nota']['estado']; ?></span><?php } else if($nota['Nota']['estado'] == "Regularizada"){; ?><span class="label label-warning"><?php echo $nota['Nota']['estado']; ?><?php } else if($nota['Nota']['estado'] == "Desaprobada"){; ?><span class="label label-danger"><?php echo $nota['Nota']['estado']; }?></span></br> 
                     </div>
               <!--<h3>Datos primer período</h3>-->
              <div class="col-md-4 col-sm-4 col-xs-12">
              <div id="click_01" class="titulo_acordeon_datos">Primer período <span class="caret"></span></div>
              <div id="acordeon_01">
                  <div class="unit">
                      <div  class="unit">
                        <b>EVALUACIÓN Nº 1</b>
                        <hr>
                        <b>Tipo:</b> <?php echo ($nota['Nota']['evaluacion_tipo_nota_uno_primer_periodo']); ?></p>
                        <b>Nota:</b> <?php if($nota['Nota']['nota_uno_primer_periodo'] >= 6){; ?>
                        <span class="label label-success"><?php echo $nota['Nota']['nota_uno_primer_periodo']; ?></span><?php } else{; ?><span class="label label-danger"><?php echo $nota['Nota']['nota_uno_primer_periodo']; ?></span><?php } ?></p>
                      </div>
                      <div class="unit">
                        <b>EVALUACIÓN Nº 2</b>
                        <hr>
                        <b>Tipo:</b> <?php echo ($nota['Nota']['evaluacion_tipo_nota_dos_primer_periodo']); ?></p>
                        <b>Nota:</b> <?php if($nota['Nota']['nota_dos_primer_periodo'] >= 6){; ?>
                        <span class="label label-success"><?php echo $nota['Nota']['nota_dos_primer_periodo']; ?></span><?php } else{; ?><span class="label label-danger"><?php echo $nota['Nota']['nota_dos_primer_periodo']; ?></span><?php } ?></p>
                      </div>
                      <div class="unit">
                        <b>EVALUACIÓN Nº 3</b>
                        <hr>
                        <b>Tipo:</b> <?php echo ($nota['Nota']['evaluacion_tipo_nota_tres_primer_periodo']); ?></p>
                        <b>Nota:</b> <?php if($nota['Nota']['nota_tres_primer_periodo'] >= 6){; ?>
                        <span class="label label-success"><?php echo $nota['Nota']['nota_tres_primer_periodo']; ?></span><?php } else{; ?><span class="label label-danger"><?php echo $nota['Nota']['nota_tres_primer_periodo']; ?></span><?php } ?></p>
                      </div>
                      <hr>
                      <b>Promedio:</b> <?php if($nota['Nota']['promedio_primer_periodo'] >= 6){; ?>
                        <span class="label label-success"><?php echo $nota['Nota']['promedio_primer_periodo']; ?></span><?php } else{; ?><span class="label label-danger"><?php echo $nota['Nota']['promedio_primer_periodo']; ?></span><?php } ?></p>
                      <!--<b>Desarrollo Personal y Social:</b><?php echo ($nota['Nota']['desarrollo_personalSocial_primer_periodo']); ?></p>-->
                      <b>Fecha:</b> <?php echo ($nota['Nota']['fecha_promedio_primer_periodo']); ?></p>
                  </div>
              </div>
             <!--<h3>Datos segundo período</h3>-->
             <div id="click_02" class="titulo_acordeon_datos">Segundo período <span class="caret"></span></div>
             <div id="acordeon_02">
                 <div class="unit">
                      <div class="unit">
                        <b>EVALUACIÓN Nº 1</b>
                        <hr>
                        <b>Tipo:</b><?php echo ($nota['Nota']['evaluacion_tipo_nota_uno_segundo_periodo']); ?></p>
                        <b>Nota:</b><?php if($nota['Nota']['nota_uno_segundo_periodo'] >= 6){; ?>
                        <span class="label label-success"><?php echo $nota['Nota']['nota_uno_segundo_periodo']; ?></span><?php } else{; ?><span class="label label-danger"><?php echo $nota['Nota']['nota_uno_segundo_periodo']; ?></span>
                        <?php } ?></p>
                      </div>
                      <div class="unit">
                        <b>EVALUACIÓN Nº 2</b>
                        <hr>
                        <b>Tipo:</b><?php echo ($nota['Nota']['evaluacion_tipo_nota_dos_segundo_periodo']); ?></p>
                        <b>Nota:</b><?php if($nota['Nota']['nota_dos_segundo_periodo'] >= 6){; ?>
                        <span class="label label-success"><?php echo $nota['Nota']['nota_dos_segundo_periodo']; ?></span><?php } else{; ?><span class="label label-danger"><?php echo $nota['Nota']['nota_dos_segundo_periodo']; ?></span>
                        <?php } ?></p>
                      </div>
                      <div class="unit">
                        <b>EVALUACIÓN Nº 3</b>
                        <hr>
                        <b>Tipo:</b><?php echo ($nota['Nota']['evaluacion_tipo_nota_tres_segundo_periodo']); ?></p>
                        <b>Nota:</b><?php if($nota['Nota']['nota_tres_segundo_periodo'] >= 6){; ?>
                        <span class="label label-success"><?php echo $nota['Nota']['nota_tres_segundo_periodo']; ?></span><?php } else{; ?><span class="label label-danger"><?php echo $nota['Nota']['nota_tres_segundo_periodo']; ?></span>
                        <?php } ?></p>
                      </div>
                      <hr>
                      <b>Promedio:</b><?php echo ($nota['Nota']['promedio_segundo_periodo']); ?></p>
                      <b>Desarrollo Personal y Social:</b><?php echo ($nota['Nota']['desarrollo_personalSocial_segundo_periodo']); ?></p>
                      <b>Fecha:</b><?php echo ($nota['Nota']['fecha_promedio_segundo_periodo']); ?></p>
                 </div>
             </div>
             <!--<h3>Datos tercer período</h3>-->
		     <div id="click_03" class="titulo_acordeon_datos">Tercer período <span class="caret"></span></div>
             <div id="acordeon_03">
                 <div class="unit">
                      <div class="unit">
                        <b>EVALUACIÓN Nº 1</b>
                        <hr>
                        <b>Tipo:</b><?php echo ($nota['Nota']['evaluacion_tipo_nota_uno_tercer_periodo']); ?></p>
                        <b>Nota:</b><?php if($nota['Nota']['nota_uno_tercer_periodo'] >= 6){; ?>
                        <span class="label label-success"><?php echo $nota['Nota']['nota_uno_tercer_periodo']; ?></span><?php } else{; ?><span class="label label-danger"><?php echo $nota['Nota']['nota_uno_tercer_periodo']; ?></span>
                        <?php } ?></p>
                      </div>
                      <div class="unit">
                        <b>EVALUACIÓN Nº 2</b>
                        <hr>
                        <b>Tipo:</b><?php echo ($nota['Nota']['evaluacion_tipo_nota_dos_tercer_periodo']); ?></p>
                        <b>Nota:</b><?php if($nota['Nota']['nota_dos_tercer_periodo'] >= 6){; ?>
                        <span class="label label-success"><?php echo $nota['Nota']['nota_dos_tercer_periodo']; ?></span><?php } else{; ?><span class="label label-danger"><?php echo $nota['Nota']['nota_dos_tercer_periodo']; ?></span>
                        <?php } ?></p>
                      </div>
                      <div class="unit">
                        <b>EVALUACIÓN Nº 3</b>
                        <hr>
                        <b>Tipo:</b><?php echo ($nota['Nota']['evaluacion_tipo_nota_tres_tercer_periodo']); ?></p>
                        <b>Nota:</b><?php if($nota['Nota']['nota_tres_tercer_periodo'] >= 6){; ?>
                        <span class="label label-success"><?php echo $nota['Nota']['nota_tres_tercer_periodo']; ?></span><?php } else{; ?><span class="label label-danger"><?php echo $nota['Nota']['nota_tres_tercer_periodo']; ?></span>
                        <?php } ?></p>
                      </div>
                      <hr>
                      <b>Promedio:</b><?php echo ($nota['Nota']['promedio_tercer_periodo']); ?></p>
                      <b>Desarrollo Personal y Social:</b><?php echo ($nota['Nota']['desarrollo_personalSocial_tercer_periodo']); ?></p>
                      <b>Fecha:</b><?php echo ($nota['Nota']['fecha_promedio_tercer_periodo']); ?></p>
                 </div>
             </div>
        </div>
        <!--<h3>Datos Cierre</h3>-->
        <div class="col-md-4 col-sm-4 col-xs-12">
            <div id="click_04" class="titulo_acordeon_datos">Cierre <span class="caret"></span></div>
                <div id="acordeon_04">
                   <div class="unit">
                      <b>Promedio a término:</b><?php echo ($nota['Nota']['promedio_a_termino']); ?></p>
                      <b>Nota en diciembre:</b><?php echo ($nota['Nota']['nota_en_diciembre']); ?></p>
                      <b>Nota en marzo:</b><?php echo ($nota['Nota']['nota_en_marzo']); ?></p>
                      <b>Promedio final:</b><?php echo ($nota['Nota']['promedio_final']); ?></p>
                       <b>Observaciones:</b><?php echo ($nota['Nota']['observaciones']); ?></p>
                   </div>
               </div>
		        </div>
 	      </div>
     </div>
  </div>
  <div class="col-md-4">
    <div class="unit">
        <div class="subtitulo">Opciones</div>
          <div class="opcion"><?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $nota['Nota']['id'])); ?></div>
          <div class="opcion"><?php echo $this->Html->link(__('Borrar'), array('action' => 'delete', $nota['Nota']['id'] ), null, sprintf(__('Esta seguro de borrar la nota "'.$nota['Nota']['id'].'"'), $this->Form->value('Nota.id'))); ?></div>
          <div class="opcion"><?php echo $this->Html->link(__('Listar Calificaciones'), array('action' => 'index')); ?></div>
       </div>
    </div>
   </div>
</div>                  
<!-- end main -->
