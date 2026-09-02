<?php
/**
 * Title: Image + Story
 * Slug: willow-and-kiln/image-story
 * Categories: columns
 * Description: A two-column storytelling section with an image and supporting copy. Rearrange columns in List View to place the image on the right.
 * Viewport Width: 1400
 */
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|section","bottom":"var:preset|spacing|section"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide">
	<!-- wp:columns {"verticalAlignment":"center","isStackedOnMobile":true,"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|section","left":"var:preset|spacing|comfortable"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:image {"sizeSlug":"large"} -->
			<figure class="wp-block-image size-large"><img alt=""/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:heading {"level":2} -->
			<h2 class="wp-block-heading">From the workbench</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p>Sample story copy. Describe a process, a material, or a maker without inventing customer claims.</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p>Keep this short. Editors can add or remove paragraphs as needed.</p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#">Continue reading</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
