
<?php
/**
 * Title: Introduction of the site, text and a picture
 * Slug: kide/introduction-site
 * Categories: text, image
 */
?>

<!-- wp:group {"tagName":"section","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<section class="wp-block-group">
  
  <!-- wp:columns {"className":"kide-site-intro-columns"} -->
  <div class="wp-block-columns kide-site-intro-columns">
  
    <!-- wp:column {"className":"kide-site-intro-column} -->
    <div id="kide-intro-col-1" class="wp-block-column kide-site-intro-column">
      <!-- wp:heading {"textAlign":"center"} -->
      <h2 class="has-text-align-center" id="introduction-heading">Introduction heading</h2>
      <!-- /wp:heading -->
      <!-- wp:paragraph {"align":"center"} -->
      <p class="has-text-align-center">Your introduction text for the end-user to understand what this page is about.</p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"className":"kide-site-intro-column} -->
    <div id="kide-intro-col-2" class="wp-block-column kide-site-intro-column">
      <!-- wp:image {"id":"introduction-site-image","sizeSlug":"large","linkDestination":"none"} -->
      <figure class="wp-block-image size-large">
        <img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/3x1_2000x666.png' ) ); ?>" alt="ADD YOUR IMAGE HERE"/>
      </figure>
      <!-- /wp:image -->
    </div>
    <!-- /wp:column -->

  </div>
  <!-- /wp:columns -->

</section>
<!-- /wp:group -->