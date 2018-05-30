<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package New-CAME
 */

global $redux_demo;

?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from p.w3layouts.com/demos_new/02-02-2017/farming_company-demo_Free/512874901/web/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 May 2018 20:29:22 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<title>New CAME</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Farming Company Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="<?php bloginfo('url'); ?>/wp-content/themes/New-CAME/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="<?php bloginfo('url'); ?>/wp-content/themes/New-CAME/css/style.css" type="text/css" media="all" />

<link rel="stylesheet" href="<?php bloginfo('url'); ?>/wp-content/themes/New-CAME/style.css" type="text/css" media="all" />
<!--// css -->
<!-- font-awesome icons -->
<link href="<?php bloginfo('url'); ?>/wp-content/themes/New-CAME/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- font -->
<link href="http://fonts.googleapis.com/css?family=Righteous&amp;subset=latin-ext" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">

<!-- //font -->
<script src="<?php bloginfo('url'); ?>/wp-content/themes/New-CAME/js/jquery-1.11.1.min.js"></script>
<script src="<?php bloginfo('url'); ?>/wp-content/themes/New-CAME/js/bootstrap.js"></script>
<script src="<?php bloginfo('url'); ?>/wp-content/themes/New-CAME/js/SmoothScroll.min.js"></script>
<script type="<?php bloginfo('url'); ?>/wp-content/themes/New-CAME/text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
</head>
<body>
<script src='../../../../../../ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script><script src="../../../../../../m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>
<script>
(function(){
	if(typeof _bsa !== 'undefined' && _bsa) {
  		// format, zoneKey, segment:value, options
  		_bsa.init('flexbar', 'CKYI627U', 'placement:w3layoutscom');
  	}
})();
</script><script>
(function(){
	if(typeof _bsa !== 'undefined' && _bsa) {
  		// format, zoneKey, segment:value, options
  		_bsa.init('stickybox', 'CKYI653J', 'placement:w3layoutscom');
  	}
})();
</script><style type="text/css">
        .advt {z-index: 999999999999;
    background-color: #ffffffa3;
    width: 728px;
    height: 100px;
    color: black;
    font-weight: bold;
    font-size: 20px;
    position: fixed;
    left: 10px;
    margin-top: 20px;
    bottom: 1px;
        }
				.adsense_btn_close,.adsense_btn_info{font-size:12px;color:#fff;height:20px;width:20px;vertical-align:middle;text-align:center;background:#000;top:4px;left:4px;position:absolute;z-index:99999999;font-family:Georgia;cursor:pointer;line-height:18px}
</style><script type="text/javascript">
$(document).ready(function() {
$("#advt").click(function() {
});
$("#closeadvt").click(function(event) {
event.stopPropagation();
$("#advt").fadeOut();
})
});
</script>

<div class="clear"></div><script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../../../../../www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-30027142-1', 'w3layouts.com');
  ga('send', 'pageview');
</script>
<body>
	<!-- header -->
	<div class="header">
		<div class="container">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
					<div class="logo">
						<?php 
						$header_logo_opt = $redux_demo['header_logo_opt']['url'];
						if ($header_logo_opt) {
						?>
							<img src="<?php echo $redux_demo['header_logo_opt']['url']; ?>" style = "height: 90px; width: 90px;">
						<?php
						}
						?>
					</div>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				
				<?php wp_nav_menu( array( 'theme_location' => 'header-menu',  'container_class' => 'collapse navbar-collapse nav-wil', 'container_id' => 'bs-example-navbar-collapse-1', 'menu_class' => 'nav navbar-nav' ,   'class' => 'hvr-sweep-to-bottom'  ) ); ?>
				
				
				
				<!-- /.navbar-collapse -->
			</nav>
		</div>
	</div>
	<!-- //header -->
