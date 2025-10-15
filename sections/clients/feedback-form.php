<!-- Client Feedback Form Section -->
<section class="feedback-form-section">
    <div class="container">
        <div class="feedback-wrapper">
            
            <!-- Left Column: Form Introduction -->
            <div class="feedback-intro">
                <div class="section-badge">
                    <i class="fas fa-comments"></i>
                    <span>Share Your Experience</span>
                </div>
                <h2>We Value Your Feedback</h2>
                <p class="intro-text">Your feedback helps us improve our services and assists other businesses in making informed decisions about their ESI compliance needs.</p>
                
                <div class="feedback-benefits">
                    <div class="benefit-item">
                        <div class="benefit-icon">
                            <i class="fas fa-shield-check"></i>
                        </div>
                        <div class="benefit-content">
                            <h4>Help Others Choose Confidently</h4>
                            <p>Your honest review guides fellow facility managers and business owners</p>
                        </div>
                    </div>
                    <div class="benefit-item">
                        <div class="benefit-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <div class="benefit-content">
                            <h4>Shape Our Service Quality</h4>
                            <p>We actively implement suggestions to enhance client experience</p>
                        </div>
                    </div>
                    <div class="benefit-item">
                        <div class="benefit-icon">
                            <i class="fas fa-award"></i>
                        </div>
                        <div class="benefit-content">
                            <h4>Recognize Our Team</h4>
                            <p>Positive feedback motivates our engineers and support staff</p>
                        </div>
                    </div>
                </div>
                
                <div class="review-platforms">
                    <h4>You can also review us on:</h4>
                    <div class="platforms">
                        <a href="#" class="platform-link" target="_blank" rel="noopener">
                            <i class="fab fa-google"></i>
                            <span>Google Business</span>
                        </a>
                        <a href="#" class="platform-link" target="_blank" rel="noopener">
                            <i class="fas fa-phone-alt"></i>
                            <span>JustDial</span>
                        </a>
                        <a href="#" class="platform-link" target="_blank" rel="noopener">
                            <i class="fab fa-facebook"></i>
                            <span>Facebook</span>
                        </a>
                    </div>
                </div>
                
                <div class="testimonial-highlight">
                    <div class="highlight-icon">
                        <i class="fas fa-quote-left"></i>
                    </div>
                    <p>"SecureIndia handled our entire ESI process flawlessly. Their engineer spent enough time on site, and the automation platform made document submission so smooth."</p>
                    <div class="highlight-author">
                        <strong>Rajesh Kumar</strong>
                        <span>Operations Head, Manufacturing Unit</span>
                    </div>
                </div>
            </div>
            
            <!-- Right Column: Feedback Form -->
            <div class="feedback-form">
                <div class="form-header">
                    <h3>Submit Your Feedback</h3>
                    <p>All fields are required unless marked optional</p>
                </div>
                
                <form id="clientFeedbackForm" class="feedback-form-container">
                    
                    <!-- Name -->
                    <div class="form-group">
                        <label for="feedbackName">
                            <i class="fas fa-user"></i>
                            Your Name
                        </label>
                        <input 
                            type="text" 
                            id="feedbackName" 
                            name="name" 
                            placeholder="e.g., Rajesh Kumar" 
                            required
                        >
                    </div>
                    
                    <!-- Designation -->
                    <div class="form-group">
                        <label for="feedbackDesignation">
                            <i class="fas fa-briefcase"></i>
                            Your Designation
                        </label>
                        <input 
                            type="text" 
                            id="feedbackDesignation" 
                            name="designation" 
                            placeholder="e.g., Facility Manager, Operations Head" 
                            required
                        >
                    </div>
                    
                    <!-- Company/Organization -->
                    <div class="form-group">
                        <label for="feedbackCompany">
                            <i class="fas fa-building"></i>
                            Company / Organization
                        </label>
                        <input 
                            type="text" 
                            id="feedbackCompany" 
                            name="company" 
                            placeholder="e.g., ABC Manufacturing Pvt. Ltd." 
                            required
                        >
                    </div>
                    
                    <!-- Industry Type -->
                    <div class="form-group">
                        <label for="feedbackIndustry">
                            <i class="fas fa-industry"></i>
                            Industry Type
                        </label>
                        <select id="feedbackIndustry" name="industry" required>
                            <option value="">— Select Industry —</option>
                            <option value="industrial">Industrial / Manufacturing</option>
                            <option value="commercial">Commercial / Office</option>
                            <option value="healthcare">Healthcare / Hospital</option>
                            <option value="educational">Educational Institution</option>
                            <option value="retail">Retail / Hospitality</option>
                            <option value="residential">Residential Society</option>
                            <option value="it">IT / Data Center</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    
                    <!-- Location -->
                    <div class="form-group">
                        <label for="feedbackLocation">
                            <i class="fas fa-map-marker-alt"></i>
                            Facility Location (Optional)
                        </label>
                        <input 
                            type="text" 
                            id="feedbackLocation" 
                            name="location" 
                            placeholder="e.g., Gurugram, Haryana"
                        >
                    </div>
                    
                    <!-- Service Availed -->
                    <div class="form-group">
                        <label for="feedbackService">
                            <i class="fas fa-clipboard-check"></i>
                            Service Availed
                        </label>
                        <select id="feedbackService" name="service" required>
                            <option value="">— Select Service —</option>
                            <option value="fire-noc">Fire NOC</option>
                            <option value="factory-license">Factory License (FL)</option>
                            <option value="esi-inspection">ESI Inspection</option>
                            <option value="electrical-inspection">Electrical Safety Inspection</option>
                            <option value="structural-audit">Structural Stability Audit</option>
                            <option value="fire-audit">Fire Safety Audit</option>
                            <option value="dgfasli">DGFASLI Compliance</option>
                            <option value="automation">iSwift Automation Platform</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    
                    <!-- Overall Rating -->
                    <div class="form-group">
                        <label>
                            <i class="fas fa-star"></i>
                            Overall Service Rating
                        </label>
                        <div class="star-rating" id="starRating">
                            <input type="radio" id="star5" name="rating" value="5" required>
                            <label for="star5" title="5 stars">
                                <i class="fas fa-star"></i>
                            </label>
                            
                            <input type="radio" id="star4" name="rating" value="4">
                            <label for="star4" title="4 stars">
                                <i class="fas fa-star"></i>
                            </label>
                            
                            <input type="radio" id="star3" name="rating" value="3">
                            <label for="star3" title="3 stars">
                                <i class="fas fa-star"></i>
                            </label>
                            
                            <input type="radio" id="star2" name="rating" value="2">
                            <label for="star2" title="2 stars">
                                <i class="fas fa-star"></i>
                            </label>
                            
                            <input type="radio" id="star1" name="rating" value="1">
                            <label for="star1" title="1 star">
                                <i class="fas fa-star"></i>
                            </label>
                        </div>
                        <p class="rating-help">Click on stars to rate (5 = Excellent, 1 = Poor)</p>
                    </div>
                    
                    <!-- Feedback Message -->
                    <div class="form-group">
                        <label for="feedbackMessage">
                            <i class="fas fa-comment-dots"></i>
                            Your Feedback / Testimonial
                        </label>
                        <textarea 
                            id="feedbackMessage" 
                            name="message" 
                            rows="5" 
                            placeholder="Share your experience with SecureIndia's services, our team's professionalism, report quality, timely delivery, or any suggestions for improvement..."
                            required
                        ></textarea>
                        <p class="char-counter">
                            <span id="charCount">0</span> / 500 characters
                        </p>
                    </div>
                    
                    <!-- Would Recommend -->
                    <div class="form-group">
                        <label>
                            <i class="fas fa-thumbs-up"></i>
                            Would you recommend SecureIndia to others?
                        </label>
                        <div class="radio-group">
                            <label class="radio-label">
                                <input type="radio" name="recommend" value="yes" required>
                                <span>Yes, definitely</span>
                            </label>
                            <label class="radio-label">
                                <input type="radio" name="recommend" value="maybe">
                                <span>Maybe</span>
                            </label>
                            <label class="radio-label">
                                <input type="radio" name="recommend" value="no">
                                <span>No</span>
                            </label>
                        </div>
                    </div>
                    
                    <!-- Consent -->
                    <div class="form-group">
                        <label class="checkbox-label">
                            <input type="checkbox" name="consent" id="feedbackConsent" required>
                            <span>I consent to SecureIndia publishing this feedback on their website and marketing materials. My contact details will remain private.</span>
                        </label>
                    </div>
                    
                    <!-- Submit Button -->
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary btn-submit">
                            <i class="fas fa-paper-plane"></i>
                            Submit Feedback
                        </button>
                        <button type="reset" class="btn btn-outline btn-reset">
                            <i class="fas fa-redo"></i>
                            Clear Form
                        </button>
                    </div>
                    
                    <!-- Success/Error Messages -->
                    <div class="form-message" id="formMessage" style="display: none;">
                        <div class="message-content"></div>
                    </div>
                    
                </form>
                
                <div class="form-footer">
                    <p>
                        <i class="fas fa-lock"></i>
                        Your information is secure and will not be shared with third parties.
                    </p>
                </div>
            </div>
            
        </div>
    </div>
</section>
