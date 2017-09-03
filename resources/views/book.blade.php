@extends("app")
@section("content")

<div class="wrapper">
	<div class="jumbotron" style="background-image:url({{URL::to($book->web_background_image())}})">
		<div class="overlay">
			<div class="container">
				<h1>{{$book->title}}</h1>
				<div class="author">by {{$book->author}}</div>				
			</div>
		</div>
	</div>

	<div class="container center-block">
		<div class="row">
			<div class="hidden-xs col-sm-3">
				<div class="static-book">
					<img src="{{URL::to($book->web_cover_image())}}" class="img-thumbnail img-responsive" alt="Book cover" width="100%" height="100%">
				</div>
				<figure class="flippy-book">
					<!-- Front -->
					<ul class="flippy-front">
						<li>
							<img src="{{URL::to($book->web_cover_image())}}" alt="Book cover" width="100%" height="100%">
						</li>
						<li></li>
					</ul>

					<!-- Pages -->
					<ul class="flippy-page">
						<li></li>
						<li>
							<div>
								<img class="img-thumbnail" src="{{URL::to($book->web_portrait_image())}}" alt="Author's portrait" width="100%" height="100%">
								<img src="{{URL::to($book->web_signature_image())}}" alt="Author's signature" width="100%" height="100%">
							</div>
						</li>
						<li></li>
						<li></li>
						<li></li>
					</ul>

					<!-- Back -->
					<ul class="flippy-back">
						<li></li>
						<li></li>
					</ul>

					<!-- Spine -->
					<ul class="flippy-spine">
						<li></li>
						<li></li>
					</ul>
				</figure>
			</div>

			<div class="col-xs-12 col-sm-9">
				<p class="goodreads">
					@foreach ($book->web_star_rating() as $star)
					<span class="gfc-star {{$star}}"></span>
					@endforeach
					<span class="rating">{{number_format($book->goodreads_avg_rating, 2)}}</span>
					<span>
						<a target="_blank" href="{{$book->goodreads_link}}">{{number_format($book->goodreads_count_ratings)}} Goodreads ratings</a>
					</span>
				</p>

				<ul class="metadata">
					<li><b>First published:</b> {{date_format(date_create($book->first_publication_date), "Y")}} <span id="copyright" class="glyphicon glyphicon-question-sign" data-toggle="popover" data-trigger="hover" data-placement="top" title="A Note on Book Copyright" data-content="This book may be freely used in the US. If you live elsewhere, you must check the copyright laws of your country before reading the book." aria-hidden="true"></span></li>
					<li><b>Genre:</b> {{$book->genre}}</li>
					@if ($book->illustrator != "") <li><b>Illustrator:</b> {{$book->illustrator}}</li> @endif
					@if ($book->translator != "") <li><b>Translator:</b> {{$book->translator}}</li> @endif
				</ul>

				@include("share")

				<blockquote><?php echo $book->description_quote; ?></blockquote>
				<p><?php echo $book->description; ?> <?php echo $book->description_source; ?></p>
				@if ($book->chapters->count() > 0) 
				<a class="btn pull-left" href="{{route('chapter', [$book->getRouteKey(), $book->firstChapter()])}}">Start Reading</a>
				<a class="btn pull-left" href="#chapters">See Table of Contents</a>
				@endif
			</div>
		</div>

		@if ($affiliates->count() > 0)
		<h3>Wonderful Editions</h3>
		<div class="row featured">
			@foreach ($affiliates as $affiliate)
			<div class="@if ($loop->iteration > 3) {{'hidden-xs'}} @endif @if ($loop->iteration > 4) {{'hidden-sm'}} @endif col-xs-4 col-sm-3 col-md-2">
				<a href="{{URL::to($affiliate->amazon_link)}}" target="_blank">
					<img src="{{URL::to($affiliate->cover_image)}}" alt="{{$affiliate->title}}" class="img-thumbnail img-responsive">
					<div class="overlay hidden-xs">
						<p class="excerpt">{{$affiliate->title}}</p>
					</div>
				</a>
				@if ($affiliate->bd_link)
				<span class="subtitle"><a style="word-wrap: break-word;" href="{{URL::to($affiliate->bd_link)}}" target="_blank">Or <img src="{{URL::to('assets/bd.png')}}" class="bd">Book Depository</a></span>
				@endif
		    </div>
			@endforeach
		</div>
		@endif
		
		@if ($book->soundcloud_id <> '')
		<h3>Listen with Audible</h3>
		<div class="row audible">
			<div class="col-lg-10 col-md-10 col-sm-9 col-xs-6">
				<iframe 
					width="100%"
					height="120"
					scrolling="no"
					frameborder="no"
					src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/{{$book->soundcloud_id}}&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"
				>						
				</iframe>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
				<span class="metadata">Download two audiobooks for free with your <a href="https://www.amazon.com/dp/B00NB86OYE/?tag=laikareads-20" target="_blank">30-day Audible trial</a>. Listen anywhere. Cancel anytime.</a>
			</div>
		</div>
		@endif

		<!-- <h3>You Might Also Like...</h3>
		<div class="row featured">
			@foreach ($affiliates as $affiliate)
			<div class="@if ($loop->iteration > 3) {{'hidden-xs'}} @endif @if ($loop->iteration > 4) {{'hidden-sm'}} @endif col-xs-4 col-sm-3 col-md-2">
				<a href="{{URL::to($affiliate->amazon_link)}}" target="_blank">
					<img src="{{URL::to($affiliate->cover_image)}}" alt="{{$affiliate->title}}" class="img-thumbnail img-responsive">
					<div class="overlay hidden-xs">
						<p class="excerpt">{{$affiliate->title}}</p>
					</div>
				</a>
				@if ($affiliate->bd_link)
				<span class="metadata">Or <a href="{{URL::to($affiliate->bd_link)}}" target="_blank">Book Depository</a></span>
				@endif
		    </div>
			@endforeach
		</div> -->
		@if ($book->chapters->count() > 0) 
		<h3 id="chapters">Table of Contents</h3>
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<table class="table table-hover">
					<tbody>
						@for ($i = 0; $i < ceil($book->chapters()->count() / 2); $i++)
						<tr>
							<td>{{$book->chapters()->get()->all()[$i]->order}}</td>
							<td>
								<a href="{{route('chapter', [$book->getRoutekey(), $book->chapters()->get()->all()[$i]->order])}}">
									{{$book->chapters()->get()->all()[$i]->title}}
								</a>
							</td>
						</tr>
						@endfor
					</tbody>
				</table>
			</div>

			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<table class="table table-hover">
					<tbody>
						@for ($i = ceil($book->chapters()->count() / 2); $i < $book->chapters()->count(); $i++)
						<tr>
							<td>{{$book->chapters()->get()->all()[$i]->order}}</td>
							<td>
								<a href="{{route('chapter', [$book->getRoutekey(), $book->chapters()->get()->all()[$i]->order])}}">
									{{$book->chapters()->get()->all()[$i]->title}}
								</a>
							</td>
						</tr>
						@endfor
					</tbody>
				</table>
			</div>
		</div>
		@endif
	</div>
</div>

@endsection
