
<?php
  /**
   * Title: A section with latest posts as a grid
   * slug: kide/latest-posts-grid
   * Categories: text
   * */
?>

<!-- wp:group {"tagName":"section","align":"full","backgroundColor":"dark-3","layout":{"type":"constrained","justifyContent":"center"}} -->
<section class="wp-block-group alignfull has-dark-3-background-color has-background">
  <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
  <div class="wp-block-group alignwide kide-latest-list-stack" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">

    <!-- wp:heading {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}}} -->
    <h2 id="latest-posts-list-heading" style="margin-bottom:var(--wp--preset--spacing--20)">Latest posts</h2>
    <!-- /wp:heading -->

    <!-- wp:query {"queryId":0,"query":{"perPage":5,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":3},"className":"kide-query-loop","layout":{"type":"default"}} -->
    <div class="wp-block-query kide-query-loop">
      
      <!-- wp:post-template {"className":"kide-post-template"} -->

        <!-- wp:post-title {"level":5,"isLink":true,"style":{"spacing":{"margin":{"bottom":"0","top":"0"}}}} /-->
        <!-- wp:post-date {"style":{"spacing":{"margin":{"bottom":"0","top":"0"}}}} /-->
        <!-- wp:post-terms {"term":"category"} /-->
        <!-- wp:post-terms {"term":"post_tag"} /-->

      <!-- /wp:post-template -->

      <!-- wp:query-no-results -->

        <!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
        <p></p>
        <!-- /wp:paragraph -->
        
      <!-- /wp:query-no-results -->
  
    </div>
    <!-- /wp:query -->

  </div>
  <!-- /wp:group -->
</section>
<!-- /wp:group -->