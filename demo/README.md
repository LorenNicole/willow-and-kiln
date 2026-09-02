# Willow & Kiln demo catalog

Fictional WooCommerce product data for development and theme testing. This is not production inventory, real makers, or real pricing.

The catalog lives in Git as a CSV fixture. Product posts, term IDs, and images exist only after you import the file into a WordPress site with WooCommerce. Do not commit database dumps or `wp-content/uploads` merely to preserve this catalog.

## Import

1. Activate WooCommerce (built-in Product CSV importer, WooCommerce 3.1+).
2. In WordPress admin go to **Products → Import**.
3. Choose [`products.csv`](products.csv).
4. Leave **Download and import file attachments** unchecked. This file has no image URLs.
5. Map columns to the matching WooCommerce fields (the header names match the native importer).
6. Run the importer.

Importing again: use **Update existing products** if SKUs already exist, or delete the demo products first. SKUs are stable (`WK-CER-001`, and so on). Do not use post IDs as SKUs.

### Minimal WooCommerce setup

Products can be imported without payment gateways, tax, or shipping plugins. Complete WooCommerce’s onboarding only as far as the store can list products. Do not commit environment-specific or sensitive settings.

Pretty permalinks should be enabled. Category buttons in the theme assume the default product-category base:

`/product-category/{slug}/`

Subdirectory installs may need different paths.

## Categories

| Name | Slug |
| --- | --- |
| Ceramics | `ceramics` |
| Candles | `candles` |
| Jewelry | `jewelry` |
| Paper | `paper` |
| Textiles | `textiles` |
| Home | `home` |

WooCommerce creates these from the CSV `Categories` column. Four products are assigned to each.

## Products

| SKU | Name | Type | Category | Price | Stock |
| --- | --- | --- | --- | --- | --- |
| WK-CER-001 | Hand-Thrown Stoneware Mug | simple | Ceramics | 32 | 12 |
| WK-CER-002 | Wildflower Serving Bowl | simple | Ceramics | 72 | 8 (featured) |
| WK-CER-003 | Speckled Ceramic Planter | simple | Ceramics | 48 / sale 38 | 15 |
| WK-CER-004 | Limited Edition Tall Vase | simple | Ceramics | 95 | 0 (out of stock) |
| WK-CAN-001 | Cedar & Fig Soy Candle | simple | Candles | 24 | 12 (featured) |
| WK-CAN-002 | Linen & Sage Candle | simple | Candles | 24 | 15 |
| WK-CAN-003 | Amber Ceramic Candle | simple | Candles | 32 | 8 |
| WK-CAN-004 | Quiet Morning Candle | simple | Candles | 18 | 12 |
| WK-JEW-001 | Minimal Hoop Earrings | variable | Jewelry | 38 (variations) | per variation |
| WK-JEW-002 | Hammered Drop Earrings | simple | Jewelry | 48 | 8 |
| WK-JEW-003 | Fine Chain Necklace | simple | Jewelry | 56 | 5 |
| WK-JEW-004 | Clay Bead Bracelet | simple | Jewelry | 32 | 12 |
| WK-PAP-001 | Linen-Bound Notebook | simple | Paper | 24 | 15 |
| WK-PAP-002 | Botanical Notecard Set | simple | Paper | 18 | 12 |
| WK-PAP-003 | Studio Sketchbook | simple | Paper | 32 | 8 |
| WK-PAP-004 | Minimal Art Print | simple | Paper | 38 | 5 |
| WK-TEX-001 | Handwoven Linen Tea Towel | variable | Textiles | 24 (variations) | per variation |
| WK-TEX-002 | Natural Table Runner | simple | Textiles | 56 | 8 (featured) |
| WK-TEX-003 | Soft Woven Throw | variable | Textiles | 95 (variations) | per variation |
| WK-TEX-004 | Block-Printed Napkin Set | simple | Textiles | 48 | 12 |
| WK-HOM-001 | Woven Catchall Basket | simple | Home | 48 | 8 |
| WK-HOM-002 | Small Wooden Serving Tray | simple | Home | 38 | 12 (featured) |
| WK-HOM-003 | Ceramic Incense Holder | simple | Home | 18 | 15 |
| WK-HOM-004 | Handcrafted Wall Hanging | simple | Home | 72 | 5 |

### Variable products

**Minimal Hoop Earrings** (`WK-JEW-001`), attribute **Finish** (global):

- `WK-JEW-001-GOLD` — Gold — 38 — qty 8
- `WK-JEW-001-SLVR` — Silver — 38 — qty 6

**Handwoven Linen Tea Towel** (`WK-TEX-001`), attribute **Color** (global):

- `WK-TEX-001-CLAY` — Clay — 24 — qty 8
- `WK-TEX-001-OLIV` — Olive — 24 — qty 6
- `WK-TEX-001-OAT` — Oat — 24 — qty 8
- `WK-TEX-001-INDG` — Indigo — 24 — qty 5

**Soft Woven Throw** (`WK-TEX-003`), attribute **Color** (global):

- `WK-TEX-003-OAT` — Oat — 95 — qty 5
- `WK-TEX-003-MOSS` — Moss — 95 — qty 6
- `WK-TEX-003-CLAY` — Clay — 95 — qty 5

Parents do not manage stock. Variations do.

### Featured

- Wildflower Serving Bowl (`WK-CER-002`)
- Cedar & Fig Soy Candle (`WK-CAN-001`)
- Natural Table Runner (`WK-TEX-002`)
- Small Wooden Serving Tray (`WK-HOM-002`)

These four fill the Featured Collection Product Collection (`perPage: 4`).

### Sale

Speckled Ceramic Planter (`WK-CER-003`): regular 48, sale 38.

### Out of stock

Limited Edition Tall Vase (`WK-CER-004`): `In stock?` = 0, `Stock` = 0.

### Inventory

Simple products use WooCommerce stock management with quantities 5, 8, 12, or 15 (0 for the vase). That is enough to test stock UI without large inventory counts.

### Attributes

Global attributes created on import:

- **Color** (`pa_color`): Clay, Olive, Oat, Indigo, Moss
- **Finish** (`pa_finish`): Gold, Silver

No product tags.

### Upsells and cross-sells

- Upsell: Hand-Thrown Stoneware Mug (`WK-CER-001`) → Wildflower Serving Bowl (`WK-CER-002`)
- Cross-sell: Linen-Bound Notebook (`WK-PAP-001`) → Botanical Notecard Set (`WK-PAP-002`)

Related products are left to native WooCommerce. There is no Maker custom post type and no product–maker database relationship.

## Images

The CSV has no `Images` column and no URLs. After import, products use the WooCommerce placeholder. Category thumbnails are not assigned. Shop by Category cards keep empty images until a later media branch.

Do not hotlink remote images or add an AI product-image library from this fixture.

## Storefront testing after import

- **Shop by Category:** six buttons in `patterns/shop-by-category.php` point at `/product-category/ceramics/` through `/product-category/home/`. Cards are still static (not a live category query). Empty images are expected.
- **New Arrivals:** Product Collection ordered by date. Newest published products should appear (up to four).
- **Featured Collection:** Product Collection with `featured: true`. The four featured products should populate the grid.
- **Best Sellers:** Product Collection ordered by popularity (`total_sales`). This fixture does **not** include orders. Expect an empty block or a weakly ranked list (all products at zero sales). Do not replace this query with Featured or New Arrivals. Do not invent order history unless that is approved separately.

This branch does not add Product Catalog, Single Product, Cart, Checkout, Product Search, or My Account templates.
