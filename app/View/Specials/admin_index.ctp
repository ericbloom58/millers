<?php $this->set('title_for_layout', 'Manage Specials'); ?>
<!-- view/specials/index -->
<?php if (!empty($specials)): ?>
<table class="table table-striped table-bordered table-hover dataTable" id="aspecial-table">
	<thead>
		<tr>
					<th>Name</th>
                        <th>File</th>
                        <th>Options</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($specials as $special) { ?>
		<tr>
			<td><?php echo $special['Special']['name']; ?></td>
                        <td><?php echo $special['Special']['image_url']; ?></td>
                        <td>
				<!--<a role="button" class="btn btn-primary" href="/admin/specials/edit/<?php echo $special['Special']['id']; ?>"><i class="fa fa-edit"></i> Edit</a>&nbsp;-->
				<a role="button" class="btn btn-danger delete-object" onclick='return confirm("Are you sure you want to delete \"<?php echo $special['Special']['name']; ?>?\" This action CANNOT be undone.")'
                                   href="/admin/specials/delete/<?php echo $special['Special']['id']; ?>"><i class="fa fa-trash-o"></i> Delete</a>
			</td>
		</tr>
	<?php } ?>
	</tbody>
</table>

<?php echo $this->element('modals/delete', array('title' => 'Delete Special', 'text' => 'delete the <strong>{name}</strong> special', 'action' => '/admin/specials/delete/{id}')); ?>

<?php else: ?>
<p>There is no special in this section.</p>
<?php endif; ?>

<a role="button" href="/admin/specials/add" class="btn btn-primary small"><i class="fa fa-plus"></i> Create New Special</a>

