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
            var categoryID = $('#destinationFilter').selectpicker().val();
            var optionName = $('#destinationFilter option:selected').selectpicker().text();
            var fistWord = optionName.substr(0, optionName.indexOf(" "));
            var text = optionName.substr(optionName.indexOf(" "));
            if(optionName.indexOf(" ") > -1){
                $("#des-title").html('<h1 class="title t4">' + fistWord +' <span> ' + text + '</span> </h1>');
            }
            else{
                $("#des-title").html('<h1 class="title t4">' + optionName + '</h1>');
            }
            //'<h1 class="title t4">NORTH <span> AMERICA</span> </h1>'
            destination.filterCarousel(categoryID);
        });
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
                
                $("#destCarouselContainer").empty();

                if(response.length === 0){
                    $('.control-container').hide();
                    $("#destCarouselContainer").html('<h3>No results</h3>');
                }else{
                    var htmlResult = '<div class="item active">';
                    var index;
                    var cont = 0;
                    for (index = 0; index < response.length; index++) {

                        if (cont === 3) {
                            htmlResult += '</div><div class="item">';
                            cont = 0;
                        }

                        htmlResult += '<div class="col-sm-4"><img src="' + response[index].thumbnail + '"><div class="blue-cerulean">' +
                            '<span class="price center">$' + response[index].price + '<sup>PER PERSON</sup></span><span class="place center">'
                        + response[index].title + '</span></div><p class="text-center">' + response[index].description + 
                            '</p><hr><div class="sect-foot"><label class="blue-cerulean t12">RESTRICTIONS APPLY</label>' +
                            '<a href="' + response[index].link + '"><button href type="button" class="btn btn-green">TAKE ME THERE</button></a>' +
                            '</div></div>';

                        cont++;
                    }

                    htmlResult += '</div>';
                    
                    $("#destCarouselContainer").html(htmlResult);
                    
                    if(index < 4)
                    {
                        $('.carousel-control').hide();
                    }
                    else{
                        $(".carousel-control").show();
                    }

                }
            }
        });
    }
}

$(document).ready(UTIL.loadEvents);
