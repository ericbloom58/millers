
<?php $this->set('title_for_layout', 'Manage Categorys'); ?>

<?php $this->start('jquery-scripts'); ?>
	$('#category-table').dataTable({	
		"sPaginationType": "bootstrap"
	});
<?php $this->end(); ?>
<!-- view/categorys/index -->
<?php if (!empty($categories)): ?>
<table class="table table-striped table-bordered table-hover dataTable" id="acategory-table">
	<thead>
		<tr>
			<th>Name</th>
                        <th>Category</th>
			<th>Options</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($categories as $category) { ?>
		<tr>
			<td><?php echo $category['Category']['name']; ?></td>
                        <td><?php echo $category['Category']['category']; ?> </td>
			<td>
				<a role="button" class="btn btn-primary" href="/admin/categorys/edit/<?php echo $category['Category']['id']; ?>"><i class="fa fa-edit"></i> Edit</a>&nbsp;
				<a role="button" class="btn btn-danger delete-object" onclick='return confirm("Are you sure you want to delete \"<?php echo $category['Category']['name']; ?>?\" This action CANNOT be undone.")'
                                   href="/admin/categorys/delete/<?php echo $category['Category']['id']; ?>"><i class="fa fa-trash-o"></i> Delete</a>
			</td>
		</tr>
	<?php } ?>
	</tbody>
</table>

<?php echo $this->element('modals/delete', array('title' => 'Delete Category', 'text' => 'delete the <strong>{name}</strong> category', 'action' => '/admin/categorys/delete/{id}')); ?>

<?php else: ?>
<p>There is no category in this section.</p>
<?php endif; ?>

<a role="button" href="/admin/categorys/add" class="btn btn-primary small"><i class="fa fa-plus"></i> Create New Category</a>
