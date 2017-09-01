//$(function () {
//    //cache the window object
//    var $window = $(window);
//    // Parallax background effect
//    $('section[data-type="background"]').each(function () {
//        var $bgobj = $(this); // Assigning the object
//
//        $window.scroll(function () {
//            // Scroll the background at var speed
//            // The y position is a negitive value
//
//            var yPos = -($window.scrollTop() / $ogobj.data('speed'));
//
//            //Put together final background position.
//
//            var cords = '50%' + yPos + 'px';
//
//            //Move the background
//            $bgobj.css({
//                backgroundPosition: cords
//            });
//        });
//    });
//});
