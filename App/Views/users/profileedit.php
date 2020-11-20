
<section class="content-header">
    <span class="content-title"><i class="fa fa-edit"></i> Edit Profile</span>
</section>
<section class="content">
    <?php if($errors): ?>
        <div class="form-error alert alert-danger">
            <span>Sorry the username or password is wrong.</span>
        </div>
    <?php endif; ?>

    <form method="post" name="form-profile-edit" id="form-profile-edit" enctype="multipart/form-data">

        <div class="col-sm-9">
            <?= $form->input('login', 'Username',
                [
                    'type' => 'text',
                    'id' => 'login',
                    'autofocus' => 'autofocus',
                    'placeholder' => 'Username',
                    'data-validation' => 'custom',
                    'data-validation-regexp' => '^([a-zA-Z0-9]+)$',
                    'data-validation-length' => '2-50',
                    'data-validation-error-msg' => 'Username must be of char and numbers only.'
                ]
            ); ?>
            <?= $form->input('email', 'Email',
                [
                    'type' => 'text',
                    'placeholder' => 'Email',
                    'data-validation' => 'email',
                    'data-validation-optional' => 'true',
                    'data-validation-error-msg' => 'Wrong enterence of an email'
                ]
            ); ?>
            <?= $form->input('fname', 'First Name',
                [
                    'type' => 'text',
                    'placeholder' => 'First Name',
                    'data-validation' => 'length',
                    'data-validation-length' => '2-50',
                    'data-validation-error-msg' => 'First Name must be between 2-250 .'
                ]
            ); ?>
            <?= $form->input('lname', 'Second Name',
                [
                    'type' => 'text',
                    'placeholder' => 'Second Name',
                    'data-validation' => 'length',
                    'data-validation-length' => '2-50',
                    'data-validation-error-msg' => 'Second Name must be between 2-2-250.'
                ]
            ); ?>
            <?= $form->input('phone', 'Phone Number',
                [
                    'type' => 'text',
                    'placeholder' => 'Phone Number',
                    'data-validation' => 'length',
                    'data-validation-length' => '2-50',
                    'data-validation-optional' => 'true',
                    'data-validation-error-msg' => 'Phone Number is incorrect.'
                ]
            ); ?>
            <hr>
            <?= $form->input('current_pass', 'Current Password',
                [
                    'type' => 'password',
                    'id' => 'current_pass',
                    'placeholder' => 'Current Password',
                    'data-validation' => 'length',
                    'data-validation-length' => '3-100',
                    'data-validation-error-msg' => 'Current Password must be between 3-100 '
                ]
            ); ?>
            <?= $form->input('new_pass_confirmation', 'Password',
                [
                    'type' => 'password',
                    'id' => 'new_pass_confirmation',
                    'placeholder' => 'Password',
                    'data-validation' => 'length',
                    'data-validation-length' => '3-100',
                    'data-validation-error-msg' => 'Password must be between 3-100'
                ]
            ); ?>
            <?= $form->input('new_pass', 'Confirm Password',
                [
                    'type' => 'password',
                    'id' => 'new_pass',
                    'placeholder' => 'Confirm Password',
                    'data-validation' => 'confirmation',                                                      'data-validation-error-msg' => 'Password is not correct'
                ]
            ); ?>

        </div>
        <div class="col-sm-3">
            <div class="box-infos-search">
                <section class="content-header box-infos-header">
                    <span class="content-title"><i class="fa fa-image"></i> Photo</span>
                    <a href="#" class="btn btn-default btn-search" onclick="triggerInputFile('avatar', event);">
                        <i class="fa fa-search"></i>
                    </a>

                </section>
                <div class="box-infos text-center">
                    <img class="thumb-preview" src="img/avatar/<?= isset($user) ? $user->avatar : '0.jpg' ?>">
                    <a href="#" class="badge thumb-reset" <?php
                    if(isset($user) && ($user->avatar != '0.jpg')) {
                        echo 'style="display: inline-block;"';
                    }
                    ?> onclick="resetAvatar(this,  event);">Reset</a>

                    <?=  $form->file('avatar', [
                        'type' => 'file',
                        'id' => 'avatar',
                        'class' => 'hidden-input-file',
                        'onchange' => 'readUrl(this);',
                        'data-validation' => 'required mime size',
                        'data-validation-allowing' => 'jpg',
                        'data-validation-error-msg' => 'Photo must be in format of jpg and max size of 1 MB'
                    ]); ?>
                </div>
            </div>

        </div>
        <div class="col-lg-12 form-group text-center">
            <hr>
            <button id="btn-profile-edit" name="btn-profile-edit" class="btn btn-primary">Save</button>
        </div>
    </form>
</section>
