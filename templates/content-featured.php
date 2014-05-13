<article <?php post_class('col-sm-12'); ?>>
<div id="thumbnail-wrap" class="col-sm-6">
	<div class="thumbnail">
		<?php jamacor_latest_video(); ?>
	</div>
</div>
<div class="col-sm-6">
  <header>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php get_template_part('templates/entry-meta'); ?>
  </header>
  <div class="entry-summary">
    <?php the_excerpt(); ?>
    <a class="btn  btn-primary btn-sm" href="<?php the_permalink(); ?>">More...</a>
  </div>
</div>
</article>