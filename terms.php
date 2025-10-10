<?php
/**
 * Terms of Service Page
 * Basic compliance and trust; needed for enterprise procurement
 */

$pageTitle = "Terms of Service — SecureIndia Service Agreement";
$pageDescription = "SecureIndia's terms of service governing the use of our electrical safety inspection services and website. Legal framework for service delivery.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta name="keywords" content="Terms of Service, Service Agreement, Legal Terms, Terms and Conditions, Service Framework, User Agreement">
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
    
    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/style.css">
    
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <!-- Open Graph -->
    <meta property="og:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://secureindia.co.in/terms.php">
</head>
<body>
    <!-- Header -->
    <?php include_once 'includes/header.php'; ?>

    <!-- Coming Soon Section -->
    <section class="coming-soon-section">
        <div class="container">
            <div class="coming-soon-content">
                <h1>Terms of Service</h1>
                <p class="subtitle">Legal framework governing our electrical safety inspection services</p>
                <div class="coming-soon-message">
                    <i class="fas fa-file-contract"></i>
                    <h2>Page Coming Soon</h2>
                    <p>We're finalizing our comprehensive terms of service that govern the use of our electrical safety inspection services and website, providing the legal framework essential for building trust and meeting enterprise procurement requirements.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <?php include_once 'sections/cta.php'; ?>

    <!-- Footer -->
    <?php include_once 'includes/footer.php'; ?>

    <!-- JavaScript Files -->
    <script src="assets/main.js" defer></script>
</body>
</html>