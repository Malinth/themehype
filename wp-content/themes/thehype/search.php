<?php get_header(); ?>

<div class="container">
  <div class="row">
    
    <div class="<?php if(is_active_sidebar('sidebar-widget-area')): ?>col-sm-8<?php else: ?>col-sm-12<?php endif; ?>">
      <div id="content" role="main">
        <header>
          <h1><?php _e('Search Results for', 'themehype'); ?> &ldquo;<?php the_search_query(); ?>&rdquo;</h1>
        </header>
        <hr/>
        <?php get_template_part('loops/search-results'); ?>
      </div>
    </div>
    
    <div class="col-sm-4" id="sidebar" role="navigation">
       <?php get_sidebar(); ?>
    </div>
    
  </div>
</div>

<?php get_footer(); ?>
