<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title><?= $title; ?></title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>">
    <!-- style css -->
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <!-- Responsive-->
    <link rel="stylesheet" href="<?= base_url('css/responsive.css') ?>">
    <!-- fevicon -->
    <link rel="icon" href="<?= base_url('images/fevicon.png') ?>" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="<?= base_url('css/jquery.mCustomScrollbar.min.css') ?>">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="<?= base_url('https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css') ?>">
    <link rel="stylesheet" href="<?= base_url('https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css') ?>" media="screen">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->

    <!-- end loader -->
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo" style="height: 80%; width: 80%;"> <a href="<?= base_url('/') ?>"><img src="<?= base_url('images/logop1.png') ?>" width="100px;" height="100px;" alt=""></a> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <div class="menu-area">
                            <div class="limit-box">
                                <nav class="main-menu">
                                    <ul class="menu-area-main" style="margin-top: 5%">
                                        <li> <a href="<?= base_url('/') ?>">Home</a> </li>
                                        <li> <a href="#service"> Product</a> </li>
                                        <li> <a href="#download">Our Clients</a> </li>
                                        <li> <a href="#testimonial">Contact Us</a> </li>
                                        <li> <a href="#about">About Us</a> </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end header inner -->
    </header>
    <!-- end header -->