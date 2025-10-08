<?php
/**
 * Services Overview Page
 * Displays comprehensive overview of all SecureIndia services
 */

$pageTitle = "Services Overview — SecureIndia (ESI‑First)";
$pageDescription = "Explore SecureIndia's comprehensive electrical safety and compliance solutions. From inspections to certifications, ensure your facility is audit-ready and fully compliant.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta name="keywords" content="Electrical Safety Inspection, Energy Audit, Thermography Analysis, Earthing Protection, Load Balancing, Power Quality Audit, Fire Safety Compliance, Safety Certification">
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
    
    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/services.css">
    
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <!-- Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "name": "SecureIndia Electrical Safety Services",
        "provider": {
            "@type": "Organization",
            "name": "SecureIndia ESI-First"
        },
        "description": "Comprehensive electrical safety and compliance solutions including inspections, audits, and certifications.",
        "areaServed": "India",
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Electrical Safety Services",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Electrical Safety Inspection (ESI)"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Energy Audit"
                    }
                }
            ]
        }
    }
    </script>
</head>
<body>
    <!-- Header -->
    <?php include_once 'includes/header.php'; ?>

    <!-- Services Content -->
    <?php include_once 'sections/services/hero.php'; ?>
    <?php include_once 'sections/services/quick-index.php'; ?>
    <?php include_once 'sections/services/features.php'; ?>
    <?php include_once 'sections/services/methodology.php'; ?>
    <?php include_once 'sections/services/industries.php'; ?>
    <?php include_once 'sections/services/compliance.php'; ?>
    <?php include_once 'sections/services/case-studies.php'; ?>
    <?php include_once 'sections/services/cta.php'; ?>

    <!-- Footer -->
    <?php include_once 'includes/footer.php'; ?>

    <!-- JavaScript Files -->
    <script src="assets/js/services.js" defer></script>
    <script src="assets/js/main.js" defer></script>
</body>
</html>