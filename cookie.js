document.addEventListener("DOMContentLoaded", function() {
    const cookieConsent = document.getElementById('cookieConsent');
    const acceptCookiesButton = document.getElementById('acceptCookies');

    if (!localStorage.getItem('cookiesAccepted')) {
        cookieConsent.style.display = 'block';
    }

    acceptCookiesButton.addEventListener('click', function() {
        localStorage.setItem('cookiesAccepted', 'true');
        cookieConsent.style.display = 'none';
    });
});
