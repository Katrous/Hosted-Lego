<?php
//ABOUT PAGE
get_header();

while(have_posts()){
  the_post(); ?>
    <!-- title -->
 <div class="row title">
    <div class="columns">
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    </div>
  </div>

  <hr>

  <!-- content -->
  <div class="main-middle">
    <div class="grid-x">
          <div class="medium-6 cell small-order-2 medium-order-1">
            <img class="about-image" src="<?php echo get_theme_file_uri("/img/unicorn.jpg")?>">
          </div>
          <div class="medium-6 cell small-order-2 medium-order-2">
          <p class="para">Lorem ipsum dolor sit amet, consectetur
            adipiscing elit. Donec molestie, ante et
            luctus vehicula, nisl leo porta lacus, nec
            laoreet nisi quam a dui.Lorem ipsum dolor sit amet, consectetur
            adipiscing elit. Donec molestie, ante et
            luctus vehicula, nisl leo porta lacus, nec
            laoreet nisi quam a dui. 

            <p class="para">Lorem ipsum dolor sit amet, consectetur
            adipiscing elit. Donec molestie, ante et
            luctus vehicula, nisl leo porta lacus, nec
            laoreet nisi quam a dui. Lorem ipsum dolor sit amet, consectetur
            adipiscing elit. Donec molestie, ante et
            luctus vehicula, nisl leo porta lacus, nec
            laoreet nisi quam a dui.  </p>
            </p>
          </div>
        </div>
      </div>
      <br>
      <div class="main-middle">
        <div class="grid-x">
              <div class="medium-6 cell small-order-2 medium-order-1">
                <p class="para">Lorem ipsum dolor sit amet, consectetur
                adipiscing elit. Donec molestie, ante et
                luctus vehicula, nisl leo porta lacus, nec
                laoreet nisi quam a dui.Lorem ipsum dolor sit amet, consectetur
                adipiscing elit. Donec molestie, ante et
                luctus vehicula, nisl leo porta lacus, nec
                laoreet nisi quam a dui. 
    
                <p class="para">Lorem ipsum dolor sit amet, consectetur
                adipiscing elit. Donec molestie, ante et
                luctus vehicula, nisl leo porta lacus, nec
                laoreet nisi quam a dui. Lorem ipsum dolor sit amet, consectetur
                adipiscing elit. Donec molestie, ante et
                luctus vehicula, nisl leo porta lacus, nec
                laoreet nisi quam a dui.  </p>
                </p>
              </div>
              <div class="medium-6 cell small-order-1 medium-order-2">
                <img class="about-image" src="<?php echo get_theme_file_uri("/img/orange_creature.jpg")?>">
              </div>
            </div>
          </div>
          <br>
  <?php }
?>
    <?php
  
   // Define our WP Query Parameters
   $the_query = new WP_Query( 'posts_per_page=3' ); ?>

<hr>

<?php if( dynamic_sidebar('contact_form')) : else : endif;?>


<?php get_footer(); ?>