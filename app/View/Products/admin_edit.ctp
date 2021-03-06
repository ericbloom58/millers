<?php $this->set('title_for_layout', 'New Product'); ?>
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
    <?php $cats = array();
    foreach($this->data['Category'] as $c)
    {
        $cats[] = $c['id'];
    }
    ?>
<?= $this->Form->create('edit', array('type' => 'file')); ?>
    <?= $this->Form->hidden('Product.id'); ?>
		<div class="row form-group">	
			<?php echo $this->Form->input('Product.name', array('div' => 'col-md-8', 'label' => 'Product Name', 'autofocus', 'class' => 'input form-control')); ?>
		</div>
		
		<div class="row form-group">
			<?php echo $this->Form->input('Product.description', array('div' => 'col-md-12', 'label' => false, 'rows' => '6', 'class' => 'tinymce form-control')); ?>
		</div>
    <div class='row form-group'>
        <div class="col-md-4">
            <label>Categories</label>
            <select multiple name='data[Category][]' class="input form-control" style="height:100px;">
                <?php foreach($categories as $i => $c):
                    $selected = "";
                    if(in_array($i, $cats))
                            $selected = 'selected';
                    ?>
                <option <?= $selected; ?> value='<?= $i ?>'><?= $c ?></option>
                <?php
                endforeach; ?>
            </select>
        </div>
		<div class="row form-group">
			<?php echo $this->Form->input('Product.price', array('div' => 'col-md-8', 'label' => 'Product Price', 'autofocus', 'class' => 'input form-control')); ?>
		</div>
    </div>
<button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Save Changes</button>

</form>

<div id="roxyCustomPanel2" style="display: none; z-index: 100000;">
  <iframe src="/_/plugins/fileman/index.html?integration=custom&type=files&txtFieldId=ProductSidebarImage" style="width:100%;height:100%" frameborder="0">
  </iframe>
</div>
