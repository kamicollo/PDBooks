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

			@if ($bodyclass != "home" && $bodyclass != "chapter")
			<p class="navbar-text">
				<a href="{{URL::to('')}}">Laika Reads</a>
			</p>
			@endif

			@if ($bodyclass == "chapter")
			<p class="navbar-text hidden-xs">
				<a class="navbar-link hidden-xs" href="{{route('book', $book->getRouteKey())}}">
					{{$book->title}} by <i>{{$book->author}}</i>
				</a>
			</p>
			@endif
		</div>

		@if ($bodyclass != "chapter")
		<div class="share hidden-xs nav navbar-nav navbar-right">
			@include("follow")
		</div>
		@endif

		@if ($bodyclass == "chapter")
		<div class="collapse navbar-collapse" id="navigator">
			<ul class="nav navbar-nav navbar-right">
				@if ($chapter->IsPrevious())
				<li class="hidden-xs">
					<a href="{{route('chapter', [$book->getRouteKey(), $chapter->getPrevious()])}}">
						<span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
					</a>
				</li>
				@endif
				@if ($chapter->IsNext())
				<li class="hidden-xs">
					<a href="{{route('chapter', [$book->getRouteKey(), $chapter->getNext()])}}">
						<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
					</a>
				</li>
				@endif
				<li class="visible-xs-inline">
					<a href="{{route('book', $book->getRouteKey())}}">
						Title Page
					</a>
				</li>
				@if ($chapter->IsPrevious())
				<li class="visible-xs-inline">
					<a href="{{route('chapter', [$book->getRouteKey(), $chapter->getPrevious()])}}">
						Previous Chapter
					</a>
				</li>
				@endif
				@if ($chapter->IsNext())
				<li class="visible-xs-inline">
					<a href="{{route('chapter', [$book->getRouteKey(), $chapter->getNext()])}}">
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
