<?php get_header(); ?>
    <!--h3><small>单页</small></h3-->
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <div class="post-mod" id="post_<?php the_ID(); ?>">
          <?php edit_post_link('Edit', '<p>', '</p>'); ?>
          <h2>
            <a href="<?php the_permalink(); ?>"  title="<?php the_title(); ?>"><?php the_title(); ?></a>
          </h2>
          
          <div class="post-content">
            <?php the_content(); ?>
            <?php edit_post_link('Edit', '<p>', '</p>'); ?>
          </div>
          
        </div>          
      <?php endwhile; ?>
      
    <?php else : ?>
      <div class="post-content">没有日志</div>
    <?php endif; ?>
  </div>
  
  <?php get_footer() ?>
  
