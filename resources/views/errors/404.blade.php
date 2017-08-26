@extends("app")
@section("content")

<div class="wrapper">
	<div class="container">
		<h3>Oooops!</h3>
		<p>The page you are looking for cannot be found. Go to our <a href="{{URL::to('')}}">homepage</a> instead.</p>
		<img src="{{URL::to('assets/404.gif')}}" alt="404">
	</div>
</div>

@endsection
