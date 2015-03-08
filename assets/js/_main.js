// Modified http://paulirish.com/2009/markup-based-unobtrusive-comprehensive-dom-ready-execution/
// Only fires on body class (working off strictly WordPress body_class)

var ExampleSite = {
    // All pages
    common: {
        init: function() {
            // JS here
        },
        finalize: function() { }
    },
    // Home page
    home: {
        init: function() {
            // JS here
        }
    },
    // Destination page
    destinations: {
        init: function() {
            destination.registerEvents();
        }
    },
    // About page
    about_us: {
        init: function() {
            // JS here
        }
    }
};

var UTIL = {
    fire: function(func, funcname, args) {
        var namespace = ExampleSite;
        funcname = (funcname === undefined) ? 'init' : funcname;
        if (func !== '' && namespace[func] && typeof namespace[func][funcname] === 'function') {
            namespace[func][funcname](args);
        }
    },
    loadEvents: function() {

        UTIL.fire('common');

        $.each(document.body.className.replace(/-/g, '_').split(/\s+/),function(i,classnm) {
            UTIL.fire(classnm);
        });

    }
};

var destination = {
    
    registerEvents: function() {

        /* Init Destination Filter*/
        $('#destinationFilter').selectpicker();

        /* Our Customer Filter Event */
        $("#destinationFilter").change(function() {
            //var categoryID = $('#sltCustomerFilter').selectpicker().val();
            //customerTpl.filterCarousel(categoryID);
            alert("select Pick");
        });

        //        /* Our Custumer Control Events Next*/
        //        $(".next-slide").click(function(event){
        //            event.preventDefault();
        //            var totalSlides = $("#featured-carousel .item").length;
        //            var currentSlides = $("#featured-carousel div.active").index() + 1;
        //
        //            if(totalSlides !== currentSlides){
        //                $("#featured-carousel").carousel('next');
        //                $(".previous-slide i").show();
        //                $(".previous-slide").css('background-color', '#6A8892');
        //                
        //                if(totalSlides === currentSlides+1){
        //                    $(".next-slide i").hide();
        //                    $(".next-slide").css('background-color', '#8AB2BF');
        //                }
        //            }
        //        });
        //        
        //        /* Our Custumer Control Events Previous*/
        //        $(".previous-slide").click(function(event){
        //            event.preventDefault();
        //            var totalSlides = $("#featured-carousel .item").length;
        //            var currentSlides = $("#featured-carousel div.active").index() + 1;
        //
        //            if( 1 !== currentSlides){
        //                $("#featured-carousel").carousel('prev');
        //                $(".next-slide i").show();
        //                $(".next-slide").css('background-color', '#6A8892');
        //                if(1 === currentSlides-1){
        //                    $(".previous-slide i").hide();
        //                    $(".previous-slide").css('background-color', '#8AB2BF');
        //                }
        //            }
        //        });

    },

    filterCarousel: function(categoryID) {

        $.ajax({
            url: AjaxUtil.url,
            type: "POST",
            data: {
                nonce: AjaxUtil.nonce,
                action: "get_featured_destinations",
                category_id: categoryID,
            },
            dataType: "json",
            success: function (response) {
                console.log(response);
                /*$("#costumerCarouselContainer").empty();

                if(response.length === 0){
                    $('.control-container').hide();
                    $("#costumerCarouselContainer").html('<h3>No results</h3>');
                }else{
                    var htmlResult = '<div id="itemCostumerCarousel" class="item active">';
                    var index;
                    var cont = 0;
                    for (index = 0; index < response.length; index++) {

                        if (cont === 6) {
                            htmlResult += '</div><div class="item">';
                            cont = 0;
                        }

                        htmlResult += '<div class="customer col-xs-12 col-sm-4">';

                        htmlResult += '<div class="customer-image">' + response[index].htmlMedia + '</div>';

                        htmlResult += '<div class="customer-title"><span></span><br><h3>' + response[index].title  + '</h3><img class="icon" src="' + response[index].icon + '" /></div></div>';

                        cont++;
                    }

                    htmlResult += '</div>';

                    $("#costumerCarouselContainer").html(htmlResult);

                    if(index < 6)
                    {
                        $('.control-container').hide();
                    }
                    else{
                        $(".next-slide i").show();
                        $(".next-slide").css('background-color', '#6A8892');
                        $(".previous-slide i").hide();
                        $(".previous-slide").css('background-color', '#8AB2BF');
                        $('.control-container').show();
                    }
                }
            }*/
                }
            })
   }
}

$(document).ready(UTIL.loadEvents);
