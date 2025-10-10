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
    <link rel="stylesheet" href="assets/about.css">
    
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

    <!-- About Page Content -->
    <?php include_once 'sections/about/hero.php'; ?>
    <?php include_once 'sections/about/journey.php'; ?>
    <?php include_once 'sections/about/mission-vision.php'; ?>
    <?php include_once 'sections/about/values.php'; ?>
    <?php include_once 'sections/about/reach.php'; ?>
    <?php include_once 'sections/about/leadership.php'; ?>
    <?php include_once 'sections/about/certifications.php'; ?>
    <?php include_once 'sections/about/csr.php'; ?>
    <?php include_once 'sections/about/testimonials.php'; ?>
    <?php include_once 'sections/about/final-cta.php'; ?>

    <!-- Footer -->
    <?php include_once 'includes/footer.php'; ?>

    <!-- JavaScript Files -->
    <script src="assets/main.js" defer></script>
</body>
</html>