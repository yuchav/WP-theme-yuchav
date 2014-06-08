<?php get_header(); ?>
    <!--h3><small>文章详情页</small></h3-->
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <div class="post-mod" id="post_<?php the_ID(); ?>">
          <?php edit_post_link('Edit', '<p>', '</p>'); ?>
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
              <?php edit_post_link('Edit', ' | '); ?>
            </small>
          </div>
          
        </div>          
      <?php endwhile; ?>
      
    <?php else : ?>
      <div class="post-content">没有日志</div>
    <?php endif; ?>
    <div class="paging-mod">
    <!--« --><?php previous_post_link('%link') ?> <span class="fr"><?php next_post_link('%link') ?><!-- »--></span>
    </div>
  </div>
  
  <div class="comments-mod">
    <?php comments_template(); ?>
  </div>
  <?php get_footer() ?>
  
