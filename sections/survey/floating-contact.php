<div class="floating-contact" id="floating-cont        <a href="mailto:hi@secureindia.online?subject=Site Survey Inquiry&body=Hi, I'm interested in booking a site survey for my facility. Please contact me." 
           class="floating-btn email-btn" 
           data-tooltip="Email Us">
            <i class="fas fa-envelope"></i>
        </a>
    <                         <div class="contact-options">
                <a href="tel:+919654640101" class="contact-option primary">
                    <i class="fas fa-phone"></i>
                    <div class="option-text">
                        <strong>Call Now</strong>
                        <span>+91-96546-40101</span>
                    </div>
                </a>
                
                <a href="https://wa.me/919654640101" target="_blank" class="contact-option whatsapp">
                    <i class="fab fa-whatsapp"></i>
                    <div class="option-text">
                        <strong>WhatsApp</strong>
                        <span>Quick Support</span>
                    </div>
                </a>+919654640101" class="contact-option primary">
                    <i class="fas fa-phone"></i>
                    <div class="option-text">
                        <strong>Call Now</strong>
                        <span>+91-96546-40101</span>
                    </div>
                </a>
                
                <a href="https://wa.me/919654640101" target="_blank" class="contact-option whatsapp">
                    <i class="fab fa-whatsapp"></i>
                    <div class="option-text">
                        <strong>WhatsApp</strong>
                        <span>Quick Support</span>
                    </div>
                </a>ting-buttons">
        <!-- WhatsApp Button -->
        <a href="https://wa.me/919654640101?text=Hi, I need a site survey for my facility. Can you help?" 
           target="_blank" 
           class="floating-btn whatsapp-btn" 
           data-tooltip="Chat on WhatsApp">
            <i class="fab fa-whatsapp"></i>
        </a>

        <!-- Call Button -->
        <a href="tel:+919654640101" 
           class="floating-btn call-btn" 
           data-tooltip="Call Now">
            <i class="fas fa-phone"></i>
        </a>

        <!-- Email Button -->
        <a href="mailto:hi@secureindia.online?subject=Site Survey Inquiry&body=Hi, I'm interested in booking a site survey for my facility. Please contact me." 
           class="floating-btn email-btn" 
           data-tooltip="Send Email">
            <i class="fas fa-envelope"></i>
        </a>

        <!-- Quick Book Button -->
        <button class="floating-btn book-btn" 
                data-tooltip="Quick Book Survey"
                onclick="scrollToBookingForm()">
            <i class="fas fa-calendar-plus"></i>
        </button>
    </div>

    <!-- Floating Contact Card (appears on hover) -->
    <div class="floating-contact-card" id="floating-card">
        <div class="card-header">
            <h4>Need Help Booking?</h4>
            <button class="close-card" onclick="hideFloatingCard()">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <div class="card-content">
            <p>Our survey specialists are available to help you choose the right assessment for your facility.</p>
            
            <div class="quick-stats">
                <div class="stat">
                    <i class="fas fa-clock"></i>
                    <span>2-4 hour response</span>
                </div>
                <div class="stat">
                    <i class="fas fa-user-graduate"></i>
                    <span>C‑License engineers</span>
                </div>
                <div class="stat">
                    <i class="fas fa-shield-alt"></i>
                    <span>Insurance ready reports</span>
                </div>
            </div>

            <div class="contact-options">
                <a href="tel:+919654640101" class="contact-option primary">
                    <i class="fas fa-phone"></i>
                    <div class="option-text">
                        <strong>Call Now</strong>
                        <span>+91-96546-40101</span>
                    </div>
                </a>
                
                <a href="https://wa.me/919654640101" target="_blank" class="contact-option whatsapp">
                    <i class="fab fa-whatsapp"></i>
                    <div class="option-text">
                        <strong>WhatsApp</strong>
                        <span>Instant response</span>
                    </div>
                </a>
            </div>

            <div class="availability-status">
                <div class="status-indicator online"></div>
                <span>Available now - 3 slots left today</span>
            </div>
        </div>
    </div>
</div>

<!-- Floating Survey Progress Tracker -->
<div class="survey-progress-tracker" id="progress-tracker" style="display: none;">
    <div class="tracker-header">
        <h5>Your Survey Booking</h5>
        <button class="minimize-tracker" onclick="minimizeTracker()">
            <i class="fas fa-minus"></i>
        </button>
    </div>
    <div class="tracker-content">
        <div class="progress-steps">
            <div class="progress-step completed" data-step="1">
                <i class="fas fa-check"></i>
                <span>Details Entered</span>
            </div>
            <div class="progress-step active" data-step="2">
                <i class="fas fa-calendar"></i>
                <span>Schedule Time</span>
            </div>
            <div class="progress-step" data-step="3">
                <i class="fas fa-clipboard-check"></i>
                <span>Confirmation</span>
            </div>
        </div>
        <div class="estimated-total">
            <span>Estimated Cost: ₹4,500</span>
        </div>
        <button class="continue-booking-btn" onclick="scrollToBookingForm()">
            Continue Booking
        </button>
    </div>
</div>

<script>
function scrollToBookingForm() {
    document.getElementById('booking-form').scrollIntoView({ 
        behavior: 'smooth',
        block: 'start'
    });
}

function showFloatingCard() {
    document.getElementById('floating-card').classList.add('show');
}

function hideFloatingCard() {
    document.getElementById('floating-card').classList.remove('show');
}

function minimizeTracker() {
    document.getElementById('progress-tracker').style.display = 'none';
}

// Show contact card on book button hover
document.querySelector('.book-btn').addEventListener('mouseenter', showFloatingCard);

// Auto-hide contact card after delay
let cardTimeout;
document.querySelector('.floating-contact').addEventListener('mouseenter', () => {
    clearTimeout(cardTimeout);
});

document.querySelector('.floating-contact').addEventListener('mouseleave', () => {
    cardTimeout = setTimeout(hideFloatingCard, 2000);
});
</script>