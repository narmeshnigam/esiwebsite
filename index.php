<?php
/**
 * Main index file
 * Implements modular structure for the website
 */

// Page metadata
$pageTitle = "ESI-First (SecureIndia) - India's Leading Electrical Safety Inspection Experts";
$pageDescription = "India's Most Trusted Electrical Safety Inspection Experts - SecureIndia provides certified inspections by licensed professionals for facility compliance, safety, and insurance validity.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta name="keywords" content="Electrical Safety Inspection, ESI, SecureIndia, Facility Safety, Compliance, Insurance Certification, CEA Registered, NABL">
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
    
    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/style.css">
    
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <!-- Structured Data Markup -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "name": "SecureIndia ESI-First",
        "description": "Professional Electrical Safety Inspection services across India",
        "image": "assets/images/logo.png",
        "priceRange": "₹₹₹",
        "@type": "ProfessionalService",
        "serviceType": "Electrical Safety Inspection"
    }
    </script>
</head>
<body>
    <!-- Floating Elements -->
    <div class="floating-cta">
        <a href="#contact" class="btn-primary">Book Inspection</a>
    </div>

    <div class="whatsapp-float">
        <a href="https://wa.me/yourwhatsappnumber" target="_blank">
            <i class="fab fa-whatsapp"></i>
        </a>
    </div>

    <!-- Include Header -->
    <?php include_once 'includes/header.php'; ?>

    <!-- Include Main Content Sections -->
    <?php include_once 'content.php'; ?>

    <!-- Include Footer -->
    <?php include_once 'includes/footer.php'; ?>

    <!-- JavaScript Files -->
    <script src="assets/js/header.js" defer></script>
    <script src="assets/js/main.js" defer></script>
    <script src="assets/js/conversion.js" defer></script>
</body>
</html>