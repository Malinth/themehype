<?php
/**
 * Template Name: Cart
 *
 */
?>

<?php get_header(); ?>


<div class="headers"> 
  <div class="header-overlay"> 

  <?php if ( has_post_thumbnail() ) : ?>
        <?php the_post_thumbnail('full'); ?>
<?php endif; ?>



        <div class="cart-content">
       

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
           <?php the_content(); ?>
           

              </div>
            </div>
          </div>
 


<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>