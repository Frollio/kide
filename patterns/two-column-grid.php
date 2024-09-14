
<?php
  /**
   * Title: Two-column Grid
   * slug: kide/two-column-grid
   * Categories: text
   * */
?>

<!-- wp:group {"tagName":"section","align":"full","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull">

  <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|s80","right":"var:preset|spacing|s40","bottom":"var:preset|spacing|s80","left":"var:preset|spacing|s40"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
  <div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--s-80);padding-right:var(--wp--preset--spacing--s-40);padding-bottom:var(--wp--preset--spacing--s-80);padding-left:var(--wp--preset--spacing--s-40)">

    <!-- wp:group {"align":"full","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
    <div class="wp-block-group alignfull">

      <!-- wp:heading -->
      <h2 id="another-set-of-cards">Another set of columns</h2>
      <!-- /wp:heading -->

    </div>
    <!-- /wp:group -->

    <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"className":"kide-two-column-grid","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center","verticalAlignment":"top"}} -->
    <div class="wp-block-group alignwide kide-two-column-grid">

      <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"constrained"}} -->
      <div class="wp-block-group">

        <!-- wp:heading {"level":3} -->
        <h3 id="column-1">Column 1</h3>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p>You can place here text about some sub-topic like gardening in Antarctis. You can add an image above or below this text. You can add more containers next to this group.</p>
        <!-- /wp:paragraph -->

      </div>
      <!-- /wp:group -->

      <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"constrained"}} -->
      <div class="wp-block-group">
        
        <!-- wp:heading {"level":3} -->
        <h3 id="column-1">Column 2</h3>
        <!-- /wp:heading -->


        <!-- wp:paragraph -->
        <p>You can place here text about some sub-topic like gardening in Antarctis. You can add an image above or below this text. You can add more containers next to this group. This column has the longest paragraph. It would look better if you keep columns short and with same length, if possible.</p>
        <!-- /wp:paragraph -->
    
      </div>
      <!-- /wp:group -->

      <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"constrained"}} -->
      <div class="wp-block-group">
        
        <!-- wp:heading {"level":3} -->
        <h3 id="column-1">Column 3</h3>
        <!-- /wp:heading -->


        <!-- wp:paragraph -->
        <p>You can place here text about some sub-topic like gardening in Antarctis. You can add an image above or below this text. You can add more containers next to this group.</p>
        <!-- /wp:paragraph -->
    
      </div>
      <!-- /wp:group -->

    </div>
    <!-- /wp:group -->

  </div>
  <!-- /wp:group -->

</section>
<!-- /wp:group -->