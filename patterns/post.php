
<?php
  /**
   * Title: Post title, date, author, featured image and content
   * slug: kide/post
   * Categories: text, image
   * */
?>

<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"className":"kide-post","layout":{"type":"constrained","contentSize":"1200px"}} -->
<section class="wp-block-group kide-post" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
  
  <!-- wp:post-title {"level":1} /-->

  <!-- wp:group {"className":"kide-post-author-row","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
  <div class="wp-block-group kide-post-author-row">

    <!-- wp:post-author {"showAvatar":false,"showBio":false,"style":{"spacing":{"margin":{"right":"var:preset|spacing|20"}}}} /-->
    <!-- wp:post-date /-->

  </div>
  <!-- /wp:group -->

  <!-- wp:post-featured-image /-->
  <!-- wp:post-content /-->

</section>
<!-- /wp:group -->