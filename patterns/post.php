
<?php
  /**
   * Title: Post title, date, author, featured image and content
   * slug: kide/post
   * Categories: text, image
   * */
?>

<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|s80","right":"var:preset|spacing|s40","bottom":"var:preset|spacing|s80","left":"var:preset|spacing|s40"}}},"className":"kide-post","layout":{"type":"constrained","contentSize":"1200px"}} -->
<section class="wp-block-group kide-post" style="padding-top:var(--wp--preset--spacing--s-80);padding-right:var(--wp--preset--spacing--s-40);padding-bottom:var(--wp--preset--spacing--s-80);padding-left:var(--wp--preset--spacing--s-40)">
  
  <!-- wp:post-title {"level":1} /-->

  <!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|10"}}},"className":"kide-post-author-row","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
  <div class="wp-block-group kide-post-author-row" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--10)">
    <!-- wp:post-author {"showAvatar":false,"showBio":false} /-->
    <!-- wp:post-date /-->
  </div>
  <!-- /wp:group -->

  <!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|20"}}},"className":"kide-post-author-row","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
  <div class="wp-block-group kide-post-author-row" style="margin-top:var(--wp--preset--spacing--10);margin-bottom:var(--wp--preset--spacing--20)">
    <!-- wp:post-terms {"term":"post_tag"} /-->
  </div>
  <!-- /wp:group -->

  <!-- wp:post-featured-image /-->
  <!-- wp:post-content /-->

</section>
<!-- /wp:group -->