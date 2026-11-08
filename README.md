# Complete Local WordPress Development Setup
Student: Raheema Tauqeer
Project: Phase 1 - WordPress Foundations and Theme Development

## Overview
Complete local WordPress development environment with custom database configuration, custom theme + child theme, 5 essential plugins, custom hooks and custom user role capabilities.

## Environment Setup
1. Install XAMPP / LocalWP
2. Start Apache + MySQL
3. Create database wordpress_project in phpMyAdmin
4. Copy this project to htdocs/wordpress-project/
5. Open http://localhost/wordpress-project/ and run installer
6. Login to /wp-admin

## Database Configuration
See wp-config.php - DB_NAME: wordpress_project, DB_USER: root, DB_PASSWORD: empty (local), DB_HOST: localhost, Table Prefix: wp_, WP_DEBUG: true

## Theme
- Parent Theme: wp-content/themes/raheema-theme/
- Child Theme: wp-content/themes/raheema-child/ - Enqueues parent + child styles

## Plugins (5 Essential)
1. Yoast SEO - SEO
2. Wordfence Security - Security
3. WPForms Lite - Contact Forms
4. WooCommerce - eCommerce
5. UpdraftPlus - Backup

## Hooks in functions.php
Action Hooks (5):
1. raheema_enqueue_assets - wp_enqueue_scripts
2. raheema_setup_theme - after_setup_theme
3. raheema_register_menus - after_setup_theme
4. raheema_custom_footer - wp_footer
5. raheema_add_dashboard_widget - wp_dashboard_setup

Filter Hooks (3):
1. raheema_excerpt_length - excerpt_length -> 40
2. raheema_custom_title - the_title
3. raheema_body_class - body_class

## Custom User Role
Role: project_manager - Capabilities: read, edit_posts, publish_posts, upload_files, edit_pages

## Author
Raheema Tauqeer
