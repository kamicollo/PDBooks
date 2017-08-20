@section("nav")

<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
			@if ($bodyclass == "chapter")
			<button type="button" class="navbar-toggle collapsed" data-target="#navigator" data-toggle="collapse" aria-expanded="false">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			@endif

			<a class="navbar-brand" href="{{URL::to('')}}">
				<img src="{{URL::to('assets/small-logo-border.png')}}" alt="LaikaReads">
			</a>

			@if ($bodyclass == "book")
			<p class="navbar-text">
				<a href="{{URL::to('')}}">Laika Reads</a>
			</p>
			@endif

			@if ($bodyclass == "chapter")
			<p class="navbar-text hidden-xs">
				<a class="navbar-link hidden-xs" href="{{route('book', $book->id)}}">
					{{$book->title}} by <i>{{$book->author}}</i>
				</a>
			</p>
			@endif
		</div>

		@if ($bodyclass != "chapter")
		<div class="sharing hidden-xs nav navbar-nav navbar-right">
			<a href="https://twitter.com/LaikaReads" class="twiter twitter-follow-button" data-lang="en" data-show-count="false" data-show-screen-name="false"></a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>

			<div class="facebook fb-like" data-href="https://www.facebook.com/LaikaReads/" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="false"></div>

			<a href="https://www.instagram.com/LaikaReads/" target="_blank" class="instagram hidden"><img src="{{URL::to('assets/instagram.png')}}" alt="LaikaReads on Instagram">Follow</a>
		</div>
		@endif

		@if ($bodyclass == "chapter")
		<div class="collapse navbar-collapse" id="navigator">
			<ul class="nav navbar-nav navbar-right">
				@if ($chapter->IsPrevious())
				<li class="hidden-xs">
					<a href="{{route('chapter', ['id' => $book->id, 'order' => $chapter->getPrevious()])}}">
						<span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
					</a>
				</li>
				@endif
				@if ($chapter->IsNext())
				<li class="hidden-xs">
					<a href="{{route('chapter', ['id' => $book->id, 'order' => $chapter->getNext()])}}">
						<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
					</a>
				</li>
				@endif
				<li class="visible-xs-inline">
					<a href="{{route('book', $book->id)}}">
						Title Page
					</a>
				</li>
				@if ($chapter->IsPrevious())
				<li class="visible-xs-inline">
					<a href="{{route('chapter', ['id' => $book->id, 'order' => $chapter->getPrevious()])}}">
						Previous Chapter
					</a>
				</li>
				@endif
				@if ($chapter->IsNext())
				<li class="visible-xs-inline">
					<a href="{{route('chapter', ['id' => $book->id, 'order' => $chapter->getNext()])}}">
						Next Chapter
					</a>
				</li>
				@endif
			</ul>
		</div>
		@endif
	</div>
</nav>

@show
