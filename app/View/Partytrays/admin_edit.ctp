<?php $this->set('title_for_layout', 'New Party Tray'); ?>
<?php $this->Html->script('/_/plugins/tinymce/tinymce.min.js', array('block' => 'scripts')); ?>

<?php $this->start('scripts'); ?>
<script type="text/javascript">
tinymce.init(tinymceSettings);
function closeCustomRoxy2(){
	$('#roxyCustomPanel2').dialog('close');
}
</script>
<?php $this->end(); ?>
<style>
    select.form-control {
        height: 250px;
    }
    </style>
            <?= $this->Form->create('edit', array('type' => 'file')); ?>
    <div class='row form-group'>
    <div class='col-md-12'>
        <?= $this->Form->input('Partytray.name', array('class' => 'input form-control')); ?> 
		
    
    </div>
    </div>
                <div class='row form-group'>
    <div class='col-md-12'>
        <?= $this->Form->input('Partytray.description', array('div' => 'col-md-12', 'label' => false, 'rows' => '6', 'class' => 'tinymce form-control')); ?>
    </div>
    </div>
                <div class='row form-group'>
    <div class='col-md-3'>
        <?= $this->Form->input('Partytray.price', array('class' => 'input form-control')); ?>
    </div>
    </div>
    
    <div class='row'>
        <div class='col-md-12'>
             <input style='margin-top: 24px;' type='submit' class='btn btn-success' value='Save Changes' />
        </div>
    </div>
    
        <?= $this->Form->hidden('Partytray.id'); ?>
    
<?= $this->Form->end(); ?>

<div id="roxyCustomPanel2" style="display: none; z-index: 100000;">
  <iframe src="/_/plugins/fileman/index.html?integration=custom&type=files&txtFieldId=PartytraySidebarImage" style="width:100%;height:100%" frameborder="0">
  </iframe>
</div>


