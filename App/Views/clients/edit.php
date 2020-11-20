
<section class="content-header">
    <span class="content-title"><i class="fa fa-edit"></i>Request price</span>
</section>
<section class="content">
    <form method="post" name="form-client-add" id="form-client-add" enctype="multipart/form-data">
        <div class="row">
            <div class="col-lg-12">
                <?=  $form->input('name', 'Customer name', [
                    'type' => 'text',
                    'placeholder' => 'customer name',
                    'data-validation' => 'length',
                    'data-validation-length' => '1-255',
                    'data-validation-error-msg' => 'please choose a customer name'
                ]); ?>
                <?=  $form->input('tel', 'Phone number', [
                    'type' => 'text',
                    'placeholder' => 'phone number',
                    'data-validation' => 'length',
                    'data-validation-length' => '1-255',
                    'data-validation-error-msg' => 'please choose a phone number'
                ]); ?>
                <?=  $form->input('email', 'Email', [
                    'type' => 'text',
                    'placeholder' => 'email',
                    'data-validation' => 'email',
                    'data-validation-error-msg' => 'please write the email in a correct way'
                ]); ?>
                <?=  $form->input('zip_code', 'Country', [
                    'type' => 'text',
                    'placeholder' => 'country code ',
                    'data-validation' => 'number',
                    'data-validation-optional' => 'true',
                    'data-validation-error-msg' => 'please write the post code of the country as numbers'
                ]); ?>
                <?=  $form->input('city', 'City name', [
                    'type' => 'text',
                    'placeholder' => 'city name',
                    'data-validation' => 'length',
                    'data-validation-length' => '1-255',
                    'data-validation-error-msg' => 'please write the city name'
                ]); ?>
                <?=  $form->input('address', 'Adress', [
                    'type' => 'text',
                    'placeholder' => 'adress',
                    'data-validation' => 'length',
                    'data-validation-length' => '1-255',
                    'data-validation-error-msg' => 'please write the adress'
                ]); ?>
            </div>
            <div class="col-lg-12 form-group text-center">
                <hr>
                <button type="submit" id="btn-save-client" class="btn btn-primary">Save</button>
            </div>
        </div>
    </form>
</section>
