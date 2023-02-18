
<?php
/**
 * Title: Introduction of the site, wide width image in narrow screens
 * Slug: kide/site-introduction-wide
 * Categories: text, image
 */
?>

<!-- wp:group {"tagName":"section","align":"full","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull">
  
  <!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"top":"2rem","right":"2rem","bottom":"2rem","left":"2rem"}}},"className":"kide-site-intro-wide-columns"} -->
  <div class="wp-block-columns alignwide kide-site-intro-wide-columns" style="padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem">
  
    <!-- wp:column {"verticalAlignment":"center","className":"kide-site-intro-wide-column-1} -->
    <div class="wp-block-column is-vertically-aligned-center kide-site-intro-wide-column-1">
      <!-- wp:heading {"textAlign":"center","level":1} -->
      <h1 class="has-text-align-center has-xxxxl-font-size" id="introduction-heading">Much welcome to Kide theme</h1>
      <!-- /wp:heading -->
      <!-- wp:paragraph {"align":"center","fontSize":"m"} -->
      <p class="has-text-align-center has-m-font-size">You can put your introduction text here for the end-user to understand what this page is about. More text makes this section more high. Widths of these columns are preset but heights not.</p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"verticalAlignment":"center","className":"kide-site-intro-wide-column-2"} -->
    <div class="wp-block-column is-vertically-aligned-center kide-site-intro-wide-column-2">
      <!-- wp:image {"id":"introduction-site-image","sizeSlug":"large","linkDestination":"none"} -->
      <figure class="wp-block-image size-large">
        <img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/kide-welcome-frame.svg' ) ); ?>" alt="ADD YOUR IMAGE HERE"/>
      </figure>
      <!-- /wp:image -->
    </div>
    <!-- /wp:column -->

  </div>
  <!-- /wp:columns -->

</section>
<!-- /wp:group -->