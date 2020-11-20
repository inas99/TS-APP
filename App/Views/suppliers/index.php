	<section class="content-header">
		<span class="content-title"><i class="fa fa-home"></i> Factories</span>
		<ul class="header-btns">
			<?php if(isset($_SESSION['user']) && $_SESSION['user']->aed_suppliers): ?>
			<li>
				<a href="<?= App::$path ?>supplier/add" class="btn btn-success">
					<i class="fa fa-plus-circle"></i>
					<span class="hidden-xs hidden-sm"> Add</span>
				</a>
			</li>
			<?php endif; ?>
			<li>
				<a href="#" class="btn btn-primary" onclick="searchToogle('form-search-wrap', event);">
					<i class="fa fa-search"></i>
					<span class="hidden-xs hidden-sm"> Search</span>
				</a>
			</li>
			<li>
				<a href="<?= App::$path ?>supplier/printlist" target="_blank" class="btn btn-default">
					<i class="fa fa-print"></i>
					<span class="hidden-xs hidden-sm"> Print</span>
				</a>
			</li>
		</ul>
	</section>
	<section class="content">
		<div class="table-responsive">
			<table class="table main-table rtl_table data-table table-striped table-hover">
			<thead>
			<tr>
				<th>&nbsp;</th>
				<th>Number</th>
				<th>Name</th>
				<th>Phone Number</th>
				<th>Email</th>
				<th>Post Code</th>
				<th>City</th>
				<th>Address</th>
			</tr>
			</thead>
			<tbody>
			<?php
			foreach($suppliers as $supplier): ?>
				<tr>
					<td class="table-actions">
						<a href="<?= App::$path ?>supplier/show/<?= $supplier->id ?>" class="btn btn-success btn-xs">Display</a>
				<?php if(isset($_SESSION['user']) && $_SESSION['user']->aed_suppliers): ?>
					<a href="<?= App::$path ?>supplier/edit/<?= $supplier->id ?>" class="btn btn-warning btn-xs">Edit</a>
						<a href="#" class="btn btn-danger btn-xs" supplier_id="<?= $supplier->id ?>" onclick="deleteElement(this, event);">Delete</a>
					<?php endif; ?>
					</td>
					<td><?= $supplier->id ?></td>
					<td><?= $supplier->name ?></td>
					<td><?= $supplier->tel ?></td>
					<td><?= $supplier->email ?></td>
					<td><?= $supplier->zip_code ?></td>
					<td><?= $supplier->city ?></td>
					<td><?= $supplier->address ?></td>

				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
		</div>

	</section>
