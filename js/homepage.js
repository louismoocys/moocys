jQuery(document).ready(function ($) {
    //Smooth Scrolling
    $(".scroll").click(function (event) {
        event.preventDefault();
        console.log($(this).show());
        $('html,body').animate({ scrollTop: $(this.hash).offset().top }, 1000);
    });
    
    // Search area
    $('.search').hide();
    $('button').click(function () {
        $('.search').show();
        $('.text').focus();
    }
    );
    $('.close-in').click(function () {
        $('.search').hide();
    });
});

// Responsive menu expand




$(document).ready(function () {
	
	
$(".tapescript_toggle").click(function (event) {
    var $this = $(event.target);
    $this.siblings(".question_content").slideToggle(500);

    var $image = $this.children(".rotate");
    if ($image.css("transform") == 'none') {
        $image.css("transform", "rotate(90deg)");
    } else {
        $image.css("transform", "");
    }
});

	$("span.menu").click(function () {
    $(".res2").slideToggle(500, function () {
    });
});
	
		$("#menu-toggle").click(function () {
    $(".res2").slideToggle(500, function () {
    });
});
	
    $('#nivo-lightbox-demo a').nivoLightbox({ effect: 'fade' });

    // progressbar.js@1.0.0 version is used
    // Docs: http://progressbarjs.readthedocs.org/en/1.0.0/
    if (typeof reading_progress !== 'undefined') {
        var bar = new ProgressBar.Circle(reading_progress, {
            color: '#fff',
            // This has to be the same size as the maximum width to
            // prevent clipping
            strokeWidth: 4,
            trailWidth: 1,
            easing: 'easeInOut',
            duration: 1400,
            text: {
                autoStyleContainer: false
            },
            from: { color: '#FF0000', width: 1 },
            to: { color: '#fff', width: 5 },
            // Set default step function for all animate calls
            step: function (state, circle) {
                circle.path.setAttribute('stroke', state.color);
                circle.path.setAttribute('stroke-width', state.width);

                var value = Math.round(circle.value() * 100);
                if (value === 0) {
                    circle.setText('0%');
                } else {
                    circle.setText(value+'%');
                }

            }
        });
        bar.text.style.fontFamily = '"Raleway", Helvetica, sans-serif';
        bar.text.style.fontSize = '2rem';
        bar.animate(document.getElementById("reading_progress").getAttribute("value")/100);  // Number from 0.0 to 1.0
    }

    if (typeof speaking_progress !== 'undefined') {
        var bar = new ProgressBar.Circle(speaking_progress, {
            color: '#fff',
            // This has to be the same size as the maximum width to
            // prevent clipping
            strokeWidth: 4,
            trailWidth: 1,
            easing: 'easeInOut',
            duration: 1400,
            text: {
                autoStyleContainer: false
            },
            from: { color: '#03C37E', width: 1 },
            to: { color: '#fff', width: 5 },
            // Set default step function for all animate calls
            step: function (state, circle) {
                circle.path.setAttribute('stroke', state.color);
                circle.path.setAttribute('stroke-width', state.width);

                var value = Math.round(circle.value() * 100);
                if (value === 0) {
                    circle.setText('0%');
                } else {
                    circle.setText(value + '%');
                }

            }
        });
        bar.text.style.fontFamily = '"Raleway", Helvetica, sans-serif';
        bar.text.style.fontSize = '2rem';
        bar.animate(document.getElementById("speaking_progress").getAttribute("value") / 100);  // Number from 0.0 to 1.0
    }

    if (typeof writing_progress !== 'undefined') {
        var bar = new ProgressBar.Circle(writing_progress, {
            color: '#fff',
            // This has to be the same size as the maximum width to
            // prevent clipping
            strokeWidth: 4,
            trailWidth: 1,
            easing: 'easeInOut',
            duration: 1400,
            text: {
                autoStyleContainer: false
            },
            from: { color: '#044772', width: 1 },
            to: { color: '#fff', width: 5 },
            // Set default step function for all animate calls
            step: function (state, circle) {
                circle.path.setAttribute('stroke', state.color);
                circle.path.setAttribute('stroke-width', state.width);

                var value = Math.round(circle.value() * 100);
                if (value === 0) {
                    circle.setText('0%');
                } else {
                    circle.setText(value + '%');
                }

            }
        });
        bar.text.style.fontFamily = '"Raleway", Helvetica, sans-serif';
        bar.text.style.fontSize = '2rem';
        bar.animate(document.getElementById("writing_progress").getAttribute("value") / 100);  // Number from 0.0 to 1.0
    }

    if (typeof listening_progress !== 'undefined') {
        var bar = new ProgressBar.Circle(listening_progress, {
            color: '#fff',
            // This has to be the same size as the maximum width to
            // prevent clipping
            strokeWidth: 4,
            trailWidth: 1,
            easing: 'easeInOut',
            duration: 1400,
            text: {
                autoStyleContainer: false
            },
            from: { color: '#828bce', width: 1 },
            to: { color: '#fff', width: 5 },
            // Set default step function for all animate calls
            step: function (state, circle) {
                circle.path.setAttribute('stroke', state.color);
                circle.path.setAttribute('stroke-width', state.width);

                var value = Math.round(circle.value() * 100);
                if (value === 0) {
                    circle.setText('0%');
                } else {
                    circle.setText(value + '%');
                }

            }
        });
        bar.text.style.fontFamily = '"Raleway", Helvetica, sans-serif';
        bar.text.style.fontSize = '2rem';
        bar.animate(document.getElementById("listening_progress").getAttribute("value") / 100);  // Number from 0.0 to 1.0
    }

    if (typeof vocabulary_progress !== 'undefined') {
        var bar = new ProgressBar.Circle(vocabulary_progress, {
            color: '#fff',
            // This has to be the same size as the maximum width to
            // prevent clipping
            strokeWidth: 4,
            trailWidth: 1,
            easing: 'easeInOut',
            duration: 1400,
            text: {
                autoStyleContainer: false
            },
            from: { color: '#00FFFF', width: 1 },
            to: { color: '#fff', width: 5 },
            // Set default step function for all animate calls
            step: function (state, circle) {
                circle.path.setAttribute('stroke', state.color);
                circle.path.setAttribute('stroke-width', state.width);

                var value = Math.round(circle.value() * 100);
                if (value === 0) {
                    circle.setText('0%');
                } else {
                    circle.setText(value + '%');
                }

            }
        });
        bar.text.style.fontFamily = '"Raleway", Helvetica, sans-serif';
        bar.text.style.fontSize = '2rem';
        bar.animate(document.getElementById("vocabulary_progress").getAttribute("value") / 100);  // Number from 0.0 to 1.0
    }
});

$(document).ready(function () {
    /*
    var defaults = {
        containerID: 'toTop', // fading element id
        containerHoverID: 'toTopHover', // fading element hover id
        scrollSpeed: 1200,
        easingType: 'linear'
    };
    */
var opt = {
            horLabelPos: 'right', //'left'/'right',
            foreColor: '#fff',
            backColor: 'rgb(255,255,255,0.3)',
            horTitle: '',
		
        };
        var overall = {
            horLabelPos: 'topRight', //'left'/'right',
            foreColor: '#004669',
            backColor: 'rgb(255,255,255,0.3)',
            horTitle: 'Overall'
        };
        $('#bar').barIndicator(opt);
        $('#bar2').barIndicator(opt);
        $('#bar3').barIndicator(opt);
        $('#bar4').barIndicator(opt);
        $('#bar5').barIndicator(overall);

});
