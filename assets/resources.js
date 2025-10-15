/**
 * Resources Page JavaScript
 * Handles interactions and enhancements for the resources/blog page
 */

document.addEventListener('DOMContentLoaded', function() {
    
    // Smooth scroll for internal links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
    
    // Article card hover effects
    const articleCards = document.querySelectorAll('.article-card');
    articleCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-5px)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    });
    
    // Video thumbnail click handling
    const videoThumbnails = document.querySelectorAll('.video-thumbnail');
    videoThumbnails.forEach(thumbnail => {
        thumbnail.addEventListener('click', function() {
            const videoCard = this.closest('.video-card');
            const videoLink = videoCard.querySelector('.video-title a');
            if (videoLink) {
                window.location.href = videoLink.getAttribute('href');
            }
        });
    });
    
    // Category card animations
    const categoryCards = document.querySelectorAll('.category-card');
    
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);
    
    categoryCards.forEach(card => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(20px)';
        card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(card);
    });
    
    // Download button tracking
    const downloadButtons = document.querySelectorAll('.download-card .btn');
    downloadButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            const downloadCard = this.closest('.download-card');
            const downloadTitle = downloadCard.querySelector('.download-title').textContent;
            
            // Track download (you can integrate with analytics here)
            console.log('Download initiated:', downloadTitle);
            
            // Optional: Show download notification
            showDownloadNotification(downloadTitle);
        });
    });
    
    // Show download notification
    function showDownloadNotification(title) {
        const notification = document.createElement('div');
        notification.className = 'download-notification';
        notification.innerHTML = `
            <i class="fas fa-check-circle"></i>
            <span>Downloading: ${title}</span>
        `;
        notification.style.cssText = `
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: #28a745;
            color: white;
            padding: 15px 25px;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
            z-index: 10000;
            display: flex;
            align-items: center;
            gap: 10px;
            animation: slideInRight 0.3s ease;
        `;
        
        document.body.appendChild(notification);
        
        setTimeout(() => {
            notification.style.animation = 'slideOutRight 0.3s ease';
            setTimeout(() => {
                notification.remove();
            }, 300);
        }, 3000);
    }
    
    // Add CSS animations
    const style = document.createElement('style');
    style.textContent = `
        @keyframes slideInRight {
            from {
                transform: translateX(100%);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }
        
        @keyframes slideOutRight {
            from {
                transform: translateX(0);
                opacity: 1;
            }
            to {
                transform: translateX(100%);
                opacity: 0;
            }
        }
    `;
    document.head.appendChild(style);
    
    // Search functionality (if implemented)
    const searchInput = document.querySelector('#resource-search');
    if (searchInput) {
        searchInput.addEventListener('input', function(e) {
            const searchTerm = e.target.value.toLowerCase();
            filterResources(searchTerm);
        });
    }
    
    function filterResources(term) {
        const articles = document.querySelectorAll('.article-card');
        const categories = document.querySelectorAll('.category-card');
        
        articles.forEach(article => {
            const title = article.querySelector('.article-title').textContent.toLowerCase();
            const excerpt = article.querySelector('.article-excerpt').textContent.toLowerCase();
            
            if (title.includes(term) || excerpt.includes(term)) {
                article.style.display = 'block';
            } else {
                article.style.display = 'none';
            }
        });
        
        categories.forEach(category => {
            const title = category.querySelector('.category-title').textContent.toLowerCase();
            const description = category.querySelector('.category-description').textContent.toLowerCase();
            
            if (title.includes(term) || description.includes(term)) {
                category.style.display = 'block';
            } else {
                category.style.display = 'none';
            }
        });
    }
    
    // Social share buttons (if implemented)
    const shareButtons = document.querySelectorAll('.share-button');
    shareButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            const platform = this.dataset.platform;
            const url = encodeURIComponent(window.location.href);
            const title = encodeURIComponent(document.title);
            
            let shareUrl;
            switch(platform) {
                case 'facebook':
                    shareUrl = `https://www.facebook.com/sharer/sharer.php?u=${url}`;
                    break;
                case 'twitter':
                    shareUrl = `https://twitter.com/intent/tweet?url=${url}&text=${title}`;
                    break;
                case 'linkedin':
                    shareUrl = `https://www.linkedin.com/sharing/share-offsite/?url=${url}`;
                    break;
                case 'whatsapp':
                    shareUrl = `https://wa.me/?text=${title}%20${url}`;
                    break;
            }
            
            if (shareUrl) {
                window.open(shareUrl, '_blank', 'width=600,height=400');
            }
        });
    });
    
    // Lazy load images
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    if (img.dataset.src) {
                        img.src = img.dataset.src;
                        img.removeAttribute('data-src');
                    }
                    observer.unobserve(img);
                }
            });
        });
        
        document.querySelectorAll('img[data-src]').forEach(img => {
            imageObserver.observe(img);
        });
    }
    
    // Print article functionality
    const printButtons = document.querySelectorAll('.print-article');
    printButtons.forEach(button => {
        button.addEventListener('click', function() {
            window.print();
        });
    });
    
    // Reading progress indicator (for article pages)
    const progressBar = document.querySelector('.reading-progress');
    if (progressBar) {
        window.addEventListener('scroll', function() {
            const windowHeight = window.innerHeight;
            const documentHeight = document.documentElement.scrollHeight;
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            const scrollPercent = (scrollTop / (documentHeight - windowHeight)) * 100;
            
            progressBar.style.width = scrollPercent + '%';
        });
    }
    
    // Copy link functionality
    const copyLinkButtons = document.querySelectorAll('.copy-link');
    copyLinkButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            const url = window.location.href;
            
            navigator.clipboard.writeText(url).then(() => {
                button.innerHTML = '<i class="fas fa-check"></i> Copied!';
                setTimeout(() => {
                    button.innerHTML = '<i class="fas fa-link"></i> Copy Link';
                }, 2000);
            });
        });
    });
    
    console.log('Resources page initialized successfully');
});

// Newsletter form validation (additional to inline script)
function validateEmail(email) {
    const re = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    return re.test(String(email).toLowerCase());
}

// Export functions for use in other scripts
window.ResourcesPage = {
    validateEmail: validateEmail
};