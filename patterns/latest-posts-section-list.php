
<?php
  /**
   * Title: A section with latest posts as a list with headings and dates
   * slug: kide/latest-posts-section-list
   * Categories: text
   * */
?>

<!-- wp:group {"tagName":"section","id":"kide-latest-list-group","backgroundColor":"dark-3","layout":{"type":"constrained","justifyContent":"center"}} -->
<section id="kide-latest-list-group" class="wp-block-group has-dark-3-background-color has-background">
  
  <!-- wp:group {"className":"kide-latest-list-stack","layout":{"type":"flex","orientation":"vertical"}} -->
  <div class="wp-block-group kide-latest-list-stack">

    <!-- wp:heading -->
    <h2 id="latest-posts-list-heading">Latest posts</h2>
    <!-- /wp:heading -->

    <!-- wp:latest-posts {"displayPostDate":true,"className":"kide-latest-posts-list","fontSize":"m"} /-->

  </div>
  <!-- /wp:group -->

</section>
<!-- /wp:group -->