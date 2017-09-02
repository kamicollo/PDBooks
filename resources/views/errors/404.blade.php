<?php $bodyclass = 'error'; ?>
@extends("app")
@section("content")

<div class="wrapper">
	<div class="container">
		<h3>Oh dear! Oh dear!</h3>
		<p>The page you are looking for cannot be found. Go to our <a href="{{URL::to('')}}">homepage</a> instead. Or treat yourself to a <a href="https://www.amazon.com/Alices-Adventures-Wonderland-Lewis-Carroll/dp/0691170029/?tag=laikareads-20" target="_blank">book</a>.</p>
		<img src="{{URL::to('assets/404.png')}}" alt="404">
	</div>
</div>

@endsection
