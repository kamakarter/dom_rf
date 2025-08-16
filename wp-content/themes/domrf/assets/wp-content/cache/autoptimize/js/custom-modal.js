document.addEventListener("DOMContentLoaded", function () {
  // Элементы модального окна
  const modal = document.querySelector(".custom-modal");
  const openButtons = document.querySelectorAll(".custom-modal-open-button"); // Изменено на All
  const closeButton = document.querySelector(".modal-close");
  const modalContainer = document.querySelector(".custom-modal-container");

  function openModal() {
    modal.classList.add("active");
    document.body.style.overflow = "hidden";
    document.body.style.touchAction = "none";
  }

  function closeModal() {
    modal.classList.remove("active");
    document.body.style.overflow = "";
    document.body.style.touchAction = "";
  }

  // Обработчик для ВСЕХ кнопок открытия
  openButtons.forEach(button => { // Добавлено: цикл по всем кнопкам
    button.addEventListener("click", openModal);
  });

  if (closeButton) {
    closeButton.addEventListener("click", closeModal);
  }

  modal.addEventListener("click", function (event) {
    if (event.target === modal) {
      closeModal();
    }
  });

  document.addEventListener("keydown", function (event) {
    if (event.key === "Escape" && modal.classList.contains("active")) {
      closeModal();
    }
  });
});