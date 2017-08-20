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

				<h3>This or that about books or reading or maybe dogs. You know how it goes. This or that about books or reading or maybe dogs. You know how it goes.</h3>

				<div class="sharing">
					<a href="https://twitter.com/LaikaReads" class="twiter twitter-follow-button" data-lang="en" data-show-count="false" data-show-screen-name="false"></a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>

					<div class="facebook fb-like" data-href="https://www.facebook.com/LaikaReads/" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="false"></div>

					<a href="https://www.instagram.com/LaikaReads/" target="_blank" class="instagram hidden"><img src="{{URL::to('assets/instagram.png')}}" alt="LaikaReads on Instagram">Follow</a>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container featured">
	<h3>Start Reading Now</h3>
	<div class="row">
		<div class="col-lg-2 col-md-3 col-sm-3 col-xs-4">
			<a href="">
				<img src="{{URL::to('images/1.jpg')}}" class="img-thumbnail img-responsive" alt="Alice's Adventures in Wonderland">
				<div class="overlay hidden-xs">
					<p class="goodreads">
						<span class="gfc-star gfc-p10"></span>
						<span class="gfc-star gfc-p10"></span>
						<span class="gfc-star gfc-p10"></span>
						<span class="gfc-star gfc-p6"></span>
						<span class="gfc-star gfc-p0"></span>
					</p>
					<p class="excerpt">Alice was beginning to get very tired of sitting by her sister on the bank, and of having nothing to do: once or twice she had peeped into the book her sister was reading, but it had no pictures or conversations in it, ‘and what is the use of a book,’ thought Alice ‘without pictures or conversations?'</p>
				</div>
			</a>
			<span class="metadata">Alice's Adventures</span>
		</div>

		<div class="col-lg-2 col-md-3 col-sm-3 col-xs-4">
			<a href="">
				<img src="{{URL::to('images/2.jpg')}}" class="img-thumbnail img-responsive" alt="Alice's Adventures in Wonderland">
				<div class="overlay hidden-xs">
					<p class="goodreads">
						<span class="gfc-star gfc-p10"></span>
						<span class="gfc-star gfc-p10"></span>
						<span class="gfc-star gfc-p10"></span>
						<span class="gfc-star gfc-p6"></span>
						<span class="gfc-star gfc-p0"></span>
					</p>
					<p class="excerpt">Alice was beginning to get very tired of sitting by her sister on the bank, and of having nothing to do: once or twice she had peeped into the book her sister was reading, but it had no pictures or conversations in it, ‘and what is the use of a book,’ thought Alice ‘without pictures or conversations?'</p>
				</div>
			</a>
			<span class="metadata">Alice's Adventures in Wonderland</span>
		</div>

		<div class="col-lg-2 col-md-3 col-sm-3 col-xs-4">
			<a href="">
				<img src="{{URL::to('images/3.jpg')}}" class="img-thumbnail img-responsive" alt="Alice's Adventures in Wonderland">
				<div class="overlay hidden-xs">
					<p class="goodreads">
						<span class="gfc-star gfc-p10"></span>
						<span class="gfc-star gfc-p10"></span>
						<span class="gfc-star gfc-p10"></span>
						<span class="gfc-star gfc-p6"></span>
						<span class="gfc-star gfc-p0"></span>
					</p>
					<p class="excerpt">Alice was beginning to get very tired of sitting by her sister on the bank, and of having nothing to do: once or twice she had peeped into the book her sister was reading, but it had no pictures or conversations in it, ‘and what is the use of a book,’ thought Alice ‘without pictures or conversations?'</p>
				</div>
			</a>
			<span class="metadata">Alice's Adventures in Wonderland and Other Stories</span>
		</div>

		<div class="clearfix visible-xs"></div>

		<div class="col-lg-2 col-md-3 col-sm-3 col-xs-4">
			<a href="">
				<img src="{{URL::to('images/4.jpg')}}" class="img-thumbnail img-responsive" alt="Alice's Adventures in Wonderland">
				<div class="overlay hidden-xs">
					<p class="goodreads">
						<span class="gfc-star gfc-p10"></span>
						<span class="gfc-star gfc-p10"></span>
						<span class="gfc-star gfc-p10"></span>
						<span class="gfc-star gfc-p6"></span>
						<span class="gfc-star gfc-p0"></span>
					</p>
					<p class="excerpt">Alice was beginning to get very tired of sitting by her sister on the bank, and of having nothing to do: once or twice she had peeped into the book her sister was reading, but it had no pictures or conversations in it, ‘and what is the use of a book,’ thought Alice ‘without pictures or conversations?'</p>
				</div>
			</a>
			<span class="metadata">Alice's Adventures in Wonderland</span>
		</div>

		<div class="col-lg-2 hidden-md hidden-sm col-xs-4">
			<a href="">
				<img src="{{URL::to('images/5.jpg')}}" class="img-thumbnail img-responsive" alt="Alice's Adventures in Wonderland">
				<div class="overlay hidden-xs">
					<p class="goodreads">
						<span class="gfc-star gfc-p10"></span>
						<span class="gfc-star gfc-p10"></span>
						<span class="gfc-star gfc-p10"></span>
						<span class="gfc-star gfc-p6"></span>
						<span class="gfc-star gfc-p0"></span>
					</p>
					<p class="excerpt">Alice was beginning to get very tired of sitting by her sister on the bank, and of having nothing to do: once or twice she had peeped into the book her sister was reading, but it had no pictures or conversations in it, ‘and what is the use of a book,’ thought Alice ‘without pictures or conversations?'</p>
				</div>
			</a>
			<span class="metadata">Alice's Adventures in Wonderland</span>
		</div>

		<div class="col-lg-2 hidden-md hidden-sm col-xs-4">
			<a href="">
				<img src="{{URL::to('images/6.jpg')}}" class="img-thumbnail img-responsive" alt="Alice's Adventures in Wonderland">
				<div class="overlay hidden-xs">
					<p class="goodreads">
						<span class="gfc-star gfc-p10"></span>
						<span class="gfc-star gfc-p10"></span>
						<span class="gfc-star gfc-p10"></span>
						<span class="gfc-star gfc-p6"></span>
						<span class="gfc-star gfc-p0"></span>
					</p>
					<p class="excerpt">Alice was beginning to get very tired of sitting by her sister on the bank, and of having nothing to do: once or twice she had peeped into the book her sister was reading, but it had no pictures or conversations in it, ‘and what is the use of a book,’ thought Alice ‘without pictures or conversations?'</p>
				</div>
			</a>
			<span class="metadata">Alice's Adventures in Wonderland</span>
		</div>
	</div>
</div>

@endsection
