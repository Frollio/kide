
<?php
  /**
   * Title: A section with latest posts as a grid with headings and dates
   * slug: kide/latest-posts-section-grid
   * Categories: text
   * */
?>

<!-- wp:group {"tagName":"section","id":"kide-latest-grid-group","backgroundColor":"background3","layout":{"type":"constrained","justifyContent":"center"}} -->
<section id="kide-latest-grid-group" class="wp-block-group has-background-3-background-color has-background">
  
<!-- wp:group {"className":"kide-latest-grid-row","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group kide-latest-grid-row">
  <!-- wp:heading -->
  <h2 id="latest-posts">Latest posts</h2>
  <!-- /wp:heading -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"kide-latest-grid-row","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center","orientation":"horizontal"}} -->
<div class="wp-block-group kide-latest-grid-row">
  <!-- wp:latest-posts {"postsToShow":10,"displayPostDate":true,"postLayout":"grid","columns":2,"className":"kide-latest-posts-grid","fontSize":"m"} /-->
</div>
<!-- /wp:group -->

</section>
<!-- /wp:group -->