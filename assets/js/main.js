(function ($) {
  
  document.addEventListener('DOMContentLoaded', function () {
    const categoryButtons = document.querySelectorAll('.category-button');
    const allSliders = document.querySelectorAll('.swiper-container-wrapper');

    function showCategorySlider(selector) {
      allSliders.forEach(slider => {
        slider.style.display = 'none';
      });

      const targetSlider = document.querySelector(selector);
      if (targetSlider) {
        targetSlider.style.display = 'block';
        const numSlides = targetSlider.querySelectorAll('.swiper-slide').length;
        const swiper = new Swiper(targetSlider.querySelector('.swiper-container'), {
          
          spaceBetween: 30,
          loop: numSlides >= 2,
          navigation: {
            nextEl: targetSlider.querySelector('.swiper-next'),
            prevEl: targetSlider.querySelector('.swiper-prev'),
          },
          pagination: {
            el: targetSlider.querySelector('.swiper-custom-pagination'),
            clickable: true,
            renderBullet: function (index, className) {
              return '<span class="' + className + '">'  + '</span>';
            }
          },
          breakpoints: {
            768: {
              slidesPerView: 2,
              spaceBetween: 40,
              
            },
            480: {
              slidesPerView: 1,
              spaceBetween: 10,
            },
          }
        });
      }
    }

    categoryButtons.forEach(button => {
      button.addEventListener('click', function () {
        showCategorySlider(this.dataset.target);
      });
    });

    if (categoryButtons.length > 0) {
      showCategorySlider(categoryButtons[0].dataset.target);
    }
  });

  const swiperPrev = document.querySelector('.swiper-prev');
  const swiperNext = document.querySelector('.swiper-next');

  swiperPrev.addEventListener('click', () => {
    swiperNext.setAttribute('data-active', 'false');
    swiperPrev.setAttribute('data-active', 'true');
  });

  swiperNext.addEventListener('click', () => {
    swiperPrev.setAttribute('data-active', 'false');
    swiperNext.setAttribute('data-active', 'true');
  });
})(jQuery);



