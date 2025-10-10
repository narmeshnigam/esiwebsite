// Industries Page JavaScript

document.addEventListener('DOMContentLoaded', function() {
    // Initialize all components
    initIndustryBubbles();
    initCaseStudiesCarousel();
    initScrollAnimations();
    initCounterAnimations();
    initSmoothScrolling();
    initMobileMenuOptimizations();
});

// Industry Bubbles Animation
function initIndustryBubbles() {
    const bubbles = document.querySelectorAll('.industry-bubble');
    
    bubbles.forEach((bubble, index) => {
        // Add hover effects
        bubble.addEventListener('mouseenter', function() {
            // Pause animation on hover
            this.style.animationPlayState = 'paused';
            
            // Add ripple effect
            const ripple = document.createElement('div');
            ripple.style.cssText = `
                position: absolute;
                border-radius: 50%;
                background: rgba(255,255,255,0.3);
                transform: scale(0);
                animation: ripple 0.6s linear;
                pointer-events: none;
                top: 50%;
                left: 50%;
                width: 20px;
                height: 20px;
                margin-top: -10px;
                margin-left: -10px;
            `;
            
            this.appendChild(ripple);
            
            setTimeout(() => {
                if (ripple.parentNode) {
                    ripple.parentNode.removeChild(ripple);
                }
            }, 600);
        });
        
        bubble.addEventListener('mouseleave', function() {
            // Resume animation
            this.style.animationPlayState = 'running';
        });
        
        // Add click events for industry navigation
        bubble.addEventListener('click', function() {
            const industryType = this.classList[1]; // Get second class (industry type)
            const targetSection = document.getElementById('industry-index');
            if (targetSection) {
                targetSection.scrollIntoView({ behavior: 'smooth' });
                
                // Highlight corresponding industry card
                setTimeout(() => {
                    const industryCard = document.querySelector(`.industry-card.${industryType}`);
                    if (industryCard) {
                        industryCard.style.transform = 'translateY(-15px) scale(1.02)';
                        industryCard.style.boxShadow = '0 25px 60px rgba(0, 0, 0, 0.2)';
                        
                        setTimeout(() => {
                            industryCard.style.transform = '';
                            industryCard.style.boxShadow = '';
                        }, 2000);
                    }
                }, 800);
            }
        });
    });
    
    // Add CSS for ripple animation
    if (!document.getElementById('ripple-styles')) {
        const style = document.createElement('style');
        style.id = 'ripple-styles';
        style.textContent = `
            @keyframes ripple {
                to {
                    transform: scale(4);
                    opacity: 0;
                }
            }
        `;
        document.head.appendChild(style);
    }
}

// Case Studies Carousel
function initCaseStudiesCarousel() {
    const slides = document.querySelectorAll('.case-study-slide');
    const navButtons = document.querySelectorAll('.nav-btn');
    let currentSlide = 0;
    let autoPlayInterval;
    
    if (slides.length === 0) return;
    
    function showSlide(index) {
        // Hide all slides
        slides.forEach(slide => {
            slide.classList.remove('active');
            slide.style.opacity = '0';
            slide.style.transform = 'translateX(20px)';
        });
        
        // Remove active from all nav buttons
        navButtons.forEach(btn => btn.classList.remove('active'));
        
        // Show current slide with animation
        setTimeout(() => {
            slides[index].classList.add('active');
            slides[index].style.opacity = '1';
            slides[index].style.transform = 'translateX(0)';
        }, 150);
        
        // Activate corresponding nav button
        if (navButtons[index]) {
            navButtons[index].classList.add('active');
        }
        
        currentSlide = index;
    }
    
    function nextSlide() {
        const next = (currentSlide + 1) % slides.length;
        showSlide(next);
    }
    
    function startAutoPlay() {
        autoPlayInterval = setInterval(nextSlide, 8000); // Change every 8 seconds
    }
    
    function stopAutoPlay() {
        if (autoPlayInterval) {
            clearInterval(autoPlayInterval);
        }
    }
    
    // Add click events to navigation buttons
    navButtons.forEach((btn, index) => {
        btn.addEventListener('click', () => {
            stopAutoPlay();
            showSlide(index);
            
            // Restart autoplay after user interaction
            setTimeout(startAutoPlay, 3000);
        });
    });
    
    // Add pause on hover
    const carouselContainer = document.querySelector('.case-studies-carousel');
    if (carouselContainer) {
        carouselContainer.addEventListener('mouseenter', stopAutoPlay);
        carouselContainer.addEventListener('mouseleave', startAutoPlay);
    }
    
    // Initialize
    showSlide(0);
    startAutoPlay();
    
    // Add keyboard navigation
    document.addEventListener('keydown', function(e) {
        if (e.key === 'ArrowLeft') {
            stopAutoPlay();
            const prev = currentSlide === 0 ? slides.length - 1 : currentSlide - 1;
            showSlide(prev);
        } else if (e.key === 'ArrowRight') {
            stopAutoPlay();
            nextSlide();
        }
    });
}

// Scroll Animations
function initScrollAnimations() {
    // Create intersection observer for animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-in');
                
                // Special handling for different elements
                if (entry.target.classList.contains('industry-card')) {
                    // Stagger industry cards animation
                    const cards = entry.target.parentElement.children;
                    Array.from(cards).forEach((card, index) => {
                        setTimeout(() => {
                            card.style.opacity = '1';
                            card.style.transform = 'translateY(0)';
                        }, index * 100);
                    });
                }
                
                if (entry.target.classList.contains('challenge-item')) {
                    // Animate challenge items with slide effect
                    setTimeout(() => {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateX(0)';
                    }, 200);
                }
                
                if (entry.target.classList.contains('process-step')) {
                    // Animate process steps in sequence
                    const steps = entry.target.parentElement.children;
                    Array.from(steps).forEach((step, index) => {
                        setTimeout(() => {
                            step.classList.add('step-visible');
                        }, index * 200);
                    });
                }
            }
        });
    }, observerOptions);
    
    // Observe elements for animation
    const animateElements = document.querySelectorAll(`
        .industry-card,
        .challenge-item,
        .process-step,
        .pillar,
        .program-card,
        .testimonial-card,
        .benefit-item
    `);
    
    animateElements.forEach(el => {
        // Set initial state
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px)';
        el.style.transition = 'all 0.6s ease';
        
        observer.observe(el);
    });
    
    // Add CSS for animations
    if (!document.getElementById('scroll-animations')) {
        const style = document.createElement('style');
        style.id = 'scroll-animations';
        style.textContent = `
            .animate-in {
                opacity: 1 !important;
                transform: translateY(0) !important;
            }
            
            .step-visible {
                opacity: 1 !important;
                transform: translateY(0) scale(1) !important;
            }
            
            .step-visible .step-number {
                animation: pulse 0.6s ease;
            }
            
            @keyframes pulse {
                0% { transform: scale(1); }
                50% { transform: scale(1.1); }
                100% { transform: scale(1); }
            }
        `;
        document.head.appendChild(style);
    }
}

// Counter Animations
function initCounterAnimations() {
    const counters = document.querySelectorAll('.stat-number, .result-number, .trust-number');
    
    const counterObserver = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting && !entry.target.classList.contains('counted')) {
                entry.target.classList.add('counted');
                animateCounter(entry.target);
            }
        });
    }, { threshold: 0.5 });
    
    counters.forEach(counter => {
        counterObserver.observe(counter);
    });
}

function animateCounter(element) {
    const text = element.textContent;
    const hasPercent = text.includes('%');
    const hasCr = text.includes('Cr');
    const hasPlus = text.includes('+');
    const hasDecimal = text.includes('.');
    
    // Extract number
    let targetValue = parseFloat(text.replace(/[^\d.]/g, ''));
    if (isNaN(targetValue)) return;
    
    const duration = 2000; // 2 seconds
    const startTime = performance.now();
    
    function updateCounter(currentTime) {
        const elapsed = currentTime - startTime;
        const progress = Math.min(elapsed / duration, 1);
        
        // Easing function (ease-out)
        const easeOut = 1 - Math.pow(1 - progress, 3);
        
        let currentValue = targetValue * easeOut;
        
        // Format the number
        let displayValue;
        if (hasDecimal) {
            displayValue = currentValue.toFixed(1);
        } else {
            displayValue = Math.floor(currentValue).toString();
        }
        
        // Add suffix back
        if (hasPercent) displayValue += '%';
        if (hasCr) displayValue += 'Cr';
        if (hasPlus) displayValue += '+';
        
        element.textContent = displayValue;
        
        if (progress < 1) {
            requestAnimationFrame(updateCounter);
        } else {
            element.textContent = text; // Ensure final value is exact
        }
    }
    
    requestAnimationFrame(updateCounter);
}

// Smooth Scrolling
function initSmoothScrolling() {
    // Handle anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            
            if (target) {
                const headerOffset = 80;
                const elementPosition = target.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - headerOffset;
                
                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });
}

// Mobile Menu Optimizations
function initMobileMenuOptimizations() {
    // Optimize touch interactions on mobile
    if ('ontouchstart' in window) {
        document.body.classList.add('touch-device');
        
        // Add touch-friendly hover effects
        const hoverElements = document.querySelectorAll('.industry-card, .program-card, .testimonial-card');
        
        hoverElements.forEach(element => {
            element.addEventListener('touchstart', function() {
                this.classList.add('touch-active');
            });
            
            element.addEventListener('touchend', function() {
                setTimeout(() => {
                    this.classList.remove('touch-active');
                }, 150);
            });
        });
    }
    
    // Handle responsive navigation for case studies
    const navButtons = document.querySelectorAll('.nav-btn');
    
    function optimizeNavForMobile() {
        if (window.innerWidth <= 768) {
            navButtons.forEach(btn => {
                // Make buttons more touch-friendly
                btn.style.minHeight = '44px';
                btn.style.padding = '12px 16px';
            });
        } else {
            navButtons.forEach(btn => {
                // Reset to desktop styles
                btn.style.minHeight = '';
                btn.style.padding = '';
            });
        }
    }
    
    // Initial optimization
    optimizeNavForMobile();
    
    // Re-optimize on resize
    window.addEventListener('resize', optimizeNavForMobile);
}

// Utility function for form interactions
function handleFormInteractions() {
    const forms = document.querySelectorAll('form');
    
    forms.forEach(form => {
        const inputs = form.querySelectorAll('input, select, textarea');
        
        inputs.forEach(input => {
            // Add focus effects
            input.addEventListener('focus', function() {
                this.parentElement.classList.add('field-focused');
            });
            
            input.addEventListener('blur', function() {
                this.parentElement.classList.remove('field-focused');
                
                // Add validation state
                if (this.value) {
                    this.parentElement.classList.add('field-filled');
                } else {
                    this.parentElement.classList.remove('field-filled');
                }
            });
        });
    });
}

// Industry-specific interactions
function initIndustryInteractions() {
    const industryCards = document.querySelectorAll('.industry-card');
    
    industryCards.forEach(card => {
        card.addEventListener('click', function() {
            // Get industry type
            const industryType = Array.from(this.classList).find(cls => 
                ['manufacturing', 'healthcare', 'datacenter', 'retail', 'education', 'hospitality', 'construction', 'automotive'].includes(cls)
            );
            
            if (industryType) {
                // Track click for analytics (if implemented)
                if (typeof gtag !== 'undefined') {
                    gtag('event', 'industry_card_click', {
                        industry_type: industryType,
                        event_category: 'engagement'
                    });
                }
                
                // Show relevant case study
                const caseStudyNav = document.querySelector(`.nav-btn[data-industry="${industryType}"]`);
                if (caseStudyNav) {
                    caseStudyNav.click();
                    
                    // Scroll to case studies section
                    const caseStudiesSection = document.getElementById('case-studies');
                    if (caseStudiesSection) {
                        setTimeout(() => {
                            caseStudiesSection.scrollIntoView({ behavior: 'smooth' });
                        }, 500);
                    }
                }
            }
        });
    });
}

// Performance optimizations
function initPerformanceOptimizations() {
    // Lazy load images
    const images = document.querySelectorAll('img[data-src]');
    
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.dataset.src;
                    img.classList.remove('lazy');
                    imageObserver.unobserve(img);
                }
            });
        });
        
        images.forEach(img => imageObserver.observe(img));
    } else {
        // Fallback for older browsers
        images.forEach(img => {
            img.src = img.dataset.src;
            img.classList.remove('lazy');
        });
    }
    
    // Optimize animations for reduced motion
    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        document.body.classList.add('reduced-motion');
        
        // Disable autoplay for carousel
        const autoPlayElements = document.querySelectorAll('[data-autoplay]');
        autoPlayElements.forEach(el => {
            el.removeAttribute('data-autoplay');
        });
    }
}

// Initialize additional features when page is fully loaded
window.addEventListener('load', function() {
    initIndustryInteractions();
    initPerformanceOptimizations();
    handleFormInteractions();
    
    // Add loaded class for any CSS transitions that need it
    document.body.classList.add('page-loaded');
});

// Handle page visibility changes (for performance)
document.addEventListener('visibilitychange', function() {
    if (document.hidden) {
        // Pause animations when page is not visible
        document.body.classList.add('page-hidden');
    } else {
        // Resume animations when page becomes visible
        document.body.classList.remove('page-hidden');
    }
});

// Error handling for graceful degradation
window.addEventListener('error', function(e) {
    console.warn('Industries page error:', e.error);
    // Ensure basic functionality still works even if some features fail
});

// Export functions for potential external use
window.IndustriesPage = {
    showCaseStudy: function(industry) {
        const navBtn = document.querySelector(`.nav-btn[data-industry="${industry}"]`);
        if (navBtn) {
            navBtn.click();
        }
    },
    
    scrollToSection: function(sectionId) {
        const section = document.getElementById(sectionId);
        if (section) {
            section.scrollIntoView({ behavior: 'smooth' });
        }
    },
    
    highlightIndustry: function(industryType) {
        const card = document.querySelector(`.industry-card.${industryType}`);
        if (card) {
            card.style.transform = 'translateY(-15px) scale(1.02)';
            card.style.boxShadow = '0 25px 60px rgba(0, 0, 0, 0.2)';
            
            setTimeout(() => {
                card.style.transform = '';
                card.style.boxShadow = '';
            }, 2000);
        }
    }
};