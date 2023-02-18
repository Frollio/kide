
<?php
  /**
   * Title: A section with latest posts as a list with headings and dates
   * slug: kide/latest-posts-section-list
   * Categories: text
   * */
?>

<!-- wp:group {"tagName":"section","align":"full","backgroundColor":"dark-3","layout":{"type":"constrained","justifyContent":"center"}} -->
<section class="wp-block-group alignfull has-dark-3-background-color has-background">
  
  <!-- wp:group {"style":{"spacing":{"padding":{"top":"2rem","right":"2rem","bottom":"2rem","left":"2rem"}}},"className":"kide-latest-list-stack","layout":{"type":"flex","orientation":"vertical"}} -->
  <div class="wp-block-group kide-latest-list-stack" style="padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem">

    <!-- wp:heading -->
    <h2 id="latest-posts-list-heading">Latest posts</h2>
    <!-- /wp:heading -->

    <!-- wp:latest-posts {"displayPostDate":true,"className":"kide-latest-posts-list","fontSize":"m"} /-->

  </div>
  <!-- /wp:group -->

</section>
<!-- /wp:group -->