// SHARING //
window.fbAsyncInit = function() {
	FB.init({
		appId: "229883360868841",
		autoLogAppEvents: false,
		xfbml: true,
		version: "v2.10"
	});

	FB.Event.subscribe("xfbml.render", displayInstagram);
};

(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=229883360868841";
	fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));


// UI ELEMENTS //
(function ($) {
	// Elipses
	$(".home .featured .excerpt").dotdotdot({
		fallbackToLetter: true,
		watch: true,
		wrap: "word"
	});

	// Tooltips and popovers
	$("[data-toggle='popover']").popover();
	$("[data-toggle='tooltip']").tooltip();

	// Progress bar
	// TODO: only trigger this in the chapter page
	displayProgressBar();
}(jQuery));


// FUNCTIONS //
function displayInstagram() {
	var page = $("body").attr("class");
	if (page === "home" || page === "book" || page === "unknown") {
		$("a.instagram").removeClass("hidden");
	}
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
