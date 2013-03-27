<!DOCTYPE html>
<html>
<head>
<title>Phoenix Home Server</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->
<link href="css/bootstrap.css" rel="stylesheet" media="screen">

<!--le styles -->
<style type="text/css">
body {
	padding-top: 60px;
	padding-bottom: 40px;
}
.sidebar-nav {
	padding: 9px 0;
}



.hero-unit.collapse {
	padding:18px;
	
}

.btn-hero {
	float:right;
}

.collapse-btn {
	float:right;
}
 @media (max-width: 980px) {
/* Enable use of floated navbar text */
        .navbar-text.pull-right {
	float: none;
	padding-left: 5px;
	padding-right: 5px;
}
}
</style>
<link href="css/bootstrap-responsive.css" rel="stylesheet">

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
    <![endif]-->

<!-- Fav and touch icons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="ico/favicon.png">

</head>

<body>
<?php include("includes/navbar.php"); ?>
<div class="container-fluid">
<div class="row-fluid">
<?php include("includes/sidebar.php"); ?>
<div class="span9">
<div class="collapse in hidden-phone" id="zebra">
<div class="hero-unit">
  <h1>
    <?php include("includes/greeting.php");?>
  </h1>
  <p><?php include("includes/tips.php");?></p>
  <p><a href="about.php" class="btn btn-primary btn-large btn-hero">Learn more &raquo;</a>
  


</p>
</div>
</div>
<div class="row-fluid">
  <button type="button" class="btn btn-mini collapse-btn hidden-phone" data-toggle="collapse" data-target="#zebra" >

<i class="icon-chevron-up" id="lion"></i>
</button>
</div>
<div class="row-fluid">
<div class="span4">
<h2><a href="fileserver.php">File Server</a></h2>
<p>File Server: NULL
</p>
<p><a class="btn" href="fileserver.php">View details &raquo;</a></p>
</div>
<!--/span-->
<div class="span4">
  <h2><a href="torrent.php">BitTorrent</a></h2>
  <p>
   Torrent Client: NULL
  </p>
  <p><a class="btn" href="torrent.php">View details &raquo;</a></p>
</div>
<!--/span-->
<div class="span4">
  <h2><a href="sqid.php">Cacheing Server</a></h2>
  <p>Squid: NULL</p>
  <p><a class="btn" href="squid.php">View details &raquo;</a></p>
</div>
<!--/span-->
</div>
<!--/row-->
<div class="row-fluid">
  <div class="span4">
    <h2>Heading</h2>
    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
    <p><a class="btn" href="#">View details &raquo;</a></p>
    
        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
    <p><a class="btn" href="#">View details &raquo;</a></p>
    
        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
    <p><a class="btn" href="#">View details &raquo;</a></p>
    
        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
    <p><a class="btn" href="#">View details &raquo;</a></p>
  </div>
  <!--/span-->
  <div class="span4">
    <h2>Heading</h2>
    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
    <p><a class="btn" href="#">View details &raquo;</a></p>
  </div>
  <!--/span-->
  <div class="span4">
    <h2>Heading</h2>
    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
    <p><a class="btn" href="#">View details &raquo;</a></p>
  </div>
  <!--/span-->
</div>
<!--/row-->
</div>
<!--/span-->
</div>
<!--/row-->

<hr>
<footer>
  <p>&copy; Company 2013</p>
</footer>
</div>
<!--/.fluid-container-->

<!-- Le javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->


<script src="js/jquery.js"></script>
<script src="js/bootstrap-transition.js"></script>
<script src="js/bootstrap-alert.js"></script>
<script src="js/bootstrap-modal.js"></script>
<script src="js/bootstrap-dropdown.js"></script>
<script src="js/bootstrap-scrollspy.js"></script>
<script src="js/bootstrap-tab.js"></script>
<script src="js/bootstrap-tooltip.js"></script>
<script src="js/bootstrap-popover.js"></script>
<script src="js/bootstrap-button.js"></script>
<script src="js/bootstrap-collapse.js"></script>
<script src="js/bootstrap-carousel.js"></script>
<script src="js/bootstrap-typeahead.js"></script>


<script type="text/javascript">
// Javascript goes here


$('#zebra').on('show hide', function (e) {
    if($(e.target).attr("id") != "zebra")return;
    $('#lion').toggleClass('icon-chevron-left icon-chevron-down', 200);
});
</script>
</body>
</html>