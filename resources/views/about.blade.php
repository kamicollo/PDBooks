@extends("app")
@section("content")

<div class="wrapper">
	<div class="container">
		<h3>Public Domain</h3>
		<p><a href="{{URL::to('')}}">LaikaReads</a> publishes books that are in <a href="https://en.wikipedia.org/wiki/Public_domain" target="_blank">public domain</a> in the United States. A public domain book is a book with no copyright, a book that was created without a license, or a book with expired or forfeited copyrights. A book may be in public domain in one country, but copyrighted in another. Thus, if you are located outside of the United States, you must always check the book's copyright status before reading it.</p>

		<h3>On LaikaReads</h3>
		<p>There are a lot of great websites that provide free and public domain books. For example, <a href="http://www.gutenberg.org/" target="_blank">Project Gutenberg</a> is a wonderful repository that offers access to more than 50,000 books. <a href="{{URL::to('')}}">LaikaReads</a> is different, because it focuses on the reading experience, not the number of books. We will never be able to replicate the feeling of holding a real book in one's hands, but we can do some delightful things that aren't possible in real books.</p>

		<h3>On Ads</h3>
		<p>Yes, <a href="{{URL::to('')}}">LaikaReads</a> has ads. These ads support the development of the website. We focused on user experience first, so we hope you will find the ads non-intrusive and relevant.</p>
	</div>
</div>

@endsection
