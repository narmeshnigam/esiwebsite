<?php
/**
 * Electrical Safety Inspection (ESI) - Primary Service Page
 * The flagship service page for SecureIndia's core offering
 */

$pageTitle = "Certified Electrical Safety Inspections for Audit, Insurance & Compliance — SecureIndia (ESI‑First)";
$pageDescription = "Get detailed electrical safety inspections conducted by licensed C‑License engineers as per IS 732 and CEA guidelines. NABL‑calibrated instruments, insurance‑ready certificates.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta name="keywords" content="Electrical Safety Inspection, ESI, C License Engineer, NABL Calibrated, IS 732, CEA Guidelines, Insurance Certificate, Compliance Audit, Fire Prevention">
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
    
    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/esi.css">
    
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <!-- Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "name": "Electrical Safety Inspection (ESI)",
        "provider": {
            "@type": "Organization",
            "name": "SecureIndia ESI-First",
            "url": "https://secureindia.co.in"
        },
        "description": "Comprehensive electrical safety inspections conducted by licensed professionals as per IS 732 and CEA guidelines.",
        "areaServed": "India",
        "serviceType": "Electrical Safety Inspection",
        "offers": {
            "@type": "Offer",
            "priceRange": "₹10,000 - ₹1,50,000",
            "priceCurrency": "INR"
        },
        "hasCredential": [
            "C-License Engineers",
            "NABL Calibrated Instruments",
            "IS 732 Compliance",
            "CEA Guidelines"
        ]
    }
    </script>
    
    <!-- Open Graph -->
    <meta property="og:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://secureindia.co.in/electrical-safety-inspection.php">
    <meta property="og:image" content="assets/images/esi-hero-og.jpg">
</head>
<body>
    <!-- Header -->
    <?php include_once 'includes/header.php'; ?>

    <!-- ESI Page Content -->
    <?php include_once 'sections/esi/hero.php'; ?>
    <?php include_once 'sections/esi/trust-bar.php'; ?>
    <?php include_once 'sections/esi/what-is-esi.php'; ?>
    <?php include_once 'sections/esi/why-matters.php'; ?>
    <?php include_once 'sections/esi/process.php'; ?>
    <?php include_once 'sections/esi/deliverables.php'; ?>
    <?php include_once 'sections/esi/equipment.php'; ?>
    <?php include_once 'sections/esi/compliance.php'; ?>
    <?php include_once 'sections/esi/case-studies.php'; ?>
    <?php include_once 'sections/esi/pricing.php'; ?>
    <?php include_once 'sections/esi/faq.php'; ?>
    <?php include_once 'sections/esi/cta.php'; ?>

    <!-- Sticky CTA Bar -->
    <?php include_once 'sections/esi/sticky-cta.php'; ?>

    <!-- Footer -->
    <?php include_once 'includes/footer.php'; ?>

    <!-- JavaScript Files -->
    <script src="assets/js/esi.js" defer></script>
    <script src="assets/js/main.js" defer></script>
</body>
</html>