$(function () {
	// Tooltips and popovers
	$("[data-toggle='popover']").popover();
	$("[data-toggle='tooltip']").tooltip();

	// Progress bar
	progressBar();
});


function progressBar() {
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
