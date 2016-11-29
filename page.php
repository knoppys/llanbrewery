<?php
/*
Template Name: Default
*/

//get the header
get_header(); 



//start the page loop
if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section id="" class="" style="background: url('<?php the_post_thumbnail_url( $full ); ?>') no-repeat center center fixed;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;">
	<div class="overlay">
	<div class="container">
			<div class="row">
				<div class="col-md-6">				
					<h1 class="banner-page-title"><?php the_title(); ?></h1>
					<h2 class="banner-page-slogan"><?php the_field('banner_text'); ?></h2>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="page-content">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<main style="color:#0B3655">
					<?php the_content(); ?>
				</main>		
			</div>
		</div>
	</div>
</section>

<?php
if(is_page('events')){
	get_template_part('news-loop');
}
?>


<?php endwhile; else : 
//if there isnt any content, show this.	
	echo '<p> Sorry, no posts matched your criteria. </p>';

//end the loop
	endif;

//get the footer
get_footer();
?>