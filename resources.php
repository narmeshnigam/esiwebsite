<?php
/**
 * Resources / Blog - Index Page
 * Captures long-tail search, nurtures trust, and supports sales enablement with explainers and checklists
 */

$pageTitle = "Resources & Blog — SecureIndia (ESI‑First)";
$pageDescription = "Electrical safety resources, guides, checklists, and expert insights. Learn about compliance requirements, best practices, and safety standards.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta name="keywords" content="Electrical Safety Resources, Compliance Guides, Safety Checklists, Expert Insights, Best Practices">
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
    <meta property="og:url" content="https://secureindia.co.in/resources.php">
</head>
<body>
    <!-- Header -->
    <?php include_once 'includes/header.php'; ?>

    <!-- Coming Soon Section -->
    <section class="coming-soon-section">
        <div class="container">
            <div class="coming-soon-content">
                <h1>Resources & Blog</h1>
                <p class="subtitle">Expert insights, guides, and resources for electrical safety and compliance</p>
                <div class="coming-soon-message">
                    <i class="fas fa-book-open"></i>
                    <h2>Page Coming Soon</h2>
                    <p>We're creating comprehensive resources including safety guides, compliance checklists, expert articles, and educational content to help you understand electrical safety requirements and best practices.</p>
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