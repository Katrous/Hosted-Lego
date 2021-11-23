<?php get_header();?>
<!--Title-->
<div>
      <div class="row column text-center">
        <h2 class="header-h2">Blog Posts</h2>
      </div>
    </div>

    


</div>

 <!-- Category Boxes -->
    <div class="bottom-container">
    <div class="grid-x align-bottom">
    <div class="category-container"> 

    <div class="Category-grid post-page-category-grid">
        <?php
// LOAD Category DYNAMICALLY //


    $categories = get_categories();
    foreach(array_slice($categories, 0, 6) as $category)
    echo '<a href="' . get_category_link($category->term_id) . '" class="category-button"> <div class="Category-row">' . $category->name . '</div></a>';
      
    ?>
    </div >
		<div  class='categoryPageLink'><a href="<?php echo site_url("/all-categories"); ?>">View All Categories</a></div>
</div>
		
<div class="posts-container">
    <div class="grid-x align-bottom">
      <!-- End Of Category Container -->
       
      <div class="bottom-container">
        <?php
        // LOAD POSTS DYNAMICALLY
        while(have_posts()){
            the_post(); ?>
            <div class="medium-2 cell">
            <div class="media-object index-flex-container">
              <div class="media-object-section post-item-containers">
                <a href="<?php echo get_permalink() ?>"><img class="thumbnail index-img-container" src="<?php echo the_post_thumbnail_url('gallery-size'); ?>"></a>
              </div>
              <div class="media-object-section post-item-containers">
                <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                <p class='posted-date'>Posted on <?php the_time('d/m/Y'); ?> in <?php echo get_the_category_list(', '); ?></p>
               <?php the_excerpt(); ?>
              </div>
            </div>
        </div>
        <!-- End Of Inner Bottom-Container -->
        <?php } ?>

        <!--pagination-->
        <div class="pagenav-container text-center">
          <?php echo paginate_links(); ?>
        </div>
    </div>

    <!-- End Grid Container -->
  </div>

  <!-- End Of Outter Bottom Container -->
</div>
</div>
</div>
</div>
<?php get_footer(); ?>