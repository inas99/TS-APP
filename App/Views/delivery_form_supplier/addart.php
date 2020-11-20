	<section class="content-header">
		<span class="content-title"><i class="fa fa-home"></i> Add a product for importing</span>
	</section>
	<section class="content">
		<div class="row doc-infos">
			<div class="col-sm-6 col-xs-12">
				<div class="box-infos-search">
					<section class="content-header box-infos-header">
						<span class="content-title">Import products</span>
					</section>
					<div class="box-infos">
						<h3>Number: <?= $delivery_form_supplier->num ?></h3>
						<p>Date: <?= $delivery_form_supplier->dt ?></p>
						<p>Subject: <?= $delivery_form_supplier->subject ?></p>
						<p>Notes: <?= $delivery_form_supplier->discr ?></p>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-xs-12">
				<div class="box-infos-search">
					<section class="content-header box-infos-header">
						<span class="content-title"><i class="fa fa-home"></i> Factory</span>
					</section>
					<div class="box-infos">
						<h3 class="box-infos-name"><?= $delivery_form_supplier->supplier_name ?></h3>
						<p class="box-infos-city"><?= $delivery_form_supplier->city ?></p>
						<p class="box-infos-address"><?= $delivery_form_supplier->address ?></p>
					</div>
				</div>
			</div>
		</div>
		<form method="post" name="form-delivery_form-article-add" id="form-delivery_form-article-add" enctype="multipart/form-data">
			<div class="row">
					<div class="col-xs-12 box-infos-search">
						<section class="content-header box-infos-header">
							<span class="content-title"><i class="fa fa-home"></i> Product</span>
							<?php if(!isset($delivery_form_supplier_art)){ ?>
							<a href="#" class="btn btn-default btn-search btn-infos-search" onclick="loadArticles(event);">
								<i class="fa fa-search"></i>
							</a>
							<?php } ?>

						</section>
						<div class="box-infos">
							<?php if(isset($delivery_form_supplier_art)){ ?>
								<input type="hidden" value="<?= $delivery_form_supplier_art->id ?>" name="art_id" class="box-infos-id">
								<h3 class="box-infos-desig"><?= $delivery_form_supplier_art->desig ?></h3>
								<p class="box-infos-ref"><?= $delivery_form_supplier_art->ref ?></p>
							<?php } else { ?>
								<input type="hidden"
									   name="art_id"
									   class="box-infos-id"
									   data-validation="length"
									   data-validation-length="1-255"
									   data-validation-error-msg="please choose a product.">
								<h3 class="box-infos-desig"></h3>
								<p class="box-infos-ref"></p>
							<?php } ?>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-4">
						<?=  $form->input('qte', 'Quantity', [
							'type' => 'text',
							'id' => 'qte',
							'onkeyup' => 'calcTotal();',
							'placeholder' => 'quantity',
							'data-validation' => 'number',
							'data-validation-allowing' => 'range[0.5;1000000],float',
							'data-validation-error-msg' => 'quantity must be a number.'
						]); ?>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-4">
						<?=  $form->input('price', 'Price', [
							'type' => 'text',
							'id' => 'price',
							'onkeyup' => 'calcTotal();',
							'placeholder' => 'price',
							'data-validation' => 'number',
							'data-validation-allowing' => 'range[0.5;1000000],float',
							'data-validation-error-msg' => 'price must be a number .'
						]); ?>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-4">
						<?=  $form->input('total', 'Total', [
							'type' => 'text',
							'value' => isset($delivery_form_supplier_art->total) ? $delivery_form_supplier_art->total : '0.00',
							'id' => 'total',
							'readonly' => 'readonly',
							'class' => 'form-control currency'
						]); ?>
					</div>
					<div class="col-lg-12 form-group text-center">
						<hr>
						<button type="submit" id="btn-save-delivery_form-article" class="btn btn-primary">Save</button>
					</div>
			</div>
		</form>

	</section>
	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Products</h4>
				</div>
				<div class="modal-body">
					<div class="table-responsive">
						<table class="table rtl_table data-table table-striped table-hover">
							<thead>
							<tr>
								<th>&nbsp;</th>
								<th>Number</th>
								<th>Code</th>
								<th>Name</th>
								<th>Unit</th>
								<th>Type</th>
								<th>TVA</th>
								<th>Factory name</th>
							</tr>
							</thead>
							<tbody>

							</tbody>
						</table>
					</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
