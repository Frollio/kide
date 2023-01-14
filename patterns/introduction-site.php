
<?php
/**
 * Title: Introduction of the site, text and a picture
 * Slug: kide/introduction-site
 * Categories: text, image
 */
?>

<!-- wp:group {"tagName":"section","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<section class="wp-block-group"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading -->
<h2 id="introduction-heading">Introduction heading</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Your introduction text for the end-user to understand what this page is about.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":"introduction-site-image","sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/3x1_2000x666.png' ) ); ?>" alt="ADD YOUR IMAGE HERE"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->