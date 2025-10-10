<?php
/**
 * Media & PR Page
 * Third-party mentions boost credibility in due diligence
 */

$pageTitle = "Media & PR — SecureIndia in the News";
$pageDescription = "SecureIndia media coverage, press releases, and third-party mentions. Building credibility through industry recognition and news coverage.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta name="keywords" content="Media Coverage, Press Releases, Industry Recognition, News, Third-party Mentions, Credibility">
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
    <meta property="og:url" content="https://secureindia.co.in/media.php">
</head>
<body>
    <!-- Header -->
    <?php include_once 'includes/header.php'; ?>

    <!-- Coming Soon Section -->
    <section class="coming-soon-section">
        <div class="container">
            <div class="coming-soon-content">
                <h1>Media & PR</h1>
                <p class="subtitle">SecureIndia in the news and industry recognition</p>
                <div class="coming-soon-message">
                    <i class="fas fa-newspaper"></i>
                    <h2>Page Coming Soon</h2>
                    <p>We're compiling our media coverage, press releases, and third-party mentions to showcase industry recognition and build credibility that supports due diligence processes for potential clients and partners.</p>
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