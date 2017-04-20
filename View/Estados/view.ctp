<!-- start main -->
 <div id="main">
 
 <h2>Estados</h2>
			<!-- start second nav -->
 <div id="second-nav">
 	  <ul>
        <li><?php echo $this->Html->link(__('Nuevo Estado'), array('action' => 'add')); ?></li>
 	  </ul>
 </div>
  <!-- end second nav -->
 
    <dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Id'); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $estado['Estado']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Estado'); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $estado['Estado']['nombre']; ?>
			&nbsp;
		</dd>
	</dl>
 
 </div>
 <!-- end main -->
 <!-- start sidebar -->
 <div id="sidebar">
		
		<div id="invoice-stats">
   		
        </div>
  <div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Estado'), array('action' => 'edit', $estado['Estado']['id'])); ?> </li>
		<!--<li><?php echo $this->Html->link(__('Borrar'), array('action' => 'delete', $estado['Estado']['id']), null, sprintf(__('Are you sure you want to delete # %s?'), $estado['Estado']['id'])); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Estados'), array('action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('Nuevo Estado'), array('action' => 'add')); ?> </li>-->
	</ul>
  </div>
</div>	
<!-- end sidebar -->
