@extends('front.layouts.master')

@section('content')
<section id="Page-banner">
	<img src="{{ url('front/assets/images/page-banners/Policy-Advocacy.jpg') }}" alt="Page Banner Image">
</section>



<section id="Regions">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-heading">
					<h2>Regional Chapter</h2>
				</div>
			</div>
		</div>
		<div class="row pb-4">
			<div class="col-md-12">
				<div class="bhw-text">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit dolores eaque ducimus pariatur, ipsa, fugit dignissimos non, temporibus repellendus nemo vero quo vitae laborum quasi eos modi quam qui error? Corporis officiis nesciunt eveniet aliquid iure deleniti necessitatibus laborum alias ab esse numquam minima facere, tenetur inventore! Nam impedit reprehenderit perspiciatis delectus tenetur, deserunt autem officiis, ratione dolorum nisi quam doloribus quis culpa recusandae necessitatibus ullam atque, id minima voluptas commodi tempora molestias voluptatibus? Perferendis numquam repudiandae ullam ea doloremque magnam quam aut possimus asperiores error id fugiat, enim dolore odit aliquid assumenda quod quis unde saepe impedit. Cum quaerat officiis quis id nemo deserunt laudantium voluptates, assumenda iusto, quibusdam consequuntur a, vitae ad doloremque rerum vel aut, eveniet est facilis magni rem iure sed tempore. Quaerat tenetur expedita laboriosam quam ipsum ratione placeat iusto animi libero. Ratione, quas, perferendis! Consequatur temporibus nobis quam, voluptas quas ea aspernatur qui illo!</p>
				</div>
			</div>
		</div>
		<div class="row">
			@foreach($regions as $region)
			<div class="col-md-3">
				<div class="single-region">
					<a href="{{ route('single-region', $region->id) }}">
						<img src="{{ url('front/assets/images/region/'.$region->region_image) }}" alt="Region Image">
						<h4 class="region-name">{{ $region->region_name }}</h4>
					</a>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</section>


@endsection