//Funciones necesarias para que funcione el slider en el apartado de extras
var swiper2 = new Swiper(".mySwiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    loop: true,
    slidesPerView: "1",
    coverflowEffect: {
      rotate: 0,
      stretch: 0,
      depth: 100,
      modifier: 4,
      slideShadows: false
    },
    breakpoints: {
      640: {
        slidesPerView: 2
      }
    }
  });