<?php
    if (isset($_GET['id'])){
        $title = 'Edit Access Rights';
    }
    else{
        $title = 'Add A New Access Right';

    }
?>
<section class="content-header">
    <span class="content-title"><i class="fa fa-edit"></i> <?= $title ?></span>
</section>
<section class="content">
    <form method="post" name="form-role-add" id="form-role-add" enctype="multipart/form-data">
        <div class="col-sm-12">
            <?= $form->input('role_name', 'Access Right Name',
                [
                    'type' => 'text',
                    'placeholder' => 'Access Right Name',
                    'data-validation' => 'length',
                    'data-validation-length' => '1-100',
                    'data-validation-error-msg' => 'Access Right name must be between 1 and 100.'
                ]
            ); ?>
        </div>
        <div class="col-sm-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Consumers</h3>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label>Offer : </label>
                        <select name="show_clients" class="form-control"
                        data-validation="required"
                        data-validation-error-msg="Please select the access right">
                            <?php if(isset($role) && ($role->show_clients)) { ?>
                                <option value="0">NO</option>
                                <option value="1" selected>Yes</option>
                            <?php } else { ?>
                                <option value="0" selected>No</option>
                                <option value="1">Yes</option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Adding  Editing And Deleting: </label>
                        <select name="aed_clients" class="form-control"
                        data-validation="required"
                        data-validation-error-msg="Please select the access right">
                            <?php if(isset($role) && ($role->aed_clients)) { ?>
                                <option value="0">No</option>
                                <option value="1" selected>Yes</option>
                            <?php } else { ?>
                                <option value="0" selected>NO</option>
                                <option value="1">Yes</option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Exporters</h3>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label>Offers : </label>
                        <select name="show_suppliers" class="form-control"
                        data-validation="required"
                        data-validation-error-msg="Please select the access right">
                            <?php if(isset($role) && ($role->show_suppliers)) { ?>
                                <option value="0">No</option>
                                <option value="1" selected>Yes</option>
                            <?php } else { ?>
                                <option value="0" selected>NO</option>
                                <option value="1">Yes</option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Adding,Editing And Deleting : </label>
                        <select name="aed_suppliers" class="form-control"
                        data-validation="required"
                        data-validation-error-msg="Please select the access right">
                            <?php if(isset($role) && ($role->aed_suppliers)) { ?>
                                <option value="0">NO</option>
                                <option value="1" selected>Yes</option>
                            <?php } else { ?>
                                <option value="0" selected>NO</option>
                                <option value="1">Yes</option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Sales</h3>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label>Offer : </label>
                        <select name="show_sales" class="form-control"
                        data-validation="required"
                        data-validation-error-msg="Please select the access right">
                            <?php if(isset($role) && ($role->show_sales)) { ?>
                                <option value="0">NO</option>
                                <option value="1" selected>Yes</option>
                            <?php } else { ?>
                                <option value="0" selected>NO</option>
                                <option value="1">Yes</option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Adding ,Editing And Deleting : </label>
                        <select name="aed_sales" class="form-control"
                        data-validation="required"
                        data-validation-error-msg="Please select the access right">
                            <?php if(isset($role) && ($role->aed_sales)) { ?>
                                <option value="0">No</option>
                                <option value="1" selected>Yes</option>
                            <?php } else { ?>
                                <option value="0" selected>NO</option>
                                <option value="1">Yes</option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Purchases</h3>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label>Offer : </label>
                        <select name="show_purchases" class="form-control"
                                data-validation="required"
                                data-validation-error-msg="Please select the access right">
                            <?php if(isset($role) && ($role->show_purchases)) { ?>
                                <option value="0">No</option>
                                <option value="1" selected>Yes</option>
                            <?php } else { ?>
                                <option value="0" selected>No</option>
                                <option value="1">Yes</option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Adding  Editing And Deleting: : </label>
                        <select name="aed_purchases" class="form-control"
                                data-validation="required"
                                data-validation-error-msg="Please select the access right">
                            <?php if(isset($role) && ($role->aed_purchases)) { ?>
                                <option value="0">No</option>
                                <option value="1" selected>Yes</option>
                            <?php } else { ?>
                                <option value="0" selected>No</option>
                                <option value="1">Yes</option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Products</h3>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label>Offer : </label>
                        <select name="show_articles" class="form-control"
                                data-validation="required"
                                data-validation-error-msg="Please select the access right">
                            <?php if(isset($role) && ($role->show_articles)) { ?>
                                <option value="0">No</option>
                                <option value="1" selected>Yes</option>
                            <?php } else { ?>
                                <option value="0" selected>No</option>
                                <option value="1">Yes</option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Adding  Editing And Deleting: : </label>
                        <select name="aed_articles" class="form-control"
                                data-validation="required"
                                data-validation-error-msg="Please select the access right">
                            <?php if(isset($role) && ($role->aed_articles)) { ?>
                                <option value="0">No</option>
                                <option value="1" selected>Yes</option>
                            <?php } else { ?>
                                <option value="0" selected>No</option>
                                <option value="1">Yes</option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Stocks</h3>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label>Offer : </label>
                        <select name="show_stock" class="form-control"
                                data-validation="required"
                                data-validation-error-msg="Please select the access right">
                            <?php if(isset($role) && ($role->show_stock)) { ?>
                                <option value="0">No</option>
                                <option value="1" selected>Yes</option>
                            <?php } else { ?>
                                <option value="0" selected>No</option>
                                <option value="1">Yes</option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Users And Access Rights</h3>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label>Offer : </label>
                        <select name="show_users_roles" class="form-control"
                                data-validation="required"
                                data-validation-error-msg="Please select the access right">
                            <?php if(isset($role) && ($role->show_users_roles)) { ?>
                                <option value="0">No</option>
                                <option value="1" selected>Yes</option>
                            <?php } else { ?>
                                <option value="0" selected>No</option>
                                <option value="1">Yes</option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Adding  Editing And Deleting: : </label>
                        <select name="aed_users_roles" class="form-control"
                                data-validation="required"
                                data-validation-error-msg="Please select the access right">
                            <?php if(isset($role) && ($role->aed_users_roles)) { ?>
                                <option value="0">No</option>
                                <option value="1" selected>Yes</option>
                            <?php } else { ?>
                                <option value="0" selected>No</option>
                                <option value="1">Yes</option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 form-group text-center">
            <hr>
            <button id="btn-role-add" name="btn-role-add" class="btn btn-primary">Save</button>
        </div>
    </form>
</section>
