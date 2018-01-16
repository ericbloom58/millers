<?php $this->set('title_for_layout', 'New Category'); ?>
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
<form method="post" action="/admin/categories/add" enctype="multipart/form-data">

		<div class="row form-group">	
			<?php echo $this->Form->input('Category.name', array('div' => 'col-md-8', 'label' => 'Category Name', 'autofocus', 'class' => 'input form-control')); ?>
		</div>
		<div class="row form-group">
			<?php echo $this->Form->input('Category.description', array('div' => 'col-md-12', 'label' => false, 'rows' => '6', 'class' => 'tinymce form-control')); ?>
		</div>
		<div class="row form-group">
			<?php echo $this->Form->input('Category.price', array('div' => 'col-md-8', 'label' => 'Category Price', 'autofocus', 'class' => 'input form-control')); ?>
		</div>
                <div class='row form-group'>
                        <?php echo $this->Form->input('Category.category', array('div' => 'col-md-4', 'label' => 'Category', 'class' => 'input form-control', 'options' => array(
                        'meat' => 'Meats',
                        'hotfood' => 'Hot Foods',
                        'partytray' => 'Party Trays',
                        'subandsandwhich' => 'Subs and Sandwiches'
                    ))); ?>
                </div>



<?php // echo $this->Form->hidden('Category.id'); ?>
<?php // echo $this->Form->hidden('Category.parent_id', array('value' => $parentId)); ?>
<button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Save Changes</button>

</form>

<div id="roxyCustomPanel2" style="display: none; z-index: 100000;">
  <iframe src="/_/plugins/fileman/index.html?integration=custom&type=files&txtFieldId=CategorySidebarImage" style="width:100%;height:100%" frameborder="0">
  </iframe>
</div>