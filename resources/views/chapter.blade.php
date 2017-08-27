@extends("app")
@section("content")

<div class="wrapper">
	<progress value="0">
		<div class="progress-container">
			<span class="progress-bar"></span>
		</div>
	</progress>

	<div class="container center-block">
		<div class="order">Chapter {{$chapter->number}}</div>
		<h1>{{$chapter->title}}</h1>
		<div class="readability">
			<span class="label label-default" data-toggle="tooltip" data-placement="bottom" title="Based on an average reading speed of 250 words per minute.">{{ceil($chapter->getReadingTime())}} min read</span>
			<span class="label label-default">{{number_format($chapter->getWordCount())}} words</span>
			<span class="label label-default" data-toggle="tooltip" data-placement="bottom" title="{{$chapter->web_readability_score()}} (Dale–Chall readability formula).">Readability score {{round($chapter->readability_score, 1)}}</span>
		</div>

		<?php echo $chapter->content; ?>

		@include("share")

		<nav class="contents" aria-label="Chapters">
			<ul class="pagination">
				<li class="@if (!$chapter->isPrevious()) {{"disabled"}} @endif">
					@if ($chapter->isPrevious())
					<a href="{{route('chapter', [$book->getRouteKey(), $chapter->getPrevious()])}}"
					   aria-label="Previous"
					>@endif
						<span aria-hidden="true">&laquo;</span>
					@if ($chapter->isPrevious())
					</a>
					@endif
				</li>
				@foreach ($book->allChapters() as $ch)
				<li class="@if ($ch == $chapter->order) {{"active"}} @endif">
					<a href="{{route('chapter', [$book->getRouteKey(), $ch])}}">
						{{$ch}}
					</a>
				</li>
				@endforeach

				<li class="@if (!$chapter->isNext()) {{"disabled"}} @endif">
					@if ($chapter->isNext())
					<a href="{{route('chapter', [$book->getRouteKey(), $chapter->getNext()])}}" aria-label="Next">
					@endif
					<span aria-hidden="true">&raquo;</span>
					@if ($chapter->isNext())
					</a>
					@endif
				</li>
			</ul>
		</nav>
	</div>
</div>

@endsection
