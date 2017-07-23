@extends('app')
@section('content')
		<div class="container center-block">
			<div class="chapter">CHAPTER {{$chapter->number}}</div>
			<h2>{{$chapter->title}}</h2>
			<div id="readability">
				<span class="label label-default">11 min read</span>
				<span class="label label-default">2,136 words</span>
				<span class="label label-default">Readability score 8.9</span>
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
