<?php
/**
 * Newsletter Subscription Section
 * Email subscription for updates
 */
?>

<section class="newsletter-section">
    <div class="container">
        <div class="newsletter-wrapper">
            <div class="newsletter-content">
                <div class="newsletter-icon">
                    <i class="fas fa-envelope-open-text"></i>
                </div>
                <div class="newsletter-text">
                    <h2>Stay Updated on Electrical Safety News</h2>
                    <p>Get monthly updates on compliance regulations, safety trends, and automation insights delivered to your inbox.</p>
                </div>
            </div>
            
            <div class="newsletter-form-wrapper">
                <form id="newsletter-form" class="newsletter-form" method="POST" action="process-newsletter.php">
                    <div class="form-group">
                        <div class="input-wrapper">
                            <i class="fas fa-envelope"></i>
                            <input 
                                type="email" 
                                id="newsletter-email" 
                                name="email" 
                                placeholder="Enter your email address" 
                                required
                                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
                            >
                        </div>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-paper-plane"></i>
                            Subscribe
                        </button>
                    </div>
                    <p class="form-microcopy">
                        <i class="fas fa-lock"></i>
                        We respect your privacy. Unsubscribe anytime.
                    </p>
                </form>
                
                <div class="newsletter-benefits">
                    <div class="benefit-item">
                        <i class="fas fa-check-circle"></i>
                        <span>Monthly safety tips</span>
                    </div>
                    <div class="benefit-item">
                        <i class="fas fa-check-circle"></i>
                        <span>Regulatory updates</span>
                    </div>
                    <div class="benefit-item">
                        <i class="fas fa-check-circle"></i>
                        <span>Exclusive resources</span>
                    </div>
                    <div class="benefit-item">
                        <i class="fas fa-check-circle"></i>
                        <span>Industry insights</span>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="newsletter-stats">
            <div class="stat-item">
                <div class="stat-number">5,000+</div>
                <div class="stat-label">Subscribers</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">98%</div>
                <div class="stat-label">Open Rate</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">Monthly</div>
                <div class="stat-label">Newsletter</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">No Spam</div>
                <div class="stat-label">Guaranteed</div>
            </div>
        </div>
    </div>
</section>

<script>
// Newsletter form handling
document.addEventListener('DOMContentLoaded', function() {
    const newsletterForm = document.getElementById('newsletter-form');
    
    if (newsletterForm) {
        newsletterForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const emailInput = document.getElementById('newsletter-email');
            const submitButton = this.querySelector('button[type="submit"]');
            
            // Disable button and show loading state
            submitButton.disabled = true;
            submitButton.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Subscribing...';
            
            // Get form data
            const formData = new FormData(this);
            
            // Submit via AJAX
            fetch('process-newsletter.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Show success message
                    submitButton.innerHTML = '<i class="fas fa-check"></i> Subscribed!';
                    submitButton.style.backgroundColor = '#28a745';
                    emailInput.value = '';
                    
                    // Show thank you message
                    alert('Thank you for subscribing! Check your email to confirm your subscription.');
                } else {
                    // Show error message
                    submitButton.disabled = false;
                    submitButton.innerHTML = '<i class="fas fa-paper-plane"></i> Subscribe';
                    alert(data.message || 'Something went wrong. Please try again.');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                submitButton.disabled = false;
                submitButton.innerHTML = '<i class="fas fa-paper-plane"></i> Subscribe';
                alert('Something went wrong. Please try again.');
            });
        });
    }
});
</script>