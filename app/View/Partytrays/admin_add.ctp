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
<form method="post" action="/admin/partytrays/add" enctype="multipart/form-data">
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
    
  
<button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Save Changes</button>
    
        <?= $this->Form->hidden('Partytray.id'); ?>
    
</form>

<div id="roxyCustomPanel2" style="display: none; z-index: 100000;">
  <iframe src="/_/plugins/fileman/index.html?integration=custom&type=files&txtFieldId=ProductSidebarImage" style="width:100%;height:100%" frameborder="0">
  </iframe>
</div>


