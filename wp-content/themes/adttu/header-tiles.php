<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 * for the Tiles Page Template
 *
 * @package WordPress
 * @subpackage Bare 
 * @subsubpackage A Door to the Universe 
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'bare' ), max( $paged, $page ) );

	?></title>
<!--
<link rel="profile" href="uri for xhtml profile" />
-->
<meta name="google-site-verification" content="iex5DWh3uXq0JagLSf0cbxRDCQfN004Pub2mmSb5QCk" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="shortcut icon" href="https://dl.dropbox.com/u/29894088/website/images/favicon1.ico" />
<link href='http://fonts.googleapis.com/css?family=Amatic+SC:400,700|Megrim|Marvel:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>



<!--
<div id="wrapper" class="hfeed">
	<div id="header">
		<div id="masthead">
			<div id="branding" role="banner">
					<span>
					</span>
			</div>
-->
<!-- #branding 
		</div>
-->


<!-- #masthead 
	</div>
-->
<!-- #header 
-->
<?php $heading_tag = ( is_home() || is_front_page() ) ? 'h1' : 'div'; ?>
	<<?php echo $heading_tag; ?> id="site-title">
	<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
	</<?php echo $heading_tag; ?>>
	<div id="site-description"><?php bloginfo( 'description' ); ?></div>

				<?php
					// Check if this is a post or page, if it has a thumbnail, and if it's a big one
/**
					if ( is_singular() &&
							has_post_thumbnail( $post->ID ) &&
							( 
/* $src, $width, $height // 
$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'post-thumbnail' ) ) &&
							$image[1] >= HEADER_IMAGE_WIDTH ) :
						// Houston, we have a new header image!
						echo get_the_post_thumbnail( $post->ID, 'post-thumbnail' );
					else : 

?>
						<img src="<?php header_image(); ?>" width="<?php echo HEADER_IMAGE_WIDTH; ?>" height="<?php echo HEADER_IMAGE_HEIGHT; ?>" alt="" />
					<?php endif; 
*/

?>


<body <?php body_class(); ?>>


	<div id="main">