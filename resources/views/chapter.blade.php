@extends("app")
@section("content")

<progress value="0">
	<div class="progress-container">
		<span class="progress-bar"></span>
	</div>
</progress>

<div class="container center-block">
	<div class="order">CHAPTER {{$chapter->number}}</div>
	<h2>{{$chapter->title}}</h2>
	<div class="readability">
		<span class="label label-default" data-toggle="tooltip" data-placement="bottom" title="Based on an average reading speed of 250 words per minute.">9 min read</span>
		<span class="label label-default">2,136 words</span>
		<span class="label label-default" data-toggle="tooltip" data-placement="bottom" title="Easily understood by an average 7th or 8th-grade student (Dale–Chall readability formula).">Readability score 6.6</span>
	</div>
	
	<?php echo $chapter->description; ?>
	
    <nav class="contents" aria-label="Chapters">
    	<ul class="pagination">
    		<li class="disabled"><span aria-hidden="true">&laquo;</span></li>
    		<li class="active"><a href="">1</a></li>
    		<li><a href="">2</a></li>
    		<li><a href="">3</a></li>
    		<li><a href="">4</a></li>
    		<li><a href="">5</a></li>
    		<li><a href="">6</a></li>
    		<li><a href="">7</a></li>
    		<li><a href="">8</a></li>
    		<li><a href="">9</a></li>
    		<li><a href="">10</a></li>
    		<li><a href="">11</a></li>
    		<li><a href="">12</a></li>
    		<li>
    			<a href="#" aria-label="Next">
    				<span aria-hidden="true">&raquo;</span>
    			</a>
    		</li>
    	</ul>
    </nav>
</div>

@endsection