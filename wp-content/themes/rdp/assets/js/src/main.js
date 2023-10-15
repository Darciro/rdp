(function ($) {
    const urlParams = new URLSearchParams(window.location.search);
    let rdp;

    $(document).ready(function () {
        rdp.init();
    });

    rdp = {
        init: function () {
            rdp.utils();
            rdp.menuCanvas();
            rdp.siteFX();
            rdp.logosCarousel();
        },

        utils: function () {
            // Enable bootstrap tooltips
            const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
            const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));
        },

        menuCanvas: function () {
            const navCanvas = document.getElementById('nav-canvas');
            navCanvas.addEventListener('show.bs.offcanvas', event => {
                $('#main-nav').addClass('menu-active');
            })

            navCanvas.addEventListener('hide.bs.offcanvas', event => {
                $('#main-nav').removeClass('menu-active');
            })
        },

        siteFX: function () {
            gsap.utils.toArray('.animate__animated').forEach(function (elem) {

                ScrollTrigger.create({
                    trigger: elem,
                    onEnter: function () {
                        if (!$(elem).hasClass('animated'))
                            rdp.animateElement(elem)

                        $(elem).addClass('animated')
                    },
                    onEnterBack: function () {
                        // rdp.animateElement(elem, -1)
                    },
                    onLeave: function () {
                        // $(elem).removeClass('animated')
                    } // assure that the element is hidden when scrolled into view
                });
            });
        },

        animateElement: function (elem, customClass) {
            if (!$(elem).data('animation'))
                return;

            var $target = $(elem),
                animatePrefix = 'animate__',
                animationClass = animatePrefix + $target.data('animation'),
                animationDelay;

            if ($target.data('delay')) {
                animationDelay = animatePrefix + 'delay-' + $target.data('delay');
                animationClass = animationDelay + ' ' + animationClass;
            }

            animationClass = customClass + ' ' + animationClass;

            $target.addClass(animationClass);

            $target.on('animationend', function () {
                $target.removeClass(animationClass);
            })

        },

        logosCarousel: function () {
            $('#logos-carousel').slick({
                dots: false,
                arrows: false,
                infinite: true,
                speed: 300,
                slidesToShow: 7,
                slidesToScroll: 1,
                responsive: [
                    {
                        breakpoint: 768,
                        settings: {
                            autoplay: true,
                            slidesToShow: 3,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 576,
                        settings: {
                            autoplay: true,
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });
        },

    };
})(jQuery);