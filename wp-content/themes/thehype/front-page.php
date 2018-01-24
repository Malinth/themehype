<?php get_header(); ?>

  <div class="headers"> 
  <div class="headeroverlay"> 

  <?php if ( has_post_thumbnail() ) : ?>
        <?php the_post_thumbnail('large'); ?>
<?php endif; ?>


  <div class="container h-100">
    <div class="row h-100">
        <div class="header-content">
         
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
           <?php the_content(); ?>
           
          <a href="themehype.test/shop" class="btn btn-outline btn-xl js-scroll-trigger">Check all themes</a>

              </div>
            </div>
          </div>
        </div>
      </div>


<section class="features">
<div class="container">
<div class="jumbotron">
<?php if( get_field('front_text1') ): ?>
    <?php the_field('front_text1'); ?>
<?php endif; ?> 

  </div>
</section>

<section class="gallery">
  <div class="container">
   
      <?php if( get_field('front_text2') ): ?>
        <?php the_field('front_text2'); ?>
     <?php endif; ?> 
   
    <div class="row">
            <?php 
$images = get_field('extra_gallery');
$size = 'medium'; ?>

  <?php
      if( $images ): ?>

        <?php foreach( $images as $image ): ?>
        <div class="card img-responsive">
     <?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
      </div>

        <?php endforeach; ?>
        </div>
      <?php endif; ?>
</section>

<section class="contact">
  <div class="container">
    <h2>Follow us on Tumblr</h2> <!-- Ska bytas ut -->
    <ul class="list-inline list-social">
      <li class="list-inline-item social-tumblr">
        <a href="http://thethemehype.tumblr.com"> 
        <span class="fab fa-tumblr fa-2x"></span></a>
        </a>
      </li>
     
    </ul>
  </div>
</section>

<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>