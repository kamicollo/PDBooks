@section("fonts")

@if ($bodyclass == "book")
<script>
	WebFont.load({
		google: {
			families: ["Dancing Script"]
		}
	});
</script>
@endif

@if ($bodyclass == "chapter" && $chapter->book->url_slug == "alice-in-wonderland")
<script>
	WebFont.load({
		google: {
			families: ["Zeyada", "Zilla Slab Highlight:700"]
		}
	});
</script>
@endif

@if ($bodyclass == "chapter" && $chapter->book->url_slug == "through-the-looking-glass")
<script>
	WebFont.load({
		google: {
			families: ["Zeyada", "Zilla Slab Highlight:700"]
		}
	});
</script>
@endif

@if ($bodyclass == "chapter" && $chapter->book->url_slug == "the-adventures-of-sherlock-holmes")
<script>
	WebFont.load({
		google: {
			families: ["Zilla Slab Highlight:700"]
		}
	});
</script>
@endif

@if ($bodyclass == "chapter" && $chapter->book->url_slug == "the-hound-of-the-baskervilles")
<script>
	WebFont.load({
		google: {
			families: ["Caveat", "Jim Nightshade", "Zilla Slab Highlight:700"]
		}
	});
</script>
@endif

@if ($bodyclass == "chapter" && $chapter->book->url_slug == "the-adventures-of-tom-sawyer")
<script>
	WebFont.load({
		google: {
			families: ["Zeyada"]
		}
	});
</script>
@endif

@if ($bodyclass == "chapter" && $chapter->book->url_slug == "the-adventures-of-huckleberry-finn")
<script>
	WebFont.load({
		google: {
			families: ["Zeyada"]
		}
	});
</script>
@endif

@if ($bodyclass == "chapter" && $chapter->book->url_slug == "the-awakening")
<script>
	WebFont.load({
		google: {
			families: ["Caveat"]
		}
	});
</script>
@endif

@if ($bodyclass == "chapter" && $chapter->book->url_slug == "the-wizard-of-oz")
<script>
	WebFont.load({
		google: {
			families: ["Zilla Slab Highlight:700"]
		}
	});
</script>
@endif

@show
