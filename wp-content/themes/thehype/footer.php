<footer>

	<div class="row">
    <?php dynamic_sidebar('footer-widget-area'); ?>
  </div>


    <!-- <div class="social float-right">
    <a href="http://thethemehype.tumblr.com"> <span class="fab fa-tumblr fa-sm"></span></a>
  <a href="http://instagram.com"> <span class="fab fa-instagram fa-sm"></span></a>
</div> -->

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

<!--
    <ul class="list-inline">
      <li class="list-inline-item">
        <a href="http://themehype.test/license/">License</a>
      </li>
      <li class="list-inline-item">
        <a href="http://localhost/themehype/terms-and-conditions/">Terms</a>
      </li>
      <li class="list-inline-item">
        <a href="http://localhost/themehype/terms-and-conditions/">FAQ</a>
      </li>
    </ul>
-->

  
    <p class="text-center">&copy; <?php echo date('Y'); ?> <a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></p>
  </div>
  </div>

              <!-- <div class="container">
                <p class="text">
                  <a href="#"><span class="fas fa-angle-up"></span></a></a>
                </p>
              </div> -->
     

</footer>


<?php wp_footer(); ?>
</body>
</html>
