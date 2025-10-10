// Site Survey Page JavaScript

document.addEventListener('DOMContentLoaded', function() {
    // Initialize all components
    initTimeSlots();
    initBookingForm();
    initAddOnCalculator();
    initTestimonialsCarousel();
    initRegionalMap();
    initFloatingContact();
    initProgressTracker();
    initFormValidation();
});

// Time Slots Management
function initTimeSlots() {
    const timeSlots = document.querySelectorAll('.time-slot');
    const selectedSlotInput = document.getElementById('selected-time-slot');
    
    timeSlots.forEach(slot => {
        slot.addEventListener('click', function() {
            if (this.classList.contains('unavailable')) return;
            
            // Remove previous selection
            timeSlots.forEach(s => s.classList.remove('selected'));
            
            // Add selection to clicked slot
            this.classList.add('selected');
            
            // Update hidden input if exists
            if (selectedSlotInput) {
                selectedSlotInput.value = this.textContent;
            }
            
            // Show progress tracker
            showProgressTracker();
        });
    });
}

// Booking Form Management
function initBookingForm() {
    const bookingForm = document.getElementById('booking-form');
    const citySelect = document.querySelector('select[name="city"]');
    const dateInput = document.querySelector('input[name="preferred-date"]');
    const timeInput = document.querySelector('input[name="preferred-time"]');
    
    // Set minimum date to today
    if (dateInput) {
        const today = new Date().toISOString().split('T')[0];
        dateInput.min = today;
        
        // Set default to tomorrow
        const tomorrow = new Date();
        tomorrow.setDate(tomorrow.getDate() + 1);
        dateInput.value = tomorrow.toISOString().split('T')[0];
    }
    
    // Handle city selection
    if (citySelect) {
        citySelect.addEventListener('change', function() {
            updateAvailabilityInfo(this.value);
        });
    }
    
    // Handle form submission
    if (bookingForm) {
        bookingForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            if (validateBookingForm()) {
                submitBookingForm();
            }
        });
    }
    
    // Radio button selection for survey purpose
    const radioOptions = document.querySelectorAll('.radio-option');
    radioOptions.forEach(option => {
        option.addEventListener('click', function() {
            const radio = this.querySelector('input[type="radio"]');
            if (radio) {
                // Remove selected class from all options
                radioOptions.forEach(opt => opt.classList.remove('selected'));
                
                // Add selected class to clicked option
                this.classList.add('selected');
                radio.checked = true;
            }
        });
    });
}

// Add-On Calculator
function initAddOnCalculator() {
    const addonCheckboxes = document.querySelectorAll('input[name="addons[]"]');
    const selectedAddonsContainer = document.getElementById('selected-addons');
    const totalCostElement = document.getElementById('total-cost');
    const basePrice = 4500;
    
    const addonPrices = {
        'thermography': 2500,
        'loop-testing': 1800,
        'rcd-testing': 1200,
        'pat-testing': 800,
        'emergency-systems': 3000,
        'emf-survey': 2200
    };
    
    const addonNames = {
        'thermography': 'Thermography Testing',
        'loop-testing': 'Loop Testing',
        'rcd-testing': 'RCD Testing',
        'pat-testing': 'PAT Testing',
        'emergency-systems': 'Emergency Systems',
        'emf-survey': 'EMF Survey'
    };
    
    function updateAddonSummary() {
        let selectedAddons = [];
        let totalAddonCost = 0;
        
        addonCheckboxes.forEach(checkbox => {
            if (checkbox.checked) {
                const addonKey = checkbox.value;
                const price = addonPrices[addonKey];
                selectedAddons.push({
                    name: addonNames[addonKey],
                    price: price
                });
                totalAddonCost += price;
            }
        });
        
        // Update selected addons display
        if (selectedAddonsContainer) {
            selectedAddonsContainer.innerHTML = '';
            selectedAddons.forEach(addon => {
                const addonElement = document.createElement('div');
                addonElement.className = 'selected-addon';
                addonElement.style.cssText = 'display: flex; justify-content: space-between; padding: 8px 0; border-bottom: 1px solid var(--border-color);';
                addonElement.innerHTML = `
                    <span>${addon.name}</span>
                    <span class="price">₹${addon.price.toLocaleString()}</span>
                `;
                selectedAddonsContainer.appendChild(addonElement);
            });
        }
        
        // Update total cost
        const totalCost = basePrice + totalAddonCost;
        if (totalCostElement) {
            totalCostElement.textContent = `₹${totalCost.toLocaleString()}`;
        }
    }
    
    addonCheckboxes.forEach(checkbox => {
        checkbox.addEventListener('change', updateAddonSummary);
    });
    
    // Initialize with default values
    updateAddonSummary();
}

// Testimonials Carousel
function initTestimonialsCarousel() {
    const slides = document.querySelectorAll('.testimonial-slide');
    const dots = document.querySelectorAll('.dot');
    const prevBtn = document.querySelector('.prev-btn');
    const nextBtn = document.querySelector('.next-btn');
    
    let currentSlide = 0;
    
    function showSlide(index) {
        // Hide all slides
        slides.forEach(slide => slide.classList.remove('active'));
        dots.forEach(dot => dot.classList.remove('active'));
        
        // Show current slide
        if (slides[index]) {
            slides[index].classList.add('active');
        }
        if (dots[index]) {
            dots[index].classList.add('active');
        }
    }
    
    function nextSlide() {
        currentSlide = (currentSlide + 1) % slides.length;
        showSlide(currentSlide);
    }
    
    function prevSlide() {
        currentSlide = (currentSlide - 1 + slides.length) % slides.length;
        showSlide(currentSlide);
    }
    
    // Event listeners
    if (nextBtn) {
        nextBtn.addEventListener('click', nextSlide);
    }
    
    if (prevBtn) {
        prevBtn.addEventListener('click', prevSlide);
    }
    
    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            currentSlide = index;
            showSlide(currentSlide);
        });
    });
    
    // Auto-advance carousel
    setInterval(nextSlide, 8000);
}

// Regional Map Interactions
function initRegionalMap() {
    const coveragePoints = document.querySelectorAll('.coverage-point');
    const cityCards = document.querySelectorAll('.city-card');
    
    coveragePoints.forEach(point => {
        point.addEventListener('mouseenter', function() {
            const cityName = this.getAttribute('data-city');
            highlightCityCard(cityName);
        });
        
        point.addEventListener('mouseleave', function() {
            removeHighlights();
        });
    });
    
    cityCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            const cityName = this.getAttribute('data-city');
            highlightMapPoint(cityName);
        });
        
        card.addEventListener('mouseleave', function() {
            removeHighlights();
        });
    });
    
    function highlightCityCard(cityName) {
        cityCards.forEach(card => {
            if (card.getAttribute('data-city') === cityName) {
                card.style.transform = 'translateY(-8px)';
                card.style.boxShadow = '0 12px 24px rgba(0,0,0,0.15)';
            }
        });
    }
    
    function highlightMapPoint(cityName) {
        coveragePoints.forEach(point => {
            if (point.getAttribute('data-city') === cityName) {
                point.setAttribute('r', '12');
                point.style.fill = 'var(--accent-color)';
            }
        });
    }
    
    function removeHighlights() {
        cityCards.forEach(card => {
            card.style.transform = '';
            card.style.boxShadow = '';
        });
        
        coveragePoints.forEach(point => {
            point.setAttribute('r', '8');
            point.style.fill = '';
        });
    }
}

// Floating Contact Widget
function initFloatingContact() {
    const floatingContact = document.getElementById('floating-contact');
    const floatingCard = document.getElementById('floating-card');
    const bookBtn = document.querySelector('.book-btn');
    
    let cardTimeout;
    
    if (bookBtn) {
        bookBtn.addEventListener('mouseenter', () => {
            if (floatingCard) {
                clearTimeout(cardTimeout);
                floatingCard.classList.add('show');
            }
        });
    }
    
    if (floatingContact) {
        floatingContact.addEventListener('mouseenter', () => {
            clearTimeout(cardTimeout);
        });
        
        floatingContact.addEventListener('mouseleave', () => {
            cardTimeout = setTimeout(() => {
                if (floatingCard) {
                    floatingCard.classList.remove('show');
                }
            }, 2000);
        });
    }
}

// Progress Tracker
function initProgressTracker() {
    const progressTracker = document.getElementById('progress-tracker');
    
    // Show progress tracker when form is started
    window.showProgressTracker = function() {
        if (progressTracker) {
            progressTracker.style.display = 'block';
        }
    };
    
    // Update progress step
    window.updateProgressStep = function(step) {
        const steps = document.querySelectorAll('.progress-step');
        steps.forEach((stepEl, index) => {
            if (index < step) {
                stepEl.classList.add('completed');
                stepEl.classList.remove('active');
            } else if (index === step - 1) {
                stepEl.classList.add('active');
                stepEl.classList.remove('completed');
            } else {
                stepEl.classList.remove('completed', 'active');
            }
        });
    };
    
    // Minimize tracker
    window.minimizeTracker = function() {
        if (progressTracker) {
            progressTracker.style.display = 'none';
        }
    };
}

// Form Validation
function initFormValidation() {
    const inputs = document.querySelectorAll('input, select, textarea');
    
    inputs.forEach(input => {
        input.addEventListener('blur', function() {
            validateField(this);
        });
        
        input.addEventListener('input', function() {
            clearFieldError(this);
        });
    });
}

function validateField(field) {
    const value = field.value.trim();
    const fieldName = field.name;
    let isValid = true;
    let errorMessage = '';
    
    // Required field validation
    if (field.hasAttribute('required') && !value) {
        isValid = false;
        errorMessage = 'This field is required';
    }
    
    // Email validation
    if (fieldName === 'email' && value) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(value)) {
            isValid = false;
            errorMessage = 'Please enter a valid email address';
        }
    }
    
    // Phone validation
    if (fieldName === 'phone' && value) {
        const phoneRegex = /^[+]?[\d\s\-\(\)]{10,}$/;
        if (!phoneRegex.test(value)) {
            isValid = false;
            errorMessage = 'Please enter a valid phone number';
        }
    }
    
    // Display validation result
    if (!isValid) {
        showFieldError(field, errorMessage);
    } else {
        clearFieldError(field);
    }
    
    return isValid;
}

function showFieldError(field, message) {
    clearFieldError(field);
    
    field.style.borderColor = 'var(--error-color)';
    
    const errorElement = document.createElement('div');
    errorElement.className = 'field-error';
    errorElement.style.cssText = 'color: var(--error-color); font-size: 0.85rem; margin-top: 5px;';
    errorElement.textContent = message;
    
    field.parentNode.appendChild(errorElement);
}

function clearFieldError(field) {
    field.style.borderColor = '';
    
    const existingError = field.parentNode.querySelector('.field-error');
    if (existingError) {
        existingError.remove();
    }
}

function validateBookingForm() {
    const form = document.getElementById('booking-form');
    const requiredFields = form.querySelectorAll('[required]');
    let isValid = true;
    
    requiredFields.forEach(field => {
        if (!validateField(field)) {
            isValid = false;
        }
    });
    
    return isValid;
}

// File Upload Handling
function initFileUpload() {
    const fileUpload = document.querySelector('.file-upload');
    const fileInput = document.querySelector('.file-upload input[type="file"]');
    
    if (fileUpload && fileInput) {
        fileUpload.addEventListener('click', () => {
            fileInput.click();
        });
        
        fileUpload.addEventListener('dragover', (e) => {
            e.preventDefault();
            fileUpload.style.borderColor = 'var(--primary-color)';
            fileUpload.style.background = 'var(--light-primary)';
        });
        
        fileUpload.addEventListener('dragleave', () => {
            fileUpload.style.borderColor = '';
            fileUpload.style.background = '';
        });
        
        fileUpload.addEventListener('drop', (e) => {
            e.preventDefault();
            fileUpload.style.borderColor = '';
            fileUpload.style.background = '';
            
            const files = e.dataTransfer.files;
            if (files.length > 0) {
                fileInput.files = files;
                updateFileUploadDisplay(files);
            }
        });
        
        fileInput.addEventListener('change', function() {
            updateFileUploadDisplay(this.files);
        });
    }
}

function updateFileUploadDisplay(files) {
    const fileUpload = document.querySelector('.file-upload');
    const fileList = Array.from(files).map(file => file.name).join(', ');
    
    if (files.length > 0) {
        fileUpload.innerHTML = `
            <i class="fas fa-check-circle" style="color: var(--success-color);"></i>
            <p><strong>${files.length} file(s) selected:</strong></p>
            <p style="font-size: 0.9rem; color: var(--muted-text);">${fileList}</p>
            <p style="font-size: 0.8rem; margin-top: 10px;">Click to change files</p>
        `;
    }
}

// Utility Functions
function updateAvailabilityInfo(city) {
    const availabilityInfo = {
        'delhi': 'Same-day availability - 2-4 hour response',
        'mumbai': 'Same-day availability - 3-5 hour response', 
        'bangalore': 'Same-day availability - 2-4 hour response',
        'hyderabad': '24-48 hour availability',
        'chennai': '24-48 hour availability',
        'pune': '24-48 hour availability',
        'ahmedabad': '24-48 hour availability',
        'kolkata': '24-48 hour availability',
        'other': 'Availability varies - we\'ll contact you'
    };
    
    const info = availabilityInfo[city];
    if (info) {
        // Show availability notification
        showNotification(info, 'info');
    }
}

function showNotification(message, type = 'info') {
    const notification = document.createElement('div');
    notification.className = `notification ${type}`;
    notification.style.cssText = `
        position: fixed;
        top: 20px;
        right: 20px;
        background: white;
        border-left: 4px solid var(--primary-color);
        padding: 15px 20px;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        z-index: 1000;
        max-width: 300px;
    `;
    
    notification.textContent = message;
    document.body.appendChild(notification);
    
    setTimeout(() => {
        notification.remove();
    }, 5000);
}

function submitBookingForm() {
    const form = document.getElementById('booking-form');
    const formData = new FormData(form);
    
    // Show loading state
    const submitBtn = form.querySelector('button[type="submit"]');
    const originalText = submitBtn.innerHTML;
    submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Booking Survey...';
    submitBtn.disabled = true;
    
    // Simulate form submission (replace with actual endpoint)
    setTimeout(() => {
        // Update progress to completion
        updateProgressStep(3);
        
        // Show success message
        showNotification('Survey booking submitted successfully! We\'ll contact you within 30 minutes.', 'success');
        
        // Reset form
        form.reset();
        submitBtn.innerHTML = originalText;
        submitBtn.disabled = false;
        
        // Hide progress tracker after delay
        setTimeout(() => {
            minimizeTracker();
        }, 3000);
        
    }, 2000);
}

// Scroll to booking form
window.scrollToBookingForm = function() {
    const bookingForm = document.getElementById('booking-form');
    if (bookingForm) {
        bookingForm.scrollIntoView({ 
            behavior: 'smooth',
            block: 'start'
        });
    }
};

// Initialize file upload when DOM is ready
document.addEventListener('DOMContentLoaded', function() {
    initFileUpload();
});