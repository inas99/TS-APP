<?php
    if (isset($_GET['id'])){
        $title = 'Edit User';
    }
    else{
        $title = 'Add A New User';

    }
?>
<section class="content-header">
    <span class="content-title"><i class="fa fa-edit"></i> <?= $title ?></span>
</section>
<section class="content">
    <form method="post" name="form-user-add" id="form-user-add" enctype="multipart/form-data">
        <div class="col-sm-9">
            <?= $form->input('login', 'User Name',
                [
                    'type' => 'text',
                    'id' => 'login',
                    'autofocus' => 'autofocus',
                    'placeholder' => 'User Name',
                    'data-validation' => 'custom',
                    'data-validation-regexp' => '^([a-zA-Z0-9]+)$',
                    'data-validation-length' => '2-50',
                    'data-validation-error-msg' => 'User name must be of char and numbers between 2-50.'
                ]
            ); ?>
            <p>Defult Password: </p>
            <p id="default-pwd" class="form-control"></p>
            <?= $form->input('email', 'Email',
                [
                    'type' => 'text',
                    'placeholder' => 'Email',
                    'data-validation' => 'email',
                    'data-validation-optional' => 'true',
                    'data-validation-error-msg' => 'Email in wrong way has been entered'
                ]
            ); ?>
            <?= $form->input('fname', 'First name',
                [
                    'type' => 'text',
                    'placeholder' => 'First Name',
                    'data-validation' => 'length',
                    'data-validation-length' => '2-50',
                    'data-validation-error-msg' => 'Fİrts name must be between 2-50.'
                ]
            ); ?>
            <?= $form->input('lname', 'Second name',
                [
                    'type' => 'text',
                    'placeholder' => 'First name',
                    'data-validation' => 'length',
                    'data-validation-length' => '2-50',
                    'data-validation-error-msg' => 'Second name must be between 2-50.'
                ]
            ); ?>
            <?= $form->input('function', 'Jobs',
                [
                    'type' => 'text',
                    'placeholder' => 'Job',
                    'data-validation' => 'length',
                    'data-validation-length' => '1-100',
                    'data-validation-optional' => 'true',
                    'data-validation-error-msg' => 'Job section must be between 1-100.'
                ]
            ); ?>
            <?= $form->input('phone', 'Phone Number',
                [
                    'type' => 'text',
                    'placeholder' => 'Phone Number',
                    'data-validation' => 'length',
                    'data-validation-length' => '2-50',
                    'data-validation-optional' => 'true',
                    'data-validation-error-msg' => 'Phone number entered in wrong way.'
                ]
            ); ?>
            <hr>
            <?= $form->select('role_id', 'Access Rights', $roles,
                [
                    'data-validation' => 'required',
                    'data-validation-error-msg' => 'Please Select The Access Rights.'
                ]
            ); ?>

    </div>
        <div class="col-sm-3">
            <div class="box-infos-search">
                <section class="content-header box-infos-header">
                    <span class="content-title"><i class="fa fa-image"></i> Picture</span>
                    <a href="#" class="btn btn-default btn-search" onclick="triggerInputFile('avatar', event);">
                        <i class="fa fa-search"></i>
                    </a>

                </section>
                <div class="box-infos text-center">
                    <img class="thumb-preview" src="<?= App::$path ?>img/avatar/<?= isset($user) ? $user->avatar : '0.jpg' ?>">
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
                        'data-validation-error-msg' => 'Photo must be in jpg format and max size until 1MB'
                    ]); ?>
                </div>
            </div>

        </div>
        <div class="col-lg-12 form-group forum-cmds text-center">
            <hr>
            <button id="btn-user-add" name="btn-user-add" class="btn btn-primary">Save</button>
        </div>
    </form>
</section>
