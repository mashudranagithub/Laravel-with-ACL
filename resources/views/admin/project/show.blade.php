@extends('admin.layouts.master')

@section('content')


<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Dashboard
    <small>Control panel</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Show Project</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
	<div class="row" style="margin-bottom:30px;">
		<div class="col-md-12 text-right">
			<button type="button" class="btn btn-success btn-lg"><a style="color: #fff;" href="{{ route('editProject', $project->id) }}">Edit This Project</a></button>
		</div>
	</div>

	@if ($msg = Session::get('msg'))
	    <div class="alert alert-success">
	        <p>{{ $msg }}</p>
	    </div>
	@endif
	<div class="row">
		<div class="col-md-12 col-lg-12 col-xs-12">
          <div class="box">
            <div class="box-header with-border">
              <h2 class="box-title text-aqua" style="padding:10px 15px; font-size: 25px;">{{ $project->project_title }}</h2>
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="padding:15px 20px;">
             	<div class="blog-image">
             		<img style="width:100%;margin-bottom:25px;" src="{{ url('front/assets/images/project/'.$project->project_image) }}" alt="Project Image">
             	</div>
             	<div class="blog-detail">
             		{!! $project->project_detail !!}
             	</div>
            </div>
          </div>
          <!-- /.box -->
        </div>

	</div>
</section>

@endsection