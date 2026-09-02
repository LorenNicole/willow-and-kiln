<?php
/**
 * Title: Hero — Split
 * Slug: willow-and-kiln/hero-split
 * Categories: banner
 * Description: A two-column hero with a heading, supporting text, buttons, and an image.
 * Viewport Width: 1400
 */
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|section","bottom":"var:preset|spacing|section"},"blockGap":"var:preset|spacing|comfortable"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide">
	<!-- wp:columns {"verticalAlignment":"center","isStackedOnMobile":true,"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|section","left":"var:preset|spacing|comfortable"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:heading {"level":2} -->
			<h2 class="wp-block-heading">Work made slowly, meant to last</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p>Sample copy for a split hero. Replace this with a short introduction to the studio, a collection, or a page.</p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#">Explore the collection</a></div>
				<!-- /wp:button -->
				<!-- wp:button {"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#">Read our story</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:image {"sizeSlug":"large"} -->
			<figure class="wp-block-image size-large"><img alt=""/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
