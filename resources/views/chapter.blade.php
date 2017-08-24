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
			<span class="label label-default" data-toggle="tooltip" data-placement="bottom" title="Easily understood by an average 7th or 8th-grade student (Dale–Chall readability formula).">Readability score 6.6</span>
		</div>

		<?php echo $chapter->content; ?>

		<div class="sharing">
			<a href="https://twitter.com/share" class="twitter twitter-share-button" data-text="{{$object->web_page_title(false)}}" data-url="{{$object->web_url()}}" data-via="LaikaReads" data-related="ernes7a" data-dnt="true" data-show-count="false"></a>

			<div class="facebook fb-like" data-href="{{$object->web_url()}}" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="false"></div>

			<div class="facebook fb-share-button" data-href="{{$object->web_url()}}" data-layout="button_count" data-size="small" data-mobile-iframe="true">
				<a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fgoogle.com%2F&amp;src=sdkpreparse"></a>
			</div>
		</div>

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
