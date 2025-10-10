<?php
/**
 * About Omvix / SecureIndia Page
 * De-risks vendor selection by explaining legacy, licenses, coverage, leadership, and quality philosophy
 */

$pageTitle = "About SecureIndia — Leading Electrical Safety Inspection Company";
$pageDescription = "Learn about SecureIndia's legacy, licenses, coverage, leadership team, and quality philosophy. Trusted electrical safety inspection services across India.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta name="keywords" content="About SecureIndia, Company History, Leadership Team, Quality Philosophy, Electrical Safety Expertise">
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
    <meta property="og:url" content="https://secureindia.co.in/about.php">
</head>
<body>
    <!-- Header -->
    <?php include_once 'includes/header.php'; ?>

    <!-- Coming Soon Section -->
    <section class="coming-soon-section">
        <div class="container">
            <div class="coming-soon-content">
                <h1>About SecureIndia</h1>
                <p class="subtitle">Leading electrical safety inspection company with proven expertise and quality commitment</p>
                <div class="coming-soon-message">
                    <i class="fas fa-building"></i>
                    <h2>Page Coming Soon</h2>
                    <p>We're crafting a comprehensive company story covering our legacy, licenses, nationwide coverage, leadership team, and quality philosophy to help you understand why SecureIndia is the trusted choice for electrical safety inspections.</p>
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