<footer class="content-info container" role="contentinfo">
  <div class="row">
    <div class="col-lg-12">
      <?php dynamic_sidebar('sidebar-footer'); ?>
      <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
    <div id="logo-bar" class="container">
        <div class="row">
            <div class="col-xs-6">
              <p class="float-right">Find us:</p>   
            </div>
            <div class="col-xs-6">
                <ul class= "social-list float-left">
                     <li class="social-icon facebook"><a href=""></a></li>
                     <li class="social-icon twitter"><a href=""></a></li>
                     <li class="social-icon gmail"><a href=""></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div id="footer-bar" class="container">
        <div class="row center" id ="footer-text">
            <div class="col-sm-3 footer-logo">
                <div class= "footer-column">
                    <div class="logo">
                        <a href="/"><img src="<?php echo get_theme_mod('custom_logo') ?>" ?></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class= "footer-column">
                    <h4>Lorem Ipsum</h4>
                    <p>This is a short describing the lorem impsum</p>
                </div>
            </div>
            <div class="col-sm-3">
              <div class= "footer-column">
                   <h4>Lorem Ipsum</h4>
                    <p>This is a short describing the lorem impsum</p>
                </div>
            </div>
            <div class="col-sm-3">
              <div class= "footer-column"> <h4>Lorem Ipsum</h4>
                    <p>This is a short describing the lorem impsum</p>
                </div>
            </div>
        </div>
    </div>  
</footer>

<?php wp_footer(); ?>
