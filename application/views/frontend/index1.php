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
					<img src="<?=base_url('assets/images/logo2.png')?>" height="65" width="65" alt="">
					<span>SMKN 2 BANDUNG</span>
				</div>
			</div>
			<!-- Main Navigation -->
			<nav class="main_nav_container">
				<div class="main_nav">
					<ul class="main_nav_list">
						<li class="main_nav_item"><a href="<?php echo base_url('views/home');?>">Home</a></li>
						<li class="main_nav_item"><a href="<?php echo base_url('views/profile');?>">Profile</a></li>
                        <li class="main_nav_item"><a href="courses.html">Data Siswa</a></li>
                        <li class="main_nav_item"><a href="elements.html">Artikel</a></li>
                        <li class="main_nav_item"><a href="news.html">Jurusan</a></li>
                        <li class="main_nav_item"><a href="contact.html">Kontak</a></li>
				</div>
			</nav>
		</div>
		<div class="header_side d-flex flex-row justify-content-center align-items-center">
			<img src="<?=base_url('assets/images/phone-call.svg')?>" alt="">
			<span>+43 4566 7788 2457</span>
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
                    <li class="menu_item menu_mm"><a href="<?php echo base_url().'index.php/views/index1'?>">Home</a></li>
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
				<div class="menu_copyright menu_mm">Colorlib All rights reserved</div>
			</div>
		</div>
	</div>
	
	<!-- Home -->
	<div class="home">
		<!-- Hero Slider -->
		<div class="hero_slider_container">
			<div class="hero_slider owl-carousel">
				<!-- Hero Slide -->
				<!-- Hero Slide -->
                <div class="hero_slide">
                    <div class="hero_slide_background" style="background-image:url(<?=base_url('assets/images/slider_background.jpg')?>)"></div>
                    <div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
                        <div class="hero_slide_content text-center">
                            <h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Selamat Datang di Website SMKN 2 Bandung</h1>
                        </div>
                    </div>
                </div>
                <!-- Hero Slide -->
                <div class="hero_slide">
                    <div class="hero_slide_background" style="background-image:url(<?=base_url('assets/images/slider_background.jpg')?>)"></div>
                    <div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
                        <div class="hero_slide_content text-center">
                            <h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Selamat Datang di Website SMKN 2 Bandung</h1>
                        </div>
                    </div>
                </div>
                <!-- Hero Slide -->
                <div class="hero_slide">
                    <div class="hero_slide_background" style="background-image:url(<?=base_url('assets/images/slider_background.jpg')?>)"></div>
                    <div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
                        <div class="hero_slide_content text-center">
                            <h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Selamat Datang di Website SMKN 2 Bandung</h1>
                        </div>
                    </div>
                </div>
			</div>
			<div class="hero_slider_left hero_slider_nav trans_200"><span class="trans_200">prev</span></div>
			<div class="hero_slider_right hero_slider_nav trans_200"><span class="trans_200">next</span></div>
		</div>
    </div>
    <!-- Boxes -->
    <div class="hero_boxes">
        <div class="hero_boxes_inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 hero_box_col">
                        <div class="hero_box d-flex flex-row align-items-center justify-content-start">
                            <img src="<?=base_url('assets/images/earth-globe.svg')?>" class="svg" alt="">
                            <div class="hero_box_content">
                                <h2 class="hero_box_title">Galeri Foto</h2>
                                <a href="courses.html" class="hero_box_link">Lihat Lebih</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 hero_box_col">
                        <div class="hero_box d-flex flex-row align-items-center justify-content-start">
                            <img src="<?=base_url('assets/images/books.svg')?>" class="svg" alt="">
                            <div class="hero_box_content">
                                <h2 class="hero_box_title">Guru</h2>
                                <a href="courses.html" class="hero_box_link">Lihat Lebih</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 hero_box_col">
                        <div class="hero_box d-flex flex-row align-items-center justify-content-start">
                            <img src="<?=base_url('assets/images/professor.svg')?>" class="svg" alt="">
                            <div class="hero_box_content">
                                <h2 class="hero_box_title">Alumni</h2>
                                <a href="teachers.html" class="hero_box_link">Lihat Lebih</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

	<!-- Popular -->
    <div class="popular page_section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title text-center">
                        <h1>Kompetensi Keahlian</h1>
                    </div>
                </div>
            </div>
            <div class="row course_boxes">
                <!-- Popular Course Item -->
                <div class="col-lg-4 course_box">
                    <div class="card">
                        <img class="card-img-top" src="<?=base_url('assets/')?>images/tki.jpg" alt="https://unsplash.com/@kellybrito">
                        <div class="card-body text-center">
                            <div class="card-title"><a href="courses.html">Teknik Komputer dan Informatika</a></div>
                            <div class="card-text">RPL,TKJ,MM...</div>
                        </div>
                        <div class="price_box d-flex flex-row align-items-center">
                            <div class="course_author_image">
                                <img src="<?=base_url('assets/')?>images/author.jpg" alt="https://unsplash.com/@mehdizadeh">
                            </div>
                            <div class="course_author_name">Mull, <span>Guru</span></div>
                        </div>
                    </div>
                </div>
                <!-- Popular Course Item -->
                <div class="col-lg-4 course_box">
                    <div class="card">
                        <img class="card-img-top" src="<?=base_url('assets/')?>images/animasi.jpg" alt="https://unsplash.com/@cikstefan">
                        <div class="card-body text-center">
                            <div class="card-title"><a href="courses.html">Animasi</a></div>
                            <div class="card-text">Animasi...</div>
                        </div>
                        <div class="price_box d-flex flex-row align-items-center">
                            <div class="course_author_image">
                                <img src="<?=base_url('assets/')?>images/author.jpg" alt="https://unsplash.com/@mehdizadeh">
                            </div>
                            <div class="course_author_name">Daniel, <span>Guru</span></div>
                        </div>
                    </div>
                </div>
                <!-- Popular Course Item -->
                <div class="col-lg-4 course_box">
                    <div class="card">
                        <img class="card-img-top" src="<?=base_url('assets/')?>images/mesin.jpg" alt="https://unsplash.com/@dsmacinnes">
                        <div class="card-body text-center">
                            <div class="card-title"><a href="courses.html">Teknik Mesin</a></div>
                            <div class="card-text">TPL,TGM,TP...</div>
                        </div>
                        <div class="price_box d-flex flex-row align-items-center">
                            <div class="course_author_image">
                                <img src="<?=base_url('assets/')?>images/author.jpg" alt="https://unsplash.com/@mehdizadeh">
                            </div>
                            <div class="course_author_name">Budi, <span>Guru</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>		
    </div>

	<!-- Services -->
    <div class="services page_section">
				<div class="container">
					<div class="row services_row">
						<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
							<div class="icon_container d-flex flex-column justify-content-end">
								<img src="<?=base_url('assets/')?>images/earth-globe.svg" alt="">
							</div>
							<h3>Belajar Online</h3>
							<p>...</p>
						</div>
						<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
							<div class="icon_container d-flex flex-column justify-content-end">
								<img src="<?=base_url('assets/')?>images/exam.svg" alt="">
							</div>
							<h3>Belajar di Sekolah</h3>
							<p>...</p>
						</div>
						<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
							<div class="icon_container d-flex flex-column justify-content-end">
								<img src="<?=base_url('assets/')?>images/books.svg" alt="">
							</div>
							<h3>Pelajaran Yang Menarik</h3>
							<p>...</p>
						</div>
						<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
							<div class="icon_container d-flex flex-column justify-content-end">
								<img src="<?=base_url('assets/')?>images/professor.svg" alt="">
							</div>
							<h3>Guru Terbaik</h3>
							<p>...</p>
						</div>
						<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
							<div class="icon_container d-flex flex-column justify-content-end">
								<img src="<?=base_url('assets/')?>images/blackboard.svg" alt="">
							</div>
							<h3>Kompetensi Keahlian Terbaik</h3>
							<p>...</p>
						</div>
						<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
							<div class="icon_container d-flex flex-column justify-content-end">
								<img src="<?=base_url('assets/')?>images/mortarboard.svg" alt="">
							</div>
							<h3>Lulusan Terbaik</h3>
							<p>...</p>
						</div>
					</div>
				</div>
			</div>	

	<!-- Testimonials -->

	<div class="testimonials page_section">
		<!-- <div class="testimonials_background" style="background-image:url(images/testimonials_background.jpg)"></div> -->
		<div class="testimonials_background_container prlx_parent">
			<div class="testimonials_background prlx" style="background-image:url(images/testimonials_background.jpg)"></div>
		</div>
		<div class="container">

			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>What our students say</h1>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					
					<div class="testimonials_slider_container">

						<!-- Testimonials Slider -->
						<div class="owl-carousel owl-theme testimonials_slider">
							
							<!-- Testimonials Item -->
							<div class="owl-item">
								<div class="testimonials_item text-center">
									<div class="quote">“</div>
									<p class="testimonials_text">In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
									<div class="testimonial_user">
										<div class="testimonial_image mx-auto">
											<img src="images/testimonials_user.jpg" alt="">
										</div>
										<div class="testimonial_name">james cooper</div>
										<div class="testimonial_title">Graduate Student</div>
									</div>
								</div>
							</div>

							<!-- Testimonials Item -->
							<div class="owl-item">
								<div class="testimonials_item text-center">
									<div class="quote">“</div>
									<p class="testimonials_text">In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
									<div class="testimonial_user">
										<div class="testimonial_image mx-auto">
											<img src="images/testimonials_user.jpg" alt="">
										</div>
										<div class="testimonial_name">james cooper</div>
										<div class="testimonial_title">Graduate Student</div>
									</div>
								</div>
							</div>

							<!-- Testimonials Item -->
							<div class="owl-item">
								<div class="testimonials_item text-center">
									<div class="quote">“</div>
									<p class="testimonials_text">In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
									<div class="testimonial_user">
										<div class="testimonial_image mx-auto">
											<img src="images/testimonials_user.jpg" alt="">
										</div>
										<div class="testimonial_name">james cooper</div>
										<div class="testimonial_title">Graduate Student</div>
									</div>
								</div>
							</div>

						</div>

					</div>
				</div>
			</div>

		</div>
	</div>

	<!-- Events -->

	<div class="events page_section">
		<div class="container">
			
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>Upcoming Events</h1>
					</div>
				</div>
			</div>
			
			<div class="event_items">

				<!-- Event Item -->
				<div class="row event_item">
					<div class="col">
						<div class="row d-flex flex-row align-items-end">

							<div class="col-lg-2 order-lg-1 order-2">
								<div class="event_date d-flex flex-column align-items-center justify-content-center">
									<div class="event_day">07</div>
									<div class="event_month">January</div>
								</div>
							</div>

							<div class="col-lg-6 order-lg-2 order-3">
								<div class="event_content">
									<div class="event_name"><a class="trans_200" href="#">Student Festival</a></div>
									<div class="event_location">Grand Central Park</div>
									<p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor.</p>
								</div>
							</div>

							<div class="col-lg-4 order-lg-3 order-1">
								<div class="event_image">
									<img src="images/event_1.jpg" alt="https://unsplash.com/@theunsteady5">
								</div>
							</div>

						</div>	
					</div>
				</div>

				<!-- Event Item -->
				<div class="row event_item">
					<div class="col">
						<div class="row d-flex flex-row align-items-end">

							<div class="col-lg-2 order-lg-1 order-2">
								<div class="event_date d-flex flex-column align-items-center justify-content-center">
									<div class="event_day">07</div>
									<div class="event_month">January</div>
								</div>
							</div>

							<div class="col-lg-6 order-lg-2 order-3">
								<div class="event_content">
									<div class="event_name"><a class="trans_200" href="#">Open day in the Univesrsity campus</a></div>
									<div class="event_location">Grand Central Park</div>
									<p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor.</p>
								</div>
							</div>

							<div class="col-lg-4 order-lg-3 order-1">
								<div class="event_image">
									<img src="images/event_2.jpg" alt="https://unsplash.com/@claybanks1989">
								</div>
							</div>

						</div>	
					</div>
				</div>

				<!-- Event Item -->
				<div class="row event_item">
					<div class="col">
						<div class="row d-flex flex-row align-items-end">

							<div class="col-lg-2 order-lg-1 order-2">
								<div class="event_date d-flex flex-column align-items-center justify-content-center">
									<div class="event_day">07</div>
									<div class="event_month">January</div>
								</div>
							</div>

							<div class="col-lg-6 order-lg-2 order-3">
								<div class="event_content">
									<div class="event_name"><a class="trans_200" href="#">Student Graduation Ceremony</a></div>
									<div class="event_location">Grand Central Park</div>
									<p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor.</p>
								</div>
							</div>

							<div class="col-lg-4 order-lg-3 order-1">
								<div class="event_image">
									<img src="images/event_3.jpg" alt="https://unsplash.com/@juanmramosjr">
								</div>
							</div>

						</div>	
					</div>
				</div>

			</div>
				
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			
			<!-- Newsletter -->

			<div class="newsletter">
				<div class="row">
					<div class="col">
						<div class="section_title text-center">
							<h1>Subscribe to newsletter</h1>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col text-center">
						<div class="newsletter_form_container mx-auto">
							<form action="post">
								<div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-center">
									<input id="newsletter_email" class="newsletter_email" type="email" placeholder="Email Address" required="required" data-error="Valid email is required.">
									<button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300" value="Submit">Subscribe</button>
								</div>
							</form>
						</div>
					</div>
				</div>

			</div>

			<!-- Footer Content -->
            <div class="footer_content">
						<div class="row">
							<!-- Footer Column - About -->
							<div class="col-lg-3 footer_col">
								<!-- Logo -->
								<div class="logo_container">
									<div class="logo">
										<img src="<?=base_url('assets/')?>images/logo2.png" width="50" height="50" alt="">
										<span>SMKN 2 BDG</span>
									</div>
								</div>
								<p class="footer_about_text">SMKN 2 BANDUNG JUARA</p>
							</div>
							<!-- Footer Column - Menu -->
							<div class="col-lg-3 footer_col">
								<div class="footer_column_title">Menu</div>
								<div class="footer_column_content">
									<ul>
										<li class="footer_list_item"><a href="#">Home</a></li>
										<li class="footer_list_item"><a href="#">Profil</a></li>
										<li class="footer_list_item"><a href="courses.html">Data Siswa</a></li>
										<li class="footer_list_item"><a href="news.html">Artikel</a></li>
										<li class="footer_list_item"><a href="contact.html">Jurusan</a></li>
										<li class="footer_list_item"><a href="contact.html">Kontak</a></li>
									</ul>
								</div>
							</div>
							<!-- Footer Column - Usefull Links -->
							<div class="col-lg-3 footer_col">
								<div class="footer_column_title">Link</div>
								<div class="footer_column_content">
									<ul>
										<li class="footer_list_item"><a href="#">Testimonials</a></li>
										<li class="footer_list_item"><a href="#">FAQ</a></li>
										<li class="footer_list_item"><a href="#">Community</a></li>
										<li class="footer_list_item"><a href="#">Campus Pictures</a></li>
										<li class="footer_list_item"><a href="#">Tuitions</a></li>
									</ul>
								</div>
							</div>

							<!-- Footer Column - Contact -->
							<div class="col-lg-3 footer_col">
								<div class="footer_column_title">Kontak</div>
								<div class="footer_column_content">
									<ul>
										<li class="footer_contact_item">
											<div class="footer_contact_icon">
												<img src="<?=base_url('assets/')?>images/placeholder.svg" alt="https://www.flaticon.com/authors/lucy-g">
											</div>
											Jl. Ciliwung No.4 RT.02 RW.03, Kelurahan Cihapit Kecamatan Bandung Wetan, Bandung 40114
										</li>
										<li class="footer_contact_item">
											<div class="footer_contact_icon">
												<img src="<?=base_url('assets/')?>images/smartphone.svg" alt="https://www.flaticon.com/authors/lucy-g">
											</div>
											(022) 7234285, 4231857
										</li>
										<li class="footer_contact_item">
											<div class="footer_contact_icon">
												<img src="<?=base_url('assets/')?>images/envelope.svg" alt="https://www.flaticon.com/authors/lucy-g">
											</div>humas@smkn2bandung.sch.id
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>

			<!-- Footer Copyright -->

			<div class="footer_bar d-flex flex-column flex-sm-row align-items-center">
				<div class="footer_copyright">
					<span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
				</div>
				<div class="footer_social ml-sm-auto">
					<ul class="menu_social">
						<li class="menu_social_item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-instagram"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
					</ul>
				</div>
			</div>

		</div>
	</footer>

</div>
<!-- plugins -->
<script src="<?= base_url('assets/')?>js/jquery-3.2.1.min.js"></script>
<script src="<?= base_url('assets/')?>styles/bootstrap4/popper.js"></script>
<script src="<?= base_url('assets/')?>styles/bootstrap4/bootstrap.min.js"></script>
<script src="<?= base_url('assets/')?>plugins/greensock/TweenMax.min.js"></script>
<script src="<?= base_url('assets/')?>plugins/greensock/TimelineMax.min.js"></script>
<script src="<?= base_url('assets/')?>plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="<?= base_url('assets/')?>plugins/greensock/animation.gsap.min.js"></script>
<script src="<?= base_url('assets/')?>plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="<?= base_url('assets/')?>plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="<?= base_url('assets/')?>plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="<?= base_url('assets/')?>plugins/easing/easing.js"></script>
<script src="<?= base_url('assets/')?>js/custom.js"></script>

</body>
</html>