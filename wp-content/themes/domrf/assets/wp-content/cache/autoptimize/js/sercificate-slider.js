document.addEventListener('DOMContentLoaded', function() {
    // Навигация слайдера
    const slider = document.getElementById('licensesSlider');
    const prevBtn = document.getElementById('sliderPrev');
    const nextBtn = document.getElementById('sliderNext');
    
    function updateButtons() {
      const isStart = slider.scrollLeft <= 10;
      const isEnd = slider.scrollLeft >= slider.scrollWidth - slider.clientWidth - 10;
      prevBtn.disabled = isStart;
      nextBtn.disabled = isEnd;
    }
    
    nextBtn.addEventListener('click', function() {
      const slideWidth = document.querySelector('.license-slide').offsetWidth + 20;
      slider.scrollBy({ left: slideWidth, behavior: 'smooth' });
    });
    
    prevBtn.addEventListener('click', function() {
      const slideWidth = document.querySelector('.license-slide').offsetWidth + 20;
      slider.scrollBy({ left: -slideWidth, behavior: 'smooth' });
    });
    
    slider.addEventListener('scroll', updateButtons);
    updateButtons();
    window.addEventListener('resize', updateButtons);
  
    // Модальное окно
    const modal = document.getElementById('licenseModal');
    const modalImg = document.getElementById('license-modal-image');
    const closeBtn = document.getElementById('closeModal');
    
    // Предзагрузка и обработка кликов
    document.querySelectorAll('.license-a4 img').forEach(img => {
      // Предзагрузка изображений
      const preload = new Image();
      preload.src = img.src;
      
      // Обработчик клика
      img.addEventListener('click', function() {
        modal.style.display = 'flex';
        modalImg.src = this.src;
        document.body.style.overflow = 'hidden';
      });
    });
    
    // Закрытие модального окна
    closeBtn.addEventListener('click', function() {
      modal.style.display = 'none';
      document.body.style.overflow = '';
    });
    
    modal.addEventListener('click', function(e) {
      if (e.target === modal) {
        modal.style.display = 'none';
        document.body.style.overflow = '';
      }
    });
    
    document.addEventListener('keydown', function(e) {
      if (e.key === 'Escape' && modal.style.display === 'flex') {
        modal.style.display = 'none';
        document.body.style.overflow = '';
      }
    });
  });