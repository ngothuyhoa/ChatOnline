
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Free Leoshop Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/design/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="/design/css/form.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Exo+2' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="/design/js/jquery1.min.js"></script>

<link rel="stylesheet" href="/design/css/bootstrap.min.css">
 <script src="/design/js/bootstrap.min.js"></script>

<!-- start menu -->
<link href="/design/css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="/design/js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<!--start slider -->
    <link rel="stylesheet" href="/design/css/fwslider.css" media="all">
    <script src="/design/js/jquery-ui.min.js"></script>
    <script src="/design/js/css3-mediaqueries.js"></script>
    <script src="/design/js/fwslider.js"></script>
<!--end slider -->
<script src="/design/js/jquery.easydropdown.js"></script>
</head>
<body>
	<!--start header-->
    	@include('home.layout.header')
    <!--end header-->
  	<!-- start slider -->
    	@yield('content1')
    <!--/slider -->
	<div class="main">
	<!--start content-->
		@yield('content')
	<!--end content-->
	</div>
	<!--start footer-->
		@include('home.layout.footer')
	<!--end footer-->

</body>
</html>