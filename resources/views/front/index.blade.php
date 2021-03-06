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

				@foreach($projects as $project)
					<div class="single-work full-box">
						<div class="single-work-image">
							<a href="javascript:void(0);">
								<img src="{{ url('front/assets/images/project/'.$project->project_image) }}" alt="Work Image">
							</a>
						</div>
						<div class="single-work-info info-box">
							<h3><a href="javascript:void(0);">{{ Illuminate\Support\Str::limit($project->project_title, 23) }}</a></h3>
							<p>
								{!! Illuminate\Support\Str::limit($project->project_detail, 150) !!}
							</p>
							<p class="info-update-date">{{ $project->created_at->format('d M, Y') }}</p>
						</div>
					</div>
				@endforeach

			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<a href="{{ route('projects') }}" class="view-all">All works</a>
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
								<a href="{{ route('bhw-bulletin') }}" class="btn btn-bhw btn-link">Bulletin</a>
								<a href="{{ route('bhw-reports') }}" class="btn btn-bhw btn-link">Report</a>
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


					@foreach($events as $event)
					<div class="col-md-4">
						<div class="single-event full-box">
							<div class="single-event-image image-box">
								<a href="{{ route('single-event', $event->id) }}">
									<img src="{{ url ('front/assets/images/event/'.$event->event_image) }}" alt="Event Image">
								</a>
								@if($event->event_status !== 'previous')
								<span class="status">{{ $event->event_status }}</span>
								@endif
							</div>
							<div class="single-event-info info-box">
								<p class="event-date">{{ $event->event_date }}</p>
								<h3><a href="{{ route('single-event', $event->id) }}">{{ Illuminate\Support\Str::limit($event->event_title, 35) }}</a></h3>
								<p class="time-venue">
									<!-- Ei gulor pseudo element a icon hobe -->
									<span class="event-time float-left">{{ $event->event_start_time }} - {{ $event->event_end_time }}</span>
									<span class="event-venue float-right">{{ Illuminate\Support\Str::limit($event->event_place, 20) }}</span>
								</p>
								<p class="event-info">{!! Illuminate\Support\Str::limit($event->event_detail, 150) !!}</p>
								<a href="{{ route('single-event', $event->id) }}" class="know-more">Know more about event</a>
							</div>
						</div>
					</div>
					@endforeach

				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<a href="{{ route('events') }}" class="view-all">All Events</a>
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


					@foreach($blogs as $blog)
					<div class="col-md-4">
						<div class="single-blog">
							<div class="single-blog-image">
								<a href="{{ route('single-blog', $blog->id) }}">
									<img src="{{ url('front/assets/images/blog/'.$blog->blog_image) }}" alt="Blog Image">
								</a>
								<div class="date">
									<span class="publish-date">{{ $blog->created_at->format('d') }}</span>
									<br>
									<span class="publish-month">{{ $blog->created_at->format('M') }}</span>
								</div>
							</div>
							<div class="single-blog-info">
								<h3><a href="{{ route('single-blog', $blog->id) }}">{{ Illuminate\Support\Str::limit($blog->blog_title, 35) }}</a></h3>
								<p class="blog-meta">
									<span class="author flot-left">By: <a href="javascript:void(0);">{{ $blog->blog_admin }}</a></span>
									<!-- <span class="total-comments float-right">3</span> -->
								</p>
								
								{!! Illuminate\Support\Str::limit($blog->blog_detail, 150) !!}
								
								<br><a href="{{ route('single-blog', $blog->id) }}" class="know-more">Know more</a>
							</div>
						</div>
					</div>
					@endforeach

				</div>
				<div class="row">
					<div class="col-md-12 text-center">
						<a href="{{ route('blogs') }}" class="view-all">View All</a>
					</div>
				</div>
			</div>
		</section>
		<!-- Blogs section end here -->

	@endsection