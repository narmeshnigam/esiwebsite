<?php
/**
 * Team & Credentials Page
 * Showcase leadership, certified professionals, and technical credibility
 */

$pageTitle = "Team & Credentials — SecureIndia (ESI‑First)";
$pageDescription = "Meet the experts behind SecureIndia - licensed engineers, certified professionals, and experienced leaders committed to electrical safety and automation excellence across India.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta name="keywords" content="Electrical Safety Experts, Licensed Engineers, CEA Certified, NABL Accredited, ISO Certified, BEE Empanelled, Team SecureIndia, Professional Credentials">
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
    
    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/team.css">
    
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <!-- Open Graph -->
    <meta property="og:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://secureindia.co.in/team.php">
    
    <!-- Organization Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "ProfessionalService",
        "name": "SecureIndia ESI-First",
        "url": "https://secureindia.co.in",
        "description": "Professional electrical safety inspection and automation services",
        "employee": [
            {
                "@type": "Person",
                "name": "Bhanu Chaudhary",
                "jobTitle": "Founder & Chief of Operations"
            },
            {
                "@type": "Person",
                "name": "Anurag Chaudhary",
                "jobTitle": "Non-Executive Director"
            },
            {
                "@type": "Person",
                "name": "Narmesh Nigam",
                "jobTitle": "Director, Technology & Digital Systems"
            },
            {
                "@type": "Person",
                "name": "Hemant Singh",
                "jobTitle": "Sales & Operations Manager"
            },
            {
                "@type": "Person",
                "name": "Lokesh Sharma",
                "jobTitle": "Head of Electrical Installations"
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

    <!-- Hero Section -->
    <?php include 'sections/team/hero.php'; ?>

    <!-- Leadership Team Section -->
    <?php include 'sections/team/leadership.php'; ?>

    <!-- Engineers & Technical Experts Section -->
    <?php include 'sections/team/engineers.php'; ?>

    <!-- Credentials & Certifications Section -->
    <?php include 'sections/team/certifications.php'; ?>

    <!-- Governance & Quality Assurance Section -->
    <?php include 'sections/team/governance.php'; ?>

    <!-- Awards & Recognition Section -->
    <?php include 'sections/team/awards.php'; ?>

    <!-- Join Our Team Section -->
    <?php include 'sections/team/careers.php'; ?>

    <!-- Final CTA Section -->
    <?php include 'sections/team/final-cta.php'; ?>

    <!-- Footer -->
    <?php include_once 'includes/footer.php'; ?>

    <!-- JavaScript Files -->
    <script src="assets/main.js" defer></script>
    <script src="assets/team.js" defer></script>
</body>
</html>