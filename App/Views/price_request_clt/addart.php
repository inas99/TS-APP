	<section class="content-header">
		<span class="content-title"><i class="fa fa-home"></i>Add A Product</span>
	</section>
	<section class="content">
		<div class="row doc-infos">
			<div class="col-sm-6 col-xs-12">
				<div class="box-infos-search">
					<section class="content-header box-infos-header">
						<span class="content-title"> Price Request</span>
					</section>
					<div class="box-infos">
						<h3>Number: <?= $pr_clt->num ?></h3>
						<p>Date: <?= $pr_clt->dt ?></p>
						<p>Subjcet: <?= $pr_clt->subject ?></p>
						<p>Notes: <?= $pr_clt->discr ?></p>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-xs-12">
				<div class="box-infos-search">
					<section class="content-header box-infos-header">
						<span class="content-title"><i class="fa fa-home"></i> Consumer</span>
					</section>
					<div class="box-infos">
						<h3 class="box-infos-name"><?= $pr_clt->client_name ?></h3>
						<p class="box-infos-city"><?= $pr_clt->city ?></p>
						<p class="box-infos-address"><?= $pr_clt->address ?></p>
					</div>
				</div>
			</div>
		</div>
		<form method="post" name="form-pr-article-add" id="form-pr-article-add" enctype="multipart/form-data">
			<div class="row">
					<div class="col-xs-12 box-infos-search">
						<section class="content-header box-infos-header">
							<span class="content-title"><i class="fa fa-home"></i> Product</span>
							<?php if(!isset($pr_clt_art)){ ?>
							<a href="#" class="btn btn-default btn-search btn-infos-search" onclick="loadArticles(event);">
								<i class="fa fa-search"></i>
							</a>
							<?php } ?>

						</section>
						<div class="box-infos">
							<?php if(isset($pr_clt_art)){ ?>
								<input type="hidden" value="<?= $pr_clt_art->id ?>" name="art_id" class="box-infos-id">
								<h3 class="box-infos-desig"><?= $pr_clt_art->desig ?></h3>
								<p class="box-infos-ref"><?= $pr_clt_art->ref ?></p>
							<?php } else { ?>
								<input type="hidden"
									   name="art_id"
									   class="box-infos-id"
									   data-validation="length"
									   data-validation-length="1-255"
									   data-validation-error-msg="Please choose a product.">
								<h3 class="box-infos-desig"></h3>
								<p class="box-infos-ref"></p>
							<?php } ?>
						</div>
					</div>
					<div class="col-xs-12">
						<?=  $form->input('qte', 'Amount', [
							'type' => 'text',
							'placeholder' => 'Amount',
							'data-validation' => 'number',
							'data-validation-allowing' => 'range[0.5;1000000],float',
							'data-validation-error-msg' => 'Amount must be a number.'
						]); ?>
					</div>
					<div class="col-lg-12 form-group text-center">
						<hr>
						<button type="submit" id="btn-save-pr-article" class="btn btn-primary">Save</button>
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
								<th>Tyoe</th>
								<th>TVA</th>
								<th>Exporter</th>
							</tr>
							</thead>
							<tbody>

							</tbody>
						</table>
					</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Exit</button>
				</div>
			</div>
		</div>
	</div>
