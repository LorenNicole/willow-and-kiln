<?php
/**
 * Title: Latest Journal Posts
 * Slug: willow-and-kiln/latest-journal-posts
 * Categories: text, columns
 * Description: A three-post teaser using the WordPress Query Loop. Does not replace the blog index template.
 * Viewport Width: 1400
 */
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|section","bottom":"var:preset|spacing|section"},"blockGap":"var:preset|spacing|comfortable"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide">
	<!-- wp:heading {"level":2} -->
	<h2 class="wp-block-heading">From the Journal</h2>
	<!-- /wp:heading -->
	<!-- wp:query {"query":{"perPage":3,"pages":1,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide"} -->
	<div class="wp-block-query alignwide">
		<!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
			<!-- wp:post-featured-image {"isLink":true} /-->
			<!-- wp:post-title {"isLink":true,"level":3,"fontSize":"heading-small"} /-->
			<!-- wp:post-date /-->
		<!-- /wp:post-template -->
		<!-- wp:query-no-results -->
			<!-- wp:paragraph -->
			<p>No journal posts yet.</p>
			<!-- /wp:paragraph -->
		<!-- /wp:query-no-results -->
	</div>
	<!-- /wp:query -->
	<!-- wp:buttons -->
	<div class="wp-block-buttons">
		<!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#">View All Stories</a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
