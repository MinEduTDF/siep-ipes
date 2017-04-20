<div class="col-md-4">
    <div class="unit">
         <span class="name"><span class="glyphicon glyphicon-user"></span> <b>Alumno:</b> <?php echo ($this->Html->link($inasistencia['Alumno']['nombre_completo_alumno'], array('controller' => 'alumnos', 'action' => 'view', $inasistencia['Alumno']['id']))); ?></span><br/>
         <span class="name"><span class="glyphicon glyphicon-info-sign"></span> <b>Tipo:</b> <?php echo ($inasistencia['Inasistencia']['tipo']);?></span><br/>
         <span class="name"><span class="glyphicon glyphicon-info-sign"></span> <b>Causa:</b> <?php echo ($inasistencia['Inasistencia']['causa']);?></span><br/>
         <span class="name"><span class="glyphicon glyphicon-info-sign"></span> <b>Justificada:</b> <?php echo ($inasistencia['Inasistencia']['justificado']);?></span><br/>
         <span class="name"><span class="glyphicon glyphicon-calendar"></span> <b>Fecha:</b> <?php echo ($this->Html->formatTime($inasistencia['Inasistencia']['created']));?></span><br/>
         <hr />
         <div class="text-right">
             <span class="link"><?php echo $this->Html->link('<i class= "glyphicon glyphicon-edit"></i>', array('controller' => 'inasistencias', 'action' => 'edit', $inasistencia['Inasistencia']['id']), array('class' => 'btn btn-warning','escape' => false)); ?></span>
             <span class="link"><?php echo $this->Html->link('<i class= "glyphicon glyphicon-eye-open"></i>', array('controller' => 'inasistencias', 'action' => 'view', $inasistencia['Inasistencia']['id']), array('class' => 'btn btn-success','escape' => false)); ?></span>
             <span class="link"><?php echo $this->Html->link('<i class="glyphicon glyphicon-trash"></i>', array('controller' => 'inasistencias', 'action' => 'delete', $inasistencia['Inasistencia']['id']), array('confirm' => 'Está seguro de borrar la inasistencia nro.'.$inasistencia['Inasistencia']['id'], 'class' => 'btn btn-danger','escape' => false)); ?></span> 
         </div>
    </div>     
</div>
