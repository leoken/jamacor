<?php
$featured = new WP_Query(array(
'category_name' => 'featured',
'posts_per_page' => 1
));

while ( $featured->have_posts() ) : $featured -> the_post(); 
$do_not_duplicate = get_the_ID(); ?>
<div id="featured" class="row">
<?php get_template_part('templates/content', 'featured'); ?>
</div><!-- end #featured -->
<?php 
endwhile;

wp_reset_postdata();?>

<div id="main-posts" class="row">
<?php if (!is_single()) { ?><div class="main-inner"><?php } ?>
<?php if(have_posts()) : while (have_posts()) : the_post();
if ($post->ID == $do_not_duplicate) continue;
?>
	<?php get_template_part('templates/content', get_post_format()); ?>
<?php 
endwhile;
endif;?>
<?php if (!is_single()) { ?></div><?php } ?>
</div><!-- end .row -->

<?php
if ($wp_query->max_num_pages > 1) : ?>
  <nav class="post-nav">
    <ul class="pager">
      <li class="previous"><?php next_posts_link(__('&larr; Older posts', 'roots')); ?></li>
      <li class="next"><?php previous_posts_link(__('Newer posts &rarr;', 'roots')); ?></li>
    </ul>
  </nav>
<?php endif;