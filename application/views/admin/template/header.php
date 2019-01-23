<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Admin Desa</title>

    <!-- Fontfaces CSS-->
    <link href="<?php echo base_url("assets_admin/") ?>css/font-face.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url("assets_admin/") ?>vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url("assets_admin/") ?>vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url("assets_admin/") ?>vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?php echo base_url("assets_admin/") ?>vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?php echo base_url("assets_admin/") ?>vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url("assets_admin/") ?>vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url("assets_admin/") ?>vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url("assets_admin/") ?>vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url("assets_admin/") ?>vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url("assets_admin/") ?><?php echo base_url("assets_admin/") ?>vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url("assets_admin/") ?>vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?php echo base_url("assets_admin/") ?>css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="<?php echo base_url("assets_admin/") ?>index.html">
                            <img src="images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="active has-sub">
                            <a class="js-arrow" href="<?php echo base_url("Admin/Dashboard") ?>">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                
                            </ul>
                             </li>
                        <li>
                            <a href="<?php echo base_url("Admin/Users") ?>">
                                <i class="fas fa-chart-bar"></i>Users</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url("assets_admin/") ?>table.html">
                                <i class="fas fa-table"></i>Tentang Desa</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url("assets_admin/") ?>form.html">
                                <i class="far fa-check-square"></i>Keuangan</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-calendar-alt"></i>PPID Desa</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url("assets_admin/") ?>">
                                <i class="far fa-comment-dots"></i>Berita</a>
                        </li>
                       
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>UI Elements</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="<?php echo base_url("assets_admin/") ?>button.html">Button</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url("assets_admin/") ?><?php echo base_url("assets_admin/") ?><?php echo base_url("assets_admin/") ?><?php echo base_url("assets_admin/") ?>badge.html">Badges</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url("assets_admin/") ?><?php echo base_url("assets_admin/") ?><?php echo base_url("assets_admin/") ?>tab.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url("assets_admin/") ?><?php echo base_url("assets_admin/") ?>card.html">Cards</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url("assets_admin/") ?>alert.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url("assets_admin/") ?>progress-bar.html">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url("assets_admin/") ?>modal.html">Modals</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url("assets_admin/") ?><?php echo base_url("assets_admin/") ?>switch.html">Switchs</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url("assets_admin/") ?>grid.html">Grids</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url("assets_admin/") ?>fontawesome.html">Fontawesome Icon</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url("assets_admin/") ?>typo.html">Typography</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="<?php echo base_url("assets_admin/") ?>images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="<?php echo base_url("Admin/Dashboard") ?>">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo base_url("Admin/Users") ?>">
                                <i class="fas fa-user"></i>Users</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-building"></i>Tentang Desa</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                   <a href="<?php echo base_url("Admin/Dashboard/profil") ?>"><i class="fas fa-home"></i>Profil Desa</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url("Admin/Dashboard/peraturan") ?>"><i class="fas fa-copy"></i>Peraturan Desa</a>
                                </li>
                               
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo base_url("Admin/Keuangan") ?>">
                                <i class="fas fa-tasks"></i>Keuangan</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url("Admin/Ppid") ?>">
                                <i class="fas fa-archive"></i>PPID Desa</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url("Admin/Berita") ?>">
                                <i class="fas fa-bullhorn"></i>Berita</a>
                        </li>
                         <li>
                            <a href="<?php echo base_url("Admin/Comment") ?>">
                                <i class="fas fa-comments"></i>Comment</a>
                        </li>
                       
                       
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    
                                            
                                           
                                           
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">Admin</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            
                                                
                                            <div class="account-dropdown__footer">
                                                <a href="<?php echo base_url("Login/logout") ?>">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->
