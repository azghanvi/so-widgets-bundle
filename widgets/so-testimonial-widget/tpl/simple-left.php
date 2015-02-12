<?php
if ( ! empty( $instance['image'] ) ) {
	$image_src = wp_get_attachment_image_src( $instance['image'] );
}

?>

<?php if ( ! empty( $image_src ) ) : ?>
<div class="testimonial-image-wrapper">
	<img src="<?php echo esc_url( $image_src[0] ) ?>" />
</div>
<?php endif; ?>

<div class="text">
	<?php echo wpautop(wp_kses_post($instance['text'])) ?>
	<h5 class="testimonial-name">
		<?php if(!empty($instance['url'])) : ?><a href="<?php echo esc_url($instance['url']) ?>"><?php endif ?>
			<?php echo esc_html($instance['name']) ?>
		<?php if(!empty($instance['url'])) : ?></a><?php endif ?>
	</h5>
	<small class="testimonial-location"><?php echo esc_html($instance['location']) ?></small>
</div>