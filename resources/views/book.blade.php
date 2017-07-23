@extends("app")
@section("content")

<div class="jumbotron" style="background-image:url({{URL::to($book->background_image)}})">
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
			<figure class="flippy-book">
				<!-- Front -->
				<ul class="flippy-front">
					<li>
						<img src="{{URL::to($book->cover_image)}}" alt="" width="100%" height="100%">
					</li>
					<li></li>
				</ul>
			
				<!-- Pages -->
				<ul class="flippy-page">
					<li></li>
					<li>
						<div>
							<img class="img-thumbnail" src="{{URL::to('images/portrait.jpg')}}" alt="" width="100%" height="100%">
							<img src="{{URL::to('images/signature.svg')}}" alt="" width="100%" height="100%">
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
				<span class="gfc-star gfc-p10"></span>
				<span class="gfc-star gfc-p10"></span>
				<span class="gfc-star gfc-p10"></span>
				<span class="gfc-star gfc-p6"></span>
				<span class="gfc-star gfc-p0"></span>
				<span class="rating">{{$book->goodreads_avg_rating}}</span>
				<span><a target="_blank" href="{{$book->link_to_goodreads}}">{{number_format($book->goodread__countof_ratings)}} Goodreads ratings</a></span>
			</p>
			
			<ul class="metadata">
				<li><b>First published:</b> {{date_format(date_create($book->first_publication_date), "F d, Y")}} <span id="copyright" class="glyphicon glyphicon-question-sign" data-toggle="popover" data-trigger="hover" data-placement="top" title="A Note on Book Copyright" data-content="This book may be freely used in the US. If you live elsewhere, you must check the copyright laws of your country before reading the book." aria-hidden="true"></span></li>
				<li><b>Genre:</b> {{$book->genre}}</li>
				@if ($book->illustrator != "") <li><b>Illustrator:</b> {{$book->illustrator}}</li> @endif
				@if ($book->translator != "") <li><b>Translator:</b> {{$book->translator}}</li> @endif
			</ul>
			
			<p><?php echo $book->description; ?></p>
		</div>
	</div>
	
	<h3>Beautiful Books</h3>
    <div class="row">
		@foreach ($affiliates as $affiliate)
		<div class="@if ($loop->iteration > 3){{'hidden-xs'}}@endif @if ($loop->iteration > 4){{'hidden-sm'}}@endif col-xs-4 col-sm-3 col-md-2">
			<a href="#" target="_blank">
				<img src="{{URL::to($affiliate->cover_image)}}" alt="{{$affiliate->title}}" class="img-thumbnail img-responsive">
			</a>
	    </div>
		@endforeach
	</div>
	
	<div class="row">
		<div class="col-xs-12">
			<a class="btn pull-right" href="{{URL::to('book/' . $book->id . '/chapter/1')}}">Start Reading</a>
		</div>
	</div>
</div>

@endsection