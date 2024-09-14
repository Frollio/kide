
<?php
/**
 * Title: Template query
 * slug: kide/template-query
 * Categories: text, query
 */
?>

<!-- wp:group {"tagName":"section","align":"full","backgroundColor":"dark-8","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull has-dark-8-background-color has-background">
  
  <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|s80","right":"var:preset|spacing|s40","bottom":"var:preset|spacing|s80","left":"var:preset|spacing|s40"}}},"className":"alignwide"} -->
  <div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--s-80);padding-right:var(--wp--preset--spacing--s-40);padding-bottom:var(--wp--preset--spacing--s-80);padding-left:var(--wp--preset--spacing--s40)">

    <!-- wp:query {"queryId":0,"query":{"perPage":12,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"displayLayout":{"type":"flex","columns":2},"align":"wide","layout":{"type":"default"}} -->
    <div class="wp-block-query alignwide">

      <!-- wp:post-template {"className":"kide-post-template"} -->
        <!-- wp:post-title {"level":5,"isLink":true,"style":{"spacing":{"margin":{"bottom":"0","top":"0"}}}} /-->
        <!-- wp:post-date {"style":{"spacing":{"margin":{"bottom":"0","top":"0"}}}} /-->
        <!-- wp:post-terms {"term":"category"} /-->
        <!-- wp:post-terms {"term":"post_tag"} /-->
      <!-- /wp:post-template -->

      <!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"center"},"fontSize":"m"} -->
        <!-- wp:query-pagination-previous /-->
        <!-- wp:query-pagination-numbers /-->
        <!-- wp:query-pagination-next /-->
      <!-- /wp:query-pagination -->

      <!-- wp:query-no-results -->
        <!-- wp:paragraph {"align":"center","placeholder":"Add text or blocks that will display when a query returns no results.","fontSize":"xl"} -->
        <p class="has-text-align-center has-xl-font-size">Nothing was found.</p>
        <!-- /wp:paragraph -->
      <!-- /wp:query-no-results -->
  
    </div>
    <!-- /wp:query -->

  </div>
  <!-- /wp:group -->

</section>
<!-- /wp:group -->