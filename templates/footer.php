<footer class="content-info" role="contentinfo">
  <div class="row">
    <div class="col-lg-12">
      <?php dynamic_sidebar('sidebar-footer'); ?>
    <div id="logo-bar" class="container col-sm-12">
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
    <div id="footer-bar" class=" col-sm-12 container">
        <div class="container row center" id ="footer-text">
            <div class="col-sm-3 footer-logo">
                <div class= "footer-column">
                    <div class="logo">
                        <a href="/"><img src="<?php echo get_theme_mod('custom_logo') ?>" ?></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class= "footer-column">
                    <h4>Phone</h4>
                    <p>(506) 8798-8181</p>
                    <p>(506) 8982-1377</p>
                </div>
            </div>
            <div class="col-sm-3">
              <div class= "footer-column">
                   <h4>Email</h4>
                    <p>sgonzalez@greenparadisecostarica.com</p>
                    <p>imadrigal@greenparadisecostarica.com</p>
                </div>
            </div>
            <div class="col-sm-3">
              <div class= "footer-column skype-column"> <h4>Skype</h4>
                    <p>greenparadisecr</p>
                </div>
            </div>
        </div>
    </div>  
</footer>
        <script>
            
            $(window).scroll(function () {
                if( $(window).scrollTop() > 100   ){
                      $('.banner').css({'background-color':'rgba(1,1,1,0.7)'});
                
                
            }else if ($(window).scrollTop() <= 0){
                     $('.banner').css({'background-color':'rgba(1,1,1,0.2)'});
            }}
            );
        
        </script>
<?php wp_footer(); ?>
