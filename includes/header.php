<?php
/**
 * Header component
 * Contains the main navigation and CTA button
 */

// Define active page for navigation highlighting
$currentPage = basename($_SERVER['PHP_SELF']);
?>
<header class="site-header">
    <div class="container">
        <nav class="main-nav">
            <div class="nav-brand">
                <a href="/">
                    <img src="assets/images/logo.svg" alt="ESI-First Logo" class="site-logo">
                </a>
            </div>
            <ul class="nav-links">
                <li<?php echo $currentPage == 'services.php' ? ' class="active"' : ''; ?>>
                    <a href="services.php">Services</a>
                </li>
                <li<?php echo $currentPage == 'pricing.php' ? ' class="active"' : ''; ?>>
                    <a href="pricing.php">Pricing</a>
                </li>
                <li<?php echo $currentPage == 'industries.php' ? ' class="active"' : ''; ?>>
                    <a href="industries.php">Industries</a>
                </li>
                <li<?php echo $currentPage == 'about.php' ? ' class="active"' : ''; ?>>
                    <a href="about.php">About</a>
                </li>
                <li<?php echo $currentPage == 'contact.php' ? ' class="active"' : ''; ?>>
                    <a href="contact.php">Contact</a>
                </li>
            </ul>
            <div class="nav-cta">
                <a href="book-site-survey.php" class="btn btn-primary">Book Survey</a>
            </div>
            <button class="mobile-menu-toggle" aria-label="Toggle menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </nav>
    </div>
</header>