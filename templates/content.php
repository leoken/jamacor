<?php
$image_id = get_post_thumbnail_id();
$image_url = wp_get_attachment_image_src($image_id, 'full');
$image_url = $image_url[0];
$classes = array(
    'col-xs-6',
    'col-sm-4',
    'col-md-3',
    'col-lg-3',
 );
?>
	<article style="background-image: url(<?php echo $image_url ?>)" <?php post_class($classes); ?>>
	  <header>
	    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	    <?php // get_template_part('templates/entry-meta'); ?>
	  </header>
	  <div class="entry-summary">
	    <?php the_excerpt(); ?>
	  </div>
	</article>