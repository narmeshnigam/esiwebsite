<?php
/**
 * Case Studies - Index Page
 * Proof wins deals; shows measurable risk reduction, claim approvals, and audit closures by sector
 */

$pageTitle = "Case Studies — SecureIndia (ESI‑First)";
$pageDescription = "Real-world electrical safety inspection case studies. See how we've helped clients reduce risks, pass audits, and ensure compliance across industries.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta name="keywords" content="Case Studies, Success Stories, Risk Reduction, Audit Closure, Electrical Safety Results">
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
    
    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/case-studies.css">
    
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <!-- Open Graph -->
    <meta property="og:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://secureindia.co.in/case-studies.php">
</head>
<body>
    <!-- Floating CTA Button -->
    <div class="floating-cta">
        <a href="get-quote.php" class="btn btn-primary">Get Quote</a>
    </div>

    <!-- WhatsApp Float Button -->
    <div class="whatsapp-float">
        <a href="https://wa.me/919654640101" target="_blank">
            <i class="fab fa-whatsapp"></i>
        </a>
    </div>

    <!-- Header -->
    <?php include_once 'includes/header.php'; ?>

    <!-- Case Studies Hero Section -->
    <?php include 'sections/case-studies/hero.php'; ?>

    <!-- Featured Case Studies Section -->
    <?php include 'sections/case-studies/featured-studies.php'; ?>

    <!-- Industry Success Section -->
    <?php include 'sections/case-studies/industry-success.php'; ?>

    <!-- Process Transparency Section -->
    <?php include 'sections/case-studies/process-transparency.php'; ?>

    <!-- Client Testimonials Section -->
    <?php include 'sections/case-studies/testimonials.php'; ?>

    <!-- Impact Summary Section -->
    <?php include 'sections/case-studies/impact-summary.php'; ?>

    <!-- CTA Section -->
    <?php include_once 'sections/cta.php'; ?>

    <!-- Footer -->
    <?php include_once 'includes/footer.php'; ?>

    <!-- JavaScript Files -->
    <script src="assets/main.js" defer></script>
</body>
</html>