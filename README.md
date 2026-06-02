# Custom Login Brander

A lightweight WordPress plugin to customize the WordPress login page branding (logo) via an admin settings page.

## Features
- Set a custom login logo (URL stored in the database)
- Admin settings page under: **Settings → Login Brander**
- Secure settings handling using WordPress Settings API
- Translation-ready (i18n) strings with text domain: `custom-login-brander`

## Requirements
- WordPress 6.x+ (recommended)
- PHP 7.4+ (recommended)

## Installation
1. Download or clone this repository into:
   `wp-content/plugins/custom-login-brander/`
2. Activate the plugin from **Plugins → Installed Plugins**.

## Usage
1. Go to **Settings → Login Brander**
2. Set your logo URL
3. Visit the login page: `/wp-login.php`

## Development
### Conventional Commits
This project follows Conventional Commits:
- `feat:` new feature
- `fix:` bug fix
- `chore:` maintenance tasks
- `refactor:` refactoring without behavior change

## Roadmap
- Add WordPress Media Uploader to select logo from the Media Library
- Add logo options
- Add custom link URL for the login logo

## License
TBD (choose one: GPL-2.0-or-later recommended for WordPress plugins)
