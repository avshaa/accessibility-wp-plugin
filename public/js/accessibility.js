(function($) {

    var baseUrl = $("#helper").attr("data-url");
    var device = $("#helper").attr("data-device");

    function openAccessibility() {
        var state = $("#accessibility-button").attr("data-state");
        if (state == "closed") {
            $("#accessibility-button").attr("data-state", "opened").addClass("active");
            $("#accessibility-panel").addClass("show");
        } else if (state == "opened") {
            $("#accessibility-button").attr("data-state", "closed").removeClass("active");
            $("#accessibility-panel").removeClass("show");
        }
    }

    $(".open-accessibility").click(function(){
        openAccessibility();
    });

    $("#close-accessibility").click(function(){
        $("#accessibility-button").attr("data-state", "closed").removeClass("active");
        $("#accessibility-panel").removeClass("show");
    });

    function goBlackWhite(state) {
        if (state == "enable") {
            $("body").addClass("go-b-w");
        } else if (state == "disable") {
            $("body").removeClass("go-b-w");
        }   
    }
    
    function goLightContrast(state) {
        if (state == "enable") {
            var logoBlack = baseUrl + "/wp-content/themes/segev/images/logo-black.png";
            $("body").addClass("go-l-c");
            $("#hero-logo").attr("src", logoBlack);
            $("#logo").attr("src", logoBlack);
            $("#giftcard-logo").attr("src", logoBlack);
            $("#giftcard-logo-b").attr("src", logoBlack);
        } else if (state == "disable") {
            var logoSrc = $("#logo").attr("data-src");
            $("body").removeClass("go-l-c");
            $("#hero-logo").attr("src", logoSrc);
            $("#logo").attr("src", logoSrc);
            $("#giftcard-logo").attr("src", logoSrc);
            $("#giftcard-logo-b").attr("src", logoSrc);
        }
    }

    function goDarkContrast(state) {
        if (state == "enable") {
            var logoYellow = baseUrl + "/wp-content/themes/segev/images/logo-yellow.png";
            $("body").addClass("go-d-c");
            $("#hero-logo").attr("src", logoYellow);
            $("#logo").attr("src", logoYellow);
            $("#giftcard-logo").attr("src", logoYellow);
            $("#giftcard-logo-b").attr("src", logoYellow);
        } else if (state == "disable") {
            var logoSrc = $("#logo").attr("data-src");
            $("body").removeClass("go-d-c");
            $("#hero-logo").attr("src", logoSrc);
            $("#logo").attr("src", logoSrc);
            $("#giftcard-logo").attr("src", logoSrc);
            $("#giftcard-logo-b").attr("src", logoSrc);
        }
    }

    // font size

    var fontSize = 1;

    $("#accessibility-increase-font").click(function(){
        var currentSize = $("html").css("font-size");
        var newSize = parseFloat(currentSize)+.5;
        $("html").css("font-size", newSize);
    });

    $("#accessibility-decrease-font").click(function(){
        var currentSize = $("html").css("font-size");
        var newSize = parseFloat(currentSize)-.5;
        $("html").css("font-size", newSize);
    });

    $("#accessibility-original-font").click(function(){
        $("html").css("font-size", "10px");
    });

    // links underline

    $("#accessibility-a-underline").click(function(){
        var state = $(this).attr("data-state");
        if (state == "disabled") {
            $(this).attr("data-state", "enabled");
            $(this).find(".fa-plus").removeClass("active");
            $(this).find(".fa-times").addClass("active");
            $(this).addClass("active");
            $("a").css("text-decoration", "underline");
            $("a .fa").css("text-decoration", "underline");
            $("a p").css("text-decoration", "underline");
            $("a h1").css("text-decoration", "underline");
            $("a h2").css("text-decoration", "underline");
            $("a h3").css("text-decoration", "underline");
            $("a h4").css("text-decoration", "underline");
            $("a h5").css("text-decoration", "underline");
            $("a h6").css("text-decoration", "underline");
            $("a li").css("text-decoration", "underline");
            $("a .button").css("text-decoration", "underline");
            $(".open-popup").css("text-decoration", "underline");
            $(".show-children").css("text-decoration", "underline");
            $("a .square span").css("text-decoration", "underline");
            $("a .text").css("text-decoration", "underline");
        } else if (state == "enabled") {
            $(this).attr("data-state", "disabled");
            $(this).find(".fa-plus").addClass("active");
            $(this).find(".fa-times").removeClass("active");
            $(this).removeClass("active");
            $("a").css("text-decoration", "none");
            $("a .fa").css("text-decoration", "none");
            $("a p").css("text-decoration", "none");
            $("a h1").css("text-decoration", "none");
            $("a h2").css("text-decoration", "none");
            $("a h3").css("text-decoration", "none");
            $("a h4").css("text-decoration", "none");
            $("a h5").css("text-decoration", "none");
            $("a h6").css("text-decoration", "none");
            $("a li").css("text-decoration", "none");
            $("a .button").css("text-decoration", "none");
            $(".open-popup").css("text-decoration", "none");
            $(".show-children").css("text-decoration", "none");
            $("a .square span").css("text-decoration", "none");
            $("a .text").css("text-decoration", "none");
        }
    });

    // black--white contrast

    $("#accessibility-dark-contrast").click(function(){
        var state = $(this).attr("data-state");
        if (state == "disabled") {
            $(this).attr("data-state", "enabled");
            $(this).find(".fa-plus").removeClass("active");
            $(this).find(".fa-times").addClass("active");
            $(this).addClass("active");
            $("#accessibility-light-contrast").attr("data-state", "disabled");
            $("#accessibility-light-contrast").find(".fa-plus").addClass("active");
            $("#accessibility-light-contrast").find(".fa-times").removeClass("active");
            $("#accessibility-light-contrast").removeClass("active");
            $("#accessibility-black-white").attr("data-state", "disabled");
            $("#accessibility-black-white").find(".fa-plus").addClass("active");
            $("#accessibility-black-white").find(".fa-times").removeClass("active");
            $("#accessibility-black-white").removeClass("active");
            goLightContrast("disable");
            goBlackWhite("disable");
            goDarkContrast("enable");
        } else if (state == "enabled") {
            $(this).attr("data-state", "disabled");
            $(this).find(".fa-plus").addClass("active");
            $(this).find(".fa-times").removeClass("active");
            $(this).removeClass("active");   
            goDarkContrast("disable");
        }
    });

    // white--black contrast

    $("#accessibility-light-contrast").click(function(){
        var state = $(this).attr("data-state");
        if (state == "disabled") {
            $(this).attr("data-state", "enabled");
            $(this).find(".fa-plus").removeClass("active");
            $(this).find(".fa-times").addClass("active");
            $(this).addClass("active");
            $("#accessibility-dark-contrast").attr("data-state", "disabled");
            $("#accessibility-dark-contrast").find(".fa-plus").addClass("active");
            $("#accessibility-dark-contrast").find(".fa-times").removeClass("active");
            $("#accessibility-dark-contrast").removeClass("active");
            $("#accessibility-black-white").attr("data-state", "disabled");
            $("#accessibility-black-white").find(".fa-plus").addClass("active");
            $("#accessibility-black-white").find(".fa-times").removeClass("active");
            $("#accessibility-black-white").removeClass("active");
            goDarkContrast("disable");
            goBlackWhite("disable");
            goLightContrast("enable");
        } else if (state == "enabled") {
            $(this).attr("data-state", "disabled");
            $(this).find(".fa-plus").addClass("active");
            $(this).find(".fa-times").removeClass("active");
            $(this).removeClass("active");
            goLightContrast("disable");
        }
    });

    // black & white

    $("#accessibility-black-white").click(function(){
        var state = $(this).attr("data-state");
        if (state == "disabled") {
            $(this).attr("data-state", "enabled");
            $(this).find(".fa-plus").removeClass("active");
            $(this).find(".fa-times").addClass("active");
            $(this).addClass("active");
            $("#accessibility-dark-contrast").attr("data-state", "disabled");
            $("#accessibility-dark-contrast").find(".fa-plus").addClass("active");
            $("#accessibility-dark-contrast").find(".fa-times").removeClass("active");
            $("#accessibility-dark-contrast").removeClass("active");
            $("#accessibility-light-contrast").attr("data-state", "disabled");
            $("#accessibility-light-contrast").find(".fa-plus").addClass("active");
            $("#accessibility-light-contrast").find(".fa-times").removeClass("active");
            $("#accessibility-light-contrast").removeClass("active");
            goLightContrast("disable");
            goDarkContrast("disable");
            goBlackWhite("enable");
        } else if (state == "enabled") {
            $(this).attr("data-state", "disabled");
            $(this).find(".fa-plus").addClass("active");
            $(this).find(".fa-times").removeClass("active");
            $(this).removeClass("active");
            goBlackWhite("disable");
        }
    });

    // font family

    $("#accessibility-reg-font").click(function(){
        var state = $(this).attr("data-state");
        if (state == "disabled") {
            $(this).attr("data-state", "enabled");
            $(this).find(".fa-plus").removeClass("active");
            $(this).find(".fa-times").addClass("active");
            $(this).addClass("active");
            $("body, p, h6, h5, h4, h3, h2, h1, ul, ol").addClass("reg-font");
        } else if (state == "enabled") {
            $(this).attr("data-state", "disabled");
            $(this).find(".fa-plus").addClass("active");
            $(this).find(".fa-times").removeClass("active");
            $(this).removeClass("active");
            $("body, p, h6, h5, h4, h3, h2, h1, ul, ol").removeClass("reg-font");
        }
    });

    // keyboard navigation

    $("#accessibility-keyboard").click(function(){
        var state = $(this).attr("data-state");
        if (state == "disabled") {
            $(this).attr("data-state", "enabled");
            $(this).find(".fa-plus").removeClass("active");
            $(this).find(".fa-times").addClass("active");
            $(this).addClass("active");
            $("body").addClass("focus-effects");
            $("[tabindex=1]").focus();
            $("#accessibility-button").attr("data-state", "closed");
            $("#accessibility-panel").removeClass("show");
        } else if (state == "enabled") {
            $(this).attr("data-state", "disabled");
            $(this).find(".fa-plus").addClass("active");
            $(this).find(".fa-times").removeClass("active");
            $(this).removeClass("active");
            $("body").removeClass("focus-effects");
        }
    });

    // keyboard stuff

    function openMenu() {
		$("#logo").removeClass("hide-it");
		$("#menu-button").addClass("rotate").attr("data-state", "opened");
		$("#menu-container").show();
		setTimeout(function(){
			$("#menu-items").addClass("in");
			$("#inner-left").addClass("in");
		},100);
	}

	function closeMenu() {
		$("#menu-button").removeClass("rotate").attr("data-state", "closed");
		$("#menu-container").hide();
		setTimeout(function(){
			$("#menu-items").removeClass("in");
			$("#inner-left").removeClass("in");
		},100);
    }
    
    function openBookTable() {
        $("#container").addClass("move");
        $("#header").addClass("move");
        $("#book-table-button").attr("data-state", "opened");
        $("#footer").addClass("move");
    }

    function closeBookTable() {
        $("#container").removeClass("move");
        $("#header").removeClass("move");
        $("#book-table-button").attr("data-state", "closed");
        $("#footer").removeClass("move");
    }

    $("body").on("keydown", function(e){
        if (e.keyCode == 13) {
            if ($("#menu-button").is(":focus")) {
                var state = $("#menu-button").attr("data-state");
                if (state == "closed") {
                    openMenu();
                    setTimeout(function(){
                        $("[tabindex=7]").focus();
                    },100);
                } else if (state == "opened") {
                    closeMenu();
                    setTimeout(function(){
                        $("[tabindex=2]").focus();
                    },100);
                }
            } else if ($("#open-rests").is(":focus")) {
                $("#rests-ext").addClass("show");
                setTimeout(function(){
                    $("[tabindex=30]").focus();
                },100);
            } else if ($("#open-mishlohim").is(":focus")) {
                $("#container-deliveries").show();
                setTimeout(function(){
                    $("[tabindex=50]").focus();
                },100);
            } else if ($("#banner-deliveries-x").is(":focus")) {
                $("#container-deliveries").hide();
                setTimeout(function(){
                    $("[tabindex=4]").focus();
                },100);
            } else if ($("#book-table-button").is(":focus")) {
                var state = $("#book-table-button").attr("data-state");
                if (state == "closed") {
                    openBookTable();
                    closeMenu();
                } else if (state == "opened") {
                    closeBookTable();
                    setTimeout(function(){
                        $("[tabindex=5]").focus();
                    },100);
                }
            } else if ($("#accessibility-button").is(":focus")) {
                openAccessibility();
                setTimeout(function(){
                    $("[tabindex=101]").focus();
                },100);
            }
        }
    });


})(jQuery);