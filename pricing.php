<?php
/**
 * Pricing & Packages - Transparent pricing and value communication
 * Converts hesitant users by reducing cost friction and building trust
 */

$pageTitle = "Clear, Honest, and Customizable Pricing for Every Facility — SecureIndia (ESI‑First)";
$pageDescription = "Transparent electrical safety inspection pricing. From residential societies to industrial units. NABL-certified reports, compliance certificates, and competitive rates.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta name="keywords" content="Electrical Inspection Pricing, ESI Cost, Compliance Audit Rates, NABL Certified Testing, Industrial Inspection Pricing, Commercial ESI Cost">
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
    
    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/pricing.css">
    
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <!-- Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "name": "Electrical Safety Inspection Services",
        "provider": {
            "@type": "Organization",
            "name": "SecureIndia ESI-First",
            "url": "https://secureindia.co.in"
        },
        "description": "Professional electrical safety inspection services with transparent pricing and NABL-certified equipment",
        "areaServed": "India",
        "serviceType": "Electrical Safety Inspection",
        "priceRange": "₹10,000 - ₹1,50,000",
        "offers": [
            {
                "@type": "Offer",
                "name": "Basic Compliance Package",
                "priceRange": "₹10,000+",
                "description": "Visual inspection, IR testing, compliance report"
            },
            {
                "@type": "Offer",
                "name": "Standard Audit Package",
                "priceRange": "₹25,000+", 
                "description": "Complete inspection with thermography and certification"
            },
            {
                "@type": "Offer",
                "name": "Premium Assurance Package",
                "priceRange": "₹45,000+",
                "description": "Full audit with NABL verification and post-inspection support"
            }
        ]
    }
    </script>
    
    <!-- Open Graph -->
    <meta property="og:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://secureindia.co.in/pricing.php">
    <meta property="og:image" content="assets/images/pricing-og.jpg">
</head>
<body>
    <!-- Header -->
    <?php include_once 'includes/header.php'; ?>

    <!-- Pricing Page Content -->
    <?php include_once 'sections/pricing/hero.php'; ?>
    <?php include_once 'sections/pricing/pricing-overview.php'; ?>
    <?php include_once 'sections/pricing/package-breakdown.php'; ?>
    <?php include_once 'sections/pricing/whats-included.php'; ?>
    <?php include_once 'sections/pricing/add-on-services.php'; ?>
    <?php include_once 'sections/pricing/value-justification.php'; ?>
    <?php include_once 'sections/pricing/pricing-faq.php'; ?>
    <?php include_once 'sections/pricing/final-cta.php'; ?>

    <!-- Footer -->
    <?php include_once 'includes/footer.php'; ?>

    <!-- JavaScript Files -->
    <script src="assets/pricing.js" defer></script>
    <script src="assets/main.js" defer></script>
</body>
</html>