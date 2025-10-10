<?php
/**
 * Get a Quote (RFQ) - Main Conversion Page
 * Professional lead capture form for electrical safety inspection quotes
 */

$pageTitle = "Request a Customized Electrical Safety Inspection Quote — SecureIndia (ESI‑First)";
$pageDescription = "Get a tailored quote for electrical safety inspection from certified C‑License engineers. Secure form, 24‑hour response, insurance‑ready certificates.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta name="keywords" content="Electrical Safety Inspection Quote, ESI Quote, C License Engineer, NABL Calibrated, Insurance Certificate, Compliance Quote">
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
    
    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/quote.css">
    
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <!-- Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebPage",
        "name": "Get Quote - Electrical Safety Inspection",
        "description": "Request a customized quote for electrical safety inspection services",
        "provider": {
            "@type": "Organization",
            "name": "SecureIndia ESI-First",
            "url": "https://secureindia.co.in"
        },
        "mainEntity": {
            "@type": "Service",
            "name": "Electrical Safety Inspection Quote",
            "serviceType": "Electrical Safety Inspection",
            "provider": {
                "@type": "Organization",
                "name": "SecureIndia ESI-First"
            }
        }
    }
    </script>
    
    <!-- Open Graph -->
    <meta property="og:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://secureindia.co.in/get-quote.php">
    <meta property="og:image" content="assets/images/quote-og.jpg">
</head>
<body>
    <!-- Header -->
    <?php include_once 'includes/header.php'; ?>

    <!-- Quote Page Content -->
    <?php include_once 'sections/quote/hero.php'; ?>
    <?php include_once 'sections/quote/form.php'; ?>
    <?php include_once 'sections/quote/process.php'; ?>
    <?php include_once 'sections/quote/why-choose.php'; ?>
    <?php include_once 'sections/quote/contact-options.php'; ?>
    <?php include_once 'sections/quote/faq-snippet.php'; ?>
    <?php include_once 'sections/cta.php'; ?>

    <!-- Help Chat Widget -->
    <?php include_once 'sections/quote/help-chat.php'; ?>

    <!-- Footer -->
    <?php include_once 'includes/footer.php'; ?>

    <!-- JavaScript Files -->
    <script src="assets/js/quote.js" defer></script>
    <script src="assets/js/main.js" defer></script>
</body>
</html>