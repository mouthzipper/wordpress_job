<?php
/**
 * Loop Stock
 *
 * @author 		mouthzipper
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;
?>

<?php if ( $product->get_sku() ) : ?>
	<div class="product-meta">SKU:<?php echo $product->get_sku() ?></div>
<?php endif; ?>
