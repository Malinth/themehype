<?php get_header(); ?>


<div class="headers"> 
  <div class="headeroverlay"> 

  <?php if ( has_post_thumbnail() ) : ?>
        <?php the_post_thumbnail('large'); ?>
<?php endif; ?>


  <div class="container h-100">
    <div class="row h-100">
        <div class="header-content mx-auto">
         
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
           <?php the_content(); ?>
           
          <a href="http://localhost/themehype/shop/" class="btn btn-outline btn-xl js-scroll-trigger">Check all themes</a>

              </div>
            </div>
          </div>
        </div>
      </div>


<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>