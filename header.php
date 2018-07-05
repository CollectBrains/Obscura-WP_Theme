<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package obscura
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<title>Obscura</title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<script type="text/javascript">
		$.backstretch("style/images/bg/1.jpg");
	</script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="scanlines"></div>

	<!-- Begin Header -->
	<div class="header-wrapper opacity">
		<div class="header">
			<!-- Begin Logo -->
			<div class="logo">
				<a href="index.html">
					<img src="style/images/logo.png" alt="" />
				</a>
			</div>
			<!-- End Logo -->
			<!-- Begin Menu -->
			<div id="menu-wrapper">
				<div id="menu" class="menu">
					<ul id="tiny">
						<li class="active"><a href="index.html">Blog</a>
							<ul>
								<li><a href="post.html">Blog Post</a></li>
							</ul>
						</li>
						<li><a href="page-with-sidebar.html">Pages</a>
							<ul>
								<li><a href="page-with-sidebar.html">Page With Sidebar</a></li>
								<li><a href="full-width.html">Full Width</a></li>
							</ul>
						</li>
						<li><a href="typography.html">Styles</a>
							<ul>
								<li><a href="typography.html">Typography</a></li>
								<li><a href="columns.html">Columns</a></li>
							</ul>
						</li>
						<li><a href="contact.html">Contact</a></li>
					</ul>
				</div>
			</div>
			<div class="clear"></div>
			<!-- End Menu -->
		</div>
	</div>
	<!-- End Header -->
