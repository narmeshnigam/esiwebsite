<?php
/**
 * Industries We Serve (Index) — SecureIndia (ESI‑First)
 * Industry-specific electrical safety and compliance solutions
 */

$pageTitle = "Industries We Serve — Electrical Safety & Compliance Solutions — SecureIndia (ESI‑First)";
$pageDescription = "Tailored electrical safety inspections for manufacturing, healthcare, data centers, retail, education & more. Industry-specific compliance solutions across India.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta name="keywords" content="Industry Electrical Safety, Manufacturing ESI, Healthcare Compliance, Data Center Inspection, Retail Electrical Audit, Educational Institution Safety">
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
    
    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/css/industries.css">
    
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <!-- Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "name": "Industry-Specific Electrical Safety Inspections",
        "provider": {
            "@type": "Organization",
            "name": "SecureIndia ESI-First",
            "url": "https://secureindia.online"
        },
        "description": "Specialized electrical safety inspection and compliance services for manufacturing, healthcare, data centers, retail, and educational institutions",
        "areaServed": [
            "Delhi", "Gurugram", "Noida", "Faridabad", "Ghaziabad", 
            "Mumbai", "Pune", "Hyderabad", "Bengaluru"
        ],
        "serviceType": [
            "Manufacturing ESI", "Healthcare Electrical Safety", "Data Center Compliance", 
            "Retail Chain Audits", "Educational Institution Safety"
        ]
    }
    </script>
    
    <!-- Open Graph -->
    <meta property="og:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://secureindia.online/industries.php">
    <meta property="og:image" content="assets/images/industries-og.jpg">
</head>
<body>
    <!-- Header -->
    <?php include_once 'includes/header.php'; ?>

    <!-- Industries Page Content -->
    <?php include_once 'sections/industries/hero.php'; ?>
    <?php include_once 'sections/industries/industries-index.php'; ?>
    <?php include_once 'sections/industries/industry-challenges.php'; ?>
    <?php include_once 'sections/industries/case-studies.php'; ?>
    <?php include_once 'sections/industries/standards-compliance.php'; ?>
    <?php include_once 'sections/cta.php'; ?>

    <!-- Footer -->
    <?php include_once 'includes/footer.php'; ?>

    <!-- JavaScript Files -->
    <script src="assets/js/industries.js" defer></script>
    <script src="assets/js/main.js" defer></script>
</body>
</html>