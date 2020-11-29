<?php get_header(); ?>

<div class="container">

       <?php if(have_posts()) : ?> <!--  If there are posts available  -->

       <?php while(have_posts()) : the_post(); ?> <!-- if there are posts, iterate the posts in the loop-->
       <a href="<?php the_permalink(); ?>"><!--retrieves URL for the permalink-->
          <?php the_title(); ?>    <!--retrieves blog title-->
       </a>

       <p><?php the_time('F j, Y g:i a'); ?></p><!--retrieves date blog entry was created-->

       <p> <?php the_author(); ?></p><!--retrieves author of blog entry-->
      
      <?php if(has_post_thumbnail()) : ?>
        <!-- the_post_thumbnail ist für die größe des Bildes!!! -->
        <?php the_post_thumbnail('medium'); ?>
        <?php endif; ?>

       <?php the_excerpt(); ?><!--retrieves excerpt-->

       <?php endwhile; ?><!--end the while loop-->

       <?php else :?> <!-- if no posts are found then: -->

       <p>No posts found</p>  <!-- no posts found displayed -->
       <?php endif; ?> <!-- end if -->

       <?php
        if(is_active_sidebar('sidebar')):
        dynamic_sidebar('sidebar');
        endif;  
      ?>
</div>

<?php get_footer(); ?>

</body>
</html>