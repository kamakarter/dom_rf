document.addEventListener("DOMContentLoaded", function () {
  // Элементы модального окна
  const modal = document.querySelector(".custom-modal");
  const openButton = document.querySelector(".custom-modal-open-button");
  const closeButton = document.querySelector(".modal-close");
  const modalContainer = document.querySelector(".custom-modal-container");

  // Функция открытия модального окна
  function openModal() {
    // Добавляем активный класс
    modal.classList.add("active");

    // Блокируем скролл страницы
    document.body.style.overflow = "hidden";
    document.body.style.touchAction = "none";
  }

  // Функция закрытия модального окна
  function closeModal() {
    // Удаляем активный класс
    modal.classList.remove("active");

    // Восстанавливаем скролл
    document.body.style.overflow = "";
    document.body.style.touchAction = "";
  }

  // Открытие по кнопке
  if (openButton) {
    openButton.addEventListener("click", openModal);
  }

  // Закрытие по крестику
  if (closeButton) {
    closeButton.addEventListener("click", closeModal);
  }

  // Закрытие при клике вне контейнера
  modal.addEventListener("click", function (event) {
    if (event.target === modal) {
      closeModal();
    }
  });

  // Закрытие по клавише Esc
  document.addEventListener("keydown", function (event) {
    if (event.key === "Escape" && modal.classList.contains("active")) {
      closeModal();
    }
  });
});
