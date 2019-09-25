<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Website SMKN 2 Bandung</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Course Project">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="<?php echo base_url('assets/styles/bootstrap4/bootstrap.min.css')?>" rel="stylesheet" type="text/css">
		<link href="<?php echo base_url('assets/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css')?>" rel="stylesheet" type="text/css">
		<link href="<?php echo base_url('assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css')?>" rel="stylesheet" type="text/css">
		<link href="<?php echo base_url('assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')?>" rel="stylesheet" type="text/css">
		<link href="<?php echo base_url('assets/plugins/OwlCarousel2-2.2.1/animate.css')?>" rel="stylesheet" type="text/css">
		<link href="<?php echo base_url('assets/styles/main_styles.css')?>" rel="stylesheet" type="text/css">
		<link href="<?php echo base_url('assets/styles/responsive.css')?>" rel="stylesheet" type="text/css">
	</head>
<body>

<div class="super_container">
    <!-- Header -->
    <header class="header d-flex flex-row">
        <div class="header_content d-flex flex-row align-items-center">
            <!-- Logo -->
            <div class="logo_container">
                <div class="logo">
                    <img src="<?=base_url('assets/')?>images/logo2.png" width="65" height="65" alt="">
                    <span>SMKN 2 BANDUNG</span>
                </div>
            </div>
            <!-- Main Navigation -->
            <nav class="main_nav_container">
                <div class="main_nav">
                    <ul class="main_nav_list">
                        <li class="main_nav_item"><a href="<?php echo base_url ('views/index');?>">Home</a></li>
                        <li class="main_nav_item"><a href="<?php echo base_url('views/profile');?>">Profil </a></li>
                        <li class="main_nav_item"><a href="courses.html">Data Siswa</a></li>
                        <li class="main_nav_item"><a href="elements.html">Artikel</a></li>
                        <li class="main_nav_item"><a href="news.html">Jurusan</a></li>
                        <li class="main_nav_item"><a href="contact.html">Kontak</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="header_side d-flex flex-row justify-content-center align-items-center">
            <img src="<?=base_url('assets/')?>images/phone-call.svg" alt="">
            <span>(022) 7234285, 4231857</span>
        </div>
        <!-- Hamburger -->
        <div class="hamburger_container">
            <i class="fas fa-bars trans_200"></i>
        </div>
    </header>
        
    <!-- Menu -->
    <div class="menu_container menu_mm">
        <!-- Menu Close Button -->
        <div class="menu_close_container">
            <div class="menu_close"></div>
        </div>
        <!-- Menu Items -->
        <div class="menu_inner menu_mm">
            <div class="menu menu_mm">
                <ul class="menu_list menu_mm">
                    <li class="menu_item menu_mm"><a href="<?php echo base_url().'index.php/views/index'?>">Home</a></li>
                    <li class="menu_item menu_mm"><a href="<?php echo base_url().'index.php/views/profile'?>">Profil</a></li>
                    <li class="menu_item menu_mm"><a href="courses.html">Data Siswa</a></li>
                    <li class="menu_item menu_mm"><a href="elements.html">Artikel</a></li>
                    <li class="menu_item menu_mm"><a href="news.html">Jurusan</a></li>
                    <li class="menu_item menu_mm"><a href="contact.html">Kontak</a></li>
                </ul>
                <!-- Menu Social -->
                <div class="menu_social_container menu_mm">
                    <ul class="menu_social menu_mm">
                        <li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                        <li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-twitter"></i></a></li>
                    </ul>
                </div>
                <div class="menu_copyright menu_mm"> All rights reserved</div>
            </div>
        </div>
    </div>