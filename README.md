# HD Soft - WordPress Theme

A modern, bilingual WordPress theme for software development companies with Japanese and Vietnamese language support.

## Features

- ✨ **Bilingual Support**: Seamless language switching between Japanese and Vietnamese
- 📱 **Responsive Design**: Optimized for desktop, tablet, and mobile devices
- 🎨 **Modern UI**: Clean, professional design with tech-focused aesthetics
- 📄 **5 Complete Pages**: Home, Services, Achievements, About, and Contact
- 📧 **Working Contact Form**: Built-in contact form with email functionality
- ⚡ **Lightweight**: Fast loading with optimized CSS and JavaScript

## Pages

1. **Home (index.php)**: Hero section with company overview, featured services, and achievements
2. **Services (page-services.php)**: Complete service offerings with detailed descriptions
3. **Achievements (page-achievements.php)**: Portfolio showcase with project case studies
4. **About (page-about.php)**: Company information, mission, stats, and technology stack
5. **Contact (page-contact.php)**: Contact form and company contact information

## Installation

### Using with WordPress (Production)

1. Upload the theme folder to `/wp-content/themes/` directory
2. Go to WordPress Admin > Appearance > Themes
3. Activate "HD Soft" theme
4. Create pages with the following templates:
   - Services (Template: Services Page)
   - Achievements (Template: Achievements Page)
   - About (Template: About Page)
   - Contact (Template: Contact Page)
5. Set your homepage as the front page in Settings > Reading

### Development Mode (Standalone Preview)

This theme can be previewed as standalone HTML files without a full WordPress installation:

```bash
php -S 0.0.0.0:5000 -t .
```

Then visit `http://localhost:5000`

## Language Support

The theme supports two languages:
- **Japanese (日本語)**: Default language
- **Vietnamese (Tiếng Việt)**: Secondary language

Language preference is automatically saved to browser localStorage. Users can switch languages using the language switcher in the header.

## Customization

### Colors

Edit the CSS variables in `style.css`:

```css
:root {
  --primary-color: #2563eb;
  --secondary-color: #1e40af;
  --accent-color: #3b82f6;
  --dark-bg: #1a1a2e;
  --light-bg: #f8fafc;
}
```

### Translations

Translations are managed in `functions.php` in the `themeTranslations` array. To add or modify translations:

1. Open `functions.php`
2. Find the `wp_localize_script` function
3. Edit the `ja` or `vi` translation arrays

### Contact Form

The contact form sends emails to the WordPress admin email. To customize:

1. Open `functions.php`
2. Modify the `hdsoft_handle_contact_form()` function
3. Change the `$to` variable to your desired email address

## File Structure

```
/
├── style.css              # Main stylesheet with all theme styles
├── functions.php          # Theme functions and translations
├── header.php            # Header template with navigation
├── footer.php            # Footer template
├── index.php             # Home page template
├── page-services.php     # Services page template
├── page-achievements.php # Achievements page template
├── page-about.php        # About page template
├── page-contact.php      # Contact page template
├── js/
│   └── main.js          # JavaScript for language switching
└── README.md            # This file
```

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers (iOS Safari, Chrome Mobile)

## License

GNU General Public License v2 or later

## Support

For questions or issues, please contact: info@hdsoft.com
