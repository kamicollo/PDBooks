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
		<div class="row">
			<div class="col-lg-2 col-md-2 col-sm-4 col-xs-4">
				<a href="{{URL::to('/books/alice-in-wonderland')}}">
					<img src="{{URL::to('images/alice-in-wonderland/cover.jpg')}}" class="img-thumbnail img-responsive" alt="Alice's Adventures in Wonderland">
					<div class="overlay hidden-xs">
						<p class="goodreads">
							<span class="gfc-star gfc-p10"></span>
							<span class="gfc-star gfc-p10"></span>
							<span class="gfc-star gfc-p10"></span>
							<span class="gfc-star gfc-p10"></span>
							<span class="gfc-star gfc-p0"></span>
						</p>
						<p class="excerpt">Alice was beginning to get very tired of sitting by her sister on the bank, and of having nothing to do: once or twice she had peeped into the book her sister was reading, but it had no pictures or conversations in it, ‘and what is the use of a book,’ thought Alice ‘without pictures or conversations?'</p>
					</div>
				</a>
				<span class="subtitle">Alice's Adventures in Wonderland</span>
			</div>

			<div class="col-lg-2 col-md-2 col-sm-4 col-xs-4">
			</div>

			<div class="col-lg-2 col-md-2 col-sm-4 col-xs-4">
			</div>

			<div class="clearfix visible-sm visible-xs">
			</div>

			<div class="col-lg-2 col-md-2 col-sm-4 col-xs-4">
			</div>

			<div class="col-lg-2 col-md-2 col-sm-4 col-xs-4">
			</div>

			<div class="col-lg-2 col-md-2 col-sm-4 col-xs-4">
			</div>
		</div>
	</div>
</div>

@endsection
