(function ($) {
    const urlParams = new URLSearchParams(window.location.search);
    let rdp;

    $(document).ready(function () {
        rdp.init();
    });

    rdp = {
        init: function () {
            rdp.utils();
        },

        utils: function () {
            // Enable bootstrap tooltips
            const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
            const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));

            // const carousel = new bootstrap.Carousel('#myCarousel');

        },

        checkParameterBFR: function () {
            if (urlParams.has('fake-report')) {
                rdp.fakeReportDate();
            }

            if (urlParams.has('force-report')) {
                rdp.showReportModal();
            }
        },

    };
})(jQuery);