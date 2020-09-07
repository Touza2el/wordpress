<?php get_header(); ?>

<!-- Start Blog Page -->
<div class="posts-page">
  <div class="container">
    <div class="posts-page-content">
      <div class="posts-section">
        <div class="posts-container">
          <?php 
            if(have_posts()):
              while(have_posts()):the_post(); 
          ?>
              <div class="post-item">
                <div class="post-image">   
                  <?php the_post_thumbnail('', array('class' => 'post-thumbnail')); ?>
                </div>
                <div class="post-text">
                  <div class="post-meta-data">
                    <span class="post-author">
                      <i class="fas fa-user"></i><?php the_author(); ?>
                    </span> | 
                    <span class="post-date">
                      <i class="far fa-calendar-alt"></i><?php the_time('F jS, Y'); ?>
                    </span> |
                    <span class="post-comments">
                      <i class="fas fa-comments"></i> 13 comments
                    </span>   
                  </div>
                  <h1 class="post-title">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                  </h1>
                  <div class="post-categories">
                    <?php
                      $categories = get_the_category();
                      $separator =' |';
                      $output = ''; 
                      if($categories){
                        foreach($categories as $category){
                          $output .= '<a href="' . get_category_link($category->term_id) . '">'. $category->cat_name  . '</a> ' . $separator ;
                        }
                        echo trim($output, $separator); 
                      } 
                    ?> 
                  </div>
                  <div class="post-paragraph">
                    <?php the_content('READ MORE...'); ?>
                  </div>
                </div>
              </div> 
          <?php endwhile;
            else: 
              echo '<p>There is No Content</p>';
            endif;   
          ?>
       </div>
       <div class="posts-pagination">
         <?php 
           if(get_previous_posts_link()){
             previous_posts_link('<button type="button" >prev</button>');
           }else{
             echo '<button type="button" disabled>prev</button>';
           }
           if(get_next_posts_link()){
             next_posts_link('<button type="button">next</button>');
           }else{
             echo '<button type="button" disabled>next</button>';
           }
         ?>
        </div> 
      </div>   
      <div class="sidebar-section">
        <h2>sidebar section</h2>
      </div>   
    </div>
  </div>
</div>
<!-- Start Blog Page -->

<?php get_footer(); ?>