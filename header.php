<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<!--What this will do is generate the tittle dinamically of whatever pages I'm in.
		this is using the bloginfo api. https://developer.wordpress.org/reference/functions/bloginfo/ is 'name' not 'title'
 -->
<title><?php bloginfo('name'); ?></title>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600' rel='stylesheet' type='text/css'>
<!--This api (doc link above) call will retrieve the style.css url -->
<link href="<?php bloginfo('stylesheet_url');?> " rel="stylesheet" type="text/css" media="screen" />
<!--This will bring any other head that's in wordpress-->
<?php wp_head(); ?>
</head>
<body>
<div id="wrapper">
	<div id="header-wrapper">
		<div id="header">
			<div id="logo">
				<!--Make dinamically name in the header  -->
				<!--Display the tittle in the general seting of the theme  -->
				<h1><a href="#"><?php bloginfo('name'); ?></a></h1>
				<p><?php bloginfo('description'); ?></a></p>
			</div>
		</div>
	</div>
	<!-- end #header -->
	<div id="menu">
		<!--Load dinamically the nav bar menu of the wordpress project. This's what load the sample page orange menu  -->
		<?php wp_nav_menu(); ?>

		<!-- <ul>
			<li class="current_page_item"><a href="#">Homepage</a></li>
			<li><a href="#">Blog</a></li>
			<li><a href="#">Photos</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Links</a></li>
			<li><a href="#">Contact</a></li>
		</ul> -->
	</div>
	<!-- end #menu -->
	<!--This div is what is the body content of the page -->
	<div id="page">
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id="content">
