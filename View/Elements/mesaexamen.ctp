<div class="col-md-6">
	<div class="unit">
       <span class="name"><span class="glyphicon glyphicon-calendar"></span> <b>Ciclo:</b> <?php echo $this->Html->link($mesaexamen['Ciclo']['nombre'], array('controller' => 'ciclos', 'action' => 'view', $mesaexamen['Ciclo']['id'])); ?></span><br/>       
       <span class="name"><span class="glyphicon glyphicon-calendar"></span> <b>Turno:</b> <?php echo h($mesaexamen['Mesaexamen']['turno']); ?></span><br/>
       <span class="name"><span class="glyphicon glyphicon-info-sign"></span> <b>Titulación:</b> <?php echo ($this->Html->link($mesaexamen['Titulacion']['nombre'], array('controller' => 'titulacions', 'action' => 'view', $mesaexamen['Titulacion']['id']))); ?></span><br/>
       <span class="name"><span class="glyphicon glyphicon-info-sign"></span> <b>Materia:</b> <?php echo ($this->Html->link($mesaexamen['Materia']['alia'], array('controller' => 'materias', 'action' => 'view', $mesaexamen['Materia']['id']))); ?></span><br/>
       <span class="name"><span class="glyphicon glyphicon-info-sign"></span> <b>Acta Nro:</b> <?php echo h($mesaexamen['Mesaexamen']['acta_nro']); ?></span><br/>
       <span class="name"><span class="glyphicon glyphicon-info-sign"></span> <b>Libro Nro:</b> <?php echo h($mesaexamen['Mesaexamen']['libro_nro']); ?></span><br/> 		   
       <span class="name"><span class="glyphicon glyphicon-info-sign"></span> <b>Folio Nro:</b> <?php echo h($mesaexamen['Mesaexamen']['folio_nro']); ?></span><br/>       
       <hr />
       <div class="text-right">
           <span class="link"><?php echo $this->Html->link('<i class="glyphicon glyphicon-edit"></i>', array('controller' => 'mesaexamens', 'action' => 'edit', $mesaexamen['Mesaexamen']['id']), array('class' => 'btn btn-warning','escape' => false)); ?></span>
           <span class="link"><?php echo $this->Html->link('<i class="glyphicon glyphicon-eye-open"></i>', array('controller' => 'mesaexamens', 'action' => 'view', $mesaexamen['Mesaexamen']['id']), array('class' => 'btn btn-success','escape' => false)); ?></span>
           <span class="link"><?php echo $this->Html->link('<i class="glyphicon glyphicon-trash"></i>', array('controller' => 'mesaexamens', 'action' => 'delete', $mesaexamen['Mesaexamen']['id']), array('confirm' => 'Está seguro de borrar la mesa de exámen nro.'.$mesaexamen['Mesaexamen']['id'], 'class' => 'btn btn-danger','escape' => false)); ?></span> 
       </div>
    </div>
</div>
