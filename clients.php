<?php
/**
 * Clients & Testimonials Page
 * Social proof and recognizable logos compress evaluation time for first-time buyers
 */

$pageTitle = "Clients & Testimonials — SecureIndia Success Stories";
$pageDescription = "See what our clients say about SecureIndia's electrical safety inspection services. Testimonials and case studies from satisfied customers across industries.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta name="keywords" content="Client Testimonials, Customer Reviews, Success Stories, Social Proof, Satisfied Customers, Electrical Safety Results">
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
    
    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/style.css">
    
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <!-- Open Graph -->
    <meta property="og:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://secureindia.co.in/clients.php">
</head>
<body>
    <!-- Header -->
    <?php include_once 'includes/header.php'; ?>

    <!-- Coming Soon Section -->
    <section class="coming-soon-section">
        <div class="container">
            <div class="coming-soon-content">
                <h1>Clients & Testimonials</h1>
                <p class="subtitle">Trusted by leading organizations across industries for electrical safety inspections</p>
                <div class="coming-soon-message">
                    <i class="fas fa-handshake"></i>
                    <h2>Page Coming Soon</h2>
                    <p>We're compiling testimonials, client logos, and success stories from our satisfied customers to provide social proof and help first-time buyers make confident decisions about our electrical safety inspection services.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <?php include_once 'sections/cta.php'; ?>

    <!-- Footer -->
    <?php include_once 'includes/footer.php'; ?>

    <!-- JavaScript Files -->
    <script src="assets/main.js" defer></script>
</body>
</html>