<?php
/**
 * Template Name: Contact
 *
 */
?>

<?php get_header(); ?>


<div class="headers"> 
  <div class="header-overlay"> 

  <?php if ( has_post_thumbnail() ) : ?>
        <?php the_post_thumbnail('full'); ?>
<?php endif; ?>



        <div class="contact-content">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
           <?php the_content(); ?>

     <strong>E-mail:</strong> themehype@hotmail.com<br>
     <strong>Phone:</strong> Have none. Yet to come..<br>

    

              </div>
            </div>
          </div>
 


<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>