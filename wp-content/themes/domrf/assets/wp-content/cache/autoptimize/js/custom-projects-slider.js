
document.addEventListener('DOMContentLoaded', function() {
    const slider = document.querySelector('.custom-projects-slider');
    const track = slider.querySelector('.custom-projects-slider__track');
    const slides = slider.querySelectorAll('.custom-projects-slider__slide');
    const prevBtn = slider.querySelector('.custom-projects-slider__arrow--prev');
    const nextBtn = slider.querySelector('.custom-projects-slider__arrow--next');

    let currentIndex = 0;
    const slideCount = slides.length;
    let autoplay = setInterval(goToNext, 5000);
    let isHovered = false;

    function updateSlider() {
        track.style.transform = `translateX(-${currentIndex * 100}%)`;
    }

    function goToPrev() {
        currentIndex = (currentIndex > 0) ? currentIndex - 1 : slideCount - 1;
        updateSlider();
    }

    function goToNext() {
        if (!isHovered) { // Пропускаем автопрокрутку если курсор на слайде
            currentIndex = (currentIndex < slideCount - 1) ? currentIndex + 1 : 0;
            updateSlider();
        }
    }

    prevBtn.addEventListener('click', goToPrev);
    nextBtn.addEventListener('click', goToNext);

    // Обработчики для каждого слайда
    slides.forEach(slide => {
        slide.addEventListener('mouseenter', () => {
            isHovered = true;
        });
        
        slide.addEventListener('mouseleave', () => {
            isHovered = false;
        });
    });

    // Остановка при наведении на весь слайдер
    slider.addEventListener('mouseenter', () => clearInterval(autoplay));
    slider.addEventListener('mouseleave', () => {
        autoplay = setInterval(goToNext, 5000);
    });

    // ------------------------ //

    // для картинок
    const imageSliders = document.querySelectorAll('.custom-projects-slider__image-slider');
    
    imageSliders.forEach(slider => {
        const track = slider.querySelector('.custom-projects-slider__image-track');
        const slides = slider.querySelectorAll('.custom-projects-slider__image-slide');
        const dots = slider.querySelectorAll('.custom-projects-slider__pagination-dot');
        let currentIndex = 0;
        let isImageHovered = false;
        let interval = setInterval(() => {
            if (!isImageHovered) {
                currentIndex = (currentIndex + 1) % slides.length;
                updateImageSlider();
            }
        }, 3000);
    
        function updateImageSlider() {
            track.style.transform = `translateX(-${currentIndex * 100}%)`;
            
            dots.forEach((dot, index) => {
                dot.classList.toggle('active', index === currentIndex);
            });
        }
        
        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                currentIndex = index;
                updateImageSlider();
            });
        });
        
        // Обработчики для каждого слайда изображений
        slides.forEach(slide => {
            slide.addEventListener('mouseenter', () => {
                isImageHovered = true;
            });
            
            slide.addEventListener('mouseleave', () => {
                isImageHovered = false;
            });
        });
        
        // Остановка при наведении на весь слайдер изображений
        slider.addEventListener('mouseenter', () => clearInterval(interval));
        slider.addEventListener('mouseleave', () => {
            interval = setInterval(() => {
                if (!isImageHovered) {
                    currentIndex = (currentIndex + 1) % slides.length;
                    updateImageSlider();
                }
            }, 3000);
        });
    });
});