/**
 * Locations Page JavaScript
 * Interactive features for pan-India presence page
 */

(function() {
    'use strict';

    // Initialize when DOM is ready
    document.addEventListener('DOMContentLoaded', function() {
        initAccordion();
        initCarousel();
        initMapInteraction();
        initSmoothScroll();
        initCityFilter();
    });

    /**
     * Accordion functionality for local contact section
     */
    function initAccordion() {
        const accordionHeaders = document.querySelectorAll('.accordion-header');
        
        accordionHeaders.forEach(header => {
            header.addEventListener('click', function() {
                const accordionItem = this.parentElement;
                const isActive = accordionItem.classList.contains('active');
                
                // Close all accordion items
                document.querySelectorAll('.accordion-item').forEach(item => {
                    item.classList.remove('active');
                });
                
                // Open clicked item if it wasn't active
                if (!isActive) {
                    accordionItem.classList.add('active');
                }
            });
        });
        
        // Open first accordion by default
        const firstAccordion = document.querySelector('.accordion-item');
        if (firstAccordion) {
            firstAccordion.classList.add('active');
        }
    }

    /**
     * Testimonials carousel functionality
     */
    function initCarousel() {
        const carousel = document.querySelector('.carousel-container');
        if (!carousel) return;
        
        const cards = document.querySelectorAll('.testimonial-card');
        const prevBtn = document.querySelector('.carousel-prev');
        const nextBtn = document.querySelector('.carousel-next');
        const indicators = document.querySelectorAll('.indicator');
        
        let currentSlide = 0;
        const totalSlides = cards.length;
        
        // Show specific slide
        function showSlide(index) {
            // Wrap around
            if (index >= totalSlides) index = 0;
            if (index < 0) index = totalSlides - 1;
            
            currentSlide = index;
            
            // Update cards
            cards.forEach((card, i) => {
                card.classList.remove('active');
                if (i === currentSlide) {
                    card.classList.add('active');
                }
            });
            
            // Update indicators
            indicators.forEach((indicator, i) => {
                indicator.classList.remove('active');
                if (i === currentSlide) {
                    indicator.classList.add('active');
                }
            });
        }
        
        // Next slide
        function nextSlide() {
            showSlide(currentSlide + 1);
        }
        
        // Previous slide
        function prevSlide() {
            showSlide(currentSlide - 1);
        }
        
        // Event listeners
        if (nextBtn) {
            nextBtn.addEventListener('click', nextSlide);
        }
        
        if (prevBtn) {
            prevBtn.addEventListener('click', prevSlide);
        }
        
        // Indicator clicks
        indicators.forEach((indicator, index) => {
            indicator.addEventListener('click', () => {
                showSlide(index);
            });
        });
        
        // Auto-advance every 6 seconds
        let autoSlide = setInterval(nextSlide, 6000);
        
        // Pause on hover
        carousel.addEventListener('mouseenter', () => {
            clearInterval(autoSlide);
        });
        
        carousel.addEventListener('mouseleave', () => {
            autoSlide = setInterval(nextSlide, 6000);
        });
        
        // Show first slide
        showSlide(0);
    }

    /**
     * Interactive India map functionality
     */
    function initMapInteraction() {
        const mapMarkers = document.querySelectorAll('.city-marker');
        
        mapMarkers.forEach(marker => {
            marker.addEventListener('click', function() {
                const cityName = this.getAttribute('data-city');
                
                // Scroll to corresponding accordion item
                const accordionItems = document.querySelectorAll('.accordion-item');
                accordionItems.forEach(item => {
                    const itemCityName = item.querySelector('.city-info h3').textContent.trim();
                    
                    if (itemCityName === cityName) {
                        // Close all accordions
                        accordionItems.forEach(acc => acc.classList.remove('active'));
                        
                        // Open matching accordion
                        item.classList.add('active');
                        
                        // Scroll to local contact section
                        const contactSection = document.getElementById('local-contact');
                        if (contactSection) {
                            const offset = 100;
                            const elementPosition = contactSection.getBoundingClientRect().top;
                            const offsetPosition = elementPosition + window.pageYOffset - offset;
                            
                            window.scrollTo({
                                top: offsetPosition,
                                behavior: 'smooth'
                            });
                        }
                    }
                });
            });
            
            // Add tooltip on hover
            marker.addEventListener('mouseenter', function() {
                const cityName = this.getAttribute('data-city');
                showTooltip(this, cityName);
            });
            
            marker.addEventListener('mouseleave', function() {
                hideTooltip();
            });
        });
    }

    /**
     * Show tooltip for map markers
     */
    function showTooltip(element, text) {
        // Remove existing tooltip
        hideTooltip();
        
        const tooltip = document.createElement('div');
        tooltip.className = 'map-tooltip';
        tooltip.textContent = text;
        tooltip.style.cssText = `
            position: absolute;
            background: rgba(0, 0, 0, 0.8);
            color: #fff;
            padding: 8px 12px;
            border-radius: 5px;
            font-size: 0.85rem;
            font-weight: 600;
            white-space: nowrap;
            z-index: 1000;
            pointer-events: none;
        `;
        
        document.body.appendChild(tooltip);
        
        const rect = element.getBoundingClientRect();
        tooltip.style.left = (rect.left + rect.width / 2 - tooltip.offsetWidth / 2) + 'px';
        tooltip.style.top = (rect.top - tooltip.offsetHeight - 8) + 'px';
    }

    /**
     * Hide tooltip
     */
    function hideTooltip() {
        const tooltip = document.querySelector('.map-tooltip');
        if (tooltip) {
            tooltip.remove();
        }
    }

    /**
     * Smooth scrolling for anchor links
     */
    function initSmoothScroll() {
        const smoothScrollLinks = document.querySelectorAll('.smooth-scroll, a[href^="#"]');
        
        smoothScrollLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                
                // Only handle hash links
                if (href && href.startsWith('#') && href.length > 1) {
                    const targetId = href.substring(1);
                    const targetElement = document.getElementById(targetId);
                    
                    if (targetElement) {
                        e.preventDefault();
                        
                        const offset = 80;
                        const elementPosition = targetElement.getBoundingClientRect().top;
                        const offsetPosition = elementPosition + window.pageYOffset - offset;
                        
                        window.scrollTo({
                            top: offsetPosition,
                            behavior: 'smooth'
                        });
                    }
                }
            });
        });
    }

    /**
     * City filter functionality (if implemented)
     */
    function initCityFilter() {
        const filterButtons = document.querySelectorAll('[data-city-filter]');
        const cityCards = document.querySelectorAll('.city-card');
        
        if (filterButtons.length === 0) return;
        
        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                const filterValue = this.getAttribute('data-city-filter');
                
                // Update active state
                filterButtons.forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');
                
                // Filter city cards
                cityCards.forEach(card => {
                    if (filterValue === 'all') {
                        card.style.display = 'block';
                        setTimeout(() => {
                            card.style.opacity = '1';
                            card.style.transform = 'translateY(0)';
                        }, 10);
                    } else {
                        const cardCity = card.getAttribute('data-city');
                        
                        if (cardCity === filterValue) {
                            card.style.display = 'block';
                            setTimeout(() => {
                                card.style.opacity = '1';
                                card.style.transform = 'translateY(0)';
                            }, 10);
                        } else {
                            card.style.opacity = '0';
                            card.style.transform = 'translateY(20px)';
                            setTimeout(() => {
                                card.style.display = 'none';
                            }, 300);
                        }
                    }
                });
            });
        });
    }

    /**
     * Track service brochure downloads
     */
    const downloadLinks = document.querySelectorAll('a[download]');
    downloadLinks.forEach(link => {
        link.addEventListener('click', function() {
            const fileName = this.getAttribute('href').split('/').pop();
            
            // Track download (can integrate with analytics)
            console.log('Download tracked:', fileName);
            
            // Optional: Send to analytics
            if (typeof gtag !== 'undefined') {
                gtag('event', 'download', {
                    'event_category': 'engagement',
                    'event_label': fileName
                });
            }
        });
    });

    /**
     * Animate stats on scroll
     */
    function animateStats() {
        const statElements = document.querySelectorAll('.stat-value');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const target = entry.target;
                    const finalValue = target.textContent;
                    
                    // Only animate if it's a number
                    if (/^\d+/.test(finalValue)) {
                        animateValue(target, 0, parseInt(finalValue), 1500);
                    }
                    
                    observer.unobserve(target);
                }
            });
        }, { threshold: 0.5 });
        
        statElements.forEach(stat => observer.observe(stat));
    }

    /**
     * Animate number counting
     */
    function animateValue(element, start, end, duration) {
        const range = end - start;
        const increment = range / (duration / 16);
        let current = start;
        
        const timer = setInterval(() => {
            current += increment;
            
            if (current >= end) {
                element.textContent = end + '+';
                clearInterval(timer);
            } else {
                element.textContent = Math.floor(current) + '+';
            }
        }, 16);
    }

    // Initialize stats animation
    if ('IntersectionObserver' in window) {
        animateStats();
    }

    /**
     * Add animation on scroll for city cards
     */
    function initScrollAnimations() {
        const cards = document.querySelectorAll('.city-card, .service-item, .zone-item');
        
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
        
        cards.forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(30px)';
            card.style.transition = 'all 0.6s ease';
            observer.observe(card);
        });
    }

    // Initialize scroll animations
    if ('IntersectionObserver' in window) {
        initScrollAnimations();
    }

    /**
     * Handle WhatsApp quick contact
     */
    const whatsappButtons = document.querySelectorAll('a[href*="wa.me"]');
    whatsappButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Track WhatsApp click (can integrate with analytics)
            const city = this.closest('.accordion-item')?.querySelector('.city-info h3')?.textContent || 'General';
            console.log('WhatsApp contact initiated:', city);
            
            if (typeof gtag !== 'undefined') {
                gtag('event', 'whatsapp_contact', {
                    'event_category': 'engagement',
                    'event_label': city
                });
            }
        });
    });

})();