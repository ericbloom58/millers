<?php $this->set('title_for_layout', 'New Post'); ?>
<?php $this->Html->script('/_/plugins/tinymce/tinymce.min.js', array('block' => 'scripts')); ?>

<?php $this->start('scripts'); ?>
<script type="text/javascript">
tinymce.init(tinymceSettings);
function closeCustomRoxy2(){
	$('#roxyCustomPanel2').dialog('close');
}
</script>
<?php $this->end(); ?>



<form method="post" action="/admin/blog/add">




		<div class="row form-group">	
			<?php echo $this->Form->input('Blog.name', array('div' => 'col-md-4', 'label' => 'Post Name', 'autofocus', 'class' => 'input form-control')); ?>
			<?php echo $this->Form->input('Blog.description', array('div' => 'col-md-4', 'label' => 'Post Description', 'autofocus', 'class' => 'input form-control')); ?>
                </div>
		
		<div class="row form-group">
			<?php echo $this->Form->input('Blog.blog', array('div' => 'col-md-12', 'label' => false, 'rows' => '20', 'cols' => '30', 'style' => 'height: 600px;', 'class' => 'tinymce form-control')); ?>
		</div>



<?php // echo $this->Form->hidden('Blog.id'); ?>
<?php // echo $this->Form->hidden('Blog.parent_id', array('value' => $parentId)); ?>
<button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Save Changes</button>

</form>

<div id="roxyCustomPanel2" style="display: none; z-index: 100000;">
  <iframe src="/_/plugins/fileman/index.html?integration=custom&type=files&txtFieldId=BlogSidebarImage" style="width:100%;height:100%" frameborder="0">
  </iframe>
</div>

 