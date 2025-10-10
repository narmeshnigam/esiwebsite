<?php
/**
 * Glossary Page
 * Demystifies technical language (IS 732, harmonics, IR, PQA), helping non-technical decision-makers say yes
 */

$pageTitle = "Electrical Safety Glossary — SecureIndia Technical Terms Guide";
$pageDescription = "Understand electrical safety terminology, standards like IS 732, technical concepts including harmonics, IR testing, PQA, and more. Simplified for decision-makers.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta name="keywords" content="Electrical Glossary, IS 732, Harmonics, IR Testing, PQA, Technical Terms, Electrical Standards, Safety Terminology">
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
    <meta property="og:url" content="https://secureindia.co.in/glossary.php">
</head>
<body>
    <!-- Header -->
    <?php include_once 'includes/header.php'; ?>

    <!-- Coming Soon Section -->
    <section class="coming-soon-section">
        <div class="container">
            <div class="coming-soon-content">
                <h1>Electrical Safety Glossary</h1>
                <p class="subtitle">Simplified explanations of technical terms and standards for better understanding</p>
                <div class="coming-soon-message">
                    <i class="fas fa-book"></i>
                    <h2>Page Coming Soon</h2>
                    <p>We're creating a comprehensive glossary that demystifies technical language including IS 732, harmonics, IR testing, PQA, and other electrical safety terminology to help non-technical decision-makers understand and make informed choices.</p>
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