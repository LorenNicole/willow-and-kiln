<?php
/**
 * Title: Featured Collection
 * Slug: willow-and-kiln/featured-collection
 * Categories: banner, columns
 * Description: A Product Collection of products marked featured in WooCommerce. Heading and copy are sample merchandising text.
 * Viewport Width: 1400
 */
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|section","bottom":"var:preset|spacing|section"},"blockGap":"var:preset|spacing|comfortable"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide">
	<!-- wp:heading {"level":2} -->
	<h2 class="wp-block-heading">The Autumn Table</h2>
	<!-- /wp:heading -->
	<!-- wp:paragraph -->
	<p>Sample collection copy. Handmade pieces for gathering, serving, and slowing down. Products shown are those marked featured in WooCommerce.</p>
	<!-- /wp:paragraph -->
	<!-- wp:woocommerce/product-collection {"query":{"perPage":4,"pages":1,"offset":0,"postType":"product","order":"desc","orderBy":"date","search":"","exclude":[],"inherit":false,"taxQuery":{},"isProductCollectionBlock":true,"featured":true,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"]},"tagName":"div","displayLayout":{"type":"flex","columns":4,"shrinkColumns":true},"queryContextIncludes":["collection"],"collection":"woocommerce/product-collection/featured","align":"wide"} -->
	<div class="wp-block-woocommerce-product-collection alignwide">
		<!-- wp:woocommerce/product-template -->
			<!-- wp:woocommerce/product-image {"imageSizing":"thumbnail","showSaleBadge":true,"isDescendentOfQueryLoop":true} /-->
			<!-- wp:post-title {"level":3,"isLink":true,"fontSize":"heading-small","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->
			<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true} /-->
			<!-- wp:woocommerce/product-button {"isDescendentOfQueryLoop":true} /-->
		<!-- /wp:woocommerce/product-template -->
	</div>
	<!-- /wp:woocommerce/product-collection -->
	<!-- wp:buttons -->
	<div class="wp-block-buttons">
		<!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#">View the collection</a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
