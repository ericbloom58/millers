<?php $this->set('title_for_layout', 'New Special'); ?>
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
<form method="post" action="/admin/specials/add" enctype="multipart/form-data">

		<div class="row form-group">	
			<?php echo $this->Form->input('Special.name', array('div' => 'col-md-6', 'label' => 'Special Name', 'autofocus', 'class' => 'input form-control')); ?>
			 <?php echo $this->Form->input('Special.image_url', array('type'=>'file', 'div' => 'col-md-6', 'label' => 'Special Image...', 'class' => 'input form-control')); ?>
		</div>
    

<?php // echo $this->Form->hidden('Special.id'); ?>
<?php // echo $this->Form->hidden('Special.parent_id', array('value' => $parentId)); ?>
<button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Save Changes</button>

</form>

<div id="roxyCustomPanel2" style="display: none; z-index: 100000;">
  <iframe src="/_/plugins/fileman/index.html?integration=custom&type=files&txtFieldId=SpecialSidebarImage" style="width:100%;height:100%" frameborder="0">
  </iframe>
</div>

