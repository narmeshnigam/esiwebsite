<?php
/**
 * Resources / Blog - Index Page
 * Knowledge hub for electrical safety & smart automation
 */

$pageTitle = "Resources & Blog — SecureIndia (ESI‑First)";
$pageDescription = "Your knowledge hub for electrical safety & smart automation. Guides, checklists, and expert insights to help you stay compliant, efficient, and future-ready.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta name="keywords" content="Electrical Safety Blog, Compliance Guides, Smart Automation, ESI Resources, Safety Checklists, Energy Efficiency">
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
    
    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/resources.css">
    
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <!-- Open Graph -->
    <meta property="og:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://secureindia.co.in/resources.php">
    
    <!-- Schema.org markup for Blog -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Blog",
        "name": "SecureIndia Resources & Blog",
        "description": "Expert insights on electrical safety, compliance, and smart automation",
        "publisher": {
            "@type": "Organization",
            "name": "SecureIndia ESI-First"
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

    <!-- Resources Hero Section -->
    <?php include 'sections/resources/hero.php'; ?>

    <!-- Featured Articles Section -->
    <?php include 'sections/resources/featured-articles.php'; ?>

    <!-- Resource Categories Section -->
    <?php include 'sections/resources/categories.php'; ?>

    <!-- Downloadable Guides Section -->
    <?php include 'sections/resources/downloads.php'; ?>

    <!-- Educational Videos Section -->
    <?php include 'sections/resources/videos.php'; ?>

    <!-- Newsletter Subscription Section -->
    <?php include 'sections/resources/newsletter.php'; ?>

    <!-- CTA Section -->
    <?php include_once 'sections/cta.php'; ?>

    <!-- Footer -->
    <?php include_once 'includes/footer.php'; ?>

    <!-- JavaScript Files -->
    <script src="assets/main.js" defer></script>
    <script src="assets/resources.js" defer></script>
</body>
</html>