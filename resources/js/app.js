
// Navbar Navigation 
document.addEventListener('DOMContentLoaded', () => {
    const burgerButton = document.querySelector('.navbar-burger');
    const navbarMenu = document.getElementById('navbarBasicExample');

    if (burgerButton) {
        burgerButton.addEventListener('click', () => {
            // Toggle the 'is-active' class on the navbar menu
            navbarMenu.classList.toggle('is-active');
            // Toggle the 'is-active' class on the burger button
            burgerButton.classList.toggle('is-active');
            // Update aria-expanded attribute
            const expanded = burgerButton.getAttribute('aria-expanded') === 'true';
            burgerButton.setAttribute('aria-expanded', !expanded);
        });
    }
});

