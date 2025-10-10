<?php
/**
 * Team & Credentials Page
 * Humanizes expertise; displays qualifications (C-license, NABL tie-ups, BEE, etc.) and governance to win procurement trust
 */

$pageTitle = "Team & Credentials — SecureIndia Expert Electrical Safety Team";
$pageDescription = "Meet our certified electrical safety inspection team. Qualified professionals with C-license, NABL certifications, BEE registrations, and proven expertise.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta name="keywords" content="Expert Team, C-License Engineers, NABL Certified, BEE Registration, Qualified Professionals, Electrical Safety Experts">
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
    <meta property="og:url" content="https://secureindia.co.in/team.php">
</head>
<body>
    <!-- Header -->
    <?php include_once 'includes/header.php'; ?>

    <!-- Coming Soon Section -->
    <section class="coming-soon-section">
        <div class="container">
            <div class="coming-soon-content">
                <h1>Team & Credentials</h1>
                <p class="subtitle">Meet our certified electrical safety inspection experts and their qualifications</p>
                <div class="coming-soon-message">
                    <i class="fas fa-users-cog"></i>
                    <h2>Page Coming Soon</h2>
                    <p>We're building detailed profiles of our expert team members, showcasing their qualifications including C-licenses, NABL certifications, BEE registrations, and professional credentials to demonstrate our expertise and win procurement trust.</p>
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