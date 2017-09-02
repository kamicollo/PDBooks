@extends("app")
@section("content")

<div class="wrapper">
	<div class="page-header">
		<div class="page-header-image"></div>
		<div class="container">
			<div class="content-center">
				<div class="brand clearfix">
					<img class="pull-left" src="{{URL::to('assets/small-logo.png')}}" alt="LaikaReads" />
					<h1 class="pull-left">Laika Reads</h1>
				</div>

				<h2>Read free, beautifully formatted public domain books online. <a href="{{route('about')}}">Learn more</a> or <a href="#explore">start exploring now</a>.</h2>

				@include("follow")

			</div>
		</div>
	</div>

	<div class="container featured">
		<h3 id="explore">Start Reading Now</h3>
		<?php $books = App\Book::orderBy('title', 'asc')->get(); ?>
		@for ($i=0; $i < $books->count(); $i++)
		@if ($i == 0)
		<div class="row">
		@elseif ($i % 6 == 0)
		</div>
		<div class="row">
		@elseif ($i % 3 == 0)
			<div class="clearfix visible-sm visible-xs"></div>
			@endif
			<div class="col-lg-2 col-md-2 col-sm-4 col-xs-4">
				<a href="{{route('book', $books->get($i)->getRouteKey())}}">
					<img src="{{URL::to($books->get($i)->cover_image)}}"
						 class="img-thumbnail img-responsive"
						 alt="{{$books->get($i)->title}}">
					<div class="overlay hidden-xs">
						<p class="goodreads">
						@foreach ($books->get($i)->web_star_rating() as $star)
							<span class="gfc-star {{$star}}"></span>
						@endforeach
						</p>
						<p class="excerpt">{{$books->get($i)->firstParagraph()}}</p>
					</div>
				</a>
				<span class="subtitle">{{$books->get($i)->title}}</span>
			</div>
			@endfor
		</div>
	</div>
</div>

@endsection
