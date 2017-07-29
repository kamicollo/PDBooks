<?php if (!isset($object)) $object = App\Page::create(); ?>
<?php if (!isset($bodyclass)) $bodyclass = 'unknown'; ?>
<!DOCTYPE html>
<html lang="en">
	<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# book: http://ogp.me/ns/book#">
		<meta charset="utf-8">
		
		<!-- Search (https://www.google.com/webmasters/tools/googlebot-fetch) -->
		<!--<meta name="robots" content="noindex">-->
		
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		
		<title>{{$object->web_pageTitle(true)}}</title>
		<meta name="description" content="{{$object->web_description()}}" />
		
		<!-- Twitter (https://cards-dev.twitter.com/validator) -->
		@if ($object->web_image() != '')
		<meta name="twitter:card" content="summary_large_image" /> 
		@else
		<meta name="twitter:card" content="summary" /> 
		@endif
		<meta name="twitter:site" content="@LaikaReads" />
		<meta name="twitter:title" content="{{$object->web_pageTitle(false)}}" /> <!-- Max 70 characters -->
		<meta name="twitter:description" content="{{$object->web_description()}}" /> <!-- Max 200 characters -->
		 
		 @if ($object->web_image() != '')
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

		@if ($object->web_image() != '')
		<meta property="og:image" content="{{URL::to($object->web_image())}}" />
		@endif
		
		<!-- Bootstrap -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- Fonts -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dancing+Script">
		<!-- CSS -->
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
		
		<!-- jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- Bootstrap -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<!-- Modernizr -->
		<script src="{{URL::to('js/modernizr-custom.js')}}" type="text/javascript"></script>
		<!-- JavaScript -->
		<script src="{{URL::to('js/script.js')}}" type="text/javascript"></script>
		<!-- Twitter -->
		<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
		<!-- Facebook -->
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=229883360868841";
			fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
		</script>
	</body>
</html>