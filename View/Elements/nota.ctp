<div class="col-md-4">
    <div class="unit">
          <span class="name"><span class="glyphicon glyphicon-info-sign"></span> <b>Alumno:</b> <?php echo ($this->Html->link($nota['Alumno']['nombre_completo_alumno'], array('controller' => 'alumnos', 'action' => 'view', $nota['Alumno']['id']))); ?></span><br/>
          <span class="name"><span class="glyphicon glyphicon-info-sign"></span> <b>Ciclo: </b> <?php echo ($this->Html->link($nota['Ciclo']['nombre'], array('controller' => 'ciclos', 'action' => 'view', $nota['Ciclo']['id']))); ?></span><br/>
          <span class="name"><span class="glyphicon glyphicon-info-sign"></span> <b>Espacio: </b> <?php echo ($this->Html->link($nota['Materia']['alia'], array('controller' => 'materias', 'action' => 'view', $nota['Materia']['id']))); ?></span><br/>
          <span class="name"><span class="glyphicon glyphicon-info-sign"></span> <b>Estado: </b> <?php if($nota['Nota']['estado'] == "En curso"){; ?><span class="label label-default"><?php echo $nota['Nota']['estado']; ?></span><?php } else if($nota['Nota']['estado'] == "Abandonada"){; ?><span class="label label-info"><?php echo $nota['Nota']['estado']; ?></span><?php } else if($nota['Nota']['estado'] == "Regularizada"){; ?><span class="label label-warning"><?php echo $nota['Nota']['estado']; ?><?php } else if($nota['Nota']['estado'] == "Desaprobada"){; ?><span class="label label-danger"><?php echo $nota['Nota']['estado']; }?></span></br>
        <hr />
        <div class="text-right">
			    <span class="link"><?php echo $this->Html->link(__('<i class= "glyphicon glyphicon-edit"></i>'), array('action' => 'edit', $nota['Nota']['id']), array('class' => 'btn btn-warning','escape' => false)); ?></span>
			    <span class="link"><?php echo $this->Html->link('<i class= "glyphicon glyphicon-eye-open"></i>', array('controller' => 'notas', 'action' => 'view', $nota['Nota']['id']), array('class' => 'btn btn-success','escape' => false)); ?></span>
   			  <span class="link"><?php echo $this->Html->link('<i class= "glyphicon glyphicon-trash"></i>', array('controller' => 'notas', 'action' => 'delete', $nota['Nota']['id']), array('confirm' => 'Está seguro de borrar la calificación nro '.$nota['Nota']['id'], 'class' => 'btn btn-danger','escape' => false)); ?></span> 
		    </div>
	  </div>
</div>