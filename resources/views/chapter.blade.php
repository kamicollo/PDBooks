@extends('app')
@section('content')				
		<div class="container center-block">
			<div class="chapter">CHAPTER {{$chapter->number}}</div>
			<h2>{{$chapter->title}}</h2>
        <?php echo $chapter->description; ?>
		</div>
@endsection
