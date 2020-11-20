<!doctype html>
<html>
<head>
    <title>Turkey Stone</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?= App::$path ?>css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?= App::$path ?>css/style.css" />
    <link rel="stylesheet" href="<?= App::$path ?>css/responsive.css" />
    <link rel="stylesheet" href="<?= App::$path ?>css/font-awesome.min.css" />

</head>
<body class="">

<div id="wrap" class="wrapper">
    <header class="main-header">
        <a href="" class="logo">
            <span class="logo-mini"><b>TS</b></span>
            <span class="logo-lg"><b>Turkey Stone</b></span>
        </a>
        <nav class="navbar navbar-default navbar-static-top">
            <a href="#" id="btn-sidebar-collapse" class="sidebar-toggle"><span class="glyphicon glyphicon-menu-hamburger"></span></a>

            <ul class="nav navbar-nav navbar-notifs-top">
                <?php if(isset($_SESSION['user'])){ ?>
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="fa fa-globe"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="tr">Turkish</a></li>
                    <li><a href="gr">German</a></li>
                </ul>
            </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <img src="<?= App::$path ?>img/avatar/<?= $_SESSION['user']->avatar ?>" class="user-img-top" />
                       

                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li class="user-header">
                            <img src="<?= App::$path ?>img/avatar/<?= $_SESSION['user']->avatar ?>" class="img-circle" />
                          
                            <p><small><?= $_SESSION['user']->function ?></small></p>
                        </li>
                        <li class="user-body">
                            <div class="col-xs-4 text-center">
                                <a href="#">ORDER</a>
                            </div>
                            <div class="col-xs-4 text-center">
                                <a href="#">EXPORT</a>
                            </div>
                            <div class="col-xs-4 text-center">
                                <a href="#">OPTION</a>
                            </div>
                        </li>
                        <li class="user-footer">
                            <div class="pull-right">
                                <a href="<?= App::$path ?>user/profile/<?= $_SESSION['user']->id ?>" class="btn btn-default">PROFILE</a>
                            </div>
                            <div class="pull-left">
                                <a href="<?= App::$path ?>user/logout" class="btn btn-default">LOG OUT</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="fa fa-envelope"></span>
                        <span class="label label-warning">15</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-header">You have 15 messages</li>
                        <li>
                            <ul class="list-group menu-msg">
                                <li class="list-group-item">A new price request </li>
                                <li class="list-group-item list-group-item-danger">A new price offer</li>
                                <li class="list-group-item">A new invoice is issued</li>
                                <li class="list-group-item list-group-item-warning">Check the last payment operations</li>
                                <li class="list-group-item">Anew marble request</li>
                            </ul>
                        </li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="fa fa-flag"></span>
                        <span class="label label-danger">15</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </li>
                <?php } else{ ?>
                <li>
                    <a href="<?= App::$path ?>user/login" class="btn-nav"><span class="fa fa-flag"></span>LOG IN</a>
                </li>
                <?php } ?>
            </ul>

        </nav>

    </header>

    <aside class="main-sidebar">
        <section class="sidebar">
            <div class="gnav">
                <div class="gnav-header" style="background-color: #000">
                    <a class="has-childs collapse" role="button" data-toggle="collapse" href="#collapsehome" aria-expanded="false" aria-controls="collapsehome">
                        <span class="fa fa-edit"></span>
                        <span class="hidden-on-collapse">Home</span></a>
                </div>
                <ul class="subnav collapse in" id="collapsehome">
                    <?php if(isset($_SESSION['user']) && $_SESSION['user']->show_suppliers): ?>
                        <li>
                            <div class="gnav">
                        <div class="gnav-header">
                            <a class="has-childs collapse" role="button" data-toggle="collapse" href="#collapsesuppliers" aria-expanded="false" aria-controls="collapsesuppliers">
                                <span class="fa fa-edit"></span>
                                <span class="hidden-on-collapse">FACTORIES</span></a>
                        </div>
                        <ul class="subnav collapse" id="collapsesuppliers">
                            <?php if(isset($_SESSION['user']) && $_SESSION['user']->aed_suppliers): ?>
                            <li><a href="<?= App::$path ?>supplier/add">
                                    <span class="fa fa-edit"></span>
                                    <span class="hidden-on-collapse">Add a factory</span>
                                </a></li>
                            <?php endif; ?>
                            <li><a href="<?= App::$path ?>supplier/index">
                                    <span class="fa fa-edit"></span>
                                    <span class="hidden-on-collapse">Factories</span>
                                </a></li>
                        </ul>
                    </div>
                        </li>
                    <?php endif; ?>
                    <?php if(isset($_SESSION['user']) && $_SESSION['user']->show_clients): ?>
                        <li>
                            <div class="gnav">
                        <div class="gnav-header">
                            <a class="has-childs collapse" role="button" data-toggle="collapse" href="#collapseclients" aria-expanded="false" aria-controls="collapseclients">
                                <span class="fa fa-edit"></span>
                                <span class="hidden-on-collapse">CUSTOMERS</span></a>
                        </div>
                        <ul class="subnav collapse" id="collapseclients">
                            <?php if(isset($_SESSION['user']) && $_SESSION['user']->aed_clients): ?>
                            <li><a href="<?= App::$path ?>client/add">
                                    <span class="fa fa-edit"></span>
                                    <span class="hidden-on-collapse">Add a customer</span>
                                </a></li>
                            <?php endif; ?>
                            <li><a href="<?= App::$path ?>client/index">
                                    <span class="fa fa-edit"></span>
                                    <span class="hidden-on-collapse">Customers</span>
                                </a></li>
                        </ul>
                    </div>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
            <!-- sales start -->
            <?php if(isset($_SESSION['user']) && $_SESSION['user']->show_sales): ?>
            <div class="gnav">
                <div class="gnav-header" style="background-color: #000">
                    <a class="has-childs collapse" role="button" data-toggle="collapse" href="#collapsesales" aria-expanded="false" aria-controls="collapsesales">
                        <span class="fa fa-edit"></span>
                        <span class="hidden-on-collapse"> EXPORT</span></a>
                </div>
                <ul class="subnav collapse in" id="collapsesales">
                    <li>
                        <div class="gnav">
                <div class="gnav-header">
                    <a class="has-childs collapse" role="button" data-toggle="collapse" href="#collapseprice_requests" aria-expanded="false" aria-controls="collapseprice_requests">
                        <span class="fa fa-edit"></span>
                        <span class="hidden-on-collapse"> PRICE REQUESTS </span></a>
                </div>
                <ul class="subnav collapse" id="collapseprice_requests">
                    <?php if(isset($_SESSION['user']) && $_SESSION['user']->aed_sales): ?>
                    <li><a href="<?= App::$path ?>price_request_clt/add">
                            <span class="fa fa-edit"></span>
                            <span class="hidden-on-collapse">A new price request</span>
                        </a></li>
                    <?php endif; ?>
                    <li><a href="<?= App::$path ?>price_request_clt/index">
                            <span class="fa fa-edit"></span>
                            <span class="hidden-on-collapse"> Price requests </span>
                        </a></li>
                </ul>
            </div>
                    </li><li>
                        <div class="gnav">
                <div class="gnav-header">
                    <a class="has-childs collapse" role="button" data-toggle="collapse" href="#collapquotations" aria-expanded="false" aria-controls="collapquotations">
                        <span class="fa fa-edit"></span>
                        <span class="hidden-on-collapse"> PRICE OFFERS</span></a>
                </div>
                <ul class="subnav collapse" id="collapquotations">
                    <?php if(isset($_SESSION['user']) && $_SESSION['user']->aed_sales): ?>
                    <li><a href="<?= App::$path ?>quotation_clt/add">
                            <span class="fa fa-edit"></span>
                            <span class="hidden-on-collapse">Add an offer</span>
                        </a></li>
                    <?php endif; ?>
                    <li><a href="<?= App::$path ?>quotation_clt/index">
                            <span class="fa fa-edit"></span>
                            <span class="hidden-on-collapse">Price offers</span>
                        </a></li>
                </ul>
            </div>
                    </li><li>
                        <div class="gnav">
                <div class="gnav-header">
                    <a class="has-childs collapse" role="button" data-toggle="collapse" href="#collapsepurchase_orders" aria-expanded="false" aria-controls="collapsepurchase_orders">
                        <span class="fa fa-edit"></span>
                        <span class="hidden-on-collapse"> CUSTOMER REQUESTS </span></a>
                </div>
                <ul class="subnav collapse" id="collapsepurchase_orders">
                    <?php if(isset($_SESSION['user']) && $_SESSION['user']->aed_sales): ?>
                    <li><a href="<?= App::$path ?>purchase_order_clt/add">
                            <span class="fa fa-edit"></span>
                            <span class="hidden-on-collapse">Add a request</span>
                        </a></li>
                    <?php endif; ?>
                    <li><a href="<?= App::$path ?>purchase_order_clt/index">
                            <span class="fa fa-edit"></span>
                            <span class="hidden-on-collapse"> Customer requests</span>
                        </a></li>
                </ul>
            </div>
                    </li><li>
                        <div class="gnav">
                <div class="gnav-header">
                    <a class="has-childs collapse" role="button" data-toggle="collapse" href="#collapsedelivery_forms" aria-expanded="false" aria-controls="collapsedelivery_forms">
                        <span class="fa fa-edit"></span>
                        <span class="hidden-on-collapse"> MARBLE DELIVERY</span></a>
                </div>
                <ul class="subnav collapse" id="collapsedelivery_forms">
                    <?php if(isset($_SESSION['user']) && $_SESSION['user']->aed_sales): ?>
                    <li><a href="<?= App::$path ?>delivery_form_clt/add">
                            <span class="fa fa-edit"></span>
                            <span class="hidden-on-collapse">Add a delivery</span>
                        </a></li>
                    <?php endif; ?>
                    <li><a href="<?= App::$path ?>delivery_form_clt/index">
                            <span class="fa fa-edit"></span>
                            <span class="hidden-on-collapse">  Marble delivery</span>
                        </a></li>
                </ul>
            </div>
                    </li><li>
                        <div class="gnav">
                <div class="gnav-header">
                    <a class="has-childs collapse" role="button" data-toggle="collapse" href="#collapseinvoice_clts" aria-expanded="false" aria-controls="collapseinvoice_clts">
                        <span class="fa fa-edit"></span>
                        <span class="hidden-on-collapse"> INVOICES</span></a>
                </div>
                <ul class="subnav collapse" id="collapseinvoice_clts">
                    <?php if(isset($_SESSION['user']) && $_SESSION['user']->aed_sales): ?>
                    <li><a href="<?= App::$path ?>invoice_clt/add">
                            <span class="fa fa-edit"></span>
                            <span class="hidden-on-collapse">Add an invoice</span>
                        </a></li>
                    <?php endif; ?>
                    <li><a href="<?= App::$path ?>invoice_clt/index">
                            <span class="fa fa-edit"></span>
                            <span class="hidden-on-collapse">Invices</span>
                        </a></li>
                </ul>
            </div>
                    </li><li>
                        <div class="gnav">
                <div class="gnav-header">
                    <a class="has-childs collapse" role="button" data-toggle="collapse" href="#collapsepayment_clts" aria-expanded="false" aria-controls="collapsepayment_clts">
                        <span class="fa fa-edit"></span>
                        <span class="hidden-on-collapse"> PAYMENTS</span></a>
                </div>
                <ul class="subnav collapse" id="collapsepayment_clts">
                    <?php if(isset($_SESSION['user']) && $_SESSION['user']->aed_sales): ?>
                    <li><a href="<?= App::$path ?>payment_clt/add">
                            <span class="fa fa-edit"></span>
                            <span class="hidden-on-collapse">Add a payment</span>
                        </a></li>
                    <?php endif; ?>
                    <li><a href="<?= App::$path ?>payment_clt/index">
                            <span class="fa fa-edit"></span>
                            <span class="hidden-on-collapse">Payments</span>
                        </a></li>
                </ul>
            </div>
                    </li>
                </ul>
            </div>
            <?php endif; ?>
            <!-- sales end -->
            <!-- purchases start -->
            <?php if(isset($_SESSION['user']) && $_SESSION['user']->show_purchases): ?>
                <div class="gnav">
                    <div class="gnav-header" style="background-color: #000">
                        <a class="has-childs collapse" role="button" data-toggle="collapse" href="#collapsepurchases" aria-expanded="false" aria-controls="collapsepurchases">
                            <span class="fa fa-edit"></span>
                            <span class="hidden-on-collapse">ORDER</span></a>
                    </div>
                    <ul class="subnav collapse in" id="collapsepurchases">
                        <li>
                            <div class="gnav">
                                <div class="gnav-header">
                                    <a class="has-childs collapse" role="button" data-toggle="collapse" href="#collapseprice_requests_supplier" aria-expanded="false" aria-controls="collapseprice_requests_supplier">
                                        <span class="fa fa-edit"></span>
                                        <span class="hidden-on-collapse"> PRICE REQUESTS</span></a>
                                </div>
                                <ul class="subnav collapse" id="collapseprice_requests_supplier">
                                    <?php if(isset($_SESSION['user']) && $_SESSION['user']->aed_purchases): ?>
                                        <li><a href="<?= App::$path ?>price_request_supplier/add">
                                                <span class="fa fa-edit"></span>
                                                <span class="hidden-on-collapse">Add a new request</span>
                                            </a></li>
                                    <?php endif; ?>
                                    <li><a href="<?= App::$path ?>price_request_supplier/index">
                                            <span class="fa fa-edit"></span>
                                            <span class="hidden-on-collapse"> Price requests</span>
                                        </a></li>
                                </ul>
                            </div>
                        </li><li>
                            <div class="gnav">
                                <div class="gnav-header">
                                    <a class="has-childs collapse" role="button" data-toggle="collapse" href="#collapquotations_supplier" aria-expanded="false" aria-controls="collapquotations_supplier">
                                        <span class="fa fa-edit"></span>
                                        <span class="hidden-on-collapse"> PRICE OFFERS</span></a>
                                </div>
                                <ul class="subnav collapse" id="collapquotations_supplier">
                                    <?php if(isset($_SESSION['user']) && $_SESSION['user']->aed_purchases): ?>
                                        <li><a href="<?= App::$path ?>quotation_supplier/add">
                                                <span class="fa fa-edit"></span>
                                                <span class="hidden-on-collapse">Add an offer</span>
                                            </a></li>
                                    <?php endif; ?>
                                    <li><a href="<?= App::$path ?>quotation_supplier/index">
                                            <span class="fa fa-edit"></span>
                                            <span class="hidden-on-collapse">  Price offers</span>
                                        </a></li>
                                </ul>
                            </div>
                        </li><li>
                            <div class="gnav">
                                <div class="gnav-header">
                                    <a class="has-childs collapse" role="button" data-toggle="collapse" href="#collapsepurchase_orders_supplier" aria-expanded="false" aria-controls="collapsepurchase_orders_supplier">
                                        <span class="fa fa-edit"></span>
                                        <span class="hidden-on-collapse"> MARBLE REQUESTS</span></a>
                                </div>
                                <ul class="subnav collapse" id="collapsepurchase_orders_supplier">
                                    <?php if(isset($_SESSION['user']) && $_SESSION['user']->aed_purchases): ?>
                                        <li><a href="<?= App::$path ?>purchase_order_supplier/add">
                                                <span class="fa fa-edit"></span>
                                                <span class="hidden-on-collapse">Add a request</span>
                                            </a></li>
                                    <?php endif; ?>
                                    <li><a href="<?= App::$path ?>purchase_order_supplier/index">
                                            <span class="fa fa-edit"></span>
                                            <span class="hidden-on-collapse"> Marble requests</span>
                                        </a></li>
                                </ul>
                            </div>
                        </li><li>
                            <div class="gnav">
                                <div class="gnav-header">
                                    <a class="has-childs collapse" role="button" data-toggle="collapse" href="#collapsedelivery_forms_supplier" aria-expanded="false" aria-controls="collapsedelivery_forms_supplier">
                                        <span class="fa fa-edit"></span>
                                        <span class="hidden-on-collapse"> MARBLE IMPORT</span></a>
                                </div>
                                <ul class="subnav collapse" id="collapsedelivery_forms_supplier">
                                    <?php if(isset($_SESSION['user']) && $_SESSION['user']->aed_purchases): ?>
                                        <li><a href="<?= App::$path ?>delivery_form_supplier/add">
                                                <span class="fa fa-edit"></span>
                                                <span class="hidden-on-collapse">Add an import</span>
                                            </a></li>
                                    <?php endif; ?>
                                    <li><a href="<?= App::$path ?>delivery_form_supplier/index">
                                            <span class="fa fa-edit"></span>
                                            <span class="hidden-on-collapse"> Marble import</span>
                                        </a></li>
                                </ul>
                            </div>
                        </li><li>
                            <div class="gnav">
                                <div class="gnav-header">
                                    <a class="has-childs collapse" role="button" data-toggle="collapse" href="#collapseinvoice_suppliers" aria-expanded="false" aria-controls="collapseinvoice_suppliers">
                                        <span class="fa fa-edit"></span>
                                        <span class="hidden-on-collapse">INVOICES</span></a>
                                </div>
                                <ul class="subnav collapse" id="collapseinvoice_suppliers">
                                    <?php if(isset($_SESSION['user']) && $_SESSION['user']->aed_purchases): ?>
                                        <li><a href="<?= App::$path ?>invoice_supplier/add">
                                                <span class="fa fa-edit"></span>
                                                <span class="hidden-on-collapse">Add an invoice</span>
                                            </a></li>
                                    <?php endif; ?>
                                    <li><a href="<?= App::$path ?>invoice_supplier/index">
                                            <span class="fa fa-edit"></span>
                                            <span class="hidden-on-collapse">Invoices</span>
                                        </a></li>
                                </ul>
                            </div>
                        </li><li>
                            <div class="gnav">
                                <div class="gnav-header">
                                    <a class="has-childs collapse" role="button" data-toggle="collapse" href="#collapsepayment_suppliers" aria-expanded="false" aria-controls="collapsepayment_suppliers">
                                        <span class="fa fa-edit"></span>
                                        <span class="hidden-on-collapse">PAYMENTS</span></a>
                                </div>
                                <ul class="subnav collapse" id="collapsepayment_suppliers">
                                    <?php if(isset($_SESSION['user']) && $_SESSION['user']->aed_purchases): ?>
                                        <li><a href="<?= App::$path ?>payment_supplier/add">
                                                <span class="fa fa-edit"></span>
                                                <span class="hidden-on-collapse">Add a payment</span>
                                            </a></li>
                                    <?php endif; ?>
                                    <li><a href="<?= App::$path ?>payment_supplier/index">
                                            <span class="fa fa-edit"></span>
                                            <span class="hidden-on-collapse">Payments</span>
                                        </a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            <?php endif; ?>
            <!-- purchases end -->
            <?php if(isset($_SESSION['user']) && $_SESSION['user']->show_articles): ?>
            <div class="gnav">
                <div class="gnav-header" style="background-color: #000">
                    <a class="has-childs collapse" role="button" data-toggle="collapse" href="#collapsestocks" aria-expanded="false" aria-controls="collapsestocks">
                        <span class="fa fa-edit"></span>
                        <span class="hidden-on-collapse">STOCKS</span></a>
                </div>
                <ul class="subnav collapse in" id="collapsestocks">
                    <li>
                        <div class="gnav">
                <div class="gnav-header">
                    <a class="has-childs collapse" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                        <span class="fa fa-edit"></span>
                        <span class="hidden-on-collapse">Marble</span></a>
                </div>
                <ul class="subnav collapse" id="collapseExample">
                    <?php if(isset($_SESSION['user']) && $_SESSION['user']->aed_articles): ?>
                    <li><a href="<?= App::$path ?>article/add">
                            <span class="fa fa-edit"></span>
                            <span class="hidden-on-collapse">Add a new type</span>
                        </a></li>
                    <?php endif; ?>
                    <li><a href="<?= App::$path ?>article/index">
                            <span class="fa fa-edit"></span>
                            <span class="hidden-on-collapse">Marble</span>
                        </a></li>
                    <li><a href="<?= App::$path ?>category/index">
                            <span class="fa fa-edit"></span>
                            <span class="hidden-on-collapse">Types</span>
                        </a></li>
                    <li><a href="<?= App::$path ?>unit/index">
                            <span class="fa fa-edit"></span>
                            <span class="hidden-on-collapse">Units</span>
                        </a></li>
                </ul>
            </div>
                        <div class="gnav">
                <div class="gnav-header">
                    <a class="has-childs collapse" role="button" data-toggle="collapse" href="#collapsestock" aria-expanded="false" aria-controls="collapsestock">
                        <span class="fa fa-edit"></span>
                        <span class="hidden-on-collapse">Stocks</span></a>
                </div>
                <ul class="subnav collapse" id="collapsestock">
                    <li><a href="<?= App::$path ?>stock/index">
                            <span class="fa fa-edit"></span>
                            <span class="hidden-on-collapse">Stocks</span>
                        </a></li>
                </ul>
            </div>
                    </li>
                </ul>
            </div>
            <?php endif; ?>
            <?php if(isset($_SESSION['user']) && $_SESSION['user']->show_users_roles): ?>
            <div class="gnav">
                <div class="gnav-header" style="background-color: #000">
                    <a class="has-childs collapse" role="button" data-toggle="collapse" href="#collapseusers_admin" aria-expanded="false" aria-controls="collapseusers_admin">
                        <span class="fa fa-edit"></span>
                        <span class="hidden-on-collapse"> USERS MANAGEMENT</span></a>
                </div>
                <ul class="subnav collapse in" id="collapseusers_admin">
                    <li>
                        <div class="gnav">
                <div class="gnav-header">
                    <a class="has-childs collapse" role="button" data-toggle="collapse" href="#collapseUsers" aria-expanded="false" aria-controls="collapseUsers">
                        <span class="fa fa-users"></span>
                        <span class="hidden-on-collapse">Users</span></a>
                </div>
                <ul class="subnav collapse" id="collapseUsers">
                    <?php if(isset($_SESSION['user']) && $_SESSION['user']->aed_users_roles): ?>
                    <li><a href="<?= App::$path ?>user/add">
                            <span class="fa fa-edit"></span>
                            <span class="hidden-on-collapse">Add a new user</span>
                        </a></li>
                    <?php endif; ?>
                    <li><a href="<?= App::$path ?>user/index">
                            <span class="fa fa-users"></span>
                            <span class="hidden-on-collapse">Manage users</span>
                        </a></li>
                    <li><a href="<?= App::$path ?>user/profile/<?= $_SESSION['user']->id ?>">
                            <span class="fa fa-users"></span>
                            <span class="hidden-on-collapse">Profile</span>
                        </a></li>
                    <li><a href="<?= App::$path ?>user/profileedit/<?= $_SESSION['user']->id ?>">
                            <span class="fa fa-users"></span>
                            <span class="hidden-on-collapse">Edit profie</span>
                        </a></li>
                </ul>
            </div>
                    </li><li>
            <div class="gnav">
                <div class="gnav-header">
                    <a class="has-childs collapse" role="button" data-toggle="collapse" href="#collapseRoles" aria-expanded="false" aria-controls="collapseRoles">
                        <span class="fa fa-lock"></span>
                        <span class="hidden-on-collapse">Access rights</span></a>
                </div>
                <ul class="subnav collapse" id="collapseRoles">
                    <?php if(isset($_SESSION['user']) && $_SESSION['user']->aed_users_roles): ?>
                    <li><a href="<?= App::$path ?>role/add">
                            <span class="fa fa-edit"></span>
                            <span class="hidden-on-collapse">Add an acess right</span>
                        </a></li>
                    <?php endif; ?>
                    <li><a href="<?= App::$path ?>role/index">
                            <span class="fa fa-lock"></span>
                            <span class="hidden-on-collapse">Manage access rights</span>
                        </a></li>
                </ul>
            </div>
                    </li>
                </ul>
            </div>
            <?php endif; ?>





        </section>
    </aside>
<!-- view content start -->
    <div class="content-wrapper">
        <?= $content; ?>
    </div>

<!-- view content start -->
    <footer class="main-footer">
        <p>&copy; Turkey Stone 2019,All rights reserved.</p>
    </footer>

</div>

<script src="<?= App::$path ?>js/jquery-1.11.3.min.js"></script>
<script src="<?= App::$path ?>js/bootstrap.min.js"></script>
<script src="<?= App::$path ?>js/form-validator/jquery.form-validator.min.js"></script>
<script src="<?= App::$path ?>js/functions.js"></script>
<script src="<?= App::$path ?>js/<?= App::getInstance()->cur_page ?>.js"></script>
<script>
            $(document).ready(function(){

            $('#btn-sidebar-collapse').click(function(){

                if( $('body').hasClass('has-mini-sidebar') )
                    $('body').removeClass('has-mini-sidebar')
                else
                    $('body').addClass('has-mini-sidebar')
            });


        });
</script>
</body>
