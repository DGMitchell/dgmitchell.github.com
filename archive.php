<?php get_header(); ?>
<div id="content" >

<?php if (have_posts()) : ?>

		 <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
<?php /* If this is a category archive */ if (is_category()) { ?>
		<h2 class="pagetitle">Archive for the &#8216;<?php echo single_cat_title(); ?>&#8217; Category</h2>

 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h2 class="pagetitle">Archive for <?php the_time('F jS, Y'); ?></h2>

	 <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h2 class="pagetitle">Archive for <?php the_time('F, Y'); ?></h2>

		<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h2 class="pagetitle">Archive for <?php the_time('Y'); ?></h2>

	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h2 class="pagetitle">Author Archive</h2>

		<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h2 class="pagetitle">Blog Archives</h2>

		<?php } ?>



<?php while (have_posts()) : the_post(); ?>
		
<div class="post" id="post-<?php the_ID(); ?>">

<div class="title">
<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>

<div class="met">
	<span class="author"> Posted by <?php the_author(); ?> on <?php the_time('F - j - Y'); ?> </span> 

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
<span class="category">Categories: <?php the_category(', '); ?> </span>
</div>

</div>
		<?php endwhile; ?>


<?php getpagenavi(); ?>

	<?php else : ?>

		<h1 class="title">Not Found</h1>
		<p>Sorry, but you are looking for something that isn't here.</p>

	<?php endif; ?>

</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>