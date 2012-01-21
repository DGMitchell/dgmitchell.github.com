
<div id="slider">
<div class="slidhead"><?php _e('Featured entries'); ?></div>
    <ul id="sliderContent">
	<?php 
		$gldcat = get_option('fire_gldcat'); 
		$my_query = new WP_Query('category_name='.$gldcat.'&showposts=3');
		while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID;
	?>
	<li class="sliderImage">
		
        <a href="<?php the_permalink() ?>">
		<?php
		if ( has_post_thumbnail() ) { ?>
			<img class="slimg" src="<?php bloginfo('stylesheet_directory'); ?>/timthumb.php?src=<?php get_image_url(); ?>&amp;h=100&amp;w=215&amp;zc=1" alt=""/>
				<?php } else { ?>
			<img class="slimg" src="<?php bloginfo('template_directory'); ?>/images/dummy.png" alt="" />
		<?php } ?>
		</a>
		
		<div class="inpost">
			<h3><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php echo short_title('...', 4); ?></a></h3>
			<p>  <?php the_content_rss('', TRUE, '', 10); ?> </p>
		</div>
		
       
    </li>
        <?php endwhile; ?>   
        
    </ul>
</div>