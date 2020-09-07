<!-- Template Name: Special Layout -->
<?php get_header(); ?>

<?php 
   if(have_posts()):
      while(have_posts()):the_post(); 
?>
      <div class="special-layout-container">
        <div class="page special-layout">
            <h1><?php the_title(); ?></h1>
            <p><?php the_content(); ?></p>
          </div>
      </div> 
<?php endwhile;
      else: 
        echo '<p>There is No Content</p>';
    endif;  
?>

<?php get_footer(); ?>