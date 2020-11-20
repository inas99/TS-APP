
<section class="content-header">
    <span class="content-title"><i class="fa fa-edit"></i> Adding or Editing a Factory</span>
</section>
<section class="content">
    <form method="post" name="form-supplier-add" id="form-supplier-add" enctype="multipart/form-data">
        <div class="row">
            <div class="col-lg-12">
                <?=  $form->input('name', 'Factory Name', [
                    'type' => 'text',
                    'placeholder' => 'Factory Name',
                    'data-validation' => 'length',
                    'data-validation-length' => '1-255',
                    'data-validation-error-msg' => 'Please a set the name of the factory'
                ]); ?>
                <?=  $form->input('tel', 'Phone Number', [
                    'type' => 'text',
                    'placeholder' => 'Phone Number',
                    'data-validation' => 'length',
                    'data-validation-length' => '1-255',
                    'data-validation-error-msg' => 'Please Select The Telephone A Number'
                ]); ?>
                <?=  $form->input('email', 'Email', [
                    'type' => 'text',
                    'placeholder' => 'Email',
                    'data-validation' => 'email',
                    'data-validation-error-msg' => 'Please write the email correctly'
                ]); ?>
                <?=  $form->input('zip_code', 'City Code', [
                    'type' => 'text',
                    'placeholder' => 'City Code',
                    'data-validation' => 'number',
                    'data-validation-optional' => 'true',
                    'data-validation-error-msg' => 'Please write the city code as numbers'
                ]); ?>
                <?=  $form->input('city', 'City Name', [
                    'type' => 'text',
                    'placeholder' => 'City Name',
                    'data-validation' => 'length',
                    'data-validation-length' => '1-255',
                    'data-validation-error-msg' => 'Please set the city name'
                ]); ?>
                <?=  $form->input('address', 'Adress', [
                    'type' => 'text',
                    'placeholder' => 'Adress',
                    'data-validation' => 'length',
                    'data-validation-length' => '1-255',
                    'data-validation-error-msg' => 'Please set an adress'
                ]); ?>
            </div>
            <div class="col-lg-12 form-group text-center">
                <hr>
                <button type="submit" id="btn-save-supplier" class="btn btn-primary">Save</button>
            </div>
        </div>
    </form>
</section>
