<?php get_header(); ?>

    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <div class="post-mod" id="post_<?php the_ID(); ?>">
          
          <h2>
            <a href="<?php the_permalink(); ?>"  title="<?php the_title(); ?>"><?php the_title(); ?></a>
          </h2>
          
          <div class="post-content">
            <?php the_content(); ?>
            <small class="post-metadata"> 
              ↑ 
              <?php _e('Filed under:'); ?>
              <?php the_category(',') ?> | 
              <?php _e('by'); ?>
              <?php the_author(); ?>
              <?php comments_popup_link('No Comments »', '1 Comment »', '% Comments »'); ?>
              <?php edit_post_link('Edit', ' | '); ?>
            </small>
          </div>
          
        </div>          
      <?php endwhile; ?>
      
    <?php else : ?>
      <div class="post-content">没有日志</div>
    <?php endif; ?>
  </div>
  
  <div class="paging-mod tc">
    <?php posts_nav_link(' | '); ?>
  </div>
  <br>
  
  
  
  <?php get_sidebar() ?>
  <?php get_footer() ?>
  
