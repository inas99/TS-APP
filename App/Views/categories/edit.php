<section class="content-header">
    <span class="content-title"><i class="fa fa-edit"></i> Add a new type</span>
</section>
<section class="content">
    <form method="post" name="form-category-add" id="form-category-add" enctype="multipart/form-data">
        <div class="row">
            <div class="col-lg-12">
                <?=  $form->input('category', 'Types', [
                    'type' => 'text',
                    'placeholder' => 'marble type name',
                    'data-validation' => 'length',
                    'data-validation-length' => '3-255',
                    'data-validation-error-msg' => 'The type name must be between 3 - 255 .'
                ]); ?>

            </div>
            <div class="col-lg-12 form-group text-center">
                <hr>
                <button type="submit" id="btn-save-category" class="btn btn-primary">Save</button>
            </div>
        </div>
    </form>
</section>
