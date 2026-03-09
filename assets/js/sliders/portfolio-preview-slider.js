document.addEventListener('DOMContentLoaded', function () {

  if (typeof Swiper === 'undefined') {
    console.error('Swiper не загружен');
    return;
  }

  const sliderElement = document.querySelector('.portfolio-preview__slider .swiper');
  if (!sliderElement) {
    return;
  }

  const allSlides = Array.from(
    sliderElement.querySelectorAll('.swiper-slide')
  );

  let swiper;

  function initSwiper() {
    swiper = new Swiper(sliderElement, {
      slidesPerView: 3,
      spaceBetween: 32,
      loop: false, // ⚠ ВАЖНО: loop лучше отключить при фильтрации

      pagination: {
        el: '.portfolio-preview__slider .swiper-pagination',
        clickable: true,
      },

      breakpoints: {
        320: {
          slidesPerView: 1,
          spaceBetween: 16
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 24
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 32
        }
      },

      speed: 500,
      grabCursor: true,
    });
  }

  initSwiper();

  // -------------------------
  // ФИЛЬТРАЦИЯ
  // -------------------------

  const buttons = document.querySelectorAll('.button-tab');

  buttons.forEach(button => {
    button.addEventListener('click', function () {

      const filter = this.dataset.filter;

      // Переключение активной кнопки
      buttons.forEach(btn => btn.classList.remove('isActive'));
      this.classList.add('isActive');

      filterSlides(filter);
    });
  });

  function filterSlides(category) {

    swiper.removeAllSlides();

    let filteredSlides;

    if (category === 'all') {
      filteredSlides = allSlides;
    } else {
      filteredSlides = allSlides.filter(slide => {
        const categories = slide.dataset.category;
        if (!categories) return false;

        return categories.split(' ').includes(category);
      });
    }

    swiper.appendSlide(filteredSlides);
    swiper.update();
  }

});
