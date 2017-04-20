<div class="row">
  <div class="col-lg-6">
    <?php echo $this->Form->create('User', array('type'=>'get','url'=>'index')); ?>
    <div class="input-group">
      <?php echo $this->Form->input('username', array('label' => false, 'class' => 'form-control', 'autocomplete' => 'off', 'placeholder' => 'Ingrese username...')); ?>
      <span class="input-group-btn">
        <?php echo $this->Form->button('<i class="glyphicon glyphicon-search"></i>', array('div' => false, 'class' => 'btn btn-primary', 'escape' => false)); ?>
      </span>
    </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->
</div>