<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ktelecomtest
 */

?>
      <footer class="footer">
        <div class="logo">
          <img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="logo" />
    <p>© 2018–2022 ООО «К-Телеком»</p>
          </div>
          <div class="social-media">
            <img src="<?php echo get_template_directory_uri();?>/img/1.svg" alt="instagram" />
            <img src="<?php echo get_template_directory_uri();?>/img/Ellipse 20.svg" alt="youtube" />
            <img src="<?php echo get_template_directory_uri();?>/img/3.svg" alt="vk" />
    
          </div>
      </footer>
    </div>
<?php wp_footer(); ?>
</div>
    <script src="<?php echo get_template_directory_uri();?>/js/flickity.pkgd.min.js"></script>

    <script src="<?php echo get_template_directory_uri();?>/js/index.js"></script>
  </body>
</html>


