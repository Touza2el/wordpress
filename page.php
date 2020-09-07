<?php get_header(); ?>

<?php 
   if(have_posts()):
      while(have_posts()):the_post(); 
?>
        <div class="page">
          <h1><?php the_title(); ?></h1>
          <p><?php the_content(); ?></p>
        </div> 
<?php endwhile;
      else: 
        echo '<p>There is No Content</p>';
    endif;  
?>

<?php get_footer(); ?>