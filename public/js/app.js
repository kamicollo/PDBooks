// BROWSERS
// Safari
if (isIE() || isSafari()) {
	$(".static-book").show();
} else {
	$(".flippy-book").show();
}


// SHARING //
// Facebook
window.fbAsyncInit = function() {
	FB.init({
		appId: "229883360868841",
		autoLogAppEvents: false,
		xfbml: true,
		version: "v2.10"
	});

	FB.Event.subscribe("xfbml.render", displayInstagram);
};


// EVERYTHING ELSE
(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.async = true;
	js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=229883360868841";
	fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));


// UI ELEMENTS //
(function ($) {
	var page = $("body").attr("class");

	// Home
	if (page === "home") {
		ellipsize();
	}

	// Book
	if (page === "book") {
		$("[data-toggle='popover']").popover();
		ellipsize();
	}

	// Chapter
	if (page === "chapter") {
		$("[data-toggle='tooltip']").tooltip();
		$("[data-toggle='popover']").popover();
		displayProgressBar();
	}
}(jQuery));


// FUNCTIONS //
function isIE() {
	var ua = window.navigator.userAgent;

	if (ua.indexOf("MSIE ") > 0 ||
		ua.indexOf("Trident/") > 0 ||
		ua.indexOf("Edge/") > 0) {
		console.log(ua);
		return true;
	} else {
		return false;
	}
}

function isSafari() {
	if (navigator.userAgent.search("Safari") >= 0 &&
		navigator.userAgent.search("Chrome") < 0) {
			return true;
	} else {
		return false;
	}
}

function goTo(element) {
	var top = $("#" + element).offset().top - 60;
    $("html, body").animate({ scrollTop: top }, 750);
}

function displayInstagram(page) {
	if (page !== "chapter" && page !== "home") {
		$("a.instagram").removeClass("hidden");
	}
}

function ellipsize() {
	$(".featured .excerpt").dotdotdot({
		fallbackToLetter: true,
		watch: true,
		wrap: "word"
	});
}

function displayProgressBar() {
	var getMax = function() {
		return $(document).height() - $(window).height();
	}

	var getValue = function() {
		return $(window).scrollTop();
	}

	if ("max" in document.createElement("progress")) {
		var bar = $("progress");
	    bar.attr({ max: getMax() });

		$(document).on("scroll", function() {
			bar.attr({ value: getValue() });
		});

		$(window).resize(function() {
			bar.attr({ max: getMax(), value: getValue() });
		});
	} else {
		var bar = $(".progress-bar"),
		max = getMax(),
		value,
		width;

		var getWidth = function() {
			value = getValue();
			width = (value / max) * 100;
			width = width + "%";
			return width;
		}

		var setWidth = function() {
			bar.css({ width: getWidth() });
		}

		$(document).on("scroll", setWidth);
	    $(window).on("resize", function() {
	    	max = getMax();
	    	setWidth();
	    });
	}
}
