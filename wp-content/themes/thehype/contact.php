<?php
/**
 * Template Name: Contact
 *
 */
?>

<?php get_header(); ?>


<div class="headers"> 
  <div class="headeroverlay"> 

  <?php if ( has_post_thumbnail() ) : ?>
        <?php the_post_thumbnail('large'); ?>
<?php endif; ?>


  <!-- <div class="container"> -->
        <div class="contact-content">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
           <?php the_content(); ?>

          <a href="http://themehype.test/contact/" class="btn btn-outline btn-xl js-scroll-trigger">themehype@hotmail.com</a>
    

              </div>
            </div>
          </div>
 


<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>