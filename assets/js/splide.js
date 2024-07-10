document.addEventListener('DOMContentLoaded', function () {
    let splideCheck = document.getElementsByClassName("splide").length;
    if (splideCheck) {
        console.log('Splide active');
        new Splide('.splide', {
            perPage: 1,
            perMove: 1,
            type: 'fade',
            autoplay: true,
            interval: 4000,
            pauseOnHover: false,
            rewind: true,
            speed: 3000,
            pagination: false,
        }).mount();
    } else {
        console.log('Splide inactive');
    }
});
