<!-- start main -->
<div class="TituloSec">Titulaciones</div>
<div id="ContenidoSec">
  <div id="main">
<!-- start second nav -->
<div class="row">
  <div class="col-xs-12 col-sm-8 col-md-8">

<div id="second-nav">
			 <div class="unit text-center">
			 	  	  <span class="link"><?php echo $this->Html->link('<i class="glyphicon glyphicon-plus"></i> AGREGAR', array('action' => 'add'), array('class' => 'btn btn-primary','escape' => false)); ?></span>
			 </div>
</div>
 <!-- end second nav -->

	<div class="row">
			    <?php foreach ($titulacions as $titulacion): ?>

			    <?php echo $this->element('titulacion',array( 'titulacion' => $titulacion )); ?>

			    <?php endforeach; ?>


			 </div>
			 <div class="unit text-center">
			 	 <?php echo $this->element('pagination'); ?>
			 </div>
	 </div>
 <!-- end main -->
</div>
