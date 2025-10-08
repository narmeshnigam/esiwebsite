# ESI-First (SecureIndia) Website

India's Leading Electrical Safety Inspection Experts website.

## Project Structure

```
esiwebsite/
├── assets/
│   ├── images/          # Image assets (logos, badges, icons)
│   ├── js/              # JavaScript files
│   └── style.css        # Main stylesheet
├── includes/
│   ├── header.php       # Site header component
│   └── footer.php       # Site footer component
├── sections/            # Page sections (hero, services, etc.)
├── index.html          # Static HTML version
├── index.php           # PHP version with includes
└── content.php         # Main content sections
```

## Setup for Local Development

### Requirements
- PHP 7.4 or higher
- Web server (Apache, Nginx, or PHP built-in server)

### Running Locally

1. **Using PHP Built-in Server:**
   ```bash
   cd /path/to/esiwebsite
   php -S localhost:8000
   ```

2. **Access the website:**
   - Open browser to `http://localhost:8000/index.php`
   - Or `http://localhost:8000/index.html` for static version

## Recent Fixes

### Footer Styling Issue (Fixed)
**Problem:** Footer was displaying with white background instead of dark blue.

**Root Causes:**
1. CDATA wrapper in `footer.php` was preventing HTML from rendering properly
2. CSS variable `--bg-grey` was incorrectly set to white (#ffffff)
3. Duplicate `footer-styles.css` file was not being loaded

**Solutions:**
1. Removed CDATA wrapper from `footer.php`
2. Updated `--bg-grey` CSS variable to proper grey (#f5f5f5)
3. Removed duplicate `footer-styles.css` and consolidated all styles in `style.css`
4. Created placeholder SVG images for proper rendering

**Result:** Footer now displays correctly with dark blue background (#1e3a5f).

## Image Assets

The `assets/images/` directory contains SVG placeholder files for:
- Logos (main logo, white logo)
- Certification badges (ISO, CEA, NABL, BEE, Secure)
- Client images
- Certificate images

Replace these placeholders with actual brand assets when available.

## CSS Variables

Key CSS variables defined in `assets/style.css`:

```css
--primary-color: #e31837;     /* SecureIndia Red */
--secondary-color: #1e3a5f;   /* Dark Blue */
--accent-color: #f39c12;      /* Warning Orange */
--text-dark: #2c3e50;
--text-light: #ffffff;
--bg-light: #ffffff;
--bg-grey: #f5f5f5;
```

## File Organization

- **PHP Version (`index.php`)**: Uses PHP includes for modular structure
- **HTML Version (`index.html`)**: Static HTML with inline content
- **Sections**: Reusable section components in `sections/` directory
- **Includes**: Header and footer components in `includes/` directory

## Browser Compatibility

The website is designed to work on:
- Modern browsers (Chrome, Firefox, Safari, Edge)
- Mobile devices (responsive design)
- Tablets and desktops

## Contact Information

For questions or support:
- Email: safety@secureindia.com
- Phone: +91 123 456 7890
- Address: 123 Safety Tower, Sector 15, Gurugram, Haryana 122001
