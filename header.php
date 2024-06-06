<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title><?php get_title() ?></title>
    <meta name="description" content="Admintres is a Dashboard & Admin Site Responsive Template by hencework." />
    <meta name="keywords" content="admin" />
    <meta name="author" content="hencework" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Data table CSS -->
    <link href="<?= asset('theme/assets/css/dataTables.bootstrap5.min.css')?>" rel="stylesheet">

    <link rel="stylesheet" href="<?=asset('theme/assets/vendors/bower_components/bootstrap/dist/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?=asset('theme/assets/vendors/bower_components/switchery/dist/switchery.min.css')?>">

    <!-- Toast CSS -->
    <link href="<?= asset('theme/assets/vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.css') ?>" rel="stylesheet" type="text/css">

    <!-- Morris Charts CSS -->
    <link href="<?= asset('theme/assets/vendors/bower_components/morris.js/morris.css') ?>" rel="stylesheet" type="text/css" />

    <!-- Chartist CSS -->
    <link href="<?= asset('theme/assets/vendors/bower_components/chartist/dist/chartist.min.css') ?>" rel="stylesheet" type="text/css" />


    <!-- vector map CSS -->
    <link href="<?= asset('theme/assets/vendors/vectormap/jquery-jvectormap-2.0.2.css') ?>" rel="stylesheet" type="text/css" />

    <!-- Datatable -->
    <link href="<?= asset('theme/assets/vendors/bower_components/bootstrap-table/dist/bootstrap-table.css')?>" rel="stylesheet" type="text/css"/>

    <!-- Custom CSS -->
    <link href="<?= asset('theme/assets/dist/css/style.css') ?>" rel="stylesheet" type="text/css">

    <?php head_script() ?>

    <style>
        .logo-lg img {
            max-height: 65px !important;
            height: auto;
            max-width: 100%;
        }

        html[data-sidenav-size=condensed]:not([data-layout=topnav]) .wrapper .leftside-menu .logo,
        .leftside-menu {
            background-color: #FFF;
        }
    </style>
</head>

<body>
    <!-- Preloader -->
    <div class="preloader-it">
        <div class="la-anim-1"></div>
    </div>
    <!-- /Preloader -->
    <div class="wrapper theme-2-active navbar-top-light">
        <!-- Top Menu Items -->
        <?php get_nav() ?>

        <!-- /Top Menu Items -->

        <!-- Left Sidebar Menu -->
        <?php get_sidebar() ?>
        <!-- /Left Sidebar Menu -->


        <div class="page-wrapper">
            <div class="container">
                <?php if (get_module_name()) : ?>


                    <!-- Title -->
                    <div class="row heading-bg">
                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                            <h5 class="txt-dark"><?= get_module_name() ?></h5>
                        </div>

                        <!-- Breadcrumb -->
                        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                            <?php if (get_breadcrumbs()) : ?>
                                <ol class="breadcrumb">
                                    <?php foreach (get_breadcrumbs() as $breadcrumb) : ?>
                                        <li><a href="<?= isset($breadcrumb['url']) ? $breadcrumb['url'] : 'javascript:void(0)' ?>"><?= $breadcrumb['title'] ?></a></li>
                                        <?php endforeach ?>
                                </ol>
                            <?php endif ?>
                        </div>
                        <!-- /Breadcrumb -->

                    <?php endif ?>
                    </div>

                    <div class="panel panel-default border-panel card-view" style="padding: 15px;">
                         
                   
                 
                 
                    <!-- /Title -->