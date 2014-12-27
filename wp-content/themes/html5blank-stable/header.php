<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
	
	<link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/css/960.css">
	<link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/css/coda-slider.css">
	<link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/css/reset.css">


	<script src="<?php bloginfo('template_url'); ?>/js/libs/modernizr-2.5.3.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/jquery-1.7.2.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/jquery-ui-1.8.20.custom.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/jquery.coda-slider-3.0.min.js"></script>

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>
	
		<script>$(function(){$('#slider').codaSlider({panelTitleSelector:"span.no",dynamicTabsAlign:"right",dynamicTabsPosition:"bottom",dynamicArrows:false});});</script> 
		 <script type="text/javascript">
		  function clearText(field){
		   if (field.defaultValue == field.value) field.value = '';
		    else if (field.value == '') field.value = field.defaultValue;
		   }  
		</script>


	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div id="wrapper"><!--from the file-->

			<!-- header -->
			<header class="clearfix">
  				<ul class="container_12 clearfix">
    				<li><a href="index.php/home" title="Home">Home</a></li>
   				 <li><a <?php if($pagename == "about-us"){echo "class='active'"; }?> href="about-us/" title="About Us">About Us</a></li>
    				<li><a <?php if($pagename == "products"){echo "class='active'"; }?>  href="products/" title="Products">Products</a></li>
    				<li><a <?php if($pagename == "toolssupport"){echo "class='active'"; }?>  href="toolssupport" title="Tools & Supports">Tools & Supports</a></li>
    				<li><a <?php if($pagename == "whycree"){echo "class='active'"; }?>  href="whycree" title="Why Cree Lighting?">Why Cree Lighting?</a></li>
    				<li><a <?php if($pagename == "dlcenter"){echo "class='active'"; }?>  href="dlcenter" title="Download Center">Download Center</a></li>
    				<li class="noMargin"><a <?php if($pagename == "contactus"){echo "class='active'"; }?>  href="contactus" title="Contact Us">Contact Us</a></li>
  				</ul>
 			
			</header>
			<!-- /header -->
				<div id="highlight" class="clearfix">
 				 <section id="logo">
   				<a href="home" title="Ecosparks"><h1>Ecosparks</h1></a>
  				</section>