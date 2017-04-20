<div class="TituloSec">Familiares </div>
<div id="ContenidoSec">	
    <div class="row"><div class="col-md-8">
        <div class="unit perfil">
		    <div class="subtitulo"><?php echo ($familiar['Familiar']['vinculo']); ?></div>
	        <div class="row">
	            <div class="col-md-6 col-sm-6">
                    <b>Nombre completo:</b>		
                    <?php echo ($familiar['Familiar']['nombre_completo']); ?><br>
                    <b>Nacionalidad:</b>		
                    <?php echo ($familiar['Familiar']['nacionalidad']); ?><br>
                    <b>Cuil/Cuit:</b>		
                    <?php echo ($familiar['Familiar']['cuit_cuil']); ?><br>
                    <b>Ocupación:</b>		
                    <?php echo ($familiar['Familiar']['ocupacion']); ?><br>
                    <b>Lugar de trabajo:</b>		
                    <?php echo ($familiar['Familiar']['lugar_de_trabajo']); ?><br>
                    <b>Observaciones:</b>
                    <?php echo ($familiar['Familiar']['observaciones']); ?>
                </div>
                <div class="col-md-6 col-sm-6">
                    <b>Ciudad:</b>
                    <?php echo ($familiar['Familiar']['ciudad']); ?><br>
                    <b>Domicilio:</b>
                    <?php echo ($familiar['Familiar']['domicilio']); ?><br>
                    <b>Telefono:</b>
                    <?php echo ($familiar['Familiar']['telefono_nro']); ?><br>
                    <b>Email:</b>
                    <?php echo ($familiar['Familiar']['email']); ?><br>
                </div>
		    </div>
	    </div>
    </div>
    <div class="col-md-4">
         <div class="unit">
              <div class="subtitulo">Opciones</div>
              <div class="opcion"><?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $familiar['Familiar']['id'])); ?></div>
              <div class="opcion"><?php echo $this->Html->link(__('Borrar'), array('action' => 'delete', $familiar['Familiar']['id'] ), null, sprintf(__('Esta seguro de borrar el familiar "'.$familiar['Familiar']['nombre_completo'].'"'), $this->Form->value('Familiar.id'))); ?></div>
         </div>
    </div>	
  </div>
</div>
