<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <title>Membriux</title>
    <link rel="stylesheet" href="assets/plugins/morris/morris.css">

    <link href="assets/plugins/switchery/switchery.min.css" rel="stylesheet" />

    <!-- Plugins css time -->
    <link href="assets/plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
    <link href="assets/plugins/mjolnic-bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
    <link href="assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <link href="assets/plugins/clockpicker/bootstrap-clockpicker.min.css" rel="stylesheet">
    <link href="assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    
    <!--Form Wizard-->
    <link rel="stylesheet" type="text/css" href="assets/plugins/jquery.steps/demo/css/jquery.steps.css" />

    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    <script src="assets/js/modernizr.min.js"></script>
</head>
<body>
    <header id="topnav">
        <div class="topbar-main">
            <div class="container">

                <div class="topbar-left">
                    <a href="index.html" class="logo">
                        <i class="zmdi zmdi-group-work icon-c-logo"></i>
                        <span>Membreziux</span>
                    </a>
                </div>


                <div class="menu-extras">

                    <ul class="nav navbar-nav pull-right">

                        <li class="nav-item">

                            <a class="navbar-toggle">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>

                        </li>

                        <li class="nav-item hidden-sm-down">
                            <form role="search" class="navbar-left app-search pull-left hidden-xs">
                                <input type="text" placeholder="Pesquisar membro..." class="form-control">
                                <a href=""><i class="fa fa-search"></i></a>
                            </form>
                        </li>

                        <div class="clearfix"></div>
                    </ul>
                </div>
            </div>

            <?php require_once 'menu.php'; ?>


        </div>
    </div>
</header>

<!-- ============================================================== -->
<!-- A página começa aqui -->
<!-- ============================================================== -->
<div class="wrapper">
    <div class="container">
