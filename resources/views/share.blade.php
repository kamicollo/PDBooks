@section("share")

<ul class="share">
	<li>
		<a href="https://twitter.com/share" class="twitter twitter-share-button" data-text="{{$object->web_page_title(false)}}" data-url="{{$object->web_url()}}" data-via="LaikaReads" data-related="ernes7a" data-dnt="true" data-show-count="false"></a>
	</li>

	<li>
		<div class="facebook fb-like" data-href="{{$object->web_url()}}" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="false"></div>
	</li>

	<li>
		<div class="facebook fb-share-button" data-href="{{$object->web_url()}}" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fgoogle.com%2F&amp;src=sdkpreparse"></a></div>
	</li>
</ul>

@show
