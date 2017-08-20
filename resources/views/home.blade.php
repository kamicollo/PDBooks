@extends("app")
@section("content")

<div class="wrapper">
	<div class="page-header">
		<div class="page-header-image"></div>
		<div class="container">
			<div class="content-center">
				<div class="brand clearfix">
					<img class="pull-left" src="{{URL::to('assets/small-logo.png')}}" alt="" />
					<h1 class="pull-left">Laika Reads</h1>
				</div>
				<h3>This or that about books or reading or maybe dogs. You know how it goes. This or that about books or reading or maybe dogs. You know how it goes.</h3>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
			<img src="{{URL::to('images/1.jpg')}}" class="img-rounded img-responsive" alt="">
		</div>

		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
			<img src="{{URL::to('images/5.jpg')}}" class="img-rounded img-responsive" alt="">
		</div>

		<div class="clearfix visible-xs"></div>

		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
			<img src="{{URL::to('images/2.jpg')}}" class="img-rounded img-responsive" alt="">
		</div>

		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
			<img src="{{URL::to('images/4.jpg')}}" class="img-rounded img-responsive" alt="">
		</div>
	</div>
</div>

@endsection
