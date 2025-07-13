# wordpress-homepage
Custom WordPress theme built from scratch

# WordPress Homepage – Custom Theme

A fully custom-built WordPress theme developed from scratch based on the provided Figma design. No page builders were used — only core WordPress functionality, block editor compatibility, and custom code.

---

## 🚀 Features

- ✅ **Custom WordPress Theme** – built with PHP, HTML5, CSS, and JavaScript
- ✅ **Responsive Design** – mobile, tablet, and desktop layouts
- ✅ **Custom Post Type:** Testimonials
- ✅ **Performance Optimizations** – lazy loading, image compression, optimized assets
- ✅ **SEO Best Practices** – semantic tags, meta support, alt text
- ✅ **Clean, Modular Code** – follows WordPress development standards


---

## 🛠️ Installation Instructions

1. Download the theme ZIP: `wordpress-homepage.zip`
2. Upload to your WordPress site:
   - **Via WP Admin:** Go to `Appearance > Themes > Add New > Upload Theme`
   - **Or manually:** Extract into `wp-content/themes/wordpress-homepage/`
3. Activate the theme from the **Appearance > Themes** panel.
4. Create a page named **Home** and assign it as the **Static Front Page** in:
   - `Settings > Reading > Your homepage displays > A static page`
5. Add some testimonials using the **Testimonials** custom post type in WP Admin.

---

## 🧱 Custom Post Type: Testimonials

Registered via `functions.php` as `testimonial`.

### Features:
- Supports: `title`, `editor`, `featured image`
- Accessible from WP Admin sidebar
- Automatically displayed on the homepage using a custom loop (`front-page.php`)

---

## 🎨 Design Implementation

- Header & hero sections match the Figma design layout
- Navigation uses `wp_nav_menu()` (registers `primary` menu location)
- Hero includes overlay text + call-to-action button
- Testimonials displayed in a responsive grid

---

## ⚙️ Performance Optimizations

- Images lazy-loaded with `loading="lazy"`
- CSS/JS enqueued properly via `functions.php`
- Semantic HTML5 structure improves accessibility & SEO
- Minimal, modular code for faster load time

---

## ✨ SEO Enhancements

- Uses `<main>`, `<section>`, `<header>`, `<footer>` tags appropriately
- `alt` attributes included in all images
- Compatible with Yoast SEO or similar plugins

---

## 🧑‍💻 Author

**Manish Raj**  



