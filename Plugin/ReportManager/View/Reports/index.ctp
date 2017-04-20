<?php
/*
Copyright (c) 2012-2013 Luis E. S. Dias - www.smartbyte.com.br

Permission is hereby granted, free of charge, to any person obtaining
a copy of this software and associated documentation files (the
"Software"), to deal in the Software without restriction, including
without limitation the rights to use, copy, modify, merge, publish,
distribute, sublicense, and/or sell copies of the Software, and to
permit persons to whom the Software is furnished to do so, subject to
the following conditions:

The above copyright notice and this permission notice shall be
included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE
LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION
OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION
WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
*/
?>
<script type="text/javascript">
    firstLevel = "<?php echo Router::url('/'); ?>";
</script>
<?php

?>
<?php echo $this->Html->script(array('https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js')); ?>
<?php echo $this->Html->script('/ReportManager/js/index.js'); ?>


<div class="TituloSec">Report Manager</div>
    <div id="ContenidoSec">
        <div class="unit text-center">
    <?php
        
        echo $this->Form->create('ReportManager');
        echo '<fieldset>';
        echo '<div class="subtitulo">Nuevo Reporte</div>';

        echo $this->Form->input('model',array(
            'type'=>'select',            
            'label'=>__d('report_manager','Model',true),
            'options'=>$models,
            'empty'=>__d('report_manager','--Select--',true)
            ));

      //  echo '<select class="form-control input-lg"></select>';
        echo '<div id="ReportManagerOneToManyOptionSelect">';
        echo $this->Form->input('one_to_many_option',array(
            'type'=>'select',
            'label'=>__d('report_manager','One to many option',true),
            'options'=>array(),
            'empty'=>__d('report_manager','<None>',true)
            ));
        echo '</div>';
        echo $this->Form->input('new',array(
            'type'=>'hidden',
            'value'=>'1'
            ));        
        echo '</fieldset>';
        echo $this->Form->submit(__d('report_manager','New',true),array('name'=>'new','class' => 'btn btn-primary btn-lg'));
        echo $this->Form->end();

        
        echo '</div><div class="unit text-center">';
        
        echo $this->Form->create('ReportManager');
        echo '<fieldset>';
        echo '<div class="subtitulo">Cargar informe</div>';       
        
        echo '<div id="ReportManagerSavedReportOptionContainer">';
        echo $this->Form->input('saved_report_option',array(
            'type'=>'select',
            'label'=>__d('report_manager','Saved reports',true),
            'options'=>$files,
            'empty'=>__d('report_manager','--Select--',true)
            ));

        echo $this->Form->input('load',array(
            'type'=>'hidden',
            'value'=>'1'
            ));        
        echo '<button type="button" class="deleteReport">' . __d('report_manager','Delete',true) . '</button>';
        echo '</fieldset>';
        echo $this->Form->submit(__d('report_manager','Load',true),array('name'=>'load','class' => 'btn btn-primary btn-lg'));
        echo $this->Form->end();
         echo '</div>';
    ?>

    </div>
</div>