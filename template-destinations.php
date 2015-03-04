<?php
/*
Template Name: Destinations Template
*/
if( have_posts() ){the_post();}
?>
<div class="destinations">
    <div class="header center">
        <img class="imgHeader" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id()) ?>">
        <div class="img-header-content center">
            <h1 class="title t1 white text-center">DISCOVER <span class="white"> NEW PLACES</span></h1>
        </div>
    </div>
    <div class="content-large">
        <h1 class="title t2 green text-center">AWESOME <span class="black"> DESTINATIONS</span></h1>
        <p class="text main-text text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc urna lectus, porta sed sodales convallis, tempus et velit. Nunc tristique vel eros quis placerat. Nam molestie, turpis et commodo pellentesque, ex nulla auctor augue, non mattis tellus justo sed ligula. Integer aliquet, arcu vel mollis vulputate, lacus ante cursus lorem, nec aliquet justo erat vitae lectus. Nulla malesuada non odio non tempus.</p>
        <div class="header-select">
            <div class="center">
                <label class="lbl_selectpicker">SELECT DESTINATION</label>
                <select class="selectpicker green">
                    <option>North America</option>
                    <option>South America</option>
                    <option>Europe</option>
                </select>
            </div>
        </div>
        <div class="title-content text-center"><h1 class="title t4">NORTH <span> AMERICA</span> </h1></div>
        <div class="carousel-content">
            <div id="dest_carousel" class="carousel slide" data-ride="carousel">

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <div class="col-sm-4">
                            <img src="\wp-content\uploads\Images\Layer3.png">
                            <div class="blue-cerulean">
                                <span class="price center">$689<sup>PER PERSON</sup></span>
                                <span class="place center">Disney World, Orlando</span>
                            </div>
                            <p class="text-center">4 day/3 night air + hotel non stopfrom San Jose to Destination</p>
                            <hr>
                            <div class="sect-foot">
                                <label class="blue-cerulean t12">RESTRICTIONS APPLY</label>
                                <button type="button" class="btn btn-green">TAKE ME THERE</button>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <img src="\wp-content\uploads\Images\Layer1.png">
                            <div class="blue-cerulean">
                                <span class="price center">$689<sup>PER PERSON</sup></span>
                                <span class="place center">Disney World, Orlando</span>
                            </div>
                            <p class="text-center">4 day/3 night air + hotel non stopfrom San Jose to Destination</p>
                            <hr>
                            <div class="sect-foot">
                                <label class="blue-cerulean t12">RESTRICTIONS APPLY</label>
                                <button type="button" class="btn btn-green">TAKE ME THERE</button>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <img src="\wp-content\uploads\Images\Layer2.png">
                            <div class="blue-cerulean">
                                <span class="price center">$689<sup>PER PERSON</sup></span>
                                <span class="place center">Disney World, Orlando</span>
                            </div>
                            <p class="text-center">4 day/3 night air + hotel non stopfrom San Jose to Destination</p>
                            <hr>
                            <div class="sect-foot">
                                <label class="blue-cerulean t12">RESTRICTIONS APPLY</label>
                                <button type="button" class="btn btn-green">TAKE ME THERE</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Left and right controls -->                
                <a class="left carousel-control" href="#dest_carousel" role="button" data-slide="prev"><span>‹</span></a>
                
                <a class="right carousel-control" href="#carousel-oneDay" role="button" data-slide="next"><span>›</span></a>
            </div>
        </div>
    </div>
</div>