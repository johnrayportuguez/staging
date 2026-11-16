# Staging

Staging is a lightweight, responsive classic WordPress theme by JR. It uses PHP templates, supports the block editor, and is intended to be customized through Staging Child.

## Install

1. In WordPress, go to **Appearance → Themes → Add New → Upload Theme**.
2. Upload `staging.zip`, install it, and keep it installed.
3. Upload `staging-child.zip` and activate **Staging Child**.

## Configure

- Assign menus to **Primary Menu** and **Footer Menu** under Appearance → Menus.
- Add widgets to **Sidebar** and **Footer One–Three**.
- Set the site logo under Appearance → Customize → Site Identity.
- Choose a static page or latest posts under Settings → Reading.

## Customize safely

Put CSS changes in the child theme's `style.css`. To override a PHP template, copy it from `staging/` to the same relative location in `staging-child/`, then edit the child copy. Do not edit the parent: parent updates replace parent files.

Requires WordPress 6.5+ and PHP 8.1+. Licensed under GPL-2.0-or-later.

