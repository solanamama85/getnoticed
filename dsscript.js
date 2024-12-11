// Placeholder for any interactivity you want, such as form validation
document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('.contact-form');
    form.addEventListener('submit', function (event) {
        event.preventDefault();
        alert("Thank you for your message! We will get back to you soon.");
    });
});
