<?php
$args = array(
    "taxonomy" => "gallery_category",
    "hide_empty" => false,
);
$gallery_categories = get_terms($args);
?>

<div id="myBtnContainer" class="container">
  <button class="btn active" id="all" onclick="filterSelection('all')">Show all</button>
  <?php
  foreach($gallery_categories as $single_category){
    ?>
    <button class="btn" id="<?php echo $single_category->slug; ?>" onclick="filterSelection('<?php echo $single_category->slug; ?>')"><?php echo $single_category->name; ?></button>
    <?php
  }
  ?>
</div>

<!-- gallery -->
<div class="gallery">
  <div class="container">
    <div class="gallery-grids">
      <?php
      $args = array(
          'post_type' => 'portfolio',
          'post_status' => 'publish',
          'numberposts' => -1
      );
      $galleries = new WP_Query($args);
      if ($galleries->have_posts()){
        while ($galleries->have_posts()){
          $galleries->the_post();
          ?>
          <div class="col-md-4 gallery-grid">
            <div class="grid">
              <figure class="effect-roxy">
                <a class="example-image-link" href="<?php the_permalink(); ?>" data-lightbox="example-set">
                  <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" />
                  <figcaption>
                    <h3><?php the_title(); ?></h3>
                    <?php the_content(); ?>
                  </figcaption>
                </a>
              </figure>
            </div>
          </div>
          <?php
        }
      }
      ?>
      <div class="clearfix"> </div>
    </div>
  </div>
</div>
<!-- //gallery -->