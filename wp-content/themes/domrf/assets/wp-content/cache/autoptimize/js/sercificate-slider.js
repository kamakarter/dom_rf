document.addEventListener('DOMContentLoaded', function() {
    const slider = document.getElementById('licensesSlider');
    const prevBtn = document.getElementById('sliderPrev');
    const nextBtn = document.getElementById('sliderNext');
    
    // Функция для обновления состояния кнопок
    function updateButtons() {
      const isStart = slider.scrollLeft <= 10;
      const isEnd = slider.scrollLeft >= slider.scrollWidth - slider.clientWidth - 10;
      
      prevBtn.disabled = isStart;
      nextBtn.disabled = isEnd;
    }
    
    // Обработчики для кнопок
    nextBtn.addEventListener('click', function() {
      const slideWidth = document.querySelector('.license-slide').offsetWidth + 15;
      slider.scrollBy({ left: slideWidth, behavior: 'smooth' });
    });
    
    prevBtn.addEventListener('click', function() {
      const slideWidth = document.querySelector('.license-slide').offsetWidth + 15;
      slider.scrollBy({ left: -slideWidth, behavior: 'smooth' });
    });
    
    // Обновляем состояние кнопок при прокрутке
    slider.addEventListener('scroll', updateButtons);
    
    // Инициализация состояния кнопок
    updateButtons();
    
    // Автоматическое обновление при изменении размера окна
    window.addEventListener('resize', updateButtons);
  });