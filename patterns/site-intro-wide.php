
<?php
/**
 * Title: Introduction of the site, wide-width image at narrow screens
 * Slug: kide/site-intro-wide
 * Categories: text, image
 */
?>

<!-- wp:group {"tagName":"section","align":"full","backgroundColor":"dark-7","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull has-dark-7-background-color has-background">
  
  <!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"},"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"className":"kide-site-intro-full-columns"} -->
  <div class="wp-block-columns alignwide kide-site-intro-full-columns" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
  
    <!-- wp:column {"className":"is-vertically-aligned-center kide-site-intro-wide-column-1"} -->
    <div class="wp-block-column is-vertically-aligned-center kide-site-intro-wide-column-1">

      <!-- wp:heading {"textAlign":"left","level":1,"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|20"}}},"className":"has-xxxxl-font-size"} -->
      <h1 class="has-text-align-left has-xxxxl-font-size" id="introduction-heading" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--20)">Much welcome to Kide theme</h1>
      <!-- /wp:heading -->

      <!-- wp:paragraph {"align":"left","style":{"spacing":{"margin":{"bottom":"0","top":"var:preset|spacing|20"}}},"fontSize":"m"} -->
      <p class="has-text-align-left has-m-font-size" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:0">You can put your introduction text here for the end-user to understand what this page is about. More text makes this section more high. Widths of these columns are preset but heights not.</p>
      <!-- /wp:paragraph -->
      
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"verticalAlignment":"center","className":"kide-site-intro-wide-column-2"} -->
    <div class="wp-block-column is-vertically-aligned-center kide-site-intro-wide-column-2">

      <!-- wp:image {"id":"introduction-site-image","sizeSlug":"large","linkDestination":"none"} -->
      <figure class="wp-block-image size-large">
        <img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/this-is-kide-landscape.svg' ) ); ?>" alt="ADD YOUR IMAGE HERE"/>
      </figure>
      <!-- /wp:image -->

    </div>
    <!-- /wp:column -->

  </div>
  <!-- /wp:columns -->

</section>
<!-- /wp:group -->