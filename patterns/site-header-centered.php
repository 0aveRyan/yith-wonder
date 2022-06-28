<?php
/**
 * Title: Site header centered
 * Slug: wonder/site-header-centered
 * Categories: wonder-site-header
 * Block Types: core/site-title, core/site-logo, core/navigation
 * Keywords: site header
 *
 * @package wonder
 * @since 1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"15px","right":"","bottom":"15px","left":""}}},"layout":{"inherit":true}} -->
<div class="wp-block-group alignfull" style="padding-top:15px;padding-bottom:15px">
	<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
	<div class="wp-block-group">
		<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group">
			<!-- wp:site-logo {"width":40} /-->
			<!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group">
				<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","orientation":"vertical"}} -->
				<div class="wp-block-group">
					<!-- wp:site-title {"textAlign":"center"} /-->
				</div>
				<!-- /wp:group -->	
				<!-- wp:site-tagline {"textAlign":"center"} /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
		<!-- wp:navigation /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
