
<?php $this->set('title_for_layout', 'Manage Products'); ?>

<?php $this->start('jquery-scripts'); ?>
	$('#product-table').dataTable({	
		"sPaginationType": "bootstrap"
	});
<?php $this->end(); ?>
<!-- view/products/index -->
<?php if (!empty($partytrays)): ?>
<table class="table table-striped table-bordered table-hover dataTable" id="aproduct-table">
            <thead>
            <th>Name</th>
            <th>Options</th>
            </thead>
            <tbody>
        <?php foreach($partytrays as $partytray): ?>
                <tr>
                    <td><?= $partytray['Partytray']['name']; ?></td>
                    <td><a href='/admin/partytrays/edit/<?= $partytray['Partytray']['id']; ?>'><i class='fa fa-edit'></i> Edit</a>&nbsp; &nbsp; 
                        <a class='text-red' 
                           href='/admin/partytrays/delete/<?= $partytray['Partytray']['id']; ?>'
                           onclick='return confirm("Are you sure you want to delete this item? This action cannot be undone.");'><i class='fa fa-remove'></i> Remove</a></td>
                </tr>
        <?php endforeach; ?>
            </tbody>
</table>

<?php echo $this->element('modals/delete', array('title' => 'Delete Product', 'text' => 'delete the <strong>{name}</strong> product', 'action' => '/admin/products/delete/{id}')); ?>

<?php else: ?>
<p>There is no product in this section.</p>
<?php endif; ?>

<a role="button" href="/admin/partytrays/add" class="btn btn-primary small"><i class="fa fa-plus"></i> Create New Party Tray</a>
