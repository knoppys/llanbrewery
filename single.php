<?php

//get the header
get_header(); 

//start the page loop
if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section class="content">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2><?php the_title(); ?></h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-9">
				<h2><?php the_content(); ?></h2>
			</div>
		</div>
	</div>
</section>

<?php 

endwhile; 

else : 

//if there isnt any content, show this.	
echo '<p> Sorry, no posts matched your criteria. </p>';

//end the loop
endif;

//get the footer
get_footer();
?>