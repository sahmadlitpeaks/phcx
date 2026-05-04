=== Precision Health Clinix ===

Contributors: precisionhealthclinix
Tested up to: 6.6
Requires PHP: 7.4
Stable tag: 1.0.0
License: GPL v2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A single-page WordPress theme for Precision Health Clinix, a precision medicine clinic.

== Description ==

Custom theme that ships the entire Precision Health Clinix marketing site as a WordPress
front-page (header + value strip + about + vision + team + methodology + clinic services +
homecare services + telehealth services + CTA band + contact form + footer + floating
"Book Now" pill).

The theme is intentionally laid out at the root of this repository so the repo can be
deployed as the active theme directory. The expected target path on the server is
`wp-content/themes/phcx/`.

== Installation ==

1. Connect this repository to the server so its contents land inside
   `wp-content/themes/phcx/` (or zip the repo and upload it via Appearance > Themes).
2. Activate **Precision Health Clinix** under Appearance > Themes.
3. (Optional) Appearance > Menus &mdash; create a menu and assign it to the
   "Primary Menu" location to override the hardcoded fallback. Anchor links should be
   the home URL with a hash, e.g. `https://example.com/#about`.
4. (Optional) Appearance > Customize > Site Identity &mdash; upload a Custom Logo to
   replace the static `assets/img/logo.png`.

== Files ==

* `style.css`       Theme metadata + full design system stylesheet.
* `functions.php`   Theme setup, asset enqueues, menu registration, helpers.
* `header.php`      Document head, sticky header, primary nav, opens `<main>`.
* `footer.php`      Closes `<main>`, dark footer, floating "Book Now" CTA.
* `front-page.php`  The single-page marketing layout (hero through contact).
* `index.php`       Fallback loop template for archive/search results.
* `single.php`      Single post template.
* `page.php`        Default page template.
* `404.php`         404 template.
* `script.js`       Mobile nav toggle, scroll reveal, stat counters,
                    sticky-shadow + floating-CTA visibility, contact-form handler.
* `assets/`         Brand assets (logo, hero/about/vision/clinic/telehealth scenes,
                    team photos).

== Notes ==

* Service-card photos point to Unsplash CDN URLs for demo only; replace with
  proper media library uploads before launch.
* The contact form is currently client-side only (success state via JS).
  Wire it to Contact Form 7, WPForms, Fluent Forms, or admin-ajax for production.

== Changelog ==

= 1.0.0 =
* Initial release. Converted the static marketing site to a WordPress theme.
