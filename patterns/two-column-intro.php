
<?php
  /**
   * Title: Two-column intro
   * slug: kide/two-column-intro
   * Categories: text, image
   */
?>

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">


  <!-- wp:media-text {"mediaId":1884,"mediaLink":"<?php echo esc_url( get_theme_file_uri( 'assets/images/kide-welcome-frame.svg' ) ); ?>","mediaType":"image"} -->
  <div class="wp-block-media-text alignwide is-stacked-on-mobile">
  <figure class="wp-block-media-text__media">
    <img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/kide-welcome-frame.svg' ) ); ?>" alt="cover-varpuja" class="wp-image-1884 size-full"/>
  </figure>
  <div class="wp-block-media-text__content">

    <!-- wp:heading {"level":1} -->
    <h1 id="welcome-to-this-page">Welcome to this page</h1>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"placeholder":"Content…"} -->
    <p>You can place your introduction text here.</p>
    <!-- /wp:paragraph --></div>

  </div>
  <!-- /wp:media-text -->

</div>
<!-- /wp:group -->