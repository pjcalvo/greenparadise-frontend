<?php
/*
Template Name: Transportation Template
*/

if( have_posts() ){the_post();}
?>

<div class="content-medium">
    <div class="center">
        <h1 class="title t4 text-center blue-cerulean">CHOOSE <span class="pine-cone"> YOUR TRANSPORTATION</span></h1>
    </div>
    <div class="text t-paragraph text-justify">
        <?php echo get_the_content(); ?>
    </div>
    <br><hr><br>
    <div class="col-sm-12">
        <div class="col-sm-6">
            <h1 class="title t4 text-center green">TAKE <span class="pine-cone"> A SHUTLE</span></h1>
            <p class="text t-paragraph text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
        </div>
        <div class="col-sm-6">
            <h1 class="title t4 text-center green">RENT <span class="pine-cone"> A VEHICLE</span></h1>
            <p class="text t-paragraph text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="center col-sm-6">
            <h1 class="title t4 text-center green">BOOK <span class="pine-cone"> A FLY</span></h1>
            <p class="text t-paragraph text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
        </div>
        <div class="center col-sm-6">
            <h1 class="title t4 text-center green">OTHER <span class="pine-cone"> TRANSP</span></h1>
            <p class="text t-paragraph text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
        </div>
    </div>
</div>
<br><br>
<?php get_template_part('templates/destinations', 'page'); ?>