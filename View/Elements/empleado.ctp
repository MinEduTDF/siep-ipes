<div class="col-md-6">
	<div class="unit">
       <div class="col-md-4 col-sm-6 col-xs-12 thumbnail text-center">
            <!-- Sí no tiene foto presenta una imagen de avatar según el sexo e indica estado de pre-inscripción. --> 
                <?php if(($foto == 0) && ($empleado['Empleado']['sexo'] == 'MASC')): ?>
                         <span class="checked"></span><?php echo $this->Html->image('../img/avatar-masculino.png', array('class' => 'img-thumbnail img-responsive img-rounded')); ?>
                <?php endif; ?>
                <?php if(($foto == 0) && ($empleado['Empleado']['sexo'] == 'FEM')): ?>
                         <span class="checked"></span><?php echo $this->Html->image('../img/avatar-femenino.png', array('class' => 'img-thumbnail img-responsive img-rounded')); ?>
                <?php endif; ?>
                <!-- Sí tiene foto la presenta e indica estado de pre-inscripción. -->
                <?php if(($foto == 1)): ?>
                         <span class="checked"></span><?php echo $this->Html->image('../files/alumno/foto/' . $empleado['Empleado']['foto_dir'] . '/' . 'thumb_' .$empleado['Empleado']['foto'], array('class' => 'img-thumbnail img-responsive img-rounded')); ?>
                <?php endif; ?>
                <?php if(($foto == 1)): ?>
                         <span class="error"></span><?php echo $this->Html->image('../files/alumno/foto/' . $empleado['Empleado']['foto_dir'] . '/' . 'thumb_' .$empleado['Empleado']['foto'], array('class' => 'img-responsive img-rounded img-thumbnail')); ?>
                <?php endif; ?>
       </div>
       <span class="name"><span class="glyphicon glyphicon-user"></span> <?php echo $empleado['Empleado']['apellidos'].' '.$empleado['Empleado']['nombres']; ?></span><br/>
       <span class="text"><span class="glyphicon glyphicon-earphone"></span> <?php echo $empleado['Empleado']['telefono_nro']; ?></span><br/>
       <span class="text"><span class="glyphicon glyphicon-envelope"></span> <?php echo $this->Html->link($empleado['Empleado']['email'],'mailto:'.$empleado['Empleado']['email']); ?></span><br/>
       <span class="text"><span class="glyphicon glyphicon-map-marker"></span> <?php echo $empleado['Empleado']['ciudad']; ?><br/>
       <hr />
       <div class="text-right"> 
           <span class="link"><?php echo $this->Html->link('<i class="glyphicon glyphicon-edit"></i>', array('controller' => 'empleados', 'action' => 'edit', $empleado['Empleado']['id']), array('class' => 'btn btn-warning', 'escape' => false)); ?></span>
           <span class="link"><?php echo $this->Html->link('<i class="glyphicon glyphicon-eye-open"></i>', array('controller' => 'empleados', 'action' => 'view', $empleado['Empleado']['id']), array('class' => 'btn btn-success', 'escape' => false)); ?></span>
           <span class="link"><?php echo $this->Html->link('<i class="glyphicon glyphicon-trash"></i>', array('controller' => 'empleados', 'action' => 'delete', $empleado['Empleado']['id']), array('class' => 'btn btn-danger', 'escape' => false)); ?></span>
	   </div>
	</div>
</div>