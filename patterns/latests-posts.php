
<?php
  /**
   * Title: Latests posts with headings and dates
   * slug: kide/latests-posts
   * Categories: text
   * */
?>

<!-- wp:group {"tagName":"section","id":"kide-latest-group","backgroundColor":"background3","layout":{"type":"constrained","justifyContent":"center"}} -->
<section id="kide-latest-group" class="wp-block-group has-background-3-background-color has-background">
  
<!-- wp:group {"className":"kide-latest-row","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group kide-latest-row">
  <!-- wp:heading -->
  <h2 id="latests-posts">Latest posts</h2>
  <!-- /wp:heading -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"kide-latest-row","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center","orientation":"horizontal"}} -->
<div class="wp-block-group kide-latest-row">
  <!-- wp:latest-posts {"postsToShow":10,"displayPostDate":true,"postLayout":"grid","columns":2,"className":"kide-latest-posts"} /-->
</div>
<!-- /wp:group -->

</section>
<!-- /wp:group -->