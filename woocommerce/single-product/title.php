<?php
/**
 * Single Product title
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/title.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see        https://docs.woocommerce.com/document/template-structure/
 * @author     WooThemes
 * @package    WooCommerce/Templates
 * @version    1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
global $product;
?>
	<div class="col-sm-8">
		<?php the_title( '<h1 itemprop="name" class="product_title entry-title">', '</h1>' ); ?>
		<!-- 
		<div class="product_meta">

			<?php do_action( 'woocommerce_product_meta_start' ); ?>

			<?php if ( wc_product_sku_enabled() && ( $product->get_sku() || $product->is_type( 'variable' ) ) ) : ?>

				<span class="sku_wrapper"><?php _e( 'SKU:', 'woocommerce' ); ?> <span class="sku" itemprop="sku"><?php echo ( $sku = $product->get_sku() ) ? $sku : __( 'N/A', 'woocommerce' ); ?></span></span>

			<?php endif; ?>

			<?php echo $product->get_categories( ', ', '<span class="posted_in">' . _n( 'Category:', 'Categories:', $cat_count, 'woocommerce' ) . ' ', '</span>' ); ?>

			<?php echo $product->get_tags( ', ', '<span class="tagged_as">' . _n( 'Tag:', 'Tags:', $tag_count, 'woocommerce' ) . ' ', '</span>' ); ?>

			<?php do_action( 'woocommerce_product_meta_end' ); ?>

		</div>-->
		<div class="description">
			<div class="row">
				<div class="col-md-5">
					<p>
						<strong>ABV</strong> <?php the_field('abv'); ?> <br>
						<strong>Type</strong> <?php the_field('type'); ?> <br>
						<strong>Colour</strong> <?php the_field('colour'); ?> <br>
					</p>
				</div>
				<div class="col-md-5">
					<p>
						<strong>Taste</strong> <?php the_field('taste'); ?> <br>
						<strong>Available in</strong> <?php the_field('available_in'); ?> <br>
					</p>
				</div>
			</div>
			<p><strong>Description:</strong></p>
			<?php the_content(); ?>
			<strong><p>Keg and Cask Orders</p></strong>
			<p>For all Keg and Cask orders, please head on over to our trade login</p>
		</div>
		<div itemprop="offers" itemscope itemtype="http://schema.org/Offer">

			<p class="price"><?php echo $product->get_price_html(); ?></p>

			<meta itemprop="price" content="<?php echo esc_attr( $product->get_display_price() ); ?>" />
			<meta itemprop="priceCurrency" content="<?php echo esc_attr( get_woocommerce_currency() ); ?>" />
			<link itemprop="availability" href="http://schema.org/<?php echo $product->is_in_stock() ? 'InStock' : 'OutOfStock'; ?>" />

		</div>
		<?php

		if ( ! $product->is_purchasable() ) {
			return;
		}

		?>

		<?php
			// Availability
			$availability      = $product->get_availability();
			$availability_html = empty( $availability['availability'] ) ? '' : '<p class="stock ' . esc_attr( $availability['class'] ) . '">' . esc_html( $availability['availability'] ) . '</p>';

			echo apply_filters( 'woocommerce_stock_html', $availability_html, $availability['availability'], $product );
		?>

		<?php if ( $product->is_in_stock() ) : ?>

			<?php do_action( 'woocommerce_before_add_to_cart_form' ); ?>

			<form class="cart" method="post" enctype='multipart/form-data'>
			 	<?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>

			 	<?php
			 		if ( ! $product->is_sold_individually() ) {
			 			woocommerce_quantity_input( array(
			 				'min_value'   => apply_filters( 'woocommerce_quantity_input_min', 1, $product ),
			 				'max_value'   => apply_filters( 'woocommerce_quantity_input_max', $product->backorders_allowed() ? '' : $product->get_stock_quantity(), $product ),
			 				'input_value' => ( isset( $_POST['quantity'] ) ? wc_stock_amount( $_POST['quantity'] ) : 1 )
			 			) );
			 		}
			 	?>

			 	<input type="hidden" name="add-to-cart" value="<?php echo esc_attr( $product->id ); ?>" />

			 	<button type="submit" class="single_add_to_cart_button button alt"><?php echo esc_html( $product->single_add_to_cart_text() ); ?></button>

				<?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>
			</form>

			<?php do_action( 'woocommerce_after_add_to_cart_form' ); ?>

		<?php endif; ?>
		
	</div>
</div> <!-- closing row div for image and product details -->
