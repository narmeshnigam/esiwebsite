<?php
/**
 * Privacy Policy Page
 * Basic compliance and trust; needed for enterprise procurement
 */

$pageTitle = "Privacy Policy — SecureIndia Data Protection Policies";
$pageDescription = "SecureIndia's privacy policy outlining how we collect, use, and protect your personal information in compliance with data protection regulations.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta name="keywords" content="Privacy Policy, Data Protection, Personal Information, Compliance, Data Processing, User Privacy">
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
    <meta property="og:url" content="https://secureindia.co.in/privacy.php">
</head>
<body>
    <!-- Header -->
    <?php include_once 'includes/header.php'; ?>

    <!-- Coming Soon Section -->
    <section class="coming-soon-section">
        <div class="container">
            <div class="coming-soon-content">
                <h1>Privacy Policy</h1>
                <p class="subtitle">How we protect and handle your personal information</p>
                <div class="coming-soon-message">
                    <i class="fas fa-user-shield"></i>
                    <h2>Page Coming Soon</h2>
                    <p>We're preparing our comprehensive privacy policy that outlines how we collect, use, and protect your personal information in compliance with data protection regulations, essential for building trust and meeting enterprise procurement requirements.</p>
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