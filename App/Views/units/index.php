	<section class="content-header">
		<span class="content-title"><i class="fa fa-home"></i> Units</span>
		<ul class="header-btns">
			<?php if(isset($_SESSION['user']) && $_SESSION['user']->aed_articles): ?>
			<li>
				<a href="<?= App::$path ?>unit/add" class="btn btn-success">
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
				<a href="<?= App::$path ?>unit/printlist" target="_blank" class="btn btn-default">
					<i class="fa fa-print"></i>
					<span class="hidden-xs hidden-sm"> Print</span>
				</a>
			</li>
		</ul>
	</section>
	<section class="content">
		<div class="row form-search-wrap">
			<div class="box-infos-search">
				<section class="content-header box-infos-header">
					<span class="content-title"><i class="fa fa-home"></i> Search</span>
				</section>
				<div class="box-infos">
					<form method="post" name="form-unit-search" id="form-unit-search">
				<div class="col-xs-12">
					<?=  $form->input('unit', 'Unit Name', [
						'type' => 'text',
						'id' => 'unit',
						'placeholder' => 'Unit Name',
						'data-validation' => 'length',
						'data-validation-optional' => 'true',
						'data-validation-length' => 'max20',
						'data-validation-error-msg' => 'Unit name must not be more than 20 char.'
					]); ?>
				</div>
			
				<div class="col-lg-12 form-group text-center">
					<button type="submit" id="btn-search-unit" class="btn btn-primary">Search</button>
				</div>
			</form>
				</div>
			</div>
		</div>
		<div class="table-responsive">
			<table class="table main-table rtl_table data-table table-striped table-hover">
			<tbody>
			<?php
			foreach($units as $unit): ?>
				<tr>
					<td class="table-actions">
						<?php if(isset($_SESSION['user']) && $_SESSION['user']->aed_articles): ?>
						<a href="<?= App::$path ?>unit/edit/<?= $unit->id ?>" class="btn btn-warning btn-xs">Edit</a>
						<?php if($unit->id > 0): ?>
						<a href="#" class="btn btn-danger btn-xs" unit_id="<?= $unit->id ?>" onclick="deleteElement(this, event);">Delete</a>
					<?php endif; ?>
					<?php endif; ?>

						</td>
					<td><?= $unit->unit ?></td>

				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
		</div>

	</section>
