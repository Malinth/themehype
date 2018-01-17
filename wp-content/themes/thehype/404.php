<?php get_header(); ?>

<div class="container">
  <div class="row">
    
    <div class="<?php if(is_active_sidebar('sidebar-widget-area')): ?>col-sm-8<?php else: ?>col-sm-12<?php endif; ?>">
      <div id="content" role="main">
        <br>
        <div class="alert alert-warning">
          <h1><i class="glyphicon glyphicon-warning-sign"></i> <?php _e('Error', 'themehype'); ?> 404</h1>
          <p><?php _e('The page you were looking for does not exist.', 'themehype'); ?></p>
        </div>
      </div>
    </div>
    
    <div class="col-sm-4" id="sidebar" role="navigation">
       <?php get_sidebar(); ?>
    </div>
    
  </div>
</div>

<?php get_footer(); ?>
