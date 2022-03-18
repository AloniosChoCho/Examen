!(function (t) {
    function e() {
        document.webkitIsFullScreen || document.mozFullScreen || document.msFullscreenElement || (console.log("pressed"), t("body").removeClass("fullscreen-enable"));
    }
    var a;
    t("#side-menu").metisMenu(),
        t("#vertical-menu-btn").on("click", function (e) {
            e.preventDefault(), t("body").toggleClass("sidebar-enable"), 992 <= t(window).width() ? t("body").toggleClass("vertical-collpsed") : t("body").removeClass("vertical-collpsed");
        }),
        t("#sidebar-menu a").each(function () {
            var e = window.location.href.split(/[?#]/)[0];
            this.href == e &&
                (t(this).addClass("active"),
                t(this).parent().addClass("mm-active"),
                t(this).parent().parent().addClass("mm-show"),
                t(this).parent().parent().prev().addClass("mm-active"),
                t(this).parent().parent().parent().addClass("mm-active"),
                t(this).parent().parent().parent().parent().addClass("mm-show"),
                t(this).parent().parent().parent().parent().parent().addClass("mm-active"));
        }),
        t(".navbar-nav a").each(function () {
            var e = window.location.href.split(/[?#]/)[0];
            this.href == e &&
                (t(this).addClass("active"),
                t(this).parent().addClass("active"),
                t(this).parent().parent().addClass("active"),
                t(this).parent().parent().parent().addClass("active"),
                t(this).parent().parent().parent().parent().addClass("active"),
                t(this).parent().parent().parent().parent().parent().addClass("active"),
                t(this).parent().parent().parent().parent().parent().parent().addClass("active"));
        }),

        document.addEventListener("fullscreenchange", e),
        document.addEventListener("webkitfullscreenchange", e),
        document.addEventListener("mozfullscreenchange", e),
        t(".right-bar-toggle").on("click", function (e) {
            t("body").toggleClass("right-bar-enabled");
        }),
        t(document).on("click", "body", function (e) {
            0 < t(e.target).closest(".right-bar-toggle, .right-bar").length || t("body").removeClass("right-bar-enabled");
        }),
        (function () {
            if (document.getElementById("topnav-menu-content")) {
                for (var e = document.getElementById("topnav-menu-content").getElementsByTagName("a"), t = 0, n = e.length; t < n; t++)
                    e[t].onclick = function (e) {
                        "#" === e.target.getAttribute("href") && (e.target.parentElement.classList.toggle("active"), e.target.nextElementSibling.classList.toggle("show"));
                    };
                window.addEventListener("resize", s);
            }
        })(),
        [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]')).map(function (e) {
            return new bootstrap.Tooltip(e);
        }),
        [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]')).map(function (e) {
            return new bootstrap.Popover(e);
        }),
        window.sessionStorage && ((a = sessionStorage.getItem("is_visited")) ? (t(".right-bar input:checkbox").prop("checked", !1), t("#" + a).prop("checked", !0), n(a)) : sessionStorage.setItem("is_visited", "light-mode-switch")),
        t("#light-mode-switch, #dark-mode-switch, #rtl-mode-switch").on("change", function (e) {
            n(e.target.id);
        }),
        t("#header-chart-1").sparkline([8, 6, 4, 7, 10, 12, 7, 4, 9, 12, 13, 11, 12], { type: "bar", height: "35", barWidth: "5", barSpacing: "3", barColor: "#1b82ec" }),
        t("#header-chart-2").sparkline([8, 6, 4, 7, 10, 12, 7, 4, 9, 12, 13, 11, 12], { type: "bar", height: "35", barWidth: "5", barSpacing: "3", barColor: "#f5b225" }),
        t(window).on("load", function () {
            t("#status").fadeOut(), t("#preloader").delay(350).fadeOut("slow");
        }),
        Waves.init();
})(jQuery);
window.addEventListener('load', function(){
	new Glider(document.querySelector('.carousel__lista'), {
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: '.carousel__indicadores',
		arrows: {
			prev: '.carousel__anterior',
			next: '.carousel__siguiente'
		},
		responsive: [
			{
			  // screens greater than >= 775px
			  breakpoint: 450,
			  settings: {
				// Set to `auto` and provide item width to adjust to viewport
				slidesToShow: 2,
				slidesToScroll: 2
			  }
			},{
			  // screens greater than >= 1024px
			  breakpoint: 800,
			  settings: {
				slidesToShow: 4,
				slidesToScroll: 4
			  }
			}
		]
	});
});
