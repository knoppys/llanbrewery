<?php 
if(is_page('home')){$homeclass='homebody';}else{$homeclass='';}
?>
<section id="about" class="<?php echo $homeclass; ?> newsbody">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Latest News</h1>
					<div class="col-sm-6">
						<?php
							$args = array (
								'post_type'              => array('post'),
								'posts_per_page'         => 1,
							);
							$news = new WP_Query( $args );
							if ( $news->have_posts() ) {							
								while ( $news->have_posts() ) {
									$news->the_post(); ?>
										<div class="row">
											<div class="col-md-12 first-post home-post" style="background:url('<?php the_post_thumbnail_url();?>') no-repeat right top scroll;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;">
												<a href="<?php the_permalink(); ?>" alt="<?php the_title(); ?> "> 

												<h3 class="event-title"><?php the_title(); ?></h3>
												<p> <?php the_excerpt(); ?> </p>
												</a>
											</div>
										</div>
						<?php	} } else {} wp_reset_postdata(); ?>
					</div>
					<div class="col-sm-6">
						<?php
							$args = array (
								'offset' 				 => 1,         //Set your offset
								'post_type'              => array('post'),
								'posts_per_page'         => 2,

							);
							$news = new WP_Query( $args );
							if ( $news->have_posts() ) {
								
								while ( $news->have_posts() ) {
									$news->the_post(); ?>
									<div class="row">
										<div class="col-md-12 second-post home-post" style="background:url('<?php the_post_thumbnail_url();?>') no-repeat right top scroll;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;">
											<a href="<?php the_permalink(); ?>" alt="<?php the_title(); ?> "> 

											<h3 class="event-title"><?php the_title(); ?></h3>
											<p> <?php the_excerpt(); ?> </p>
											</a>
										</div>
									</div>									
						<?php	} } else {} wp_reset_postdata(); ?>
					</div>
				</div>
			</div>
		</div>
</section>