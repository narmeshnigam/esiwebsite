document.addEventListener('DOMContentLoaded', function() {
    // Testimonials Carousel
    const track = document.querySelector('.testimonials-track');
    const slides = Array.from(track.children);
    const nextButton = document.querySelector('.carousel-btn.next');
    const prevButton = document.querySelector('.carousel-btn.prev');
    const dotsNav = document.querySelector('.carousel-indicators');
    const dots = Array.from(dotsNav.children);

    // Arrange the slides next to each other
    const slideWidth = slides[0].getBoundingClientRect().width;
    const setSlidePosition = (slide, index) => {
        slide.style.left = slideWidth * index + 'px';
    };
    slides.forEach(setSlidePosition);

    const moveToSlide = (track, currentSlide, targetSlide) => {
        track.style.transform = 'translateX(-' + targetSlide.style.left + ')';
        currentSlide.classList.remove('current-slide');
        targetSlide.classList.add('current-slide');
    };

    const updateDots = (currentDot, targetDot) => {
        currentDot.classList.remove('active');
        targetDot.classList.add('active');
    };

    // Next button click
    nextButton.addEventListener('click', e => {
        const currentSlide = track.querySelector('.current-slide');
        const nextSlide = currentSlide.nextElementSibling || slides[0];
        const currentDot = dotsNav.querySelector('.active');
        const nextDot = currentDot.nextElementSibling || dots[0];
        
        moveToSlide(track, currentSlide, nextSlide);
        updateDots(currentDot, nextDot);
    });

    // Previous button click
    prevButton.addEventListener('click', e => {
        const currentSlide = track.querySelector('.current-slide');
        const prevSlide = currentSlide.previousElementSibling || slides[slides.length - 1];
        const currentDot = dotsNav.querySelector('.active');
        const prevDot = currentDot.previousElementSibling || dots[dots.length - 1];
        
        moveToSlide(track, currentSlide, prevSlide);
        updateDots(currentDot, prevDot);
    });

    // Dot navigation
    dotsNav.addEventListener('click', e => {
        const targetDot = e.target.closest('button');
        if (!targetDot) return;

        const currentSlide = track.querySelector('.current-slide');
        const currentDot = dotsNav.querySelector('.active');
        const targetIndex = dots.findIndex(dot => dot === targetDot);
        const targetSlide = slides[targetIndex];

        moveToSlide(track, currentSlide, targetSlide);
        updateDots(currentDot, targetDot);
    });

    // Auto-play functionality
    const autoPlayInterval = 5000; // 5 seconds
    let autoPlayTimer;

    const startAutoPlay = () => {
        autoPlayTimer = setInterval(() => {
            nextButton.click();
        }, autoPlayInterval);
    };

    const stopAutoPlay = () => {
        clearInterval(autoPlayTimer);
    };

    // Start auto-play
    startAutoPlay();

    // Pause auto-play on hover
    track.addEventListener('mouseenter', stopAutoPlay);
    track.addEventListener('mouseleave', startAutoPlay);
});