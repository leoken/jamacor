<?php
$maskimage = get_field('image_mask', 'option');
$maskimagehover = get_field('image_mask_hover', 'option');

if( !empty($maskimage) ): 
 
	// vars
	$url = $maskimage['url'];
	$title = $maskimage['title'];
	$alt = $maskimage['alt'];
	$caption = $maskimage['caption'];
 
	// thumbnail
	$size = 'thumbnail';
	$thumb = $maskimage['sizes'][ $size ];
	$width = $maskimage['sizes'][ $size . '-width' ];
	$height = $maskimage['sizes'][ $size . '-height' ];
 
endif;

if( !empty($maskimagehover) ): 
 
	// vars
	$url2 = $maskimagehover['url'];
	$title2 = $maskimagehover['title'];
	$alt2 = $maskimagehover['alt'];
	$caption2 = $maskimagehover['caption'];
 
	// thumbnail
	$size2 = 'thumbnail';
	$thumb2 = $maskimagehover['sizes'][ $size ];
	$width2 = $maskimagehover['sizes'][ $size . '-width' ];
	$height2 = $maskimagehover['sizes'][ $size . '-height' ];
 
endif; ?>

<?php if (has_post_thumbnail( $post->ID ) ): ?>
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
<style>
	#thumbnail-<?php echo $post->ID; ?>.thumbnail-mask {
		background-image: url('<?php echo $url; ?>'), url('<?php echo $image[0]; ?>');
	}
	#thumbnail-<?php echo $post->ID; ?>.thumbnail-mask:hover {
		background-image:
			url('<?php echo $url2; ?>'),
			linear-gradient(
		      rgba(255,172,58, 0.45), 
		      rgba(255,172,58, 0.45)
		    ),
			 url('<?php echo $image[0]; ?>');
	}
</style>
<a href="<?php the_permalink(); ?>" class="thumbnail-link">
<div id="thumbnail-<?php echo $post->ID; ?>"  class="thumbnail-mask">
	<span class="hover-text">
		<?php if (is_singular('staff') || is_page('faculty-staff')) { ?>View Profile<?php } ?>
		<?php if (is_singular('event') || is_page('calendar-of-events')) { ?>Event Details<?php } ?>
		<?php if (is_page('blog') || is_singular('post')) { ?>Read More<?php } ?>
	</span>
</div>
</a>
<?php endif; ?>