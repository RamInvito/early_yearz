    <?php 
    $this->load->view('public/default/header')
    ?>
    <!-- =========Header Content Area=========== -->
	<section>
		<div class="header-content-area">
			<div class="container">
				<!--header pattern-->
				<div class="header-pattern-1">
					<img src=<?= base_url("/assets/img/header-pattern-1.png") ?> alt="">
				</div>
				<div class="header-pattern-2">
					<img src=<?= base_url("/assets/img/header-pattern2.png") ?> alt="">
				</div>
				<div class="header-animation-area">
					<div class="row">
						<div class="col-xl-12 col-lg-12 col-md-12">
							<!--header text-->
							<div class="intro-text">
								<h1 data-aos="slide-right" data-aos-anchor-placement="top-bottom" data-aos-delay="700" data-aos-duration="1200">Earlyyearz <br>#the best all-in-one and <br>easy to use Childcare <br>Management Web-App </h1>
								<!-- <p data-aos="fade-in" data-aos-anchor-placement="top-bottom" data-aos-delay="1500" data-aos-duration="1200">Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br>
									Quod ab tenetur itaque ullam repellendus ipsum! Nesciunt, <br> deserunt porro nihil culpa illo deleniti.</p> -->
								<div class="learnmore" data-aos="fade-in" data-aos-anchor-placement="top-bottom" data-aos-delay="1500" data-aos-duration="1200">
									<a href=<?= base_url('/about') ?> class="skill-btn">about us</a>
									<!-- <div class="learnmore2">
										<a href="https://www.youtube.com/watch?v=IMbG5et2pZw" class="skill-btn-youtube popup-youtube"><i class="far fa-play-circle"></i></a>
									</div> -->
								</div>
							</div>
						</div>
						<!--header artwork-->
						<div class="header-1-artwork">
							<div class="layer">
								<img src=<?= base_url("/assets/img/reading_time_gvg0.png") ?> alt="">
								<!-- <div class="layer-1" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="800" data-aos-duration="1000">
									<img src=<?= base_url("/assets/img/man-in-board.png") ?> alt="">
								</div>
								<div class="layer-2" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="800" data-aos-duration="1000">
									<img src=<?= base_url("/assets/img/man-in-pc.png") ?> alt="">
								</div> -->
								<div class="layer-3">
									<img src=<?= base_url("/assets/img/spin.png") ?> alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- =========About Us Area=========== -->
	<section>
		<div class="home-about-area">
			<div class="container">
				<div class="row">
					<!--about image-->
					<div class="col-xl-6 col-lg-6 col-md-6">
						<div class="home-about-image">
							<img src=<?= base_url("/assets/img/school1.png") ?> alt="">
						</div>
					</div>
					<!--about text-->
					<div class="col-xl-6 col-lg-6 col-md-6">
						<div class="section-heading-1 home-about-text">
							<h4>About US</h4>
							<h3>Earlyyearz Web App Software</h3>
							<p>A practical and environmentally friendly solution to creating professional teacher and parent communication, marking children attendance, managing classrooms, sending school-fees payment reminders, documenting and sharing children’s learning progress and daily activities all in one place.</p>
							<div class="section-button">
								<a href=<?= base_url('/about') ?>>Read More</a>
							</div>
							<div class="e-pattern">
								<img src=<?= base_url("/assets/img/expertise/e-pattern.png") ?> alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- =========features Area=========== -->
	<section>
		<div class="expertise-area">
			<div class="container">
				<div class="row" style="padding-bottom:30px">
					<!--expertise image-->
					<div class="col-xl-5 col-lg-5 col-md-5">
						<div class="expertise-image">
							<img src=<?= base_url("/assets/img/illust/communication.png") ?> alt="">
						</div>
					</div>
					<!--expertise heading text-->
					<div class="col-xl-7 col-lg-7 col-md-7 d-flex align-items-center">
						<div class="section-heading-1 home-expertise-text">
							<!-- <h4> Professional and Friendly Communication</h4> -->
							<h3> Professional and Friendly Communication</h3>
							<p>Parents no longer need to feel away from their children! Our childcare management software provides an easy system for communication between teachers and parents. Teachers can send important messages to parents and parents can directly message teachers all on in one place. </p>
							<!-- <div class="section-button">
								<a href="#">get quote</a>
							</div> -->
							<div class="e-pattern">
								<img src=<?= base_url("/assets/img/expertise/e-pattern.png") ?> alt="">
							</div>
						</div>
					</div>
					<!--expertise heading text-->

				</div>
				<div class="row" style="padding-bottom:30px">
					<!--expertise heading text-->
					<div class="col-xl-7 col-lg-7 col-md-7 d-flex align-items-center">
						<div class="section-heading-2 home-expertise-text" style="text-align:left">
							<!-- <h4>Experties</h4> -->
							<h3>Mark Children Attendance</h3>
							<p>Digitally record children’s attendance all in one place om our software. It is very easy to do! .</p>
							<!-- <div class="section-button">
								<a href="#">get quote</a>
							</div> -->
							<div class="e-pattern">
								<img src=<?= base_url("/assets/img/expertise/e-pattern.png") ?> alt="">
							</div>
						</div>
					</div>
					<!--expertise image-->
					<div class="col-xl-5 col-lg-5 col-md-5">
						<div class="expertise-image">
							<img src=<?= base_url("/assets/img/illust/attendence.png") ?> alt="">
						</div>
					</div>

				</div>
				<div class="row" style="padding-bottom:30px">
					<!--expertise image-->
					<div class="col-xl-5 col-lg-5 col-md-5">
						<div class="expertise-image">
							<img src=<?= base_url("/assets/img/illust/form.png") ?> alt="">
						</div>
					</div>
					<!--expertise heading text-->
					<div class="col-xl-7 col-lg-7 col-md-7 d-flex align-items-center">
						<div class="section-heading-1 home-expertise-text">
							<!-- <h4>Smart Daily Form</h4> -->
							<h3>Smart Daily Form</h3>
							<p>Say goodbye to paper diary reports! Now with the comfort of your mobile phone, laptop or computer you can digitally manage daily reports. Parents can also be updated about their children’s daily activities and can be informed about their child’s learning progress.</p>
							<!-- <div class="section-button">
								<a href="#">get quote</a>
							</div> -->
							<div class="e-pattern">
								<img src=<?= base_url("/assets/img/expertise/e-pattern.png") ?> alt="">
							</div>
						</div>
					</div>
					<!--expertise heading text-->

				</div>
				<div class="row" style="padding-bottom:30px">
					<!--expertise heading text-->
					<div class="col-xl-7 col-lg-7 col-md-7 d-flex align-items-center">
						<div class="section-heading-2 home-expertise-text" style="text-align:left">
							<!-- <h4>Experties</h4> -->
							<h3>Smart accident Report</h3>
							<p>Digitally record accidents! As childcare providers: children under our care may occasionally have an accident and when it does, teachers can now digitally record the details of what occurred and share it with parents.</p>
							<!-- <div class="section-button">
								<a href="#">get quote</a>
							</div> -->
							<div class="e-pattern">
								<img src=<?= base_url("/assets/img/expertise/e-pattern.png") ?> alt="">
							</div>
						</div>
					</div>
					<!--expertise image-->
					<div class="col-xl-5 col-lg-5 col-md-5">
						<div class="expertise-image">
							<img src=<?= base_url("/assets/img/illust/report.png") ?> alt="">
						</div>
					</div>

				</div>
				<div class="row" style="padding-bottom:30px">
					<!--expertise image-->
					<div class="col-xl-5 col-lg-5 col-md-5">
						<div class="expertise-image">
							<img src=<?= base_url("/assets/img/illust/meal.png") ?> alt="">
						</div>
					</div>
					<!--expertise heading text-->
					<div class="col-xl-7 col-lg-7 col-md-7 d-flex align-items-center">
						<div class="section-heading-1 home-expertise-text">
							<!-- <h4>Experties</h4> -->
							<h3>Healthful Meal Plan </h3>
							<p>Parents will be able to view school meal plans daily.</p>
							<!-- <div class="section-button">
								<a href="#">get quote</a>
							</div> -->
							<div class="e-pattern">
								<img src=<?= base_url("/assets/img/expertise/e-pattern.png") ?> alt="">
							</div>
						</div>
					</div>
					<!--expertise heading text-->

				</div>
				<div class="row" style="padding-bottom:30px">
					<!--expertise heading text-->
					<div class="col-xl-7 col-lg-7 col-md-7 d-flex align-items-center">
						<div class="section-heading-2 home-expertise-text" style="text-align:left">
							<!-- <h4>Experties</h4> -->
							<h3>Creative Lesson Plan</h3>
							<p>Document and share lesson plans among teachers and parents with the click of a button all in one place. </p>
							<!-- <div class="section-button">
								<a href="#">get quote</a>
							</div> -->
							<div class="e-pattern">
								<img src=<?= base_url("/assets/img/expertise/e-pattern.png") ?> alt="">
							</div>
						</div>
					</div>
					<!--expertise image-->
					<div class="col-xl-5 col-lg-5 col-md-5">
						<div class="expertise-image">
							<img src=<?= base_url("/assets/img/illust/creative.png") ?> alt="">
						</div>
					</div>

				</div>
				<div class="row" style="padding-bottom:30px">
					<!--expertise image-->
					<div class="col-xl-5 col-lg-5 col-md-5">
						<div class="expertise-image">
							<img src=<?= base_url("/assets/img/illust/photo.png") ?> alt="">
						</div>
					</div>
					<!--expertise heading text-->
					<div class="col-xl-7 col-lg-7 col-md-7 d-flex align-items-center">
						<div class="section-heading-1 home-expertise-text">
							<!-- <h4>Experties</h4> -->
							<h3>Happy Photo and Video Sharing</h3>
							<p>Document and upload photos and videos of the children’s school trips, special moments, sport days and milestone achievements etc and then share it with parents with a click of button on our software.</p>
							<!-- <div class="section-button">
								<a href="#">get quote</a>
							</div> -->
							<div class="e-pattern">
								<img src=<?= base_url("/assets/img/expertise/e-pattern.png") ?> alt="">
							</div>
						</div>
					</div>
					<!--expertise heading text-->

				</div>
				<div class="row" style="padding-bottom:30px">
					<!--expertise heading text-->
					<div class="col-xl-7 col-lg-7 col-md-7 d-flex align-items-center">
						<div class="section-heading-2 home-expertise-text" style="text-align:left">
							<!-- <h4>Experties</h4> -->
							<h3>Friendly Payments Reminder</h3>
							<p>Send friendly reminders to parents about school fees payments.</p>
							<!-- <div class="section-button">
								<a href="#">get quote</a>
							</div> -->
							<div class="e-pattern">
								<img src=<?= base_url("/assets/img/expertise/e-pattern.png") ?> alt="">
							</div>
						</div>
					</div>
					<!--expertise image-->
					<div class="col-xl-5 col-lg-5 col-md-5">
						<div class="expertise-image">
							<img src=<?= base_url("/assets/img/illust/payment.png") ?> alt="">
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>

	<!-- ========= Who uses app =========== -->
	<section>
		<div class="home-blog-area">
			<div class="container">
				<div class="row">
					<!-- blog heading text-->
					<div class="col-xl-12">
						<div class="section-heading-3">
							<!-- <h4>Our Blogs</h4> -->
							<h3>Who Uses Early Yearz?</h3>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- single blog-->

					<!-- single blog-->
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 margin-top-sb-30">
						<div class="home-single-blog">
							<div class="s-blog-image">
								<img src=<?= base_url('/assets/img/directors.jpg') ?> alt="">
								<!-- <div class="blog-post-date"> -->
									<!-- <span>09 aug</span> -->
								<!-- </div> -->
							</div>
							<div class="s-blog-content">
								<h4>Childcare Directors</h4>
								<p>Schools and parent communication is 100% better!</p>
								<!-- <a href="#">Read More</a> -->
							</div>
						</div>
					</div>
					<!-- single blog-->
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 margin-top-sb-30 margin-top-lb-30">
						<div class="home-single-blog">
							<div class="s-blog-image">
								<img src=<?= base_url('/assets/img/parents.jpg') ?> alt="">
								<!-- <div class="blog-post-date">
								<span>12 jul</span>
								</div> -->
							</div>
							<div class="s-blog-content">
								<h4>Parents</h4>
								<p>We feel involved in our children’s progress while they are at school</p>
								<!-- <a href="#">Read More</a> -->
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
						<div class="home-single-blog">
							<div class="s-blog-image">
								<img src=<?= base_url('/assets/img/teacher.jpg') ?> alt="">
								<!-- <div class="blog-post-date">
									<!-- <span>08 jun</span> 
								</div> -->
							</div>
							<div class="s-blog-content">
								<h4>Teachers</h4>
								<p>We have more time to focus on the learning of the children. </p>
								<!-- <a href="#">Read More</a> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- =========Call to Action=========== -->
	<div class="callto-action">
		<div class="container">
			<div class="row">
				<div class="col-xl-8 col-lg-8 col-md-8 col-sm-7">
					<div class="callto-action-text">
						<h5>Do you have any query ?</h5>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-4 col-sm-5">
					<div class="callto-action-btn">
						<a href=<?= base_url('/contact') ?>>contact us</a>
					</div>
				</div>
			</div>
		</div>
    </div>
    
    <?php 
    $this->load->view('public/default/footer')
    ?>