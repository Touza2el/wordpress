<?php get_header(); ?>

<?php 
   if(have_posts()):
      while(have_posts()):the_post(); 
?>
        <div class="page about">
          <div><h1><?php the_title(); ?></h1></div>
          <div><p><?php the_content(); ?></></div>
        </div> 
<?php endwhile;
      else: 
        echo '<p>There is No Content</p>';
    endif;  
?>

<?php get_footer(); ?>