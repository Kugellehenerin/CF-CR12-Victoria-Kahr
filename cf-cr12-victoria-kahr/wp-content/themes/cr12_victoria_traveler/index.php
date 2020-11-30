<?php get_header(); ?>

<div class="container" id="indexbody">
  <div class="row">
        <?php if(have_posts()) : ?> 

        <?php while(have_posts()) : the_post(); ?> 

    <div class="col-4" style="width: 18rem;">
      <div class="card mb-5">
        <div class="card-body">
          <?php if(has_post_thumbnail()) : ?>
          <?php the_post_thumbnail('thumbnail'); ?>
          <?php endif; ?>
            <h5 class="card-title mt-3"> <a href="<?php the_permalink(); ?>"><!--retrieves URL for the permalink-->
            <?php the_title(); ?>    <!--retrieves blog title-->
            </a></h5>
            <p> Author: <?php the_author(); ?></p>
            <p><?php the_time('F j, Y g:i a'); ?></p>
            <p class="card-text"><?php the_excerpt(); ?></p>
          </div>
      </div>
    </div>
        <?php endwhile; ?>

        <?php else :?> 

        <p>No posts found</p> 
        <?php endif; ?> 

        <?php
          if(is_active_sidebar('sidebar')):
          dynamic_sidebar('sidebar');
          endif;  
        ?>
  </div>
</div>

<?php get_footer(); ?>

</body>
</html>