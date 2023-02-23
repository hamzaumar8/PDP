const newsSwiper = new Swiper(".newsSwiper", {
    autoplay: {
        delay: 5000,
    },
    // Default parameters
    slidesPerView: 1,
    spaceBetween: 10,
    // Responsive breakpoints
    breakpoints: {
        // when window width is >= 480px
        480: {
            slidesPerView: 1,
            spaceBetween: 30,
        },
        // when window width is >= 640px
        640: {
            slidesPerView: 2,
            spaceBetween: 40,
        },
        // when window width is >= 640px
        768: {
            slidesPerView: 3,
            spaceBetween: 40,
        },
    },
    // Navigation arrows
    navigation: {
        nextEl: ".news-swiper-button-next",
        prevEl: ".news-swiper-button-prev",
    },
});

const partnersSwiper = new Swiper(".partnersSwiper", {
    autoplay: {
        delay: 5000,
    },
    // Default parameters
    slidesPerView: 1,
    spaceBetween: 10,
    // Responsive breakpoints
    breakpoints: {
        // when window width is >= 480px
        480: {
            slidesPerView: 2,
            spaceBetween: 30,
        },
        // when window width is >= 640px
        640: {
            slidesPerView: 4,
            spaceBetween: 40,
        },
        // when window width is >= 640px
        768: {
            slidesPerView: 6,
            spaceBetween: 40,
        },
    },
    // Navigation arrows
    navigation: {
        nextEl: ".news-swiper-button-next",
        prevEl: ".news-swiper-button-prev",
    },
});

const heroSwiper = new Swiper(".heroSwiper", {
    autoplay: {
        delay: 5000,
    },
    // pagination: {
    //     el: ".story-swiper-pagination",
    //     clickable: true,
    // },

    // Navigation arrows
    navigation: {
        nextEl: ".hero-swiper-button-next",
        prevEl: ".hero-swiper-button-prev",
    },
});

// ScrollReveal().reveal(".animate_top", {
//     distance: "60px",
//     duration: 2800,
//     reset: false,
//     origin: "top",
//     interval: 100,
// });

// ScrollReveal().reveal(".animate_top", {
//     distance: "60px",
//     duration: 2800,
//     reset: false,
//     origin: "top",
//     interval: 100,
// });
// ScrollReveal().reveal(".animate_left", {
//     distance: "60px",
//     duration: 2800,
//     reset: false,
//     origin: "left",
//     interval: 100,
// });
// ScrollReveal().reveal(".animate_right", {
//     distance: "60px",
//     duration: 2800,
//     reset: false,
//     origin: "right",
//     interval: 100,
// });
// ScrollReveal().reveal(".animate_bottom", {
//     distance: "60px",
//     duration: 2800,
//     reset: false,
//     origin: "bottom",
//     interval: 100,
// });

const productSwiper = new Swiper(".productSwiper", {
    autoplay: {
        delay: 5000,
    },
    // Default parameters
    slidesPerView: 1,
    spaceBetween: 10,
    // Responsive breakpoints
    breakpoints: {
        // when window width is >= 480px
        480: {
            slidesPerView: 2,
            spaceBetween: 10,
        },
        // when window width is >= 640px
        640: {
            slidesPerView: 2,
            spaceBetween: 10,
        },
        // when window width is >= 640px
        768: {
            slidesPerView: 3,
            spaceBetween: 10,
        },
    },
    // // Navigation arrows
    // navigation: {
    //     nextEl: ".news-swiper-button-next",
    //     prevEl: ".news-swiper-button-prev",
    // },
});
