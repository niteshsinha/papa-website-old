//for first slide show..
function slideSwitch1() {
    var $active1 = $('#slideshow1 IMG.active');

    if ( $active1.length == 0 ) $active1 = $('#slideshow1 IMG:last');

    // use this to pull the images in the order they appear in the markup
    var $next =  $active1.next().length ? $active1.next()
        : $('#slideshow1 IMG:first');

    // uncomment the 3 lines below to pull the images in random order
    
    // var $sibs  = $active.siblings();
    // var rndNum = Math.floor(Math.random() * $sibs.length );
    // var $next  = $( $sibs[ rndNum ] );


    $active1.addClass('last-active');

    $next.css({opacity: 0.0})
        .addClass('active')
        .animate({opacity: 1.0}, 1000, function() {
            $active1.removeClass('active last-active');
        });
}

$(function() {
    setInterval( "slideSwitch1()", 2000 );
});



//for second slide show..
function slideSwitch2() {
    var $active = $('#slideshow2 IMG.active');

    if ( $active.length == 0 ) $active = $('#slideshow2 IMG:last');

    // use this to pull the images in the order they appear in the markup
    var $next =  $active.next().length ? $active.next()
        : $('#slideshow2 IMG:first');

    // uncomment the 3 lines below to pull the images in random order
    
    // var $sibs  = $active.siblings();
    // var rndNum = Math.floor(Math.random() * $sibs.length );
    // var $next  = $( $sibs[ rndNum ] );


    $active.addClass('last-active');

    $next.css({opacity: 0.0})
        .addClass('active')
        .animate({opacity: 1.0}, 1000, function() {
            $active.removeClass('active last-active');
        });
}

$(function() {
    setInterval( "slideSwitch2()", 3000 );
});

//for third slide show..
function slideSwitch3() {
    var $active = $('#slideshow3 IMG.active');

    if ( $active.length == 0 ) $active = $('#slideshow3 IMG:last');

    // use this to pull the images in the order they appear in the markup
    var $next =  $active.next().length ? $active.next()
        : $('#slideshow3 IMG:first');

    // uncomment the 3 lines below to pull the images in random order
    
    // var $sibs  = $active.siblings();
    // var rndNum = Math.floor(Math.random() * $sibs.length );
    // var $next  = $( $sibs[ rndNum ] );


    $active.addClass('last-active');

    $next.css({opacity: 0.0})
        .addClass('active')
        .animate({opacity: 1.0}, 1000, function() {
            $active.removeClass('active last-active');
        });
}

$(function() {
    setInterval( "slideSwitch3()", 2000 );
});

//for fourth slide show..
function slideSwitch4() {
    var $active = $('#slideshow4 IMG.active');

    if ( $active.length == 0 ) $active = $('#slideshow4 IMG:last');

    // use this to pull the images in the order they appear in the markup
    var $next =  $active.next().length ? $active.next()
        : $('#slideshow4 IMG:first');

    // uncomment the 3 lines below to pull the images in random order
    
    // var $sibs  = $active.siblings();
    // var rndNum = Math.floor(Math.random() * $sibs.length );
    // var $next  = $( $sibs[ rndNum ] );


    $active.addClass('last-active');

    $next.css({opacity: 0.0})
        .addClass('active')
        .animate({opacity: 1.0}, 1000, function() {
            $active.removeClass('active last-active');
        });
}

$(function() {
    setInterval( "slideSwitch4()", 2000 );
});
