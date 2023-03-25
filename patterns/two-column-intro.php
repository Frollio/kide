
<?php
  /**
   * Title: Two-column intro
   * slug: kide/two-column-intro
   * Categories: text, image
   */
?>

<!-- wp:group {"align":"wide","backgroundColor":"dark-7","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group alignwide has-dark-7-background-color has-background"" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">

  <!-- wp:media-text {"mediaId":1884,"mediaLink":"<?php echo esc_url( get_theme_file_uri( 'assets/images/this-is-kide-landscape.svg' ) ); ?>","mediaType":"image","verticalAlignment":"center","className":"kide-two-column-intro-media-text"} -->
  <div class="wp-block-media-text alignwide is-stacked-on-mobile is-vertically-aligned-center kide-two-column-intro-media-text">
  <figure class="wp-block-media-text__media">
    <img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/this-is-kide-landscape.svg' ) ); ?>" alt="cover-varpuja" class="wp-image-1884 size-full"/>
  </figure>
  <div class="wp-block-media-text__content">

    <!-- wp:heading {"textAlign":"center","level":1} -->
    <h1 class="has-text-align-center" id="welcome-to-this-page">Welcome to this page</h1>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center","placeholder":"Content…"} -->
    <p class="has-text-align-center">You can place your introduction text here. That reminds me one story. Once upon a time there was a WordPress developer who realized they didn't know what they were doing. So they sold their computer and lived the rest of their life in agony.</p>
    <!-- /wp:paragraph --></div>

  </div>
  <!-- /wp:media-text -->

</div>
<!-- /wp:group -->