jQuery(document).ready(function () {
///////////////////////////////  Body fadein  ///////////////////////////////////////////////
   //jQuery('body').css('opacity', '0').fadeTo(1000, 1,'swing');
    //jQuery("a").on("click", function (event) {
     //  jQuery('body').fadeTo(500, 0,'swing');
    //});
///////////////////////////////   Session for Bluebar(navi  ///////////////////////////////////////////////
    //fe_page js php -> js -> global set PageId
    var date = new Date();
    var m = 5;
    date.setTime(date.getTime() + (m * 60 * 1000));
    if (jQuery.cookie("bluebar") == "true") {
        jQuery('#subNavi').css({opacity: 1});
    }
    else if (PageId != 7 || PageId != 5 && !jQuery.cookie("bluebar")) {
        jQuery.cookie('bluebar', 'true', {expires: date, domain: 'oralchirurgie-bochum.de' });
        jQuery('#subNavi').delay(500).animate({opacity: 1}, 500, function () {
        });
    }
    //jQuery.removeCookie('bluebar');
///////////////////////////////  Scrolling  ///////////////////////////////////////////////
    jQuery('.uphover').on("click", function () {
        jQuery('html,body').animate({ scrollTop: 0 }, 'slow', function () {
        });
    });
    jQuery(".downhover").click(function () {
        //jQuery('html, body').animate({scrollTop: jQuery("#promo").offset().top - 40}, 500);
        jQuery('html, body').animate({scrollTop: jQuery(".down").offset().top }, 500);
    });
///////////////////////////////  Hovers  ///////////////////////////////////////////////
    jQuery('.ansehen').mouseover(function () {
        jQuery("img", this).attr('src', '/files/oc/images/ansehenhover.jpg')
        jQuery("span", this).css("color", "#0064AE")
    });
    jQuery('.ansehen').mouseout(function () {
        jQuery("img", this).attr('src', '/files/oc/images/ansehen.jpg');
        jQuery("span", this).css("color", "white")
    });
    jQuery('.uphover img').mouseover(function () {
        jQuery(this).attr('src', '/files/oc/images/logo_up_colored.png');
    });

    jQuery('.uphover img').mouseout(function () {
        jQuery(this).attr('src', '/files/oc/images/logo_up_sw.png');
    });
    jQuery('.downhover img').mouseover(function () {
        jQuery(this).attr('src', '/files/oc/images/logo_up_colored.png');
    });
    jQuery('.downhover img').mouseout(function () {
        jQuery(this).attr('src', '/files/oc/images/logo_up_sw.png');
    });
///////////////////////////////  Fixes and Hacks  ///////////////////////////////////////////////
    // jQuery("#SubHeader .s_input", this).css("height","100vh")
    //jQuery("#SubHeader .s_input", this).css("height", "600px")
///////////////////////////////   Loginbox   ///////////////////////////////////////////////
    var hiddenBox = jQuery("#loginBox");
    jQuery("button#login").on("click", function (event) {
        hiddenBox.show();
    });
///////////////////////////////   Bubble Fadein   ///////////////////////////////////////////////
    jQuery("#bubble p").hide();
    jQuery("#bubble p").delay(2000).fadeIn("slow", function () {
// Animation complete
    });
///////////////////////////////   html2canvas   ///////////////////////////////////////////////
//      html2canvas(jQuery("#SubHeader"), {
//         onrendered: function(canvas) {
//              document.body.appendChild(canvas);
//          }
//     });
///////////////////////////////
});

