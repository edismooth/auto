<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title>
<?php wp_title (); ?>
</title>

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php
	/* 
	 * 	Add this to support sites with sites with threaded comments enabled.
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	wp_head();
	
	wp_get_archives('type=monthly&format=link');
?>
</head>
<body>
	
	<div id="search-box">
		<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
		<span><input type="text" class="search rounded" placeholder="Czego szukasz?"  name="s" id="s" ></span>
		</form>		
	</div>
<div id="wrapper">
	
	<div id="header">
		<div id="top-bar">
			<p id="top-bar-name"><a href="<?php echo get_option('home'); ?>">Nowe<span>Auto</span>Taniej.com</a></p>
			<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu_class' => 'nav', 'theme_location' => 'primary-menu' ) ); ?>
			<!-- <h1><a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a></h1> -->
			<div id="top-bar-social">
				<a href="#" id="top-bar-sub" title="Subskrypcja">subskrypcja</a>
				<a href="http://www.twitter.com/" id="top-bar-twitter" title="Twitter"></a>
				<a href="http://www.facebook.com/" id="top-bar-fb" title="Facebook"></a>
				
			</div>
		</div>
		<div class="slider">
			<div class="decided">
				<div class="box active"><span>Grupa BMW</span></div>
				<div class="box"><span>Grupa BMW</span></div>
				<div class="box"><span>Grupa BMW</span></div>
				<div class="box"><span>Grupa BMW</span></div>
				<div class="box"><span>Grupa BMW</span></div>
				<div class="box"><span>Grupa BMW</span></div>
			</div>
		</div>
	</div>

