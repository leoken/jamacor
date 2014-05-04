<?php
$image_id = get_post_thumbnail_id();
$image_url = wp_get_attachment_image_src($image_id, 'full');
$image_url = $image_url[0];
$classes = array(
    '',
    '',
    '',
    '',
 );
?>
	<article <?php post_class($classes); ?>>
		<div id="" class="thumbnail-wrap">
			<div class="thumbnail">
				<a href="<?php the_permalink(); ?>" class="">
				<?php 
				if ( has_post_thumbnail() ) {
				  the_post_thumbnail('medium', array('class' => ''));
				} 
				?>
				</a>
			</div>
		</div>
		<header>
		  <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		  <div class="meta-wrap"><?php get_template_part('templates/entry-meta'); ?></div>
		</header>
	</article>