<?php
/**
 * Final CTA Section - Case Studies Page
 * Closing call-to-action with success story invitation
 */
?>

<section class="final-cta-section">
    <div class="cta-background">
        <div class="cta-overlay"></div>
        <div class="container">
            <div class="cta-content">
                <div class="cta-header">
                    <div class="cta-badge">
                        <i class="fas fa-trophy"></i>
                        <span>Proven Track Record</span>
                    </div>
                    <h2>Let's Create Your Success Story Next</h2>
                    <p class="cta-subtitle">Join 200+ satisfied clients who chose SecureIndia for their earthing and lightning protection needs</p>
                </div>
                
                <div class="success-promise">
                    <div class="promise-grid">
                        <div class="promise-item">
                            <div class="promise-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div class="promise-text">
                                <strong>48-Hour Delivery</strong>
                                <span>Complete reports delivered within 2 business days</span>
                            </div>
                        </div>
                        
                        <div class="promise-item">
                            <div class="promise-icon">
                                <i class="fas fa-shield-check"></i>
                            </div>
                            <div class="promise-text">
                                <strong>100% Insurance Acceptance</strong>
                                <span>Reports accepted by all major insurance companies</span>
                            </div>
                        </div>
                        
                        <div class="promise-item">
                            <div class="promise-icon">
                                <i class="fas fa-medal"></i>
                            </div>
                            <div class="promise-text">
                                <strong>NABL Accredited</strong>
                                <span>Certified testing laboratory with highest standards</span>
                            </div>
                        </div>
                        
                        <div class="promise-item">
                            <div class="promise-icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="promise-text">
                                <strong>Expert Team</strong>
                                <span>Qualified engineers with 10+ years experience</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="cta-stats">
                    <div class="stats-row">
                        <div class="stat-item">
                            <div class="stat-number">500+</div>
                            <div class="stat-label">Sites Inspected</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">98%</div>
                            <div class="stat-label">Client Satisfaction</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">8+</div>
                            <div class="stat-label">Cities Covered</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">24/7</div>
                            <div class="stat-label">Support Available</div>
                        </div>
                    </div>
                </div>
                
                <div class="cta-actions">
                    <div class="primary-actions">
                        <a href="get-quote.php" class="btn btn-primary btn-large">
                            <i class="fas fa-calculator"></i>
                            Get Your Free Quote Now
                        </a>
                        <a href="tel:+919654640101" class="btn btn-secondary btn-large">
                            <i class="fas fa-phone"></i>
                            Call +91 96546 40101
                        </a>
                    </div>
                    
                    <div class="secondary-actions">
                        <a href="https://wa.me/919654640101" class="whatsapp-btn" target="_blank">
                            <i class="fab fa-whatsapp"></i>
                            Chat on WhatsApp
                        </a>
                        <a href="mailto:hi@secureindia.online" class="email-btn">
                            <i class="fas fa-envelope"></i>
                            Email Us
                        </a>
                    </div>
                </div>
                
                <div class="urgent-notice">
                    <div class="notice-content">
                        <div class="notice-icon">
                            <i class="fas fa-exclamation-triangle"></i>
                        </div>
                        <div class="notice-text">
                            <strong>Emergency Inspection Service Available</strong>
                            <p>Need urgent earthing inspection? We provide same-day emergency services for critical situations. Call us now!</p>
                        </div>
                    </div>
                </div>
                
                <div class="trust-indicators">
                    <div class="trust-row">
                        <div class="trust-item">
                            <i class="fas fa-certificate"></i>
                            <span>NABL Accredited</span>
                        </div>
                        <div class="trust-item">
                            <i class="fas fa-award"></i>
                            <span>ISO Certified</span>
                        </div>
                        <div class="trust-item">
                            <i class="fas fa-check-circle"></i>
                            <span>CEA Approved</span>
                        </div>
                        <div class="trust-item">
                            <i class="fas fa-handshake"></i>
                            <span>Insurance Partnered</span>
                        </div>
                    </div>
                </div>
                
                <div class="social-proof">
                    <p class="social-text">Trusted by leading companies across India</p>
                    <div class="company-logos">
                        <div class="logo-item">Manufacturing Giants</div>
                        <div class="logo-item">Healthcare Leaders</div>
                        <div class="logo-item">IT Companies</div>
                        <div class="logo-item">Retail Chains</div>
                        <div class="logo-item">Educational Institutions</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
// Add smooth scroll behavior for CTA buttons
document.addEventListener('DOMContentLoaded', function() {
    // Track CTA clicks
    const ctaButtons = document.querySelectorAll('.final-cta-section .btn');
    ctaButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Add click tracking here if needed
            console.log('CTA clicked:', this.textContent.trim());
        });
    });
    
    // Add hover effects
    const promiseItems = document.querySelectorAll('.promise-item');
    promiseItems.forEach(item => {
        item.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-5px)';
        });
        
        item.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    });
});
</script>