<?php $object = App\Error::create(); ?>
<?php $bodyclass = 'error'; ?>
<?php $affiliate = App\Affiliate::where('amazon_link', '<>', '')->inRandomOrder()->first(); ?>
@extends("app")
@section("content")

<div class="wrapper">
	<div class="container">
		<h3>Oh dear! Oh dear!</h3>
		<p>The page you are looking for cannot be found. Go to our <a href="{{URL::to('')}}">homepage</a> instead. Or treat yourself to a <a href="{{$affiliate->amazon_link}}" target="_blank">book</a>.</p>
		<img src="{{URL::to('assets/404.png')}}" alt="404">
	</div>
</div>

@endsection
