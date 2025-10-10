<?php
/**
 * Contact Us Page
 * Multiple channels (phone, WhatsApp, email, form), mapped to SLA and region; reduces drop-offs for high-intent users
 */

$pageTitle = "Contact Us — SecureIndia (ESI‑First)";
$pageDescription = "Get in touch with our electrical safety inspection experts. Multiple contact options including phone, WhatsApp, email, and online form with regional support.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta name="keywords" content="Contact SecureIndia, Electrical Safety Inspection Contact, Phone Support, WhatsApp Support, Regional Office">
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
    
    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/contact.css">
    
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <!-- Open Graph -->
    <meta property="og:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://secureindia.co.in/contact.php">
</head>
<body>
    <!-- Header -->
    <?php include_once 'includes/header.php'; ?>

    <!-- Hero Section -->
    <?php include_once 'sections/contact/hero.php'; ?>

    <!-- Contact Info Section -->
    <?php include_once 'sections/contact/contact-info.php'; ?>

    <!-- Contact Form Section -->
    <?php include_once 'sections/contact/contact-form.php'; ?>

    <!-- Regional Offices Section -->
    <?php include_once 'sections/contact/regional-offices.php'; ?>

    <!-- Alternative Contact Options -->
    <?php include_once 'sections/contact/alternative-contact.php'; ?>

    <!-- Final CTA Section -->
    <?php include_once 'sections/contact/final-cta.php'; ?>

    <!-- Footer -->
    <?php include_once 'includes/footer.php'; ?>

    <!-- JavaScript Files -->
    <script src="assets/main.js" defer></script>
    <script>
        // Handle form success/error messages
        document.addEventListener('DOMContentLoaded', function() {
            const urlParams = new URLSearchParams(window.location.search);
            
            if (urlParams.get('success') === '1') {
                showSuccessMessage('Thank you! Your message has been sent successfully. We\'ll get back to you within 24 hours.');
            }
            
            if (urlParams.get('error')) {
                showErrorMessage(urlParams.get('error'));
            }
            
            // Smooth scroll for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth'
                        });
                    }
                });
            });
        });
        
        function showSuccessMessage(message) {
            const alertDiv = document.createElement('div');
            alertDiv.className = 'alert alert-success';
            alertDiv.innerHTML = `
                <i class="fas fa-check-circle"></i>
                <span>${message}</span>
                <button type="button" class="alert-close" onclick="this.parentElement.remove()">
                    <i class="fas fa-times"></i>
                </button>
            `;
            document.body.insertBefore(alertDiv, document.body.firstChild);
            
            // Auto-remove after 5 seconds
            setTimeout(() => {
                if (alertDiv.parentNode) {
                    alertDiv.remove();
                }
            }, 5000);
        }
        
        function showErrorMessage(message) {
            const alertDiv = document.createElement('div');
            alertDiv.className = 'alert alert-error';
            alertDiv.innerHTML = `
                <i class="fas fa-exclamation-circle"></i>
                <span>${message}</span>
                <button type="button" class="alert-close" onclick="this.parentElement.remove()">
                    <i class="fas fa-times"></i>
                </button>
            `;
            document.body.insertBefore(alertDiv, document.body.firstChild);
            
            // Auto-remove after 7 seconds
            setTimeout(() => {
                if (alertDiv.parentNode) {
                    alertDiv.remove();
                }
            }, 7000);
        }
    </script>
    
    <style>
        .alert {
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 1rem 1.5rem;
            border-radius: 4px;
            z-index: 9999;
            display: flex;
            align-items: center;
            gap: 0.75rem;
            max-width: 400px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            animation: slideIn 0.3s ease-out;
        }
        
        .alert-success {
            background: #d4edda;
            border: 1px solid #c3e6cb;
            color: #155724;
        }
        
        .alert-error {
            background: #f8d7da;
            border: 1px solid #f5c6cb;
            color: #721c24;
        }
        
        .alert-close {
            background: none;
            border: none;
            color: inherit;
            cursor: pointer;
            margin-left: auto;
            opacity: 0.7;
            transition: opacity 0.3s ease;
        }
        
        .alert-close:hover {
            opacity: 1;
        }
        
        @keyframes slideIn {
            from {
                transform: translateX(100%);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }
        
        @media (max-width: 768px) {
            .alert {
                top: 10px;
                right: 10px;
                left: 10px;
                max-width: none;
            }
        }
    </style>
</body>
</html>