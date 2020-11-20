F	<section class="content-header">
		<span class="content-title"><i class="fa fa-home"></i>Processing prices Offers Request</span>
	</section>
	<div class="row doc-infos">
		<div class="col-sm-6 col-xs-12">
			<div class="box-infos-search">
				<section class="content-header box-infos-header">
					<span class="content-title"> Offers Prices</span>
				</section>
				<div class="box-infos">
					<input type="hidden" id="quotation_clt_id" value="<?= $quotation_clt->id ?>">
					<h3>Number: <?= $quotation_clt->num ?></h3>
					<p>Date: <?= $quotation_clt->dt ?></p>
					<p>Subject: <?= $quotation_clt->subject ?></p>
					<p>Notes: <?= $quotation_clt->discr ?></p>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-xs-12">
			<div class="box-infos-search">
				<section class="content-header box-infos-header">
					<span class="content-title"><i class="fa fa-home"></i> Consumer</span>
				</section>
				<div class="box-infos">
					<input type="hidden" id="client_id" value="<?= $quotation_clt->client_id ?>">
					<h3 class="box-infos-name"><?= $quotation_clt->client_name ?></h3>
					<p class="box-infos-city"><?= $quotation_clt->city ?></p>
					<p class="box-infos-address"><?= $quotation_clt->address ?></p>
				</div>
			</div>
		</div>
	</div>
	<section class="content-header">
		<span class="content-title"><i class="fa fa-home"></i>Products</span>
		<ul class="header-btns">
			<?php if(isset($_SESSION['user']) && $_SESSION['user']->aed_sales): ?>
			<li>
				<a href="#" class="btn btn-warning" onclick="loadPrsClt(event);" title="Import Prices Request">
					<i class="fa fa-list"></i>
					<span class="hidden-xs hidden-sm">Import Prices Request</span>
				</a>
			</li>
			<li>
				<a href="<?= App::$path ?>quotation_clt/addart/<?= $quotation_clt->id ?>" class="btn btn-success">
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
				<a href="<?= App::$path ?>quotation_clt/printdetails/<?= $quotation_clt->id ?>" target="_blank" class="btn btn-default">
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
				<th>Product Number</th>
				<th>Code</th>
				<th>Name/th>
				<th>Amount</th>
				<th>Price</th>
				<th>Total</th>
			</tr>
			</thead>
			<tbody>
			<?php
			foreach($quotation_clt_arts as $quotation_clt_art): ?>
				<tr>
					<td class="table-actions">
				<?php if(isset($_SESSION['user']) && $_SESSION['user']->aed_articles): ?>
					<a href="<?= App::$path ?>quotation_clt/editart/<?= $quotation_clt_art->quotation_clt_id ?>/<?= $quotation_clt_art->id ?>" class="btn btn-warning btn-xs">Edit</a>
						<a href="#" class="btn btn-danger btn-xs" quotation_art_id="<?= $quotation_clt_art->id ?>" onclick="deleteElementArt(this, event);">Delete</a>

				<?php endif; ?>
					</td>
					<td><?= $quotation_clt_art->art_id ?></td>
					<td><?= $quotation_clt_art->ref ?></td>
					<td><?= $quotation_clt_art->desig ?></td>
					<td><?= $quotation_clt_art->qte ?></td>
					<td class="currency"><?= App::nFormat($quotation_clt_art->price) ?></td>
					<td class="currency"><?= App::nFormat($quotation_clt_art->total) ?></td>

				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
		</div>
		<div>
			<div class="col-sm-6 col-md-4">
				<label>Total Prices</label>
				<input type="text" value="<?= App::nFormat($totals->total_ht) ?>" class="form-control currency" readonly>
			</div>
			<div class="col-sm-6 col-md-4">
				<label  style="direction: ltr">TVA (<span><?= number_format($totals->total_tva_rate,0,'','') ?></span> %)</label>
				<input type="text" value="<?= App::nFormat($totals->total_tva) ?>" class="form-control currency" readonly>
			</div>
			<div class="col-sm-6 col-md-4">
				<label> Total TTC</label>
				<input type="text" value="<?= App::nFormat($totals->total_ttc) ?>" class="form-control currency" readonly>
			</div>

		</div>
	</section>
	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Prices Requests</h4>
				</div>
				<div class="modal-body">
					<div class="table-responsive">
						<table class="table rtl_table data-table table-striped table-hover">
							<thead>
							<tr>
								<th>&nbsp;</th>
								<th>Number</th>
								<th>Date</th>
								<th>Consumer</th>
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
