@extends("app")
@section("content")

<!--<div class="jumbotron">
	<div class="container">
		<h1>Laika Reads</h1>
		<p>Something or other about books and Laika and reading.</p>
	</div>
</div>-->

<div class="wrapper">
	<div class="page-header">
		<div class="page-header-image" style="background-image: url('{{URL::to('images/bg.jpeg')}}');"></div>
		<div class="container">
			<div>
				<h1>Laika Reads</h1>
				<h3>404.</h3>
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