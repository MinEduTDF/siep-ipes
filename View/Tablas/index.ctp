<!-- *********** Acordeon ************* -->
<?php echo $this->Html->script('jsapi'); ?>
<?php echo $this->Html->script('uds_api_contents'); ?>
<?php echo $this->Html->script('graficos'); ?>
<?php echo $this->Html->script('acordeon'); ?>
<!-- ************************************** -->

<div class="TituloSec"><?php echo __('Reportes'); ?></div>
<div id="ContenidoSec">

    <script>
		$(document).ready(function () {
		    $(window).resize(function(){

		        tablas('inscripcion');
		    });
		});
    </script>
<!-- Alumnos Inscriptos por curso -->
<div id="click_01" class="titulo_acordeon">Alumnos por Curso</div>
<div id="acordeon_01">
     
</div><div id="inscripcion" style="width:100%; height:300px"></div>
    <script>

		tablas('inscripcion');
    </script>