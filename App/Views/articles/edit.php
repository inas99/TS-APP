<?php
    if (isset($article) && isset($_GET['id'])){
        $thumb_name = $article->thumb;
    }
    else{
        $thumb_name = 'no_thumb.jpg';
    }
?>
<section class="content-header">
    <span class="content-title"><i class="fa fa-edit"></i> Add a new product</span>
</section>
<section class="content">
    <form method="post" name="form-article-add" id="form-article-add" enctype="multipart/form-data">
        <div class="row form-add-top">
            <div class="col-sm-8 col-xs-12">
                <div class="box-infos-search">
                    <section class="content-header box-infos-header">
                        <span class="content-title"><i class="fa fa-home"></i> Factory</span>
                        <a href="#" class="btn btn-default btn-search btn-infos-search">
                            <i class="fa fa-search"></i>
                        </a>
                    </section>
                    <div class="box-infos">
                        <?php if(isset($article)){ ?>
                        <input type="hidden" value="<?= $article->supplier_id ?>" name="box-infos-id" class="box-infos-id">
                        <h3 class="box-infos-name"><?= $article->name ?></h3>
                        <p class="box-infos-city"><?= $article->city ?></p>
                        <p class="box-infos-address"><?= $article->address ?></p>
                        <?php } else { ?>
                            <input type="hidden" name="box-infos-id" class="box-infos-id">
                            <h3 class="box-infos-name"></h3>
                            <p class="box-infos-city"></p>
                            <p class="box-infos-address"></p>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-xs-12">
                <div class="box-infos-search">
                    <section class="content-header box-infos-header">
                    <span class="content-title"><i class="fa fa-image"></i>Picture</span>
                        <a href="#" class="btn btn-default btn-search" onclick="triggerInputFile('thumb', event);">
                            <i class="fa fa-search"></i>
                        </a>

                    </section>
                    <div class="box-infos text-center">
                        <img class="thumb-preview" src="<?= App::$path ?>img/thumbs/articles/<?= $thumb_name ?>">
                        <a href="#" class="badge thumb-reset" onclick="resetThumb( event);">Reset</a>

                        <?=  $form->file('thumb', [
                            'type' => 'file',
                            'id' => 'thumb',
                            'class' => 'hidden-input-file',
                            'onchange' => 'readUrl(this);',
                            'data-validation' => 'required mime size',
                            'data-validation-allowing' => 'jpg',
                            'data-validation-error-msg' => 'The picture should be jpg amd should not be larger than 1M'
                        ]); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <?=  $form->input('ref', 'Product code', [
                    'type' => 'text',
                    'placeholder' => 'Product code',
                    'data-validation' => 'length',
                    'data-validation-length' => 'max100',
                    'data-validation-error-msg' => 'Product code must not exceed 100 characters'
                ]); ?>
                <?=  $form->input('desig', 'Product name', [
                    'type' => 'text',
                    'placeholder' => 'Product name',
                    'data-validation' => 'length',
                    'data-validation-length' => '3-255',
                    'data-validation-error-msg' => 'Product name must be between 3 and 255 characters'
                ]); ?>
                <?=  $form->select('category_id', 'Type', $categories); ?>
                <?=  $form->select('unit_id', 'Unit', $units); ?>
                <?=  $form->select('tva', 'TVA (%)', $tva); ?>
            </div>
            <div class="col-lg-12 form-group text-center">
                <hr>
                <button type="submit" id="btn-save-article" class="btn btn-primary">Save</button>
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
