// Pricing Page JavaScript

document.addEventListener('DOMContentLoaded', function() {
    initializePricingCalculator();
    initializeFAQAccordion();
    initializeQuoteForm();
    initializeScrollAnimations();
    initializeAddOnSelection();
    initializeComparisonCharts();
});

// Pricing Calculator Functionality
function initializePricingCalculator() {
    const addOnItems = document.querySelectorAll('.add-on-item');
    const calculatorContainer = document.querySelector('.pricing-calculator');
    let selectedAddOns = [];
    let basePrice = 25000; // Default base price

    addOnItems.forEach(item => {
        item.addEventListener('click', function() {
            const isSelected = this.classList.contains('selected');
            const addOnName = this.querySelector('h4').textContent;
            const addOnPrice = parseInt(this.querySelector('.add-on-price').textContent.replace(/[₹,]/g, ''));

            if (isSelected) {
                // Remove from selection
                this.classList.remove('selected');
                selectedAddOns = selectedAddOns.filter(addon => addon.name !== addOnName);
            } else {
                // Add to selection
                this.classList.add('selected');
                selectedAddOns.push({
                    name: addOnName,
                    price: addOnPrice
                });
            }

            updateCalculator();
        });
    });

    function updateCalculator() {
        const calculatorTotal = document.querySelector('.calculator-total');
        const calculatorBreakdown = document.querySelector('.calculator-breakdown');
        
        if (!calculatorTotal) return;

        let totalPrice = basePrice;
        let breakdownHTML = `
            <div class="calculator-breakdown">
                <span>Base Inspection Package</span>
                <span>₹${basePrice.toLocaleString()}</span>
            </div>
        `;

        selectedAddOns.forEach(addon => {
            totalPrice += addon.price;
            breakdownHTML += `
                <div class="calculator-breakdown">
                    <span>${addon.name}</span>
                    <span>₹${addon.price.toLocaleString()}</span>
                </div>
            `;
        });

        breakdownHTML += `
            <div class="calculator-breakdown">
                <span><strong>Total Estimated Cost</strong></span>
                <span><strong>₹${totalPrice.toLocaleString()}</strong></span>
            </div>
        `;

        calculatorTotal.textContent = `₹${totalPrice.toLocaleString()}`;
        
        // Update breakdown if container exists
        const breakdownContainer = document.querySelector('.calculator-breakdown').parentNode;
        if (breakdownContainer) {
            breakdownContainer.innerHTML = breakdownHTML;
        }
    }

    // Initialize calculator with default values
    updateCalculator();
}

// FAQ Accordion Functionality
function initializeFAQAccordion() {
    const faqQuestions = document.querySelectorAll('.faq-question');

    faqQuestions.forEach(question => {
        question.addEventListener('click', function() {
            const faqItem = this.parentNode;
            const faqAnswer = faqItem.querySelector('.faq-answer');
            const isActive = this.classList.contains('active');

            // Close all other FAQ items
            faqQuestions.forEach(q => {
                q.classList.remove('active');
                q.parentNode.querySelector('.faq-answer').classList.remove('active');
            });

            // Toggle current item
            if (!isActive) {
                this.classList.add('active');
                faqAnswer.classList.add('active');
            }
        });
    });
}

// Quote Form Functionality
function initializeQuoteForm() {
    const quoteForm = document.getElementById('quick-quote-form');
    
    if (!quoteForm) return;

    // Form validation
    const requiredFields = quoteForm.querySelectorAll('[required]');
    const submitButton = quoteForm.querySelector('button[type="submit"]');

    function validateForm() {
        let isValid = true;
        requiredFields.forEach(field => {
            if (!field.value.trim()) {
                isValid = false;
            }
        });
        return isValid;
    }

    // Real-time validation
    requiredFields.forEach(field => {
        field.addEventListener('input', function() {
            if (this.value.trim()) {
                this.style.borderColor = '#28a745';
            } else {
                this.style.borderColor = '#e9ecef';
            }
        });
    });

    // Form submission
    quoteForm.addEventListener('submit', function(e) {
        e.preventDefault();

        if (!validateForm()) {
            showNotification('Please fill in all required fields', 'error');
            return;
        }

        // Show loading state
        const originalButtonText = submitButton.innerHTML;
        submitButton.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
        submitButton.disabled = true;

        // Simulate form submission
        setTimeout(() => {
            showNotification('Quote request sent successfully! We\'ll respond within 24 hours.', 'success');
            quoteForm.reset();
            submitButton.innerHTML = originalButtonText;
            submitButton.disabled = false;
            
            // Optionally redirect or show thank you message
            showThankYouModal();
        }, 2000);
    });

    // Dynamic pricing based on facility type and size
    const facilityType = document.getElementById('facility-type');
    const facilitySize = document.getElementById('facility-size');

    function updateEstimatedPrice() {
        const type = facilityType.value;
        const size = facilitySize.value;
        
        if (!type || !size) return;

        let estimatedPrice = 15000; // Base price

        // Price multipliers based on facility type
        const typeMultipliers = {
            'residential': 1,
            'commercial': 1.5,
            'industrial': 2,
            'enterprise': 3,
            'other': 1.2
        };

        // Price multipliers based on size
        const sizeMultipliers = {
            'small': 1,
            'medium': 2,
            'large': 3,
            'xlarge': 4
        };

        estimatedPrice *= (typeMultipliers[type] || 1);
        estimatedPrice *= (sizeMultipliers[size] || 1);

        // Show estimated price
        showEstimatedPrice(estimatedPrice);
    }

    if (facilityType && facilitySize) {
        facilityType.addEventListener('change', updateEstimatedPrice);
        facilitySize.addEventListener('change', updateEstimatedPrice);
    }
}

// Show estimated price
function showEstimatedPrice(price) {
    let priceDisplay = document.querySelector('.estimated-price-display');
    
    if (!priceDisplay) {
        priceDisplay = document.createElement('div');
        priceDisplay.className = 'estimated-price-display';
        priceDisplay.style.cssText = `
            background: #e8f5e8;
            border: 2px solid #28a745;
            border-radius: 8px;
            padding: 15px;
            margin: 20px 0;
            text-align: center;
            animation: fadeIn 0.5s ease;
        `;
        
        const form = document.getElementById('quick-quote-form');
        const firstFieldset = form.querySelector('.form-row');
        firstFieldset.parentNode.insertBefore(priceDisplay, firstFieldset.nextSibling);
    }

    priceDisplay.innerHTML = `
        <div style="color: #28a745; font-weight: 600; font-size: 1.1rem;">
            <i class="fas fa-calculator"></i> Estimated Price Range
        </div>
        <div style="font-size: 1.3rem; font-weight: 700; color: #155724; margin-top: 5px;">
            ₹${(price * 0.8).toLocaleString()} - ₹${(price * 1.2).toLocaleString()}
        </div>
        <div style="font-size: 0.9rem; color: #155724; margin-top: 5px;">
            Final price may vary based on specific requirements
        </div>
    `;
}

// Scroll Animations
function initializeScrollAnimations() {
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
                
                // Animate pricing table rows
                if (entry.target.classList.contains('pricing-table')) {
                    animateTableRows(entry.target);
                }
                
                // Animate package cards
                if (entry.target.classList.contains('package-cards')) {
                    animatePackageCards(entry.target);
                }
                
                // Animate comparison charts
                if (entry.target.classList.contains('comparison-chart')) {
                    animateComparisonBars(entry.target);
                }
            }
        });
    }, observerOptions);

    // Observe elements for animation
    const animatedElements = document.querySelectorAll('.pricing-table, .package-cards, .included-grid, .add-on-grid, .comparison-chart, .trust-indicators');
    
    animatedElements.forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px)';
        el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(el);
    });
}

// Animate table rows
function animateTableRows(table) {
    const rows = table.querySelectorAll('tr');
    rows.forEach((row, index) => {
        setTimeout(() => {
            row.style.opacity = '1';
            row.style.transform = 'translateX(0)';
        }, index * 100);
    });
}

// Animate package cards
function animatePackageCards(container) {
    const cards = container.querySelectorAll('.package-card');
    cards.forEach((card, index) => {
        setTimeout(() => {
            card.style.opacity = '1';
            card.style.transform = 'translateY(0) scale(1)';
        }, index * 200);
    });
}

// Add-on Selection Functionality
function initializeAddOnSelection() {
    const selectAllBtn = document.createElement('button');
    selectAllBtn.textContent = 'Select All Add-ons';
    selectAllBtn.className = 'btn btn-outline-primary';
    selectAllBtn.type = 'button';
    selectAllBtn.style.marginBottom = '20px';
    
    const clearAllBtn = document.createElement('button');
    clearAllBtn.textContent = 'Clear Selection';
    clearAllBtn.className = 'btn btn-outline-secondary';
    clearAllBtn.type = 'button';
    clearAllBtn.style.marginBottom = '20px';
    clearAllBtn.style.marginLeft = '10px';
    
    const addOnSection = document.querySelector('.add-on-services .container h2');
    if (addOnSection) {
        const buttonContainer = document.createElement('div');
        buttonContainer.style.textAlign = 'center';
        buttonContainer.appendChild(selectAllBtn);
        buttonContainer.appendChild(clearAllBtn);
        addOnSection.parentNode.insertBefore(buttonContainer, addOnSection.nextSibling);
    }
    
    selectAllBtn.addEventListener('click', function() {
        const addOnItems = document.querySelectorAll('.add-on-item');
        addOnItems.forEach(item => {
            if (!item.classList.contains('selected')) {
                item.click();
            }
        });
    });
    
    clearAllBtn.addEventListener('click', function() {
        const selectedItems = document.querySelectorAll('.add-on-item.selected');
        selectedItems.forEach(item => {
            item.click();
        });
    });
}

// Initialize Comparison Charts
function initializeComparisonCharts() {
    // This will be called when the charts come into view
}

// Animate comparison bars
function animateComparisonBars(container) {
    const bars = container.querySelectorAll('.comparison-fill');
    bars.forEach((bar, index) => {
        setTimeout(() => {
            const targetWidth = bar.getAttribute('data-width') || bar.style.width;
            bar.style.width = '0%';
            setTimeout(() => {
                bar.style.width = targetWidth;
            }, 100);
        }, index * 300);
    });
}

// Show notification
function showNotification(message, type = 'info') {
    const notification = document.createElement('div');
    notification.className = `notification notification-${type}`;
    notification.style.cssText = `
        position: fixed;
        top: 20px;
        right: 20px;
        padding: 15px 20px;
        border-radius: 8px;
        color: white;
        font-weight: 600;
        z-index: 10000;
        opacity: 0;
        transform: translateX(100%);
        transition: all 0.3s ease;
        max-width: 400px;
    `;
    
    switch(type) {
        case 'success':
            notification.style.background = '#28a745';
            break;
        case 'error':
            notification.style.background = '#dc3545';
            break;
        default:
            notification.style.background = '#007bff';
    }
    
    notification.innerHTML = `
        <i class="fas fa-${type === 'success' ? 'check-circle' : type === 'error' ? 'exclamation-circle' : 'info-circle'}"></i>
        ${message}
    `;
    
    document.body.appendChild(notification);
    
    // Animate in
    setTimeout(() => {
        notification.style.opacity = '1';
        notification.style.transform = 'translateX(0)';
    }, 100);
    
    // Remove after delay
    setTimeout(() => {
        notification.style.opacity = '0';
        notification.style.transform = 'translateX(100%)';
        setTimeout(() => {
            document.body.removeChild(notification);
        }, 300);
    }, 4000);
}

// Show thank you modal
function showThankYouModal() {
    const modal = document.createElement('div');
    modal.className = 'thank-you-modal';
    modal.style.cssText = `
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.8);
        z-index: 10000;
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.3s ease;
    `;
    
    const modalContent = document.createElement('div');
    modalContent.style.cssText = `
        background: white;
        padding: 40px;
        border-radius: 15px;
        text-align: center;
        max-width: 500px;
        margin: 20px;
        transform: scale(0.8);
        transition: transform 0.3s ease;
    `;
    
    modalContent.innerHTML = `
        <div style="color: #28a745; font-size: 4rem; margin-bottom: 20px;">
            <i class="fas fa-check-circle"></i>
        </div>
        <h3 style="color: #333; margin-bottom: 15px;">Thank You!</h3>
        <p style="color: #666; margin-bottom: 25px;">
            Your quote request has been submitted successfully. Our team will review your requirements and send you a detailed quotation within 24 hours.
        </p>
        <div style="background: #f8f9fa; padding: 20px; border-radius: 10px; margin-bottom: 25px;">
            <p style="margin: 0; color: #333; font-weight: 600;">
                <i class="fas fa-phone" style="color: #007bff; margin-right: 10px;"></i>
                Need immediate assistance? Call us at +91-12345-67890
            </p>
        </div>
        <button class="btn btn-primary" onclick="this.closest('.thank-you-modal').remove()">
            Close
        </button>
    `;
    
    modal.appendChild(modalContent);
    document.body.appendChild(modal);
    
    // Animate in
    setTimeout(() => {
        modal.style.opacity = '1';
        modalContent.style.transform = 'scale(1)';
    }, 100);
    
    // Close on background click
    modal.addEventListener('click', function(e) {
        if (e.target === modal) {
            modal.remove();
        }
    });
}

// Package comparison functionality
function initializePackageComparison() {
    const compareBtn = document.createElement('button');
    compareBtn.textContent = 'Compare Packages';
    compareBtn.className = 'btn btn-outline-primary';
    compareBtn.style.cssText = `
        position: fixed;
        bottom: 20px;
        right: 20px;
        z-index: 1000;
        border-radius: 50px;
        padding: 15px 25px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    `;
    
    document.body.appendChild(compareBtn);
    
    compareBtn.addEventListener('click', function() {
        const packageSection = document.querySelector('.package-breakdown');
        if (packageSection) {
            packageSection.scrollIntoView({ behavior: 'smooth' });
            
            // Highlight packages for comparison
            const packages = document.querySelectorAll('.package-card');
            packages.forEach(pkg => {
                pkg.style.transform = 'scale(1.02)';
                pkg.style.boxShadow = '0 10px 30px rgba(0, 123, 255, 0.3)';
            });
            
            setTimeout(() => {
                packages.forEach(pkg => {
                    pkg.style.transform = '';
                    pkg.style.boxShadow = '';
                });
            }, 2000);
        }
    });
}

// Initialize package comparison
document.addEventListener('DOMContentLoaded', function() {
    setTimeout(initializePackageComparison, 3000); // Show after 3 seconds
});

// Smooth scrolling for anchor links
document.addEventListener('click', function(e) {
    if (e.target.matches('a[href^="#"]')) {
        e.preventDefault();
        const targetId = e.target.getAttribute('href').substring(1);
        const targetElement = document.getElementById(targetId);
        
        if (targetElement) {
            targetElement.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    }
});

// Pricing table responsiveness
function handlePricingTableResize() {
    const tables = document.querySelectorAll('.pricing-table');
    
    function checkTableWidth() {
        tables.forEach(table => {
            if (window.innerWidth < 768) {
                table.style.fontSize = '0.9rem';
            } else {
                table.style.fontSize = '';
            }
        });
    }
    
    checkTableWidth();
    window.addEventListener('resize', checkTableWidth);
}

// Initialize table responsiveness
document.addEventListener('DOMContentLoaded', handlePricingTableResize);