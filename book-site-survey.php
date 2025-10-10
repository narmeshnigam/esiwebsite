<?php
/**
 * Book a Site Survey - High-Intent Conversion Page
 * Schedule certified electrical site survey visits
 */

$pageTitle = "Book a Certified Electrical Site Survey — SecureIndia (ESI‑First)";
$pageDescription = "Schedule a professional electrical site survey with certified C‑License engineers. Free assessment, accurate estimates, compliance preparation. Book within 24 hours.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta name="keywords" content="Electrical Site Survey, C License Engineer, Site Assessment, Pre-Inspection, Compliance Survey, NABL Calibrated">
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
    
    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/css/survey.css">
    
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <!-- Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "name": "Electrical Site Survey",
        "provider": {
            "@type": "Organization",
            "name": "SecureIndia ESI-First",
            "url": "https://secureindia.co.in"
        },
        "description": "Professional electrical site survey and assessment services conducted by certified C‑License engineers",
        "areaServed": [
            "Delhi", "Gurugram", "Noida", "Faridabad", "Ghaziabad", 
            "Mumbai", "Pune", "Hyderabad", "Bengaluru"
        ],
        "serviceType": "Electrical Site Survey",
        "offers": {
            "@type": "Offer",
            "availability": "Monday-Saturday",
            "validFrom": "2024-01-01"
        }
    }
    </script>
    
    <!-- Open Graph -->
    <meta property="og:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://secureindia.co.in/book-site-survey.php">
    <meta property="og:image" content="assets/images/survey-og.jpg">
</head>
<body>
    <!-- Header -->
    <?php include_once 'includes/header.php'; ?>

    <!-- Site Survey Page Content -->
    <?php include_once 'sections/survey/hero.php'; ?>
    <?php include_once 'sections/survey/why-survey.php'; ?>
    <?php include_once 'sections/survey/process.php'; ?>
    <?php include_once 'sections/survey/booking-form.php'; ?>
    <?php include_once 'sections/survey/certifications.php'; ?>
    <?php include_once 'sections/survey/add-on-options.php'; ?>
    <?php include_once 'sections/survey/regional-availability.php'; ?>
    <?php include_once 'sections/survey/testimonials.php'; ?>
    <?php include_once 'sections/survey/final-cta.php'; ?>

    <!-- Floating Contact Buttons -->
    <?php include_once 'sections/survey/floating-contact.php'; ?>

    <!-- Footer -->
    <?php include_once 'includes/footer.php'; ?>

    <!-- JavaScript Files -->
    <script src="assets/js/survey.js" defer></script>
    <script src="assets/js/main.js" defer></script>
</body>
</html>