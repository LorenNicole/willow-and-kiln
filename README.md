# Willow & Kiln

Willow & Kiln is a custom WordPress Gutenberg block theme in development for an artisan and handmade WooCommerce storefront.

The repository currently includes a valid block-theme scaffold and a global design system in `theme.json` (colors, typography, spacing, layout, and restrained core element styles). Gutenberg patterns, WooCommerce templates, and storefront header/footer/homepage layout are not implemented yet.

## Version 1 goals

Version 1 is planned to demonstrate:

- WordPress block-theme development
- Gutenberg patterns
- `theme.json` / Global Styles (started; tokens live in `theme.json`)
- WooCommerce integration
- Responsive design
- Accessibility
- Performance
- Maintainable WordPress architecture

Patterns, WooCommerce, and composed layouts remain later work.

## Architecture principles

The project will:

- Prefer native WordPress core blocks
- Prefer WooCommerce blocks where applicable
- Use `theme.json` as the primary design-system mechanism
- Keep business functionality out of the theme
- Minimize unnecessary JavaScript and dependencies
