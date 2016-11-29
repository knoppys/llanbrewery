<?php
/*
Template Name: DONOTUSE
*/
get_header(); ?>

<section id="welcome" class="welcome" style="background: url(<?php get_site_url() ?>'/llangollenbrewery/wp-content/themes/knoppys-abbeygrange/images/background.jpg') no-repeat right top fixed;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;">
	<div class="welcome-gradient">
		<div class="container">
			<div class="row">
				<div class="col-md-7">
				<?php

// WP_Query arguments
$args = array (
	'post_type'              => array( 'event','post' ),
	'posts_per_page'         => 3,
);

// The Query
$events = new WP_Query( $args );

// The Loop
if ( $events->have_posts() ) {
	echo '<div class="row">';
	while ( $events->have_posts() ) {
		$events->the_post(); ?>

			<div class="col-sm-4 featured-image">
				<a href="<?php the_permalink(); ?>" alt="<?php the_title(); ?> "> 
					<?php 
		                if (has_post_thumbnail()) { the_post_thumbnail('medium'); } 
		                else { echo '<img src="'.get_template_directory_uri().'/images/default.png">'; }         
					?>
				<h3 class="event-title"><?php the_title(); ?></h3>
				<p> <?php the_excerpt(); ?> </p>
				</a>
			</div>

<?php	}
echo '</div>';
} else {
	// no posts found
}

// Restore original Post Data
wp_reset_postdata();

?>
					<a id="welcome-gone"><i class="fa fa-chevron-circle-down" aria-hidden="true"></i></a> 
				</div>
			</div>
		</div>
	</div>
</section>