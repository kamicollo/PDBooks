@extends('app')
@section('content')
	<div class="jumbotron" style="background-image:url(<?php echo URL::to($book->background_image); ?>)">
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
					<!--<img src="cover.jpg" alt="Mekeke" class="img-thumbnail img-responsive">-->
					<figure class="book">
									<!-- Front -->
									<ul class="hardcover_front">
										<li>
											<img src="{{URL::to($book->cover_image)}}" alt="" width="100%" height="100%">
										</li>
										<li></li>
									</ul>
								
									<!-- Pages -->
									<ul class="page">
										<li></li>
										<li></li>
										<li></li>
										<li></li>
										<li></li>
									</ul>
					
									<!-- Back -->
									<ul class="hardcover_back">
										<li></li>
										<li></li>
									</ul>
									
									<!-- Spine -->
									<ul class="book_spine">
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
						<li><b>First published:</b> {{date_format(date_create($book->first_publication_date), "F d, Y")}}</li>
						<li><b>Genre:</b> {{$book->genre}}</li>
						<li><b>Illustrator:</b> {{$book->illustrator}}</li>
					</ul>
					
					<p><?php echo $book->description; ?></p>
				</div>
			</div>
			
			<h2>Beautiful Books</h2>
			
			
			<!--<figure class="book">
				<!-- Front --*>
				<ul class="hardcover_front">
					<li>
						<img src="1.jpg" alt="" width="100%" height="100%">
					</li>
					<li></li>
				</ul>
			
				<!-- Pages --*>
				<ul class="page">
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
				</ul>

				<!-- Back --*>
				<ul class="hardcover_back">
					<li></li>
					<li></li>
				</ul>
				
				<!-- Spine --*>
				<ul class="book_spine">
					<li></li>
					<li></li>
				</ul>
			</figure>-->
			
			
            <div class="books row">
            @foreach ($affiliates as $aff)
				<div class="@if ($loop->iteration > 3){{'hidden-xs'}}@endif @if ($loop->iteration > 4){{'hidden-sm'}}@endif col-xs-4 col-sm-3 col-md-2">
					<img src="{{ URL::to($aff->cover_image) }}" alt="{{$aff->title}}" class="img-thumbnail img-responsive">
			    </div>
            @endforeach</div>
			
			<div class="row">
				<div class="col-xs-12">
					<button type="button" class="btn pull-right" href="{{ URL::to('book/' . $book->id . '/chapter/1')}}">Start Reading</button>
				</div>
			</div>
		</div>
@endsection
