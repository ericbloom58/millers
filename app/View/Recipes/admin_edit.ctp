<div class='row'>
    <div class='col-md-8'>
        <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Recipe</h3>

            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <?= $this->Form->create('edit', array('type' => 'file')); ?>
    <div class='row form-group'>
    <div class='col-md-12'>
        <?= $this->Form->input('Recipe.name', array('class' => 'input form-control')); ?> 
		
    
    </div>
    </div>
                <div class='row form-group'>
    <div class='col-md-12'>
        <?= $this->Form->input('Recipe.description', array('class' => 'input form-control')); ?>
    
    </div>
    </div>
    
    <div class='row'>
        <div class='col-md-12'>
             <input style='margin-top: 24px;' type='submit' class='btn btn-success' value='Save Changes' />
        </div>
    </div>
    
        <?= $this->Form->hidden('Recipe.id'); ?>
    
<?= $this->Form->end(); ?>
            </div>
            <!-- /.box-body -->
          </div>
    </div>
</div>

