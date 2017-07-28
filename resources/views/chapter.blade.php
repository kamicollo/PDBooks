@extends("app")
@section("content")

<progress value="0">
	<div class="progress-container">
		<span class="progress-bar"></span>
	</div>
</progress>

<div class="container center-block">
	<div class="order">Chapter {{$chapter->number}}</div>
	<h2>{{$chapter->title}}</h2>
	<div class="readability">
		<span class="label label-default" data-toggle="tooltip" data-placement="bottom" title="Based on an average reading speed of 250 words per minute.">9 min read</span>
		<span class="label label-default">2,136 words</span>
		<span class="label label-default" data-toggle="tooltip" data-placement="bottom" title="Easily understood by an average 7th or 8th-grade student (Dale–Chall readability formula).">Readability score 6.6</span>
	</div>
	
	<?php echo $chapter->description; ?>
	
    <nav class="contents" aria-label="Chapters">
    	<ul class="pagination">
    		<li class="@if (!$chapter->isPrevious()) {{"disabled"}} @endif">
				@if ($chapter->isPrevious())
				<a href="{{route('chapter', ['id' => $book->id, 'order' => $chapter->getPrevious()])}}" 
				   aria-label="Previous"
				>@endif
					<span aria-hidden="true">&laquo;</span>
				@if ($chapter->isPrevious())
				</a>
				@endif
			</li>
			@foreach ($book->allChapters() as $ch)
    		<li class="@if ($ch == $chapter->order) {{"active"}} @endif">
				<a href="{{route('chapter', ['id' => $book->id, 'order' => $ch])}}">
					{{$ch}}
				</a>
			</li>
			@endforeach
    		
    		<li class="@if (!$chapter->isNext()) {{"disabled"}} @endif">
				@if ($chapter->isNext())
    			<a href="{{route('chapter', ['id' => $book->id, 'order' => $chapter->getNext()])}}" 
				   aria-label="Next"
				> @endif
    				<span aria-hidden="true">&raquo;</span>
				@if ($chapter->isNext())
    			</a>
				@endif
    		</li>
    	</ul>
    </nav>
</div>

@endsection