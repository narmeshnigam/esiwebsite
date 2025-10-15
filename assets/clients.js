/* ========================================
   CLIENTS & TESTIMONIALS PAGE JAVASCRIPT
   SecureIndia (ESI-First)
   ======================================== */

document.addEventListener('DOMContentLoaded', function() {
    
    /* ========================================
       TESTIMONIALS CAROUSEL
       ======================================== */
    const initTestimonialsCarousel = () => {
        const track = document.querySelector('.testimonial-track');
        const cards = document.querySelectorAll('.testimonial-card');
        const prevBtn = document.querySelector('.carousel-btn-prev');
        const nextBtn = document.querySelector('.carousel-btn-next');
        const indicators = document.querySelectorAll('.carousel-indicators .indicator');
        
        if (!track || cards.length === 0) return;
        
        let currentIndex = 0;
        const totalSlides = cards.length;
        
        // Update carousel position
        const updateCarousel = () => {
            const offset = -currentIndex * 100;
            track.style.transform = `translateX(${offset}%)`;
            
            // Update indicators
            indicators.forEach((indicator, index) => {
                if (index === currentIndex) {
                    indicator.classList.add('active');
                } else {
                    indicator.classList.remove('active');
                }
            });
        };
        
        // Next slide
        const nextSlide = () => {
            currentIndex = (currentIndex + 1) % totalSlides;
            updateCarousel();
        };
        
        // Previous slide
        const prevSlide = () => {
            currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
            updateCarousel();
        };
        
        // Go to specific slide
        const goToSlide = (index) => {
            currentIndex = index;
            updateCarousel();
        };
        
        // Event listeners
        if (nextBtn) {
            nextBtn.addEventListener('click', nextSlide);
        }
        
        if (prevBtn) {
            prevBtn.addEventListener('click', prevSlide);
        }
        
        indicators.forEach((indicator, index) => {
            indicator.addEventListener('click', () => goToSlide(index));
        });
        
        // Auto-play carousel (every 5 seconds)
        let autoplayInterval = setInterval(nextSlide, 5000);
        
        // Pause autoplay on hover
        track.addEventListener('mouseenter', () => {
            clearInterval(autoplayInterval);
        });
        
        track.addEventListener('mouseleave', () => {
            autoplayInterval = setInterval(nextSlide, 5000);
        });
        
        // Keyboard navigation
        document.addEventListener('keydown', (e) => {
            if (e.key === 'ArrowLeft') {
                prevSlide();
            } else if (e.key === 'ArrowRight') {
                nextSlide();
            }
        });
    };
    
    
    /* ========================================
       ANIMATED COUNTERS (ACHIEVEMENTS)
       ======================================== */
    const initAnimatedCounters = () => {
        const counters = document.querySelectorAll('.achievement-number');
        
        if (counters.length === 0) return;
        
        const animateCounter = (counter) => {
            const target = parseInt(counter.getAttribute('data-target'));
            const duration = 2000; // 2 seconds
            const increment = target / (duration / 16); // 60fps
            let current = 0;
            
            const updateCounter = () => {
                current += increment;
                if (current < target) {
                    counter.textContent = Math.floor(current);
                    requestAnimationFrame(updateCounter);
                } else {
                    counter.textContent = target;
                }
            };
            
            updateCounter();
        };
        
        // Intersection Observer to trigger animation when visible
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting && !entry.target.classList.contains('counted')) {
                    animateCounter(entry.target);
                    entry.target.classList.add('counted');
                }
            });
        }, { threshold: 0.5 });
        
        counters.forEach(counter => {
            observer.observe(counter);
        });
    };
    
    
    /* ========================================
       VIDEO MODAL
       ======================================== */
    const initVideoModal = () => {
        const playButtons = document.querySelectorAll('.play-button');
        const modal = document.getElementById('videoModal');
        const modalClose = document.getElementById('modalClose');
        const modalOverlay = document.getElementById('modalOverlay');
        const videoPlayer = document.getElementById('videoPlayer');
        
        if (!modal) return;
        
        // Video URLs mapping (replace with actual video IDs)
        const videoUrls = {
            'video-1': 'https://www.youtube.com/embed/dQw4w9WgXcQ',
            'video-2': 'https://www.youtube.com/embed/dQw4w9WgXcQ',
            'video-3': 'https://www.youtube.com/embed/dQw4w9WgXcQ',
            'video-4': 'https://www.youtube.com/embed/dQw4w9WgXcQ',
            'video-5': 'https://www.youtube.com/embed/dQw4w9WgXcQ',
            'video-6': 'https://www.youtube.com/embed/dQw4w9WgXcQ'
        };
        
        // Open modal
        const openModal = (videoId) => {
            const videoUrl = videoUrls[videoId];
            if (videoUrl) {
                videoPlayer.src = videoUrl;
                modal.classList.add('active');
                document.body.style.overflow = 'hidden';
            }
        };
        
        // Close modal
        const closeModal = () => {
            modal.classList.remove('active');
            videoPlayer.src = '';
            document.body.style.overflow = '';
        };
        
        // Event listeners
        playButtons.forEach(button => {
            button.addEventListener('click', () => {
                const videoId = button.getAttribute('data-video-id');
                openModal(videoId);
            });
        });
        
        if (modalClose) {
            modalClose.addEventListener('click', closeModal);
        }
        
        if (modalOverlay) {
            modalOverlay.addEventListener('click', closeModal);
        }
        
        // Close on Escape key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && modal.classList.contains('active')) {
                closeModal();
            }
        });
    };
    
    
    /* ========================================
       FEEDBACK FORM VALIDATION & SUBMISSION
       ======================================== */
    const initFeedbackForm = () => {
        const form = document.getElementById('clientFeedbackForm');
        const messageField = document.getElementById('feedbackMessage');
        const charCount = document.getElementById('charCount');
        const formMessage = document.getElementById('formMessage');
        
        if (!form) return;
        
        // Character counter
        if (messageField && charCount) {
            messageField.addEventListener('input', () => {
                const length = messageField.value.length;
                charCount.textContent = length;
                
                if (length > 500) {
                    charCount.style.color = '#e31837';
                } else {
                    charCount.style.color = '';
                }
            });
        }
        
        // Form validation
        const validateForm = () => {
            const name = document.getElementById('feedbackName').value.trim();
            const designation = document.getElementById('feedbackDesignation').value.trim();
            const company = document.getElementById('feedbackCompany').value.trim();
            const industry = document.getElementById('feedbackIndustry').value;
            const service = document.getElementById('feedbackService').value;
            const rating = document.querySelector('input[name="rating"]:checked');
            const message = document.getElementById('feedbackMessage').value.trim();
            const recommend = document.querySelector('input[name="recommend"]:checked');
            const consent = document.getElementById('feedbackConsent').checked;
            
            // Validate required fields
            if (!name) {
                showMessage('Please enter your name.', 'error');
                return false;
            }
            
            if (!designation) {
                showMessage('Please enter your designation.', 'error');
                return false;
            }
            
            if (!company) {
                showMessage('Please enter your company name.', 'error');
                return false;
            }
            
            if (!industry) {
                showMessage('Please select your industry type.', 'error');
                return false;
            }
            
            if (!service) {
                showMessage('Please select the service you availed.', 'error');
                return false;
            }
            
            if (!rating) {
                showMessage('Please provide a rating.', 'error');
                return false;
            }
            
            if (!message) {
                showMessage('Please enter your feedback.', 'error');
                return false;
            }
            
            if (message.length < 20) {
                showMessage('Feedback must be at least 20 characters long.', 'error');
                return false;
            }
            
            if (message.length > 500) {
                showMessage('Feedback must not exceed 500 characters.', 'error');
                return false;
            }
            
            if (!recommend) {
                showMessage('Please indicate if you would recommend us.', 'error');
                return false;
            }
            
            if (!consent) {
                showMessage('Please provide consent to publish your feedback.', 'error');
                return false;
            }
            
            return true;
        };
        
        // Show message
        const showMessage = (message, type) => {
            if (!formMessage) return;
            
            formMessage.style.display = 'block';
            formMessage.className = `form-message ${type}`;
            formMessage.querySelector('.message-content').textContent = message;
            
            // Scroll to message
            formMessage.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
            
            // Auto-hide success messages after 5 seconds
            if (type === 'success') {
                setTimeout(() => {
                    formMessage.style.display = 'none';
                }, 5000);
            }
        };
        
        // Form submission
        form.addEventListener('submit', async (e) => {
            e.preventDefault();
            
            // Validate form
            if (!validateForm()) {
                return;
            }
            
            // Get form data
            const formData = new FormData(form);
            const data = Object.fromEntries(formData.entries());
            
            // Disable submit button
            const submitBtn = form.querySelector('.btn-submit');
            const originalText = submitBtn.innerHTML;
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Submitting...';
            
            try {
                // Simulate API call (replace with actual endpoint)
                await new Promise(resolve => setTimeout(resolve, 2000));
                
                // Here you would send data to your backend
                // const response = await fetch('/api/feedback', {
                //     method: 'POST',
                //     headers: { 'Content-Type': 'application/json' },
                //     body: JSON.stringify(data)
                // });
                
                // Success
                showMessage('Thank you for your feedback! We appreciate you taking the time to share your experience.', 'success');
                
                // Reset form
                form.reset();
                if (charCount) charCount.textContent = '0';
                
            } catch (error) {
                // Error
                showMessage('Sorry, there was an error submitting your feedback. Please try again or contact us directly.', 'error');
                console.error('Form submission error:', error);
                
            } finally {
                // Re-enable submit button
                submitBtn.disabled = false;
                submitBtn.innerHTML = originalText;
            }
        });
        
        // Reset button
        const resetBtn = form.querySelector('.btn-reset');
        if (resetBtn) {
            resetBtn.addEventListener('click', () => {
                if (charCount) charCount.textContent = '0';
                if (formMessage) formMessage.style.display = 'none';
            });
        }
    };
    
    
    /* ========================================
       LAZY LOADING IMAGES
       ======================================== */
    const initLazyLoading = () => {
        const images = document.querySelectorAll('img[loading="lazy"]');
        
        if ('IntersectionObserver' in window) {
            const imageObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        
                        // Add fade-in effect
                        img.style.opacity = '0';
                        img.style.transition = 'opacity 0.3s ease';
                        
                        img.addEventListener('load', () => {
                            img.style.opacity = '1';
                        });
                        
                        observer.unobserve(img);
                    }
                });
            });
            
            images.forEach(img => imageObserver.observe(img));
        }
    };
    
    
    /* ========================================
       SMOOTH SCROLL FOR ANCHOR LINKS
       ======================================== */
    const initSmoothScroll = () => {
        const links = document.querySelectorAll('a[href^="#"]');
        
        links.forEach(link => {
            link.addEventListener('click', (e) => {
                const href = link.getAttribute('href');
                
                // Skip if it's just "#"
                if (href === '#') {
                    e.preventDefault();
                    return;
                }
                
                const target = document.querySelector(href);
                
                if (target) {
                    e.preventDefault();
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    };
    
    
    /* ========================================
       LOGO HOVER ANIMATION
       ======================================== */
    const initLogoHover = () => {
        const logoItems = document.querySelectorAll('.logo-item');
        
        logoItems.forEach(item => {
            item.addEventListener('mouseenter', () => {
                item.style.transform = 'translateY(-5px) rotate(2deg)';
            });
            
            item.addEventListener('mouseleave', () => {
                item.style.transform = '';
            });
        });
    };
    
    
    /* ========================================
       SCROLL REVEAL ANIMATION
       ======================================== */
    const initScrollReveal = () => {
        const revealElements = document.querySelectorAll('.client-category, .partner-category, .video-card, .achievement-card');
        
        if (revealElements.length === 0) return;
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }, index * 100);
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });
        
        revealElements.forEach(element => {
            element.style.opacity = '0';
            element.style.transform = 'translateY(30px)';
            element.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(element);
        });
    };
    
    
    /* ========================================
       INITIALIZE ALL FUNCTIONS
       ======================================== */
    initTestimonialsCarousel();
    initAnimatedCounters();
    initVideoModal();
    initFeedbackForm();
    initLazyLoading();
    initSmoothScroll();
    initLogoHover();
    initScrollReveal();
    
    
    /* ========================================
       CONSOLE MESSAGE
       ======================================== */
    console.log('%c🔥 SecureIndia Clients & Testimonials Page Loaded', 'color: #e31837; font-size: 16px; font-weight: bold;');
    console.log('%cAll interactive features initialized successfully!', 'color: #1e3a5f; font-size: 14px;');
    
});


/* ========================================
   UTILITY FUNCTIONS
   ======================================== */

// Debounce function for performance
function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}

// Throttle function for scroll events
function throttle(func, limit) {
    let inThrottle;
    return function() {
        const args = arguments;
        const context = this;
        if (!inThrottle) {
            func.apply(context, args);
            inThrottle = true;
            setTimeout(() => inThrottle = false, limit);
        }
    };
}
