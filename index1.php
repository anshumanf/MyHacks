<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" 
"http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>YUI Base Page</title>

<!-- Dependencies -->
<script src="http://yui.yahooapis.com/2.8.1/build/yahoo/yahoo-min.js"></script>

<!-- Source file -->
<script src="http://yui.yahooapis.com/2.8.1/build/dom/dom-min.js"></script>


<link rel="stylesheet" type="text/css"
	href="http://yui.yahooapis.com/2.8.1/build/fonts/fonts.css">
<link type="text/css" rel="stylesheet"
	href="http://yui.yahooapis.com/2.8.1/build/carousel/assets/skins/sam/carousel.css">

<script type="text/javascript"
	src="http://yui.yahooapis.com/2.8.1/build/yahoo-dom-event/yahoo-dom-event.js"></script>

<script type="text/javascript" src="http://yui.yahooapis.com/2.8.1/build/element/element-min.js"></script>
<script type="text/javascript"
	src="http://yui.yahooapis.com/2.8.1/build/carousel/carousel-min.js"></script>

<link href="style.css" rel="stylesheet" type="text/css" />

    <style type="text/css">

    #container {
        margin: 0 auto;
    }

    .yui-carousel-element li {
        height: 375px;
    }
    </style>



</head>
<body size="100%">

<div id="doc" class="yui-t7">
<div id="hd" role="banner">
<h1>Header</h1>
</div>
<div id="bd" role="main">
<div class="yui-gd">
<div class="yui-u first"></div>
<div class="yui-u">
<div id="container">
<ol id="carousel">
	<li><img
		src="http://farm1.static.flickr.com/69/213130158_0d1aa23576_d.jpg"
		height="375" width="500"></li>
	<li><img
		src="http://farm1.static.flickr.com/72/213128367_74b0a657c3_d.jpg"
		height="375" width="500"></li>
	<li><img
		src="http://farm1.static.flickr.com/98/213129707_1f40c509fa_d.jpg"
		height="375" width="500"></li>
	<li><img
		src="http://farm1.static.flickr.com/59/213129191_b958880a96_d.jpg"
		height="375" width="500"></li>
	<li><img
		src="http://farm1.static.flickr.com/92/214077367_77ae970965_d.jpg"
		height="375" width="500"></li>
	<li><img
		src="http://farm1.static.flickr.com/81/214076446_18fe6a6c91_d.jpg"
		height="375" width="500"></li>
	<li><img
		src="http://farm1.static.flickr.com/93/214075781_0604edb894_d.jpg"
		height="375" width="500"></li>
	<li><img
		src="http://farm1.static.flickr.com/40/214075243_ea66c4cb31_d.jpg"
		height="375" width="500"></li>
	<li><img
		src="http://farm1.static.flickr.com/67/214074120_33933bf232_d.jpg"
		height="375" width="500"></li>
	<li><img
		src="http://farm1.static.flickr.com/79/214073568_f16d1ffce7_d.jpg"
		height="375" width="500"></li>
</ol>
</div>
</div>
</div>

</div>
<div id="ft" role="contentinfo">
<p>Footer</p>
</div>
</div>

<script>
    (function () {
        var carousel;
                
        YAHOO.util.Event.onDOMReady(function (ev) {
            var carousel    = new YAHOO.widget.Carousel("container", {
                        isCircular: true, numVisible: 1
                });

            carousel.render(); // get ready for rendering the widget
            carousel.show();   // display the widget
        });
    })();
    </script>



</body>
</html>
