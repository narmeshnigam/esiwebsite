<?php
/**
 * Contact Form Section
 * Professional contact form with inquiry categorization
 */
?>

<section class="contact-form-section" id="contact-form">
    <div class="container">
        <div class="form-container">
            <div class="form-header">
                <h2>Send Us a Message</h2>
                <p class="form-subtitle">We'll get back to you within 24 hours</p>
            </div>
            
            <div class="form-content">
                <form class="contact-form" action="process-contact.php" method="POST">
                    <div class="form-grid">
                        <div class="form-group">
                            <label for="name">Full Name *</label>
                            <input type="text" id="name" name="name" required placeholder="Enter your full name">
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Email Address *</label>
                            <input type="email" id="email" name="email" required placeholder="your.email@company.com">
                        </div>
                        
                        <div class="form-group">
                            <label for="phone">Phone Number *</label>
                            <input type="tel" id="phone" name="phone" required placeholder="+91-XXXXX-XXXXX">
                        </div>
                        
                        <div class="form-group">
                            <label for="inquiry_type">I'm Interested In *</label>
                            <select id="inquiry_type" name="inquiry_type" required>
                                <option value="">Select your inquiry type</option>
                                <option value="inspection">Electrical Safety Inspection</option>
                                <option value="automation">Industrial Automation</option>
                                <option value="partnership">Partnership Opportunities</option>
                                <option value="support">Technical Support</option>
                                <option value="quote">Request a Quote</option>
                                <option value="emergency">Emergency Service</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        
                        <div class="form-group full-width">
                            <label for="message">Message / Requirement Details *</label>
                            <textarea id="message" name="message" rows="6" required 
                                placeholder="Please describe your requirements, project details, timeline, or any specific questions you have..."></textarea>
                        </div>
                        
                        <div class="form-group full-width">
                            <div class="form-options">
                                <label class="checkbox-label">
                                    <input type="checkbox" name="urgent" value="1">
                                    <span class="checkmark"></span>
                                    This is an urgent inquiry
                                </label>
                                
                                <label class="checkbox-label">
                                    <input type="checkbox" name="site_visit" value="1">
                                    <span class="checkmark"></span>
                                    I would like to schedule a site visit
                                </label>
                            </div>
                        </div>
                        
                        <div class="form-group full-width">
                            <button type="submit" class="btn btn-primary btn-large form-submit">
                                <i class="fas fa-paper-plane"></i>
                                Send Message
                            </button>
                        </div>
                    </div>
                    
                    <div class="form-footer">
                        <div class="privacy-note">
                            <i class="fas fa-shield-alt"></i>
                            <span>Your details are safe with us. We do not share contact information.</span>
                        </div>
                        
                        <div class="response-promise">
                            <div class="promise-item">
                                <i class="fas fa-clock"></i>
                                <span>24-hour response guarantee</span>
                            </div>
                            <div class="promise-item">
                                <i class="fas fa-user-tie"></i>
                                <span>Direct expert consultation</span>
                            </div>
                            <div class="promise-item">
                                <i class="fas fa-file-contract"></i>
                                <span>Free initial assessment</span>
                            </div>
                        </div>
                    </div>
                </form>
                
                <div class="form-sidebar">
                    <div class="quick-stats">
                        <div class="stat-item">
                            <div class="stat-icon">
                                <i class="fas fa-reply"></i>
                            </div>
                            <div class="stat-content">
                                <h4>24-Hour Response</h4>
                                <p>We respond to all inquiries within 24 hours, urgent requests within 2 hours</p>
                            </div>
                        </div>
                        
                        <div class="stat-item">
                            <div class="stat-icon">
                                <i class="fas fa-certificate"></i>
                            </div>
                            <div class="stat-content">
                                <h4>Certified Experts</h4>
                                <p>All our engineers are certified and experienced in electrical safety standards</p>
                            </div>
                        </div>
                        
                        <div class="stat-item">
                            <div class="stat-icon">
                                <i class="fas fa-handshake"></i>
                            </div>
                            <div class="stat-content">
                                <h4>Free Consultation</h4>
                                <p>Initial assessment and consultation are completely free with no obligations</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="emergency-contact">
                        <h4>Need Immediate Assistance?</h4>
                        <p>For emergency electrical safety issues, call us directly:</p>
                        <a href="tel:+919654640101" class="emergency-btn">
                            <i class="fas fa-phone"></i>
                            Emergency: +91-96546-40101
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>