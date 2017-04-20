<div class="TituloSec"><?php echo 'Editar Ciclo'; ?></div>
    <div id="ContenidoSec">
        <div class="ciclos form">
            <?php echo $this->Form->create('Ciclo', array('novalidate' => true));?>
            <div class="unit">
                <?php echo $this->element('forms/form_ciclo'); ?><p>
            </div>
		    <?php echo $this->Form->input('id', array('type' => 'hidden')); ?>
            <div class="text-center">
               <?php echo $this->Form->submit(__('GUARDAR', true), array('name' => 'ok', 'div' => false, 'class' => 'btn btn-success')); ?>
               <?php echo $this->Form->submit(__('CANCELAR', true), array('name' => 'cancel', 'div' => false, 'class' => 'btn btn-warning')); ?>
            </div>
        </div>
    </div>
</div>    