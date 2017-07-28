<!DOCTYPE html>
<html lang="en">
	<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# book: http://ogp.me/ns/book#">
		<meta charset="utf-8">
		
		<!-- Search (https://www.google.com/webmasters/tools/googlebot-fetch) -->
		<!--<meta name="robots" content="noindex">-->
		
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		
		<title>Down the Rabbit-Hole | Alice's Adventures in Wonderland by Lewis Carroll | Laika Reads</title>
		<meta name="description" content="Alice was beginning to get very tired of sitting by her sister on the bank, and of having nothing to do: once or twice she had peeped into the book her sister was reading, but it had no pictures or conversations in it, ‘and what is the use of a book,’ thought Alice ‘without pictures or conversations?’" />
		
		<!-- Twitter (https://cards-dev.twitter.com/validator) -->
		<meta name="twitter:card" content="summary" /> <!-- If image, then summary_large_image -->
		<meta name="twitter:site" content="@LaikaReads" />
		<meta name="twitter:title" content="Alice's Adventures in Wonderland by Lewis Carroll" /> <!-- Max 70 characters -->
		<meta name="twitter:description" content="Alice was beginning to get very tired of sitting by her sister on the bank, and of having nothing to do: once or twice she had peeped into the book her sister was reading, but it had no pictures or conversations in it, ‘and what is the use of a book,’ thought Alice ‘without pictures or conversations?’" /> <!-- Max 200 characters -->
		<meta name="twitter:image" content="" /> <!-- Max 5MB -->
		<meta name="twitter:image:alt" content="Alice's Adventures in Wonderland by Lewis Carroll">
		
		<!-- Open Graph (https://developers.facebook.com/tools/debug/) -->
		<meta property="fb:app_id" content="" />
		<meta property="og:site_name" content="Laika Reads"/>
		<meta property="og:url" content="" />
		<meta property="og:type" content="book" /> <!-- https://developers.facebook.com/docs/reference/opengraph#object-type -->
		<meta property="og:title" content="Down the Rabbit-Hole | Alice's Adventures in Wonderland by Lewis Carroll" />
		<meta property="og:description" content="Alice was beginning to get very tired of sitting by her sister on the bank, and of having nothing to do: once or twice she had peeped into the book her sister was reading, but it had no pictures or conversations in it, ‘and what is the use of a book,’ thought Alice ‘without pictures or conversations?’" />
		<meta property="og:image" content="" />
		
		<!-- Bootstrap -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- Fonts -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dancing+Script">
		<!-- CSS -->
        <link rel="stylesheet" href="<?php echo URL::to('css/styles.css');?>" />
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
	</body>
</html>