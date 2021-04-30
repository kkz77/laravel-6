<!doctype html>
<!-- Website Template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Mustache Enthusiast</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css" media="screen and (max-width : 568px)">
	<script type="text/javascript" src="js/mobile.js"></script>
</head>
<body>
    <div id="header">
        <a href="index.html" class="logo">
            <img src="images/logo.jpg" alt="">
        </a>
        <ul id="navigation">
            <li class="selected">
                <a href="/">home</a>
            </li>
            <li>
                <a href="/about">about</a>
            </li>
            <li>
                <a href="gallery.html">gallery</a>
            </li>
            <li>
                <a href="blog.html">blog</a>
            </li>
            <li>
                <a href="contact.html">contact</a>
            </li>
        </ul>
    </div>
    @yield('content')
    <div id="footer">
        <div>
            <p>&copy; 2023 by Mustacchio. All rights reserved.</p>
            <ul>
                <li>
                    <a href="http://freewebsitetemplates.com/go/twitter/" id="twitter">twitter</a>
                </li>
                <li>
                    <a href="http://freewebsitetemplates.com/go/facebook/" id="facebook">facebook</a>
                </li>
                <li>
                    <a href="http://freewebsitetemplates.com/go/googleplus/" id="googleplus">googleplus</a>
                </li>
                <li>
                    <a href="http://pinterest.com/fwtemplates/" id="pinterest">pinterest</a>
                </li>
            </ul>
        </div>
    </div>
</body>
</html>
