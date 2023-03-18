
<?php
  /**
   * Title: Category bar
   * slug: kide/category-bar
   * Categories: text
   * */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|10","right":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|10"}}},"backgroundColor":"dark-4","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group alignfull has-dark-4-background-color has-background" style="padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--10)">
  <!-- wp:heading {"level":4} -->
  <h4><?php echo( esc_html__( implode( ' ,' ,get_the_category( get_post() ) ), "kide/category-bar" ) ) ?></h4>
  <!-- /wp:heading -->
</div>
<!-- /wp:group -->