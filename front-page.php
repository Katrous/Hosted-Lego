<?php get_header(); ?>

     <main class='front-page-main'> 
     <div class="main-top">
        <div class="grid-x">
        <div class="medium-6 cell small-order-2 medium-order-1">
              <h1 class="header-h1">Brickin' it</h1>
              <p class="para">Hello, Im Adrian, I am a LEGO lover. I love collecting Lego as my favourite hobby. I have built a lot of Lego stuff using all the colourful blocks that is available everywhere. </p>
              <a class="para" href="<?php echo site_url("/about"); ?>">Read More</a>
            </div>
            <div class="medium-6 cell small-order-1 medium-order-1">
            <img class="para" src="<?php echo get_theme_file_uri("/img/intro-image.jpeg")?>" alt="">
          </div>
        </div>
      </div>
      
      <br>
      <a  class="banner" href="https://app.brickin-it.screencraft.net.au/main">
      <div class="hero-section">
        <div class="hero-section-text">
          <p>
			  Brickin'it App   
			</p>
        </div>
      </div>
    </a>
    <br>
		 
	<div class="main-center">
    <div class="main-middle">
    <div class="grid-x">

    <?php
        $articles = new WP_Query(array(
          'post_type' => 'post',
          'post_status' => 'publish',
          'posts_per_page' => 1
      ));?>
      <?php  while ($articles->have_posts()): $articles->the_post(); ?>
      <div class="medium-6 cell small-order-1 medium-order-1 para">
      <a href="<?php echo get_permalink() ?>"><img class="thumbnail index-img-container" src="<?php echo the_post_thumbnail_url('gallery-size'); ?>"></a>
      </div>
      <div class="medium-6 cell small-order-1 medium-order-2 para">
		  <a href='<?php echo get_permalink() ?>'><h1 class="body-h1"><?php the_title(); ?></h1></a>
            <p> <?php  my_excerpt('regular'); ?> </p>
          </div>
                 
            <?php endwhile; ?> 
        </div>
      </div>
      <br>

		<div class="main-bottom">
		
        <?php

        // Create a counter here, we will use this with a condition statement to NOT output the recent post we already outputted above.
        $postCount = 0;
        // Define our WP Query Parameters
        $the_query = new WP_Query( 'posts_per_page=10' ); ?>
          
          
          <div class="grid-x align-top">
        <?php 
        // Start our WP Query
        while ($the_query -> have_posts()) : $the_query -> the_post(); 
        // Display the Post Title with Hyperlink

        if($postCount != 0) {
        ?>
          <div class="medium-4 cell">
            <div class="media-object">
              <div class="media-object-section">
              <a href="<?php echo get_permalink() ?>"><img class="thumbnail index-img-container" src="<?php echo the_post_thumbnail_url('gallery-size'); ?>"></a>
              </div>
              <div class="media-object-section">
                <h5><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h5>

                <?php 
                // Display the Post Excerpt
                my_excerpt('short'); ?>
              </div> 
            </div>
          </div>
          <?php
        } 

        $postCount++;
        ?>

         
        <?php 
        // Repeat the process and reset once it hits the limit
        endwhile;
        wp_reset_postdata();
        ?>

      </div>
      <br>
  </main>

<?php get_footer(); ?>





