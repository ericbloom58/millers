<h1>Manage Recipes</h1>

<div class='row'>
    <div class='col-md-8'>
        <h2>Current Recipes</h2>
<table class="table table-striped table-bordered table-hover dataTable" id="aproduct-table">
            <thead>
            <th>Name</th>
            <th>Options</th>
            </thead>
            <tbody>
        <?php foreach($recipes as $recipe): ?>
                <tr>
                    <td><?= $recipe['Recipe']['name']; ?></td>
                    <td><a href='/admin/recipes/edit/<?= $recipe['Recipe']['id']; ?>'><i class='fa fa-edit'></i> Edit</a>&nbsp; &nbsp; 
                        <a class='text-red' 
                           href='/admin/recipes/delete/<?= $recipe['Recipe']['id']; ?>'
                           onclick='return confirm("Are you sure you want to delete this item? This action cannot be undone.");'><i class='fa fa-remove'></i> Remove</a></td>
                </tr>
        <?php endforeach; ?>
            </tbody>
            </table>
    </div>

    <div class='col-md-4'>

        <h2>Add Recipe</h2>
<form action='/admin/recipes/add' method='POST'  enctype="multipart/form-data">
    <div class='row form-group'>
    <div class='col-md-12'>
    <label>
        Name
    </label>
    <input class='input form-control' name='data[Recipe][name]' type='text' placeholder="Enter new name here..." />
    </div>
    </div>
    <div class='row form-group'>
    <div class='col-md-12'>
    <label>
        Description
    </label>
        <textarea class='input form-control' name='data[Recipe][description]'></textarea>
    <label>
        Product to be Used for
    </label>
        			<?php echo $this->Form->input('Recipe.category', array('div' => 'col-md-4', 'label' => 'Recipe Type', 'class' => 'input form-control', 'options' => array(
                        'beef' => 'Beef Recipes',
                        'pork' => 'Pork Recipes',
                        'chickey' => 'Chicken and Turkey Recipes',
                        'seafood' => 'Seafood',
                        'vegetable' => 'Vegetable Reciples',
                        'crocktoberfest' => 'Crocktoberfest Recipes',
                        'tenminutes' => '10 Minutes or Less',
                        'tentothirty' => '10 to 30 Minutes',
                        'thirtyminsplus' => '30 minutes or more',
                        'sidedishes' => 'Side Dishes',
                        'besafe' => 'Be Safe Proper Cooking Times and Temperatures'
                    ))); ?>
    </div>
    </div>
    
    <div class='row'>
        <div class='col-md-12'>
             <input style='margin-top: 24px;' type='submit' class='btn btn-success' value='Add Recipe' />
        </div>
    </div>
    
        
    
</form>
    </div>
</div>
