<footer>

	<div class="row">
    <?php dynamic_sidebar('footer-widget-area'); ?>
  </div>

<div class="payment text-center">
  <span class="fab fa-cc-visa fa-2x"></span>
  <span class="fab fa-cc-mastercard fa-2x"></span>
  <span class="fab fa-cc-stripe fa-2x"></span>
</div>


  <div class="container text-center">
  
  <?php wp_nav_menu( array(
     'theme_location' => 'footer-menu', 
     'container_id'   => 'inline-item',
     'items_wrap'     => '<ul id="%1$s" class="list-inline"> %3$s </ul>'
  
  ) ); ?>

  
    <p class="text-center">&copy; <?php echo date('Y'); ?> <a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></p>
  </div>
  </div>


</footer>


<?php wp_footer(); ?>
</body>
</html>
