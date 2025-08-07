/**
 * Новый аккордеон FAQ
 * Полностью независимый от старого аккордеона
 */

// Ждем полной загрузки страницы
window.addEventListener("load", function () {
  // Отключаем все существующие обработчики
  document.querySelectorAll(".new-faq-toggle").forEach((toggle) => {
    toggle.removeEventListener("click", null);
    toggle.onclick = null;
  });

  // Удаляем все обработчики событий
  document.body.removeEventListener("click", null);

  // Ждем еще немного для полной инициализации
  setTimeout(function () {
    // Находим все кнопки нового аккордеона
    const faqToggles = document.querySelectorAll(".new-faq-toggle");

    console.log("Найдено кнопок аккордеона:", faqToggles.length);

    // Добавляем обработчики событий
    faqToggles.forEach((toggle) => {
      // Удаляем все старые обработчики
      toggle.replaceWith(toggle.cloneNode(true));
    });

    // Находим кнопки заново после замены
    const newFaqToggles = document.querySelectorAll(".new-faq-toggle");

    newFaqToggles.forEach((toggle) => {
      toggle.addEventListener(
        "click",
        function (e) {
          e.preventDefault();
          e.stopPropagation();
          e.stopImmediatePropagation();

          console.log("Клик по аккордеону");

          const card = this.closest(".new-faq-card");
          const content = card.querySelector(".new-faq-content");

          // Проверяем, открыта ли текущая карточка
          const isActive = card.classList.contains("active");

          // Закрываем все карточки
          const allCards = document.querySelectorAll(".new-faq-card");
          allCards.forEach((otherCard) => {
            otherCard.classList.remove("active");
            const otherContent = otherCard.querySelector(".new-faq-content");
            otherContent.style.maxHeight = "0";
          });

          // Если карточка была закрыта, то открываем её
          if (!isActive) {
            card.classList.add("active");
            content.style.maxHeight = content.scrollHeight + "px";
          }

          return false;
        },
        true
      ); // Используем capture для перехвата события первым
    });

    // Обработка клавиатуры для доступности
    newFaqToggles.forEach((toggle) => {
      toggle.addEventListener("keydown", function (e) {
        if (e.key === "Enter" || e.key === " ") {
          e.preventDefault();
          this.click();
        }
      });
    });
  }, 500);
});
