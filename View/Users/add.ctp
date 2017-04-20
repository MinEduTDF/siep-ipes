<!-- app/View/Users/add.ctp -->
<div class="TituloSec"><?php echo __('Agregar Usuario'); ?></div>
    <div id="ContenidoSec">
        <div class="users form">
            <?php echo $this->Form->create('User', array('novalidate' => true));?>
	         <div class="unit">
                 <?php echo $this->element('forms/form_user'); ?><p>
             </div>
             <div class="text-center">
                 <div class="submit">                 
					 <?php echo $this->Form->submit(__('GUARDAR', true), array('name' => 'ok', 'div' => false, 'class' => 'btn btn-success')); ?>
                     <?php echo $this->Form->submit(__('CANCELAR', true), array('name' => 'cancel', 'div' => false, 'class' => 'btn btn-warning')); ?>
                 </div>
                 <?php echo $this->Form->end();?>   
        	 </div>
		</div>
	</div>
</div>