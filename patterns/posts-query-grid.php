
<?php
  /**
   * Title: A section with latest posts as a grid
   * slug: kide/posts-query-grid
   * Categories: text, query
   * */
?>

<!-- wp:group {"tagName":"section","align":"full","backgroundColor":"dark-8","layout":{"type":"constrained","justifyContent":"center"}} -->
<section class="wp-block-group alignfull has-dark-8-background-color has-background">

  <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|20","bottom":"var:preset|spacing|40","left":"var:preset|spacing|20"},"blockGap":"var:preset|spacing|30"}},"className":"kide-latest-list-stack","layout":{"type":"constrained","justifyContent":"left"}} -->
  <div class="wp-block-group alignwide kide-latest-list-stack" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--20)">

    <!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left"}} -->
    <div class="wp-block-group alignwide">
  
      <!-- wp:heading -->
      <h2 class="wp-block-heading" id="latest-posts-list-heading">Latest posts</h2>
      <!-- /wp:heading -->

      <!-- wp:buttons -->
      <div class="wp-block-buttons">
        <!-- wp:button -->
        <div class="wp-block-button">
          <a class="wp-block-button__link wp-element-button">All posts</a>
        </div>
        <!-- /wp:button -->
      </div>
      <!-- /wp:buttons -->

    </div>
    <!-- /wp:group -->

    <!-- wp:query {"queryId":0,"query":{"perPage":5,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":2},"align":"wide","className":"kide-query-loop","layout":{"type":"default"}} -->
    <div class="wp-block-query alignwide kide-query-loop">
    
      <!-- wp:post-template {"className":"kide-post-template"} -->

        <!-- wp:post-title {"level":5,"isLink":true,"style":{"spacing":{"margin":{"bottom":"0","top":"0"}}}} /-->

        <!-- wp:post-date {"style":{"spacing":{"margin":{"bottom":"0","top":"0"}}}} /-->

        <!-- wp:post-terms {"term":"category"} /-->

        <!-- wp:post-terms {"term":"post_tag"} /-->

      <!-- /wp:post-template -->

      <!-- wp:query-no-results -->

        <!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
        <p>Sorry, no posts here.</p>
        <!-- /wp:paragraph -->

      <!-- /wp:query-no-results -->

    </div>
    <!-- /wp:query -->

  </div>
  <!-- /wp:group -->

</section>
<!-- /wp:group -->