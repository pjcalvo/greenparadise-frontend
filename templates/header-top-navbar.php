<header class="banner navbar navbar-default navbar-static-top" role="banner">
    <div class="container">
        <div class="logo col-sm-2 col-sm-offset-1">
                <a href="/"><img src="<?php echo get_theme_mod('custom_logo') ?>" ?></a>
        </div>
        <div class="nav-container col-sm-8">
            <nav class="collapse navbar-collapse" role="navigation">
                <?php
                  if (has_nav_menu('primary_navigation')) :
                    wp_nav_menu(array('theme_location' => 'primary_navigation', 
                                      'menu_class' => 'nav nav-pills'));
                  endif;
                ?>
                
                <!--<ul class="nav nav-pills">
                    <li role="presentation" class="active"><a href="#"> <span class="icon-leaf"></span> HOME</a></li>
                    <li role="presentation"><a href="/about-us/"> <span class="icon-users"></span> ABOUT US</a></li>
                    <li role="presentation"><a href="#"> <span class="icon-work"></span> SERVICES</a></li>
                    <li role="presentation"><a href="#"> <span class="icon-location"></span> DESTINATION</a></li>
                    <li role="presentation"><a href="#"> <span class="icon-phone-in-talk"></span> CONTACTS</a></li>
                </ul>-->
            </nav>
        </div>
    </div>
</header>
