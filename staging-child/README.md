# Staging Child

Staging Child is the safe customization layer for the Staging parent theme.

## Install and activate

1. Install `staging.zip` first. It must remain installed.
2. Install and activate `staging-child.zip`.
3. Add CSS to this theme's `style.css`.

## Override a template

Copy the parent template into this folder using the same relative path. For example, copy `staging/template-parts/content.php` to `staging-child/template-parts/content.php`, then edit only the child copy. WordPress will use the child version while preserving the original parent file for updates.

For PHP behavior, add prefixed functions and WordPress hooks to the child `functions.php`; it loads in addition to, and before, the parent functions file.

