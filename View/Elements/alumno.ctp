<div class="col-md-6">
  <div class="unit">
    <div class="col-md-4 col-sm-6 col-xs-12 thumbnail text-center">
      <!-- Sí no tiene foto presenta una imagen de avatar según el sexo e indica estado de pre-inscripción. --> 
                <?php if(($foto == 0) && ($alumno['Alumno']['sexo'] == 'MASC') && $alumno['Alumno']['pendiente'] == false): ?>
                         <span class="checked"></span><?php echo $this->Html->image('../img/avatar-masculino.png', array('class' => 'img-thumbnail img-responsive img-rounded')); ?>
                <?php endif; ?>
                <?php if(($foto == 0) && ($alumno['Alumno']['sexo'] == 'FEM') && $alumno['Alumno']['pendiente'] == false): ?>
                         <span class="checked"></span><?php echo $this->Html->image('../img/avatar-femenino.png', array('class' => 'img-thumbnail img-responsive img-rounded')); ?>
                <?php endif; ?>
                <!-- Sí tiene foto la presenta e indica estado de pre-inscripción. -->
                <?php if(($foto == 1) && ($alumno['Alumno']['pendiente'] == false)): ?>
                         <span class="checked"></span><?php echo $this->Html->image('../files/alumno/foto/' . $alumno['Alumno']['foto_dir'] . '/' . 'thumb_' .$alumno['Alumno']['foto'], array('class' => 'img-thumbnail img-responsive img-rounded')); ?>
                <?php endif; ?>
                <?php if(($foto == 1) && ($alumno['Alumno']['pendiente'] == true)): ?>
                         <span class="error"></span><?php echo $this->Html->image('../files/alumno/foto/' . $alumno['Alumno']['foto_dir'] . '/' . 'thumb_' .$alumno['Alumno']['foto'], array('class' => 'img-responsive img-rounded img-thumbnail')); ?>
                <?php endif; ?>
    </div>
    <span class="name"><span class="glyphicon glyphicon-info-sign"></span> <b>Institución:</b> <?php echo $this->Html->link(($centros[$alumno['Alumno']['centro_id']]), array('controller' => 'centros', 'action' => 'view', $alumno['Alumno']['centro_id']));?></span><br/>
    <span class="name"><span class="glyphicon glyphicon-file"></span> <?php echo ($alumno['Alumno']['documento_tipo']).'  '.($alumno['Alumno']['documento_nro']); ?></span><br/>
    <span class="name"><span class="glyphicon glyphicon-user"></span> <?php echo $alumno['Alumno']['nombre_completo_alumno']; ?></span></br>
    <span class="text"><span class="glyphicon glyphicon-earphone"></span> <?php echo $alumno['Alumno']['telefono_nro']; ?></span><br/>
    <!--<span class="text"><span class="glyphicon glyphicon-envelope"></span> <?php echo $this->Html->link($alumno['Alumno']['email'],'mailto:'.$alumno['Alumno']['email']); ?></span><br/>-->
    <hr />
      <div class="text-right">
        <span class="link"><?php echo $this->Html->link('<i class= "glyphicon glyphicon-eye-open"></i>', array('controller' => 'alumnos', 'action' => 'view', $alumno['Alumno']['id']), array('class' => 'btn btn-success','escape' => false)); ?></span>
      <?php if(($current_user['role'] == 'superadmin') || ($current_user['role'] == 'admin')): ?>  
        <span class="link"><?php echo $this->Html->link('<i class= "glyphicon glyphicon-edit"></i>', array('controller' => 'alumnos', 'action' => 'edit', $alumno['Alumno']['id']), array('class' => 'btn btn-warning','escape' => false)); ?></span>
        <span class="link"><?php echo $this->Html->link('<i class= "glyphicon glyphicon-trash"></i>', array('controller' => 'alumnos', 'action' => 'delete', $alumno['Alumno']['id']), array('confirm' => 'Está seguro de borrar a '.$alumno['Alumno']['nombre_completo_alumno'], 'class' => 'btn btn-danger','escape' => false)); ?></span>
      <?php endif; ?>  
      </div>
    </div>
</div>
