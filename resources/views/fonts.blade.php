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

@if ($bodyclass == "chapter" && $chapter->book->url_slug = "alice-in-wonderland")
<script>
	WebFont.load({
		google: {
			families: ["Zeyada", "Zilla Slab Highlight"]
		}
	});
</script>
@endif

@if ($bodyclass == "chapter" && $chapter->book->url_slug = "through-the-looking-glass")
<script>
	WebFont.load({
		google: {
			families: ["Zeyada", "Zilla Slab Highlight"]
		}
	});
</script>
@endif

@if ($bodyclass == "chapter" && $chapter->book->url_slug = "the-adventures-of-sherlock-holmes")
<script>
	WebFont.load({
		google: {
			families: ["Zilla Slab Highlight"]
		}
	});
</script>
@endif

@if ($bodyclass == "chapter" && $chapter->book->url_slug = "the-hound-of-the-baskervilles")
<script>
	WebFont.load({
		google: {
			families: ["Caveat", "Jim Nightshade", "Zilla Slab Highlight"]
		}
	});
</script>
@endif

@if ($bodyclass == "chapter" && $chapter->book->url_slug = "the-adventures-of-tom-sawyer")
<script>
	WebFont.load({
		google: {
			families: ["Zeyada"]
		}
	});
</script>
@endif

@if ($bodyclass == "chapter" && $chapter->book->url_slug = "the-adventures-of-huckleberry-finn")
<script>
	WebFont.load({
		google: {
			families: ["Zeyada"]
		}
	});
</script>
@endif

@show
