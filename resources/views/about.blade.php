@extends("app")
@section("content")

<div class="wrapper">
	<div class="container highlight">
		<h3>On LaikaReads</h3>
		<p>There are a lot of great websites that provide free and public domain books. For example, <a href="http://www.gutenberg.org/" target="_blank">Project Gutenberg</a> is a wonderful repository that offers access to more than 50,000 books. <a href="{{URL::to('')}}">LaikaReads</a> is different, because it focuses on the reading experience, not the number of books. We will never be able to replicate the feeling of holding a real book in one's hands, but we can do some delightful things that aren't possible in real books.</p>

		<h3>On Public Domain</h3>
		<p><a href="{{URL::to('')}}">LaikaReads</a> publishes books that are in <a href="https://en.wikipedia.org/wiki/Public_domain" target="_blank">public domain</a> in the United States. A public domain book is a book with no copyright, a book that was created without a license, or a book with expired or forfeited copyrights. A book may be in public domain in one country, but copyrighted in another. Thus, if you are located outside of the United States, you must always check the book's copyright status before reading it.</p>

		<h3>On Ads</h3>
		<p>Yes, <a href="{{URL::to('')}}">LaikaReads</a> has ads. These ads support the development of the website. We focused on user experience first, so we hope you will find the ads non-intrusive and relevant.</p>

		<h3>On Social Media</h3>
		<p>You can find @LaikaReads on <a href="https://twitter.com/LaikaReads" target="_blank">Twitter</a>, <a href="https://facebook.com/LaikaReads" target="_blank">Facebook</a> and <a href="https://instagram.com/LaikaReads" target="_blank">Instagram</a>. Let's talk about books!</p>
		<!-- <blockquote class="instagram-media" data-instgrm-version="7" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:658px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
			<div style="padding:8px;">
				<div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:50.0% 0; text-align:center; width:100%;">
					<div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAMUExURczMzPf399fX1+bm5mzY9AMAAADiSURBVDjLvZXbEsMgCES5/P8/t9FuRVCRmU73JWlzosgSIIZURCjo/ad+EQJJB4Hv8BFt+IDpQoCx1wjOSBFhh2XssxEIYn3ulI/6MNReE07UIWJEv8UEOWDS88LY97kqyTliJKKtuYBbruAyVh5wOHiXmpi5we58Ek028czwyuQdLKPG1Bkb4NnM+VeAnfHqn1k4+GPT6uGQcvu2h2OVuIf/gWUFyy8OWEpdyZSa3aVCqpVoVvzZZ2VTnn2wU8qzVjDDetO90GSy9mVLqtgYSy231MxrY6I2gGqjrTY0L8fxCxfCBbhWrsYYAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;">
					</div>
				</div>
				<p style="color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">
					<a href="{{$object->web_latest_instagram()}}" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by Laika Reads (@LaikaReads)</a>
				</p>
			</div>
		</blockquote>
		<script async defer src="//platform.instagram.com/en_US/embeds.js"></script> -->
	</div>
</div>

@endsection
