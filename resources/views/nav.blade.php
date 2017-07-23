@section('nav')
        <nav class="navbar navbar-default navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
                @if ($bodyclass == 'read') 
					<button type="button" class="navbar-toggle collapsed" data-target="#navigator" data-toggle="collapse" aria-expanded="false">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
                @endif
					<a class="navbar-brand" href="">
						<img alt="Books" src="{{ URL::to("assets/logo.png") }}">
					</a>
                @if ($bodyclass == 'read') 
					<p class="navbar-text hidden-xs">{{$book->title}} by <i>{{$book->author}}</i></p>
                @endif
				</div>

                @if ($bodyclass == 'read') 
				<div class="collapse navbar-collapse" id="navigator">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="">Title Page (what's that?)</a></li>
						<li class="hidden-xs"><a href=""><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span></a></li>
						<li class="hidden-xs"><a href=""><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a></li>
                    @if ($chapter->IsPrevious())
						<li class="visible-xs-inline"><a href="">Previous Chapter</a></li>
                    @endif
                    @if ($chapter->IsNext())
						<li class="visible-xs-inline"><a href="">Next Chapter</a></li>
                    @endif
					</ul>
				</div>
                @endif
			</div>
		</nav>
@show
