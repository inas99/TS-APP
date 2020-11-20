<section class="content-header">
    <span class="content-title"><i class="fa fa-edit"></i> Adding or editing an import order</span>
</section>
<section class="content">
    <form method="post" name="form-delivery_form-add" id="form-delivery_form-add" enctype="multipart/form-data">
        <div class="row form-add-top">
            <div class="col-xs-12">
                <div class="box-infos-search">
                    <section class="content-header box-infos-header">
                        <span class="content-title"><i class="fa fa-home"></i> Factories</span>
                        <a href="#" class="btn btn-default btn-search btn-infos-search" onclick="LoadSuppliers(event);">
                            <i class="fa fa-search"></i>
                        </a>
                    </section>
                    <div class="box-infos">
                        <?php if(isset($delivery_form)){ ?>
                        <input type="hidden" value="<?= $delivery_form->supplier_id ?>" name="box-infos-id" class="box-infos-id">
                        <h3 class="box-infos-name"><?= $delivery_form->supplier_name ?></h3>
                        <p class="box-infos-city"><?= $delivery_form->city ?></p>
                        <p class="box-infos-address"><?= $delivery_form->address ?></p>
                        <?php } else { ?>
                            <input type="hidden" name="box-infos-id" class="box-infos-id">
                            <h3 class="box-infos-name"></h3>
                            <p class="box-infos-city"></p>
                            <p class="box-infos-address"></p>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <?=  $form->input('num', 'Number', [
                    'type' => 'text',
                    'placeholder' => 'number',
                    'data-validation' => 'length',
                    'data-validation-length' => '1-100',
                    'data-validation-error-msg' => 'number must not be more than 100.'
                ]); ?>
                <?=  $form->input('dt', 'Date', [
                    'type' => 'text',
                    'value' => date('d-m-Y'),
                    'placeholder' => 'date',
                    'data-validation' => 'date',
                    'data-validation-format' => 'dd-mm-yyyy',
                    'data-validation-error-msg' => 'date format should be as : dd-mm-yyy'
                ]); ?>
                <?=  $form->input('subject', 'Subject', [
                    'type' => 'text',
                    'placeholder' => 'subject',
                    'data-validation' => 'length',
                    'data-validation-length' => 'max255',
                    'data-validation-optional' => 'true',
                    'data-validation-error-msg' => 'subject must not be more than 255.'
                ]); ?>
                <?=  $form->textarea('discr', 'Notes', [
                    'type' => 'text',
                    'placeholder' => 'notes',
                    'data-validation' => 'length',
                    'data-validation-length' => 'max255',
                    'data-validation-optional' => 'true',
                    'data-validation-error-msg' => 'notes must not be more than 255.'
                ]); ?>
            </div>
            <div class="col-lg-12 form-group text-center">
                <hr>
                <button type="submit" id="btn-save-delivery_form" class="btn btn-primary">Save</button>
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
                <h4 class="modal-title" id="myModalLabel">Factories</h4>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table rtl_table data-table table-striped table-hover">
                        <thead>
                        <tr>
                            <th>&nbsp;</th>
                            <th>Name</th>
                            <th>City</th>
                            <th>Adress</th>
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
