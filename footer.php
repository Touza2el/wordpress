    <!-- Start Footer Section -->
    <footer class="footer-section">
      <div class="container">
        <div class="footer-content">
          <p class="footer-copyright">copyright &copy; <?php echo date('Y'); ?> all right reserved
            <?php bloginfo('name'); ?> 
          </p>
          <nav class="footer-navigation">
            <?php $args = array(
              'theme_location' => 'footer-menu'
            ) ?>
            <?php wp_nav_menu($args); ?>
          </nav>
        </div>
      </div>
    </footer>
    <!-- End Footer Section -->
    <?php wp_footer(); ?>   
  </body>
</html>