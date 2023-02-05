
<?php
  /**
   * Title: Post title, date, author, featured image and content
   * slug: kide/post
   * Categories: text, image
   * */
?>

<!-- wp:group {"tagName":"section","className":"kide-post","layout":{"type":"constrained","contentSize":"1200px"}} -->
<section class="wp-block-group kide-post">
  
  <!-- wp:post-title {"level":1} /-->

  <!-- wp:group {"className":"kide-post-author-row","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
  <div class="wp-block-group kide-post-author-row">

    <!-- wp:post-author {"showAvatar":false,"showBio":false} /-->
    <!-- wp:post-date /-->

  </div>
  <!-- /wp:group -->

  <!-- wp:post-featured-image /-->
  <!-- wp:post-content /-->

</section>
<!-- /wp:group -->