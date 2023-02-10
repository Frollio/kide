
<?php
/**
 * Title: Introduction of the site, full width image in narrow screens
 * Slug: kide/site-introduction-full
 * Categories: text, image
 */
?>

<!-- wp:group {"tagName":"section","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<section class="wp-block-group">
  
  <!-- wp:columns {"className":"kide-site-intro-full-columns"} -->
  <div class="wp-block-columns kide-site-intro-full-columns">
  
    <!-- wp:column {"verticalAlignment":"center","className":"kide-site-intro-full-column-1} -->
    <div class="wp-block-column is-vertically-aligned-center kide-site-intro-full-column-1">
      <!-- wp:heading {"textAlign":"center","level":1} -->
      <h1 class="has-text-align-center has-xxxxl-font-size" id="introduction-heading">Much welcome to Kide theme</h1>
      <!-- /wp:heading -->
      <!-- wp:paragraph {"align":"center","fontSize":"m"} -->
      <p class="has-text-align-center has-m-font-size">You can put your introduction text here for the end-user to understand what this page is about. More text makes this section more high. Widths of these columns are preset but heights not.</p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"verticalAlignment":"center","className":"kide-site-intro-full-column-2"} -->
    <div class="wp-block-column is-vertically-aligned-center kide-site-intro-full-column-2">
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