@extends('front.layouts.master')

	@section('content')
		<!-- Slider section start here -->
		<section id="Slider">
			<div id="main-slider" class="carousel slide" data-ride="carousel">
			    <!-- <ol class="carousel-indicators">
			        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
			        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
			        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
			    </ol> -->
			    <div class="carousel-inner">
			        <div class="carousel-item active">
			            <img src="{{ url ('front/assets/images/slider/first-report.jpg') }}" class="d-block w-100" alt="Slider Image">
			            <div class="carousel-caption d-none d-md-block">
			                <h2>First report Launch</h2>
			                <p>of BHW</p>
			            </div>
			        </div>
			        <div class="carousel-item">
			            <img src="{{ url ('front/assets/images/slider/hand-wash.jpg') }}" class="d-block w-100" alt="Slider Image">
			            <div class="carousel-caption d-none d-md-block">
			                <h2>WASH in Rohingya camp</h2>
			                <p>Cox's Bazar</p>
			            </div>
			        </div>
			        <div class="carousel-item">
			            <img src="{{ url ('front/assets/images/slider/media-response.jpg') }}" class="d-block w-100" alt="Slider Image">
			            <div class="carousel-caption d-none d-md-block">
			                <h2>Media response on the</h2>
			                <p>research of COVID-19</p>
			            </div>
			        </div>
			        <div class="carousel-item">
			            <img src="{{ url ('front/assets/images/slider/research-desceminition.jpg') }}" class="d-block w-100" alt="Slider Image">
			            <div class="carousel-caption d-none d-md-block">
			                <h2>Research findings dissemination</h2>
			                <p>at Pan Pascfic Sonargaon</p>
			            </div>
			        </div>
			        <div class="carousel-item">
			            <img src="{{ url ('front/assets/images/slider/group-discussion.jpg') }}" class="d-block w-100" alt="Slider Image">
			            <div class="carousel-caption d-none d-md-block">
			                <h2>Group discussion of</h2>
			                <p>a research work</p>
			            </div>
			        </div>
			    </div>
			    <a class="carousel-control-prev" href="#main-slider" role="button" data-slide="prev">
			        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			        <span class="sr-only">Previous</span>
			    </a>
			    <a class="carousel-control-next" href="#main-slider" role="button" data-slide="next">
			        <span class="carousel-control-next-icon" aria-hidden="true"></span>
			        <span class="sr-only">Next</span>
			    </a>
			</div>
			<!-- <a href="#Intro" class="next-section-btn">
				<i class="fa fa-chevron-down"></i>
			</a> -->
		</section>
		<!-- Slider section end here -->


		<!-- Intro section start here -->
		<section id="Intro" class="d-flex justify-content-center align-items-center">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-heading text-center">
							<h2>Bangladesh health watch</h2>
						</div>
					</div>
					<div class="col-md-12 text-center">
						<div class="intro-text">
							<p>Bangladesh Health Watch (BHW), a multi-stakeholder civil society advocacy and monitoring network dedicated to improve the health system in Bangladesh through critical review of policies and programmes and recommendation of appropriate actions for change. The objective of BHW is to improve health of the people by way of monitoring progress in the health of the population and health systems, and playing a catalytic role in making lasting changes in the health sector. The main activity of Bangladesh Health Watch is to publish an annual report on the state of health in Bangladesh every year by commissioning researches. A Working Group consisting of researchers and activists from different organizations carry out the different activities for the Watch. The Secretariat for the BHW is located at the James P Grant School of Public Health, BRAC University. It was initiated in 2006 and will be continuing. BHW is funded by different donors, such as Swedish SIDA, Rockefeller Foundation etc.</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Intro section end here -->


		<!-- Work section start here -->
		<section id="Work" class="gray">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-heading text-center">
							<h2>Our Work</h2>
							<p>Lorem ipsum dolor sit amet, consectetur.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="owl-carousel work-slider">
				<div class="single-work full-box">
					<div class="single-work-image">
						<a href="javascript:void(0);">
							<img src="{{ url ('front/assets/images/work/1.jpg') }}" alt="Work Image">
						</a>
					</div>
					<div class="single-work-info info-box">
						<h3><a href="javascript:void(0);">non-communicable diseases</a></h3>
						<p>This report on the Non-communicable Diseases (NCDs) is the sixth report presented by the Bangladesh Health Watch (BHW) on the state of health in Bangladesh.</p>
						<p class="info-update-date">Last update 1w ago</p>
					</div>
				</div>
				<div class="single-work full-box">
					<div class="single-work-image image-box">
						<a href="javascript:void(0);">
							<img src="{{ url ('front/assets/images/work/3.jpg') }}" alt="Work Image">
						</a>
					</div>
					<div class="single-work-info info-box">
						<h3><a href="javascript:void(0);">non-communicable diseases</a></h3>
						<p>This report on the Non-communicable Diseases (NCDs) is the sixth report presented by the Bangladesh Health Watch (BHW) on the state of health in Bangladesh.</p>
						<p class="info-update-date">Last update 1w ago</p>
					</div>
				</div>
				<div class="single-work full-box">
					<div class="single-work-image image-box">
						<a href="javascript:void(0);">
							<img src="{{ url ('front/assets/images/work/2.jpg') }}" alt="Work Image">
						</a>
					</div>
					<div class="single-work-info info-box">
						<h3><a href="javascript:void(0);">non-communicable diseases</a></h3>
						<p>This report on the Non-communicable Diseases (NCDs) is the sixth report presented by the Bangladesh Health Watch (BHW) on the state of health in Bangladesh.</p>
						<p class="info-update-date">Last update 1w ago</p>
					</div>
				</div>
				<div class="single-work full-box">
					<div class="single-work-image image-box">
						<a href="javascript:void(0);">
							<img src="{{ url ('front/assets/images/work/2.jpg') }}" alt="Work Image">
						</a>
					</div>
					<div class="single-work-info info-box">
						<h3><a href="javascript:void(0);">non-communicable diseases</a></h3>
						<p>This report on the Non-communicable Diseases (NCDs) is the sixth report presented by the Bangladesh Health Watch (BHW) on the state of health in Bangladesh.</p>
						<p class="info-update-date">Last update 1w ago</p>
					</div>
				</div>
				<div class="single-work full-box">
					<div class="single-work-image image-box">
						<a href="javascript:void(0);">
							<img src="{{ url ('front/assets/images/work/2.jpg') }}" alt="Work Image">
						</a>
					</div>
					<div class="single-work-info info-box">
						<h3><a href="javascript:void(0);">non-communicable diseases</a></h3>
						<p>This report on the Non-communicable Diseases (NCDs) is the sixth report presented by the Bangladesh Health Watch (BHW) on the state of health in Bangladesh.</p>
						<p class="info-update-date">Last update 1w ago</p>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<a href="projects.php" class="view-all">All works</a>
					</div>
				</div>
			</div>
		</section>
		<!-- Work section end here -->


		<!-- Link-banner start here -->
		<section id="Link-banner">
			<div class="link-banner-image">
				<img src="{{ url ('front/assets/images/banner/link-banner.jpg') }}" alt="Banner Image">
			</div>
			<div class="banner-links">
				<div class="container">
					<div class="row justify-content-end align-items-center">
						<div class="col-md-5">
							<div class="section-heading">
								<h2>Bangladesh Health Watch (BHW)</h2>
								<a href="bhw-bulletin.php" class="btn btn-bhw btn-link">Bulletin</a>
								<a href="bhw-report.php" class="btn btn-bhw btn-link">Report</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Link-banner end here -->


		<!-- Events section start here -->
		<section id="Events" class="gray">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-heading text-center">
							<h2>BHW Events</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="single-event full-box">
							<div class="single-event-image image-box">
								<a href="javascript:void(0);">
									<img src="{{ url ('front/assets/images/events/event-1.jpg') }}" alt="Event Image">
								</a>
								<span class="status">Upcoming</span>
							</div>
							<div class="single-event-info info-box">
								<p class="event-date">May 29, 2020</p>
								<h3><a href="javascript:void(0);">BHW partner meeting</a></h3>
								<p class="time-venue">
									<!-- Ei gulor pseudo element a icon hobe -->
									<span class="event-time float-left">9:30AM-2:00PM</span>
									<span class="event-venue float-right">James P Grant School</span>
								</p>
								<p class="event-info">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
								<a href="javascript:void(0);" class="know-more">Know more about event</a>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="single-event full-box">
							<div class="single-event-image image-box">
								<a href="javascript:void(0);">
									<img src="{{ url ('front/assets/images/events/event-2.jpg') }}" alt="Event Image">
								</a>
							</div>
							<div class="single-event-info info-box">
								<p class="event-date">Apr 25, 2020</p>
								<h3><a href="javascript:void(0);">BHW partner meeting</a></h3>
								<p class="time-venue">
									<!-- Ei gulor pseudo element a icon hobe -->
									<span class="event-time float-left">9:30AM-2:00PM</span>
									<span class="event-venue float-right">James P Grant School</span>
								</p>
								<p class="event-info">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
								<a href="javascript:void(0);" class="know-more">Know more about event</a>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="single-event full-box">
							<div class="single-event-image image-box">
								<a href="javascript:void(0);">
									<img src="{{ url ('front/assets/images/events/event-1.jpg') }}" alt="Event Image">
								</a>
							</div>
							<div class="single-event-info info-box">
								<p class="event-date">Apr 25, 2020</p>
								<h3><a href="javascript:void(0);">BHW partner meeting</a></h3>
								<p class="time-venue">
									<!-- Ei gulor pseudo element a icon hobe -->
									<span class="event-time float-left">9:30AM-2:00PM</span>
									<span class="event-venue float-right">James P Grant School</span>
								</p>
								<p class="event-info">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
								<a href="javascript:void(0);" class="know-more">Know more about event</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<a href="events.php" class="view-all">All Events</a>
					</div>
				</div>
			</div>
		</section>
		<!-- Events section end here -->


		<!-- Blogs section start here -->
		<section id="Blogs" class="white">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-heading text-center">
							<h2>New Blogs</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="single-blog">
							<div class="single-blog-image">
								<a href="javascript:void(0);">
									<img src="{{ url ('front/assets/images/blog/blog-1.jpg') }}" alt="Blog Image">
								</a>
								<div class="date">
									<span class="publish-date">15</span>
									<br>
									<span class="publish-month">May</span>
								</div>
							</div>
							<div class="single-blog-info">
								<h3><a href="javascript:void(0);">we are all same under the sky</a></h3>
								<p class="blog-meta">
									<span class="author flot-left">By: <a href="javascript:void(0);">Mashud Rana</a></span>
									<span class="total-comments float-right">3</span>
								</p>
								<p>Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expetendis in mei, hinc partem ei est. Eos ei nisl graecis, vix aperiri dis apadum naitri.</p>
								<a href="javascript:void(0);" class="know-more">Know more</a>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="single-blog">
							<div class="single-blog-image">
								<a href="javascript:void(0);">
									<img src="{{ url ('front/assets/images/blog/blog-1.jpg') }}" alt="Blog Image">
								</a>
								<div class="date">
									<span class="publish-date">15</span>
									<br>
									<span class="publish-month">May</span>
								</div>
							</div>
							<div class="single-blog-info">
								<h3><a href="javascript:void(0);">we are all same under the sky</a></h3>
								<p class="blog-meta">
									<span class="author flot-left">By: <a href="javascript:void(0);">Mashud Rana</a></span>
									<span class="total-comments float-right">3</span>
								</p>
								<p>Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expetendis in mei, hinc partem ei est. Eos ei nisl graecis, vix aperiri dis apadum naitri.</p>
								<a href="javascript:void(0);" class="know-more">Know more</a>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="single-blog">
							<div class="single-blog-image">
								<a href="javascript:void(0);">
									<img src="{{ url ('front/assets/images/blog/blog-1.jpg') }}" alt="Blog Image">
								</a>
								<div class="date">
									<span class="publish-date">15</span>
									<br>
									<span class="publish-month">May</span>
								</div>
							</div>
							<div class="single-blog-info">
								<h3><a href="javascript:void(0);">we are all same under the sky</a></h3>
								<p class="blog-meta">
									<span class="author flot-left">By: <a href="javascript:void(0);">Mashud Rana</a></span>
									<span class="total-comments float-right">3</span>
								</p>
								<p>Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expetendis in mei, hinc partem ei est. Eos ei nisl graecis, vix aperiri dis apadum naitri.</p>
								<a href="javascript:void(0);" class="know-more">Know more</a>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-center">
						<a href="blog.php" class="view-all">View All</a>
					</div>
				</div>
			</div>
		</section>
		<!-- Blogs section end here -->

	@endsection