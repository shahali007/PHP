$(document).ready(function () {
        var trigger = $('.toggle-button'),
                overlay = $('.page-overlay'),
                isClosed = false;

        trigger.click(function () {
            button_cross();
        });

        function button_cross() {

            if (isClosed == true) {
                overlay.hide();
                trigger.removeClass('is-open');
                trigger.addClass('is-closed');
                isClosed = false;
            } else {
                overlay.show();
                trigger.removeClass('is-closed');
                trigger.addClass('is-open');
                isClosed = true;
            }
        }

        $('[data-toggle="offcanvas"]').click(function () {
            $('#wrapper').toggleClass('toggled');
        });
    });
	$(document).ready(function () {
        var trigger = $('#topNav .nav a'),
                overlay = $('.page-overlay2'),
                isClosed = false;

        trigger.click(function () {
            button_cross();
        });

        function button_cross() {

            if (isClosed == true) {
                overlay.hide();
                trigger.removeClass('is-open');
                trigger.addClass('is-closed');
                isClosed = false;
            } else {
                overlay.show();
                trigger.removeClass('is-closed');
                trigger.addClass('is-open');
                isClosed = true;
            }
        }
    });
	// topNav addClass
	$(".toggle-button").click(function(){
		$("#topNav").addClass("navSwipp");
	})
	// search toggle
	$("#search-box").click(function(){$(".search-box").toggle();});
	$("a#list").click(function(){$(".list").toggle();});
	// smooth scroll
	$(document).ready(function(){
//            var headerHeight=$("#header").height();
            $('a[href^="#"]').on('click',function (e) {
                e.preventDefault();
                var target=this.hash;
                var $target=$(target);
                $('html, body').stop().animate({'scrollTop': $target.offset().top}, 900, 'swing', function(){window.location.hash=target;});
            });
        });