<?php
/**
 * Clients & Testimonials Page
 * Showcase client portfolio, success stories, and customer testimonials
 */

$pageTitle = "Clients & Testimonials — SecureIndia (ESI‑First)";
$pageDescription = "Trusted by 200+ leading businesses across India. Read real testimonials from clients who rely on SecureIndia for certified electrical safety inspections and compliance.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta name="keywords" content="Client Testimonials, Customer Reviews, SecureIndia Clients, Safety Inspection Reviews, Compliance Success Stories, Trusted Companies">
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
    
    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/clients.css">
    
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <!-- Open Graph -->
    <meta property="og:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://secureindia.co.in/clients.php">
    
    <!-- Review Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "SecureIndia ESI-First",
        "url": "https://secureindia.co.in",
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "4.9",
            "reviewCount": "200",
            "bestRating": "5",
            "worstRating": "1"
        }
    }
    </script>
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

    <!-- Hero Section -->
    <?php include 'sections/clients/hero.php'; ?>

    <!-- Client Logos Section -->
    <?php include 'sections/clients/client-logos.php'; ?>

    <!-- Testimonials Carousel Section -->
    <?php include 'sections/clients/testimonials.php'; ?>

    <!-- Industry Achievements Section -->
    <?php include 'sections/clients/achievements.php'; ?>

    <!-- Partner Testimonials Section -->
    <?php include 'sections/clients/partners.php'; ?>

    <!-- Video Testimonials Section -->
    <?php include 'sections/clients/videos.php'; ?>

    <!-- Feedback Form Section -->
    <?php include 'sections/clients/feedback-form.php'; ?>

    <!-- Final CTA Section -->
    <?php include 'sections/clients/final-cta.php'; ?>

    <!-- Footer -->
    <?php include_once 'includes/footer.php'; ?>

    <!-- JavaScript Files -->
    <script src="assets/main.js" defer></script>
    <script src="assets/clients.js" defer></script>
</body>
</html>