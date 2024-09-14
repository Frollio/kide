
<?php
/**
 * Title: Introduction of the site, wide-width image at narrow screens
 * Slug: kide/site-intro
 * Categories: text, image
 */
?>

<!-- wp:cover {"overlayColor":"dark-7","tagName":"section","align":"full"} -->
<section class="wp-block-cover alignfull">
  <span aria-hidden="true" class="wp-block-cover__background has-dark-7-background-color has-background-dim-100 has-background-dim"></span>
<div class="wp-block-cover__inner-container">

  <!-- wp:group {"layout":{"type":"constrained"}} -->
  <div class="wp-block-group">
  
    <!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|40"},"padding":{"top":"var:preset|spacing|s80","right":"var:preset|spacing|s40","bottom":"var:preset|spacing|s80","left":"var:preset|spacing|s40"}}},"className":"alignwide kide-site-intro-columns"} -->
    <div class="wp-block-columns alignwide kide-site-intro-columns" style="padding-top:var(--wp--preset--spacing--s-80);padding-right:var(--wp--preset--spacing--s-40);padding-bottom:var(--wp--preset--spacing--s-80);padding-left:var(--wp--preset--spacing--s-40)">
    
      <!-- wp:column {"className":"is-vertically-aligned-center kide-site-intro-wide-column-1"} -->
      <div class="wp-block-column is-vertically-aligned-center kide-site-intro-wide-column-1">

        <!-- wp:heading {"textAlign":"left","level":1,"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|20"}}},"textColor":"kide-violet","className":"has-xxxxl-font-size"} -->
        <h1 class="wp-block-heading has-text-align-left has-xxxxl-font-size has-kide-violet-color has-text-color" id="introduction-heading" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--20)">Much welcome to Kide theme</h1>
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

  </div>
  <!-- /wp:group -->

</div>
</section>
<!-- /wp:cover -->