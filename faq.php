<?php
/**
 * FAQ (Master) Page
 * Clears recurring objections around scope, shutdowns, deliverables, and certificate validity to improve conversions
 */

$pageTitle = "Frequently Asked Questions — SecureIndia Electrical Safety FAQ";
$pageDescription = "Common questions about electrical safety inspections, scope, shutdowns, deliverables, and certificate validity. Get answers from SecureIndia experts.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta name="keywords" content="FAQ, Electrical Safety Questions, Inspection Scope, Certificate Validity, Common Questions, Expert Answers">
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
    <meta property="og:url" content="https://secureindia.co.in/faq.php">
</head>
<body>
    <!-- Header -->
    <?php include_once 'includes/header.php'; ?>

    <!-- Coming Soon Section -->
    <section class="coming-soon-section">
        <div class="container">
            <div class="coming-soon-content">
                <h1>Frequently Asked Questions</h1>
                <p class="subtitle">Get answers to common questions about electrical safety inspections and our services</p>
                <div class="coming-soon-message">
                    <i class="fas fa-question-circle"></i>
                    <h2>Page Coming Soon</h2>
                    <p>We're compiling comprehensive answers to frequently asked questions about inspection scope, shutdown requirements, deliverables, certificate validity, and other common concerns to help improve your understanding and decision-making process.</p>
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