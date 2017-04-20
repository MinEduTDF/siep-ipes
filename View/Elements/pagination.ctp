<p>
	<?php
	    if(isset($urlArgs)) $this->Paginator->options($urlArgs);
	    echo $this->Paginator->counter(array(
	    'format' => __('Página {:page} de {:pages}, mostrando {:current} resultados de un total de {:count}, desde {:start} hasta {:end}', true)
		));
	?>
</p>

<div class="paging">
    <?php echo $this->Paginator->prev('<<anterior', array(), null, array('class'=>'disabled'));?>  
|   <?php echo $this->Paginator->numbers();?>
 |  <?php echo $this->Paginator->next('siguiente>>', array(), null, array('class'=>'disabled'));?>
</div>