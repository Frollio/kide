
<?php
  /**
   * Title: A section with latest posts as a list with headings and dates
   * slug: kide/latest-posts-list
   * Categories: text, query
   * */
?>

<!-- wp:group {"tagName":"section","align":"full","backgroundColor":"dark-8","layout":{"type":"constrained","justifyContent":"center"}} -->
<section class="wp-block-group alignfull has-dark-8-background-color has-background">
  
  <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|20","bottom":"var:preset|spacing|40","left":"var:preset|spacing|20"}}},"className":"kide-latest-list-stack","layout":{"type":"flex","orientation":"vertical"}} -->
  <div class="wp-block-group kide-latest-list-stack" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--20)">

    <!-- wp:heading -->
    <h2 id="latest-posts-list-heading">Latest posts</h2>
    <!-- /wp:heading -->

    <!-- wp:latest-posts {"displayPostDate":true,"fontSize":"s"} /-->

  </div>
  <!-- /wp:group -->

</section>
<!-- /wp:group -->