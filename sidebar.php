
  <div class="sidebar-mod" id="sidebarMod">
      <br>
      <br>
      <h5><?php _e('Categories'); ?></h5>
      <ul>
        <?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
      </ul>
      <ul>
        <?php wp_list_pages(); ?>
      </ul>
      
      <?php include(TEMPLATEPATH . '/searchform.php'); ?>
      <?php wp_register(); ?>
      <?php wp_loginout(); ?>
      <?php wp_meta(); ?>
      <?php wp_get_archives(); ?>
       
  </div>