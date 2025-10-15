/**
 * Team & Credentials Page JavaScript
 * Interactive elements and animations
 */

document.addEventListener('DOMContentLoaded', function() {
    
    // Smooth scroll for anchor links
    const anchorLinks = document.querySelectorAll('a[href^="#"]');
    anchorLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (href !== '#' && href.length > 1) {
                e.preventDefault();
                const target = document.querySelector(href);
                if (target) {
                    const headerOffset = 100;
                    const elementPosition = target.getBoundingClientRect().top;
                    const offsetPosition = elementPosition + window.pageYOffset - headerOffset;
                    
                    window.scrollTo({
                        top: offsetPosition,
                        behavior: 'smooth'
                    });
                }
            }
        });
    });
    
    // Animate elements on scroll
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -100px 0px'
    };
    
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);
    
    // Elements to animate
    const animateElements = document.querySelectorAll('.leader-card, .stat-card, .expertise-card, .cert-card, .award-card, .benefit-item, .job-listing');
    animateElements.forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px)';
        el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(el);
    });
    
    // Counters animation for stats
    const animateCounter = (element, target) => {
        const duration = 2000;
        const increment = target / (duration / 16);
        let current = 0;
        
        const updateCounter = () => {
            current += increment;
            if (current < target) {
                element.textContent = Math.ceil(current);
                requestAnimationFrame(updateCounter);
            } else {
                element.textContent = target;
            }
        };
        
        updateCounter();
    };
    
    const statsObserver = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const statNumber = entry.target.querySelector('.stat-number');
                if (statNumber && !statNumber.classList.contains('animated')) {
                    const target = parseInt(statNumber.textContent.replace(/[^0-9]/g, ''));
                    if (!isNaN(target)) {
                        statNumber.classList.add('animated');
                        animateCounter(statNumber, target);
                    }
                }
            }
        });
    }, { threshold: 0.5 });
    
    const statCards = document.querySelectorAll('.stat-card, .trust-stat, .stat-box');
    statCards.forEach(card => statsObserver.observe(card));
    
    // Certification download tracking
    const certDownloads = document.querySelectorAll('.cert-link[download]');
    certDownloads.forEach(link => {
        link.addEventListener('click', function() {
            const certName = this.closest('.cert-card').querySelector('h3').textContent;
            console.log('Certificate downloaded:', certName);
            // Add analytics tracking here if needed
        });
    });
    
    // Job listing interactions
    const jobLinks = document.querySelectorAll('.job-link');
    jobLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            const jobTitle = this.closest('.job-listing').querySelector('h4').textContent;
            console.log('Job viewed:', jobTitle);
            // Add analytics tracking here if needed
        });
    });
    
    // Form validation for resume submission (if form exists)
    const resumeForms = document.querySelectorAll('form[action*="career"], form[action*="resume"]');
    resumeForms.forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Basic validation
            const emailInput = form.querySelector('input[type="email"]');
            const fileInput = form.querySelector('input[type="file"]');
            
            let valid = true;
            
            if (emailInput && !emailInput.value.match(/^[^\s@]+@[^\s@]+\.[^\s@]+$/)) {
                alert('Please enter a valid email address');
                valid = false;
            }
            
            if (fileInput && fileInput.files.length === 0) {
                alert('Please attach your resume');
                valid = false;
            }
            
            if (valid) {
                // Submit form or handle with AJAX
                console.log('Resume submitted');
                alert('Thank you! Your resume has been submitted. We will contact you soon.');
                form.reset();
            }
        });
    });
    
    // Toggle read more for long bios (if implemented)
    const readMoreButtons = document.querySelectorAll('.read-more-btn');
    readMoreButtons.forEach(button => {
        button.addEventListener('click', function() {
            const bioText = this.previousElementSibling;
            if (bioText.classList.contains('expanded')) {
                bioText.classList.remove('expanded');
                this.textContent = 'Read More';
            } else {
                bioText.classList.add('expanded');
                this.textContent = 'Read Less';
            }
        });
    });
    
    // Lazy load images
    const lazyImages = document.querySelectorAll('img[loading="lazy"]');
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    if (img.dataset.src) {
                        img.src = img.dataset.src;
                        img.removeAttribute('data-src');
                    }
                    imageObserver.unobserve(img);
                }
            });
        });
        
        lazyImages.forEach(img => imageObserver.observe(img));
    }
    
    // Social links tracking
    const socialLinks = document.querySelectorAll('.social-link, .leader-overlay a');
    socialLinks.forEach(link => {
        link.addEventListener('click', function() {
            const platform = this.querySelector('i').className;
            console.log('Social link clicked:', platform);
            // Add analytics tracking here if needed
        });
    });
    
    // Highlight current section in navigation (if sticky nav exists)
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('nav a[href^="#"]');
    
    if (sections.length > 0 && navLinks.length > 0) {
        window.addEventListener('scroll', function() {
            let current = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                if (window.pageYOffset >= (sectionTop - 200)) {
                    current = section.getAttribute('id');
                }
            });
            
            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === '#' + current) {
                    link.classList.add('active');
                }
            });
        });
    }
    
    // Certificate lightbox (optional enhancement)
    const certLogos = document.querySelectorAll('.cert-logo img');
    certLogos.forEach(logo => {
        logo.style.cursor = 'pointer';
        logo.addEventListener('click', function() {
            // Create lightbox overlay
            const lightbox = document.createElement('div');
            lightbox.style.cssText = `
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background: rgba(0, 0, 0, 0.9);
                display: flex;
                align-items: center;
                justify-content: center;
                z-index: 10000;
                cursor: pointer;
            `;
            
            const img = document.createElement('img');
            img.src = this.src;
            img.style.cssText = 'max-width: 90%; max-height: 90%; object-fit: contain;';
            
            lightbox.appendChild(img);
            document.body.appendChild(lightbox);
            
            lightbox.addEventListener('click', function() {
                document.body.removeChild(lightbox);
            });
        });
    });
    
    // Print certificate functionality
    const printButtons = document.querySelectorAll('.print-cert-btn');
    printButtons.forEach(button => {
        button.addEventListener('click', function() {
            window.print();
        });
    });
    
    // Back to top button
    const backToTop = document.createElement('button');
    backToTop.innerHTML = '<i class="fas fa-arrow-up"></i>';
    backToTop.className = 'back-to-top';
    backToTop.style.cssText = `
        position: fixed;
        bottom: 100px;
        right: 20px;
        width: 50px;
        height: 50px;
        background: var(--primary-color);
        color: white;
        border: none;
        border-radius: 50%;
        cursor: pointer;
        display: none;
        z-index: 999;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        transition: all 0.3s ease;
    `;
    
    document.body.appendChild(backToTop);
    
    window.addEventListener('scroll', function() {
        if (window.pageYOffset > 300) {
            backToTop.style.display = 'block';
        } else {
            backToTop.style.display = 'none';
        }
    });
    
    backToTop.addEventListener('click', function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
    
    // CTA button pulse animation
    const ctaButtons = document.querySelectorAll('.team-final-cta .btn-primary');
    ctaButtons.forEach(button => {
        setInterval(() => {
            button.style.transform = 'scale(1.05)';
            setTimeout(() => {
                button.style.transform = 'scale(1)';
            }, 200);
        }, 3000);
    });
    
    console.log('Team & Credentials page loaded successfully');
});

// Export functions if needed
window.teamPage = {
    scrollToSection: function(sectionId) {
        const target = document.querySelector(sectionId);
        if (target) {
            const headerOffset = 100;
            const elementPosition = target.getBoundingClientRect().top;
            const offsetPosition = elementPosition + window.pageYOffset - headerOffset;
            
            window.scrollTo({
                top: offsetPosition,
                behavior: 'smooth'
            });
        }
    }
};
