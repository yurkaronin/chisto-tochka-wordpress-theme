// mobile-menu.js
document.addEventListener("DOMContentLoaded", function () {
  // === ОТКРЫТИЕ МЕНЮ ===
  var desktopButtons = document.querySelectorAll('.js-show-mobile-navigation-menu');

  desktopButtons.forEach(function (button) {
    button.addEventListener('click', function () {
      document.body.classList.toggle('mobile-navigation-menu-open');
    });
  });

  // === ЗАКРЫТИЕ МЕНЮ ===
  var closeButtons = document.querySelectorAll('.button-close');

  closeButtons.forEach(function (button) {
    button.addEventListener('click', function () {
      document.body.classList.remove('mobile-navigation-menu-open');
    });
  });

  // === ОБРАБОТКА ЯКОРНЫХ ССЫЛОК ===
  var anchorLinks = document.querySelectorAll('a[href^="#"]:not([href="#"])');

  anchorLinks.forEach(function (link) {
    link.addEventListener('click', function (e) {
      // Получаем ID элемента из href (убираем #)
      var targetId = this.getAttribute('href').substring(1);
      var targetElement = document.getElementById(targetId);

      if (targetElement) {
        e.preventDefault(); // Отменяем стандартный переход

        // Плавная прокрутка к элементу
        targetElement.scrollIntoView({
          behavior: 'smooth',
          block: 'start'
        });

        // Закрываем мобильное меню, если оно открыто
        document.body.classList.remove('mobile-navigation-menu-open');

        // Опционально: добавляем класс для подсветки активной секции
        // или обновляем URL без перезагрузки страницы
        history.pushState(null, null, this.getAttribute('href'));
      }
    });
  });
});
