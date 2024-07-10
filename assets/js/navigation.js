// Navigation
document.addEventListener('DOMContentLoaded', function () {
    const menuToggle = document.querySelector('.menu-toggle');
    const mainNavigation = document.querySelector('.main-navigation');

    menuToggle.addEventListener('click', function () {
        mainNavigation.classList.toggle('toggled');
    });

    document.addEventListener('click', function (event) {
        if (!menuToggle.contains(event.target) && !mainNavigation.contains(event.target)) {
            mainNavigation.classList.remove('toggled');
        }
    });
});
