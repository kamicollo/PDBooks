@section("structure")

<script type="application/ld+json">
{
	"@context": "http://schema.org",
	"@type": "Organization",
	"url": "http://laikareads.com",
	"name": "Laika Reads",
	"logo": "http://laikareads.com/assets/logo.png",
	"sameAs": [
		"https://twitter.com/LaikaReads",
		"https://facebook.com/LaikaReads",
		"https://instagram.com/LaikaReads"
	]
}
</script>

<script type="application/ld+json">
{
	"@context": "http://schema.org",
	"@type": "WebSite",
	"url": "http://laikareads.com",
	"name": "Laika Reads"
}
</script>

@if ($bodyclass == "home")
<script type="application/ld+json">
{
	"@context":"http://schema.org",
	"@type":"ItemList",
	"itemListElement": [
	@for ($i = 0; $i < $books->count(); $i++)
	{
		"@type": "ListItem",
		"position": "{{$i + 1}}",
		"url": "{{route('book', $books->get($i)->getRouteKey())}}"
	}@if ($i < $books->count() - 1),@endif
	@endfor
	]
}
</script>
@endif

@if ($bodyclass == "book")
<script type="application/ld+json">
{
	"@context": "http://schema.org",
	"@type":"Book",
	"name": "{{$book->title}}",
	"author": {
		"@type": "Person",
		"name": "{{$book->author}}"
	},
	"url": "{{$object->web_url()}}",
	"workExample" : [{
		"@type": "Book",
		"bookFormat": "EBook",
		"isbn": "{{$book->isbn}}",
		// "datePublished": TODO,
		"aggregateRating": {
			"@type": "AggregateRating",
			"ratingValue": "{{$book->goodreads_avg_rating}}",
			"reviewCount": "{{$book->goodreads_count_ratings}}"
		},
		"description": "{{$object->web_description()}}",
		"potentialAction": {
			"@type":"ReadAction",
			"target": {
				"@type": "EntryPoint",
				"urlTemplate": "{{route('chapter', [$book->getRouteKey(), $book->firstChapter()])}}",
				"actionPlatform": [
					"http://schema.org/DesktopWebPlatform",
					"http://schema.org/MobileWebPlatform",
					"http://schema.org/IOSPlatform",
					"http://schema.org/AndroidPlatform"
				]
			}
		}
	}]
}
</script>
@endif

@show
