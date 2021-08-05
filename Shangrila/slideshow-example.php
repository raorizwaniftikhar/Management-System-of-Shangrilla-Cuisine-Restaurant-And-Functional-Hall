<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta content="text/html; charset=iso-8859-1" http-equiv="Content-Type"/>

<title>Simple jQuery Slideshow from JonRaasch.com</title>

<script type="text/javascript" src="js/jquery-gallery.js"></script>

<script type="text/javascript">

/*** 
    Simple jQuery Slideshow Script
    Released by Jon Raasch (jonraasch.com) under FreeBSD license: free to use or modify, not responsible for anything, etc.  Please link out to me if you like it :)
***/

function slideSwitch() {
    var $active = $('#slideshow IMG.active');

    if ( $active.length == 0 ) $active = $('#slideshow IMG:last');

    // use this to pull the images in the order they appear in the markup
    var $next =  $active.next().length ? $active.next()
        : $('#slideshow IMG:first');

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
    setInterval( "slideSwitch()", 5000 );
});

</script>
<link href="js/gallery css.css" rel="stylesheet" type="text/css" />


</head>

<body style="font-family: Arial, Sans-serif, sans;">

<!-- this will work with any number of images -->
<!-- set the active class on whichever image you want to show up as the default 
(otherwise this will be the last image) -->

<div id="slideshow">

    <img src="gallery img/image1.JPG" alt="Slideshow Image 1" class="active" />
    <img src="gallery img/image2.JPG" alt="Slideshow Image 2" />
    <img src="gallery img/image5.JPG" alt="Slideshow Image 3" />
    <img src="gallery img/image4.JPG" alt="Slideshow Image 4" />
    <img src="gallery img/PICT0260.JPG" alt="Slideshow Image 5" />
	<img src="gallery img/shangrila1.JPG" alt="Slideshow Image 6" />
    <img src="gallery img/shangrila3.JPG" alt="Slideshow Image 7" />
    <img src="gallery img/shangrila4.JPG" alt="Slideshow Image 8" />
    <img src="gallery img/shangrila7.JPG" alt="Slideshow Image 9" />
	<img src="gallery img/PICT0255.JPG" alt="Slideshow Image 10" />
    <img src="gallery img/PICT0252.JPG" alt="Slideshow Image 11" />
    <img src="gallery img/PICT0261.JPG" alt="Slideshow Image 12" />
	
	</div>



</body>
</html>