<?php
/**
 * Template Name: E-commerce
 *
 */
?>
<?php get_header(); ?>

<div class="ecommerce">

<div class="col-sm-6" style="text-align:start;"><h1>Cart</h1></div><div class="col-sm-6"></div>
<div class="col-sm-6"></div><div class="col-sm-6"></div>

<div class=""></div>
  <!-- <div class="container"> -->
         
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
           <?php the_content(); ?>
           
       
    
            </div>
          </div>
    

<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>