<?php
/**
 * CTA (Call to Action) section
 * Final section with contact form and information
 */
?>
<section id="cta" class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Ready to Ensure Your Facility's Electrical Safety?</h2>
            <p class="cta-subtitle">Talk to our certified inspection experts today</p>
            <div class="cta-actions">
                <a href="#survey" class="btn btn-primary">Book a Site Survey</a>
                <span class="cta-divider">or</span>
                <a href="#quote" class="btn btn-secondary">Get a Quote</a>
            </div>
            <div class="contact-options">
                <div class="contact-method">
                    <i class="fas fa-phone"></i>
                    <div class="contact-info">
                        <span class="label">Call us at</span>
                        <a href="tel:+911234567890">+91 123 456 7890</a>
                    </div>
                </div>
                <div class="contact-method">
                    <i class="fas fa-envelope"></i>
                    <div class="contact-info">
                        <span class="label">Email us at</span>
                        <a href="mailto:safety@secureindia.com">safety@secureindia.com</a>
                    </div>
                </div>
                <div class="contact-method">
                    <i class="fab fa-whatsapp"></i>
                    <div class="contact-info">
                        <span class="label">WhatsApp</span>
                        <a href="https://wa.me/911234567890" target="_blank">Connect on WhatsApp</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="quick-contact">
            <form id="quick-contact-form" class="contact-form">
                <h3>Quick Contact</h3>
                <div class="form-group">
                    <input type="text" id="name" name="name" placeholder="Your Name" required>
                </div>
                <div class="form-group">
                    <input type="email" id="email" name="email" placeholder="Your Email" required>
                </div>
                <div class="form-group">
                    <input type="tel" id="phone" name="phone" placeholder="Phone Number" required>
                </div>
                <div class="form-group">
                    <select id="service" name="service" required>
                        <option value="">Select Service</option>
                        <option value="inspection">Safety Inspection</option>
                        <option value="audit">Compliance Audit</option>
                        <option value="certification">Safety Certification</option>
                    </select>
                </div>
                <div class="form-group">
                    <textarea id="message" name="message" placeholder="Brief Message" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </div>
    </div>
</section>