<?php
/**
 * Partner With Us Page
 * Captures channel partners (FM companies, consultants) and drives referral business with SLAs
 */

$pageTitle = "Partner With Us — SecureIndia Partnership Program";
$pageDescription = "Join SecureIndia's partner network. Partnership opportunities for facility management companies, consultants, and referral partners with dedicated SLAs.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta name="keywords" content="Partnership Program, Channel Partners, Facility Management, Consultants, Referral Partners, Business Partnership">
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
    <meta property="og:url" content="https://secureindia.co.in/partner.php">
</head>
<body>
    <!-- Header -->
    <?php include_once 'includes/header.php'; ?>

    <!-- Coming Soon Section -->
    <section class="coming-soon-section">
        <div class="container">
            <div class="coming-soon-content">
                <h1>Partner With Us</h1>
                <p class="subtitle">Join our network of channel partners and drive referral business together</p>
                <div class="coming-soon-message">
                    <i class="fas fa-handshake"></i>
                    <h2>Page Coming Soon</h2>
                    <p>We're developing a comprehensive partnership program for facility management companies, consultants, and other channel partners with dedicated SLAs, training resources, and referral incentives to drive mutual business growth.</p>
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