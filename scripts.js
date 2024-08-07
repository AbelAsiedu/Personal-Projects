$(document).ready(function () {
    // Burger menu toggle
    $('.burger').on('click', function () {
        $('.nav-links').toggleClass('active');
    });

    // Popup display
    $('#signupButton').on('click', function () {
        $('#signupPopup').css('display', 'block');
    });

    // Close popup when clicking outside of it
    $(window).on('click', function (event) {
        if ($(event.target).is('#signupPopup')) {
            $('#signupPopup').css('display', 'none');
        }
    });

    // Cookie consent
    if (!localStorage.getItem('cookiesAccepted')) {
        $('#cookieConsent').css('display', 'block');
    }

    $('#acceptCookies').on('click', function () {
        localStorage.setItem('cookiesAccepted', 'true');
        $('#cookieConsent').css('display', 'none');
    });

    // Image slider
    let currentSlide = 0;
    const slides = $('.slide');
    const totalSlides = slides.length;

    function showSlide(slideIndex) {
        slides.each(function (index, slide) {
            $(slide).css('display', index === slideIndex ? 'block' : 'none');
        });
    }

    setInterval(() => {
        currentSlide = (currentSlide + 1) % totalSlides;
        showSlide(currentSlide);
    }, 3000); // Change slide every 3 seconds

    showSlide(currentSlide);
});
