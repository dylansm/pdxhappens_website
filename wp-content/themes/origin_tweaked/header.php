<?php
/**
 * Header Template
 *
 * The header template is generally used on every page of your site. Nearly all other templates call it 
 * somewhere near the top of the file. It is used mostly as an opening wrapper, which is closed with the 
 * footer.php file. It also executes key functions needed by the theme, child themes, and plugins. 
 *
 * @package Origin
 * @subpackage Template
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    
<!-- Mobile viewport optimized -->
<meta name="viewport" content="width=device-width,initial-scale=1">

<?php if ( hybrid_get_setting( 'origin_favicon_url' ) ) : ?>
<!-- Favicon -->
	<link rel="shortcut icon" href="<?php echo hybrid_get_setting( 'origin_favicon_url' ); ?>" />
<?php endif; ?>

<!-- Title -->
<title><?php hybrid_document_title(); ?></title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<script type="text/javascript" src="//use.typekit.net/ues3kjd.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

<!-- WP Head -->
<?php //wp_head(); ?>
<link rel="alternate" type="application/rss+xml" title="pdxhappens &raquo; Feed" href="<?php bloginfo('template_directory') ?>/feed/" />
<link rel='stylesheet' id='style-css'  href='<?php bloginfo('template_directory') ?>/style.css' type='text/css' media='all' />
<link rel='stylesheet' id='origin_fancybox-stylesheet-css'  href='<?php bloginfo('template_directory') ?>/js/fancybox/jquery.fancybox-1.3.4.css?ver=1' type='text/css' media='screen' />
<script type='text/javascript' src='<?php bloginfo('url') ?>/wp-includes/js/jquery/jquery.js'></script>
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="<?php bloginfo('url') ?>/xmlrpc.php?rsd" />

<?php
  if (ENVIRONMENT=="prod") {
?>


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-41959573-1', 'pdxhappens.com');
  ga('send', 'pageview');

</script>

<?php } ?>

</head>

<body class="<?php hybrid_body_class(); ?>">

	<?php do_atomic( 'open_body' ); // origin_open_body ?>

	<div id="container">
		
		<div class="wrap">

			<?php do_atomic( 'before_header' ); // origin_before_header ?>
	
			<div id="header">
	
				<?php do_atomic( 'open_header' ); // origin_open_header ?>
	
					<div id="branding">
						
						<?php origin_site_title(); ?>
						
					</div><!-- #branding -->
					
					<?php get_template_part( 'menu', 'primary' ); // Loads the menu-primary.php template. ?>
					
					<?php hybrid_site_description(); ?>
	
					<?php do_atomic( 'header' ); // origin_header ?>
	
				<?php do_atomic( 'close_header' ); // origin_close_header ?>
	
			</div><!-- #header -->
	
			<?php do_atomic( 'after_header' ); // origin_after_header ?>
	
			<?php do_atomic( 'before_main' ); // origin_before_main ?>
	
			<div id="main">
	
				<?php do_atomic( 'open_main' ); // origin_open_main ?>
