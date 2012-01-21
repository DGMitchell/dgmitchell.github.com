<?php get_header(); ?>

<div id="content">
<?php include (TEMPLATEPATH . '/tab.php'); ?>

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<div class="post" id="post-<?php the_ID(); ?>">
<div class="title">
	<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
<div class="met">
		<span class="author"> Posted by <?php the_author(); ?> on <?php the_time('F - j - Y'); ?></span> 
</div>	
</div>

<div class="cover">
<div class="entry">
<a href="<?php the_permalink() ?>">
<?php
if ( has_post_thumbnail() ) { ?>
	<img class="postim" src="<?php bloginfo('stylesheet_directory'); ?>/timthumb.php?src=<?php get_image_url(); ?>&amp;h=150&amp;w=150&amp;zc=1" alt="" />
<?php } else { ?>
	<img class="postim" src="<?php bloginfo('template_directory'); ?>/images/dummy.png" alt="" />
<?php } ?>
</a>

<?php the_excerpt(); ?> 
<div class="clear"></div>
</div>
	
</div>
<div class="singleinfo">
		
		<span class="comm"><?php comments_popup_link('0 Comment', '1 Comment', '% Comments'); ?></span>
		<span class="morer"><a href="<?php the_permalink() ?>"> Read Full Post </a></span>
</div>
</div>

<?php endwhile; ?>
<div class="clear"></div>

<?php getpagenavi(); ?>

<?php else : ?>
		<h1 class="title">Not Found</h1>
		<p>Sorry, but you are looking for something that isn't here.</p>
<?php endif; ?>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>