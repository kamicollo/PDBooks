<?php if (!isset($object)) $object = App\Page::create(); ?>
<?php if (!isset($bodyclass)) $bodyclass = 'unknown'; ?>
<!DOCTYPE html>
<html lang="en">
	<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# book: http://ogp.me/ns/book#">
		<meta charset="utf-8">

		<!-- Search (https://www.google.com/webmasters/tools/googlebot-fetch) -->
		<!--<meta name="robots" content="noindex">-->

		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Viewport -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

		<!-- Chrome colors -->
		<meta name="theme-color" content="#2c3f50">
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

		<!-- iOS -->
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="format-detection" content="telephone=no">

		<!-- Title and description -->
		<title>{{$object->web_pageTitle(true)}}</title>
		<meta name="description" content="{{$object->web_description()}}" />

		<!-- Icons -->
		<link rel="icon" sizes="192x192" href="{{URL::to('assets/icon192.png')}}">
		<link rel="icon" sizes="144x144" href="{{URL::to('assets/icon144.png')}}">
		<link rel="icon" sizes="96x96" href="{{URL::to('assets/icon96.png')}}">
		<link rel="icon" sizes="48x48" href="{{URL::to('assets/icon48.png')}}">
		<link rel="apple-touch-icon-precomposed" sizes="152x152" href="{{URL::to('assets/icon152.png')}}">
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{URL::to('assets/icon144.png')}}">
		<link rel="apple-touch-icon-precomposed" sizes="120x120" href="{{URL::to('assets/icon120.png')}}">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{URL::to('assets/icon114.png')}}">
		<link rel="apple-touch-icon-precomposed" sizes="76x76" href="{{URL::to('assets/icon76.png')}}">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{URL::to('assets/icon72.png')}}">
		<link rel="apple-touch-icon-precomposed" sizes="57x57" href="{{URL::to('assets/icon57.png')}}">

		<!-- Twitter (https://cards-dev.twitter.com/validator) -->
		@if ($object->web_image() != "")
		<meta name="twitter:card" content="summary_large_image" />
		@else
		<meta name="twitter:card" content="summary" />
		@endif
		<meta name="twitter:site" content="@LaikaReads" />
		<meta name="twitter:title" content="{{$object->web_pageTitle(false)}}" /> <!-- Max 70 characters -->
		<meta name="twitter:description" content="{{$object->web_description()}}" /> <!-- Max 200 characters -->

		 @if ($object->web_image() != "")
		<meta name="twitter:image" content="{{URL::to($object->web_image())}}" /> <!-- Max 5MB -->
		<meta name="twitter:image:alt" content="{{$object->web_pageTitle(false)}}">
		@endif

		<!-- Open Graph (https://developers.facebook.com/tools/debug/) -->
		<meta property="fb:app_id" content="229883360868841" />
		<meta property="og:site_name" content="Laika Reads"/>
		<meta property="og:url" content="{{$object->web_url()}}" />
		<meta property="og:type" content="book" /> <!-- https://developers.facebook.com/docs/reference/opengraph#object-type -->
		<meta property="og:title" content="{{$object->web_pageTitle(false)}}" />
		<meta property="og:description" content="{{$object->web_description()}}" />

		@if ($object->web_image() != "")
		<meta property="og:image" content="{{URL::to($object->web_image())}}" />
		@endif

		<!-- Styling -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dancing+Script">
		<link rel="stylesheet" href="{{URL::to('css/app.css')}}" />

		<!-- HTML5 shim -->
		<!-- Respond.js -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="{{$bodyclass}}">
	    @include("nav")
	    @yield("content")

		<footer class="footer">
			<div class="container">
				<p>Made with <span class="glyphicon glyphicon-heart"></span> by <a href="https://twitter.com/ernes7a" target="_blank">@ernes7a</a> and <a href="https://twitter.com/aurimas" target="_blank">@aurimas</a>. <a href="{{route('about')}}">Learn more</a>.</p>
			</div>
		</footer>

		<!-- jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="{{URL::to('js/jquery.dotdotdot.min.js')}}"></script>
		<!-- Bootstrap -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<!-- Modernizr -->
		<script src="{{URL::to('js/modernizr-custom.js')}}" type="text/javascript"></script>
		<!-- JavaScript -->
		<script src="{{URL::to('js/app.js')}}" type="text/javascript"></script>
		<!-- Twitter -->
		<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
		<!-- Facebook -->
		<div id="fb-root"></div>
		<!-- Google Analytics -->
		<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-19315846-20', 'auto');
		ga('send', 'pageview');
		</script>
	</body>
</html>
