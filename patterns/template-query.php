
<?php
  /**
   * Title: Template Query Loop
   * slug: kide/template-query
   * Categories: text
   */
?>

<!-- wp:group {"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull">
  <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"className":"alignwide"} -->
  <div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">

    <!-- wp:query {"queryId":0,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"displayLayout":{"type":"flex","columns":3},"align":"wide","layout":{"type":"default"}} -->
    <div class="wp-block-query alignwide">

      <!-- wp:post-template {"className":"kide-post-template"} -->
      <!-- wp:post-title {"level":5,"isLink":true,"style":{"spacing":{"margin":{"bottom":"0","top":"0"}}}} /-->

      <!-- wp:post-date {"style":{"spacing":{"margin":{"bottom":"0","top":"0"}}}} /-->

      <!-- wp:post-terms {"term":"category"} /-->

      <!-- wp:post-terms {"term":"post_tag"} /-->
      <!-- /wp:post-template -->

      <!-- wp:query-pagination -->
      <!-- wp:query-pagination-previous /-->

      <!-- wp:query-pagination-numbers /-->

      <!-- wp:query-pagination-next /-->
      <!-- /wp:query-pagination -->

      <!-- wp:query-no-results -->
      <!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
      <p>Nothing was found.</p>
      <!-- /wp:paragraph -->
      <!-- /wp:query-no-results -->
  
    </div>
    <!-- /wp:query -->

  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->