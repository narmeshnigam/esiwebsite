<?php
/**
 * Locations We Serve Page
 * NCR + metro city pages improve local SEO and trust ("near me" + quick response) for urgent inspections
 */

$pageTitle = "Locations We Serve — SecureIndia (ESI‑First)";
$pageDescription = "Serving clients across India with fast, certified, and local electrical safety inspections, energy audits, and automation solutions across all major metro cities.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta name="keywords" content="Electrical Safety Near Me, NCR Inspection Services, Metro City Coverage, Local Electrical Audit, Quick Response, Delhi ESI, Mumbai Inspection, Bangalore Audit">
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
    
    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/locations.css">
    
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <!-- Open Graph -->
    <meta property="og:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://secureindia.co.in/locations.php">
    
    <!-- Local Business Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "SecureIndia ESI-First",
        "url": "https://secureindia.co.in",
        "areaServed": [
            {
                "@type": "City",
                "name": "Delhi NCR"
            },
            {
                "@type": "City",
                "name": "Mumbai"
            },
            {
                "@type": "City",
                "name": "Bangalore"
            },
            {
                "@type": "City",
                "name": "Hyderabad"
            },
            {
                "@type": "City",
                "name": "Pune"
            },
            {
                "@type": "City",
                "name": "Chennai"
            }
        ]
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

    <!-- Locations Hero Section -->
    <?php include 'sections/locations/hero.php'; ?>

    <!-- Major Cities Section -->
    <?php include 'sections/locations/major-cities.php'; ?>

    <!-- Local Contact Section -->
    <?php include 'sections/locations/local-contact.php'; ?>

    <!-- Service Availability Section -->
    <?php include 'sections/locations/service-availability.php'; ?>

    <!-- Testimonials Section -->
    <?php include 'sections/locations/testimonials.php'; ?>

    <!-- CTA Section -->
    <?php include_once 'sections/cta.php'; ?>

    <!-- Footer -->
    <?php include_once 'includes/footer.php'; ?>

    <!-- JavaScript Files -->
    <script src="assets/main.js" defer></script>
    <script src="assets/locations.js" defer></script>
</body>
</html>