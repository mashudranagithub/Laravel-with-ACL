@extends('front.layouts.master')

@section('content')


<section id="Page-banner">
	<img src="{{ url('front/assets/images/page-banners/Policy-Advocacy.jpg') }}" alt="Page Banner Image">
</section>



<section id="Single-region">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-heading">
					<h2>Regional Chapter - <span>Rajshahi</span></h2>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="regions-all-content">


					<ul class="nav nav-pills nav-justified nav-tabs" id="myTab" role="tablist">
						<li class="nav-item" role="presentation">
							<a class="nav-link active" id="hostngo-tab" data-toggle="tab" href="#hostngo" role="tab" aria-controls="hostngo" aria-selected="true"><h4>Host NGO</h4></a>
						</li>
						<li class="nav-item" role="presentation">
							<a class="nav-link" id="committee-tab" data-toggle="tab" href="#committee" role="tab" aria-controls="committee" aria-selected="false"><h4>Committee</h4></a>
						</li>
						<li class="nav-item" role="presentation">
							<a class="nav-link" id="selected-institution-tab" data-toggle="tab" href="#selected-institution" role="tab" aria-controls="selected-institution" aria-selected="false"><h4>Selected Institutions</h4></a>
						</li>
						<li class="nav-item" role="presentation">
							<a class="nav-link" id="activities-tab" data-toggle="tab" href="#activities" role="tab" aria-controls="activities" aria-selected="false"><h4>Activities</h4></a>
						</li>
					</ul>
					<div class="tab-content" id="region-content">
						<div class="tab-pane fade show active" id="hostngo" role="tabpanel" aria-labelledby="hostngo-tab">
							<div class="region-content host-ngo">
								<h4>Aloha Social</h4>
								<h5>Focal Person</h5>
								<p>Md. Nuruzzaman Lucky</p>
								<p>+88 01719614185</p>
								<p>nuruzzaman.lucky@bracu.ac.bd</p>
							</div>
						</div>
						<div class="tab-pane fade" id="committee" role="tabpanel" aria-labelledby="committee-tab">
							<div class="region-content committee">
								<h4>Membership Criteria</h4>
								<ol>
									<li>Md. Nuruzzaman Lucky</li>	
									<li>Md. Mashud Rana</li>
									<li>Md. Nuruzzaman Lucky</li>	
									<li>Md. Mashud Rana</li>
									<li>Md. Nuruzzaman Lucky</li>	
									<li>Md. Mashud Rana</li>
								</ol>
							</div>
						</div>
						<div class="tab-pane fade" id="selected-institution" role="tabpanel" aria-labelledby="selected-institution-tab">
							<div class="d-flex justify-content-between">
								<div class="region-content institution">
									<h4>District</h4>
									<ol>
										<li>Naogaon</li>
									</ol>
								</div>
								<div class="region-content institution">
									<h4>Upazilla</h4>
									<ol>
										<li>Patnitola</li>
									</ol>
								</div>
								<div class="region-content institution">
									<h4>Union</h4>
									<ol>
										<li>Nazipur</li>
									</ol>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="activities" role="tabpanel" aria-labelledby="activities-tab">
							<div class="d-flex justify-content-between">
								<div class="region-content institution">
									<h4>Meeting</h4>
									<ol>
										<li>Regional Meeting</li>
									</ol>
								</div>
								<div class="region-content institution">
									<h4>Advocacy</h4>
									<ol>
										<li>Report Launch</li>
									</ol>
								</div>
								<div class="region-content institution">
									<h4>Campaign</h4>
									<ol>
										<li>World Health Day</li>
									</ol>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="owl-carousel region-slider">
					<div class="single-region">
						<a href="single-region.php">
							<img src="{{ url('front/assets/images/what-we-do/regions/Regional-Chapter.jpg') }}" alt="Region Image">
							<h4 class="region-name">rajshahi</h4>
						</a>
					</div>
					<div class="single-region">
						<a href="single-region.php">
							<img src="{{ url('front/assets/images/what-we-do/regions/Regional-Chapter.jpg') }}" alt="Region Image">
							<h4 class="region-name">Rangpur</h4>
						</a>
					</div>
					<div class="single-region">
						<a href="single-region.php">
							<img src="{{ url('front/assets/images/what-we-do/regions/Regional-Chapter.jpg') }}" alt="Region Image">
							<h4 class="region-name">Mymensingh</h4>
						</a>
					</div>
					<div class="single-region">
						<a href="single-region.php">
							<img src="{{ url('front/assets/images/what-we-do/regions/Regional-Chapter.jpg') }}" alt="Region Image">
							<h4 class="region-name">Sylhet</h4>
						</a>
					</div>
					<div class="single-region">
						<a href="single-region.php">
							<img src="{{ url('front/assets/images/what-we-do/regions/Regional-Chapter.jpg') }}" alt="Region Image">
							<h4 class="region-name">Barishal</h4>
						</a>
					</div>
					<div class="single-region">
						<a href="single-region.php">
							<img src="{{ url('front/assets/images/what-we-do/regions/Regional-Chapter.jpg') }}" alt="Region Image">
							<h4 class="region-name">Chattogram</h4>
						</a>
					</div>
					<div class="single-region">
						<a href="single-region.php">
							<img src="{{ url('front/assets/images/what-we-do/regions/Regional-Chapter.jpg') }}" alt="Region Image">
							<h4 class="region-name">Dhaka</h4>
						</a>
					</div>
					<div class="single-region">
						<a href="single-region.php">
							<img src="{{ url('front/assets/images/what-we-do/regions/Regional-Chapter.jpg') }}" alt="Region Image">
							<h4 class="region-name">Khulna</h4>
						</a>
					</div>
				</div>
			</div>
		</div>

	</div>
</section>


@endsection