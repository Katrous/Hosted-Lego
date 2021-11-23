<?php
/**
    * Template Name: Category List Custom Page
*/

?>

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
    <div class="category-container category-list-category-container"> 
      


<?php
// LOAD Category DYNAMICALLY //

$categories = get_categories();
foreach($categories as $category)
echo '<a href="' . get_category_link($category->term_id) . '" class="category-button">' . $category->name . '</a>';
  
?>

<!-- pagination????? -->
</div>
</div>
</div>
<?php get_footer(); ?>