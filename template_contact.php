<?php
/*
Template Name: Contact
*/
get_header(); 
if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section class="">
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

<?php endwhile; else : 
	echo '<p> Sorry, no posts matched your criteria. </p>';
endif;
get_footer();
?>