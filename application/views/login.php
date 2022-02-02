<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>WBC Store | Login </title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('shop/') ?>assets/images/favicon.svg" />

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="<?= base_url('shop/') ?>assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?= base_url('shop/') ?>assets/css/LineIcons.3.0.css" />
    <link rel="stylesheet" href="<?= base_url('shop/') ?>assets/css/tiny-slider.css" />
    <link rel="stylesheet" href="<?= base_url('shop/') ?>assets/css/glightbox.min.css" />
    <link rel="stylesheet" href="<?= base_url('shop/') ?>assets/css/main.css" />

</head>

<body>
    <!-- Start Header Area -->
    <header class="header navbar-area">
        <!-- Start Header Middle -->
        <div class="header-middle">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-3 col-7">
                        <!-- Start Header Logo -->
                        <a class="navbar-brand" href="<?= base_url() ?>">
                            <img src="<?= base_url('shop/') ?>assets/images/logo/logo.svg" alt="Logo">
                            <!-- <h4 class="fw-bold">WBC Store</h4> -->
                        </a>
                        <!-- End Header Logo -->
                    </div>
                    <div class="col-lg-5 col-md-7 d-xs-none">
                        <!-- Start Main Menu Search -->
                        <div class="main-menu-search">
                            <!-- navbar search start -->
                            <div class="navbar-search search-style-5">
                                <div class="search-select">
                                    <div class="select-position">
                                        <select id="select1">
                                            <option selected>All</option>
                                            <option value="1">option 01</option>
                                            <option value="2">option 02</option>
                                            <option value="3">option 03</option>
                                            <option value="4">option 04</option>
                                            <option value="5">option 05</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="search-input">
                                    <input type="text" placeholder="Search">
                                </div>
                                <div class="search-btn">
                                    <button><i class="lni lni-search-alt"></i></button>
                                </div>
                            </div>
                            <!-- navbar search Ends -->
                        </div>
                        <!-- End Main Menu Search -->
                    </div>
                    <div class="col-lg-4 col-md-2 col-5">
                        <div class="middle-right-area">
                            <div class="nav-hotline">
                                <i class="lni lni-phone"></i>
                                <h3>WBC Store Wa :
                                    <span>0898877657</span>
                                </h3>
                            </div>
                            <div class="navbar-cart">
                                <div class="wishlist">
                                    <a href="javascript:void(0)">
                                        <i class="lni lni-user"></i>
                                    </a>
                                </div>
                                <div class="cart-items me-3">
                                    <a href="javascript:void(0)" class="main-btn">
                                        <i class="lni lni-cart"></i>
                                        <span class="total-items">2</span>
                                    </a>
                                    <!-- Shopping Item -->
                                    <div class="shopping-item">
                                        <div class="dropdown-cart-header">
                                            <span>2 Items</span>
                                            <a href="cart.html">View Cart</a>
                                        </div>
                                        <ul class="shopping-list">
                                            <li>
                                                <a href="javascript:void(0)" class="remove" title="Remove this item"><i class="lni lni-close"></i></a>
                                                <div class="cart-img-head">
                                                    <a class="cart-img" href="product-details.html"><img src="<?= base_url('shop/') ?>assets/images/header/cart-items/item1.jpg" alt="#"></a>
                                                </div>

                                                <div class="content">
                                                    <h4><a href="product-details.html">
                                                            Apple Watch Series 6</a></h4>
                                                    <p class="quantity">1x - <span class="amount">$99.00</span></p>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" class="remove" title="Remove this item"><i class="lni lni-close"></i></a>
                                                <div class="cart-img-head">
                                                    <a class="cart-img" href="product-details.html"><img src="<?= base_url('shop/') ?>assets/images/header/cart-items/item2.jpg" alt="#"></a>
                                                </div>
                                                <div class="content">
                                                    <h4><a href="product-details.html">Wi-Fi Smart Camera</a></h4>
                                                    <p class="quantity">1x - <span class="amount">$35.00</span></p>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="bottom">
                                            <div class="total">
                                                <span>Total</span>
                                                <span class="total-amount">$134.00</span>
                                            </div>
                                            <div class="button">
                                                <a href="checkout.html" class="btn animate">Checkout</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/ End Shopping Item -->
                                </div>
                                <div class="login">
                                    <a href="<?= base_url() ?>" class="btn btn-primary rounded-pill px-3">Kembali</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Middle -->

    </header>
    <!-- End Header Area -->

    <!-- Start Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">Login</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="breadcrumb-nav">
                        <li>
                            <a href="#">
                                <i class="lni lni-home"></i>
                                Login
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Start Item Details -->
    <section class="item-details section" style="margin-top: -50px;">
        <div class="container">
            <div class="col-12 col-lg-4 mx-auto">
                <div class="product-details-info shadow">
                    <div class="single-block">
                        <div class="row">
                            <div class="col-12">
                                <div class="info-body custom-responsive-margin">
                                    <h4 class="fw-bold">Silakan Login</h4>
                                    <form action="<?php echo base_url('login/login_user') ?>" method="post">
                                        <?php if ($pesan = $this->session->flashdata('login_response')) : ?>
                                            <div class="row">
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <div class="alert alert-danger" role="alert">
                                                            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> <a href="javascript:void(0);" class="close" data-dismiss="alert">&times;</a>
                                                            <span class="sr-only">Pesan:</span>
                                                            <?php echo $pesan; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif ?>
                                        <label for="email">Email</label>
                                        <input class="form-control mb-4" type="email" name="username" id="email" placeholder="Silakan masukan email anda!">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <?php echo form_error('username', '<div class="text-danger">', '</div>'); ?>
                                            </div>
                                        </div>
                                        <label for="password">Password </label>
                                        <input class="form-control" type="password" name="password" id="password" placeholder="Silakan masukan password anda!">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <?php echo form_error('password', '<div class="text-danger">', '</div>'); ?>
                                            </div>
                                        </div>
                                        <div class="text-right d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary mt-4">Masuk</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Item Details -->

    <?php require('shop/template/footer.php') ?>