<?php
/*
Template Name: Home
*/
get_header(); 
if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<section id="welcome" class="welcome" style="background: url('<?php echo get_template_directory_uri(); ?>/images/background.jpg') no-repeat right top fixed;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;">
	<div class="welcome-gradient">
		<div class="container">
			<div class="row">
				<div class="col-md-7">
					<?php the_field('landing_text'); ?>
					<a id="welcome-gone"><i class="fa fa-chevron-circle-down" aria-hidden="true"></i></a> 
				</div>
			</div>
		</div>
	</div>
</section>

<section id="about" class="homebody home-welcome-row" style="background: url('<?php echo get_template_directory_uri(); ?>/images/top-row.png') no-repeat center top fixed;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;">
	<div class="container">
		<div class="row">
			<div class="col-md-12">				
				<center>
					<?php the_field('main_banner_text'); ?>
				</center>
				<center>
					<a href="" class="btn btn-primary shout">Buy Online</a>					
					<a href="" class="btn btn-primary shout">Event Catering</a>	
					<a href="" class="btn btn-primary shout">Trade Login</a>				
				</center>
			</div>
		</div>
	</div>
</section>



<section id="about" class="homebody">
	<div class="container" id="ales">
		<div class="row slickresponsive">
			<div class="col-md-12 slick-initialized">
				<center>
					<?php the_field('ales_content_text'); ?>
				</center>
					<div class="slider col-md-12">
						<?php
						$args = array( 'post_type' => 'product', 'posts_per_page' => -1, 'product_cat' => 'Ales', 'orderby' => 'rand' );				
						$myales = get_posts( $args );
						foreach ( $myales as $post ) : setup_postdata( $post ); ?>			
							<div class="col-md-4">
									<a href="<?php the_permalink(); ?>" alt="<?php the_title(); ?>">
										<h4 style="color:#AF1F2B;font-weight:bold;font-size:16px;text-transform:uppercase;"><?php the_title(); ?></h4>
							    		<?php the_post_thumbnail('large'); ?> 
							    	</a>
							</div>	
						<?php endforeach; 
						wp_reset_postdata();?>
					</div>
				</div>
			</div>
		</div>
</section>

<section id="about" class="homebody home-content-row" style="background: url('<?php echo get_template_directory_uri(); ?>/images/background2.jpg') no-repeat center top fixed;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php the_field('content_row_text'); ?>
				<center>
					<a href="" class="btn btn-primary shout"><?php the_field('button_text'); ?></a>
				</center>
			</div>
		</div>
	</div>
</section>


<section id="about" class="homebody pubs-row" style="">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<?php the_field('outlets_text'); ?>
			</div>
			<dir class="col-sm-1"></dir>
			<div class="col-sm-5">
				<div class="row">
					<div class="col-xs-4">				
						<a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/pub1.png"></a>
					</div>
					<div class="col-xs-4">				
						<a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/pub1.png"></a>
					</div>
					<div class="col-xs-4">				
						<a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/pub1.png"></a>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-4">				
						<a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/pub1.png"></a>
					</div>
					<div class="col-xs-4">				
						<a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/pub1.png"></a>
					</div>
					<div class="col-xs-4">				
						<a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/pub1.png"></a>
					</div>
				</div>				
			</div>
		</div>
	</div>
</section>


<?php get_template_part('news-loop'); ?>



<?php
endwhile; else : 
echo '<p> Sorry, no posts matched your criteria. </p>';
endif;
?>
<section class="homefooter">
	<?php get_footer();	?>
</section>

													