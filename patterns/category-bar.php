
<?php
  /**
   * Title: Category bar
   * slug: kide/category-bar
   * Categories: text
   * */
?>

<!-- wp:cover {"overlayColor":"dark-6","tagName":"section","align":"full"} -->
<section class="wp-block-cover alignfull">
<span aria-hidden="true" class="wp-block-cover__background has-dark-6-background-color has-background-dim-100 has-background-dim"></span>
<div class="wp-block-cover__inner-container">

  <!-- wp:group {"layout":{"type":"constrained"}} -->
  <div class="wp-block-group">

    <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|10","right":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|10"}}},"backgroundColor":"dark-6","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
    <div class="wp-block-group has-dark-6-background-color has-background" style="padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--10)">

      <!-- wp:heading {"textAlign":"center","level":4} -->
      <h4 class="wp-block-heading has-text-align-center">
        <!-- wp:post-terms {"term":"category"} /-->
      </h4>
      <!-- /wp:heading -->

    </div>
    <!-- /wp:group -->

  </div>
  <!-- /wp:group -->

</div></section>
<!-- /wp:cover -->