<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package newcame
 */

get_header();

while ( have_posts() ){
  the_post();

// banner
  $banner_background_image = get_the_post_thumbnail_url();
  $add_custom_page_title = get_field("add_custom_page_title");
  if (empty($add_custom_page_title)){
    $add_custom_page_title = get_the_title();
  }
  if ($banner_background_image && $add_custom_page_title){
    ?>
    <div class="banner about-banner" style="background: url('<?php echo $banner_background_image; ?>') no-repeat 0px -185px;">
      <div class="container">
        <h2><?php echo $add_custom_page_title; ?></h2>
        <div class="agileits-line"> </div>
      </div>
    </div>
    <?php
  }
  // banner

  $post_title = get_the_title();
  if ($post_title == "About"){
    get_template_part( 'template-parts/content', 'about' );
  }elseif ($post_title == "Gallery"){
    get_template_part( 'template-parts/content', 'gallery' );
  }elseif ($post_title == "Blog"){
    get_template_part( 'template-parts/content', 'blog' );
  }elseif ($post_title == "Contact"){
    get_template_part( 'template-parts/content', 'contact' );
  }else{
    get_template_part( 'template-parts/content', 'page' );
  }

  // If comments are open or we have at least one comment, load up the comment template.
  if ( comments_open() || get_comments_number() ){
    comments_template();
  }

} // End of the loop.
get_footer();
