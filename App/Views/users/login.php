<section class="content-header">
    <span class="content-title"><i class="fa fa-edit"></i> Log In</span>
</section>
<section class="content">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
        <?php if($errors): ?>
        <div class="form-error alert alert-danger">
            <span>Sorry The Username Or Password Are Not Correct.</span>
        </div>
        <?php endif; ?>
        <form method="post" name="form-user-login" id="form-user-login" enctype="multipart/form-data">

        <div class="panel panel-primary">
            <div class="panel-heading login-header">
                <h3>Log In</h3>
            </div>
            <div class="panel-body">
                <?=  $form->input('login', '', [
                    'type' => 'text',
                    'placeholder' => 'Username',
                    'data-validation' => 'custom',
                    'data-validation-regexp' => '^([a-zA-Z0-9]+)$',
                    'data-validation-length' => 'max100',
                    'data-validation-error-msg' => 'Username must be with char and numbers only.'
                ]); ?>
                <?=  $form->input('pass', '', [
                    'type' => 'password',
                    'placeholder' => 'Password',
                    'data-validation' => 'length',
                    'data-validation-length' => '3-255',
                    'data-validation-error-msg' => 'Password must be between 3 -255.'
                ]); ?>
                <div class="col-lg-12 form-group text-center">
                    <?=  $form->submit('btn-user-login', 'Log In', [
                        'id' => 'btn-user-login',
                    ]);
                    ?>
                </div>
        </div>
        </div>
        </form>
    </div>
    <div class="col-sm-4"></div>

</section>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Suppliers</h4>
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
                <button type="button" class="btn btn-default" data-dismiss="modal">Exit</button>
            </div>
        </div>
    </div>
</div>
