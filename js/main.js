/* Swiper.js Kodları */


var swiper = new Swiper(".mySwiper", {
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    autoplay: {
      delay:2000,
      disableOnInteraction: false,
    },
    scrollbar: {
        el: ".swiper-scrollbar",
        hide: true,
      },
  });
  var swiper = new Swiper(".mySwiper2", {
    slidesPerView: 4,
    centeredSlides: true,
    grabCursor: true,
    grid: {
      rows: 1,
    },
    spaceBetween: 30,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });