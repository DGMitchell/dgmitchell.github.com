<div class="right">


<div class='feedlist'>
<ul>
	<li><a href="<?php bloginfo('rss2_url'); ?>" ><img src="<?php bloginfo('stylesheet_directory'); ?>/images/rss.png" title="subscribe" alt="RSS"/></a></li>
	<li><a href="http://del.icio.us/post?url=<?php bloginfo('siteurl');?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/delicious.png" title="Delicious" alt="Delicious"/></a> </li>
	<li><a href="http://www.digg.com/submit?phase=2&amp;url=<?php bloginfo('siteurl');?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/digg.png" title="Digg" alt="Digg"/></a></li>
	<li><a href="<?php $face = get_option('fire_face'); echo ($face); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/facebook.png" title="Facebook" alt="Facebook"/></a></li> 
	<li><a href="http://twitter.com/<?php $twit = get_option('fire_twit'); echo ($twit); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/twitter.png" title="Twitter" alt="Twitter"/></a></li> 
	<li><a href="<?php $linkd = get_option('fire_linkd'); echo ($linkd); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/linkedin.png" title="Linkedin" alt="Linkedin"/></a></li> 

	
</ul>
</div>


<div class="featbox">
<h3 class="sidetitl"> Search Site </h3>	
<?php include (TEMPLATEPATH . '/searchform.php'); ?>
</div>	

<div class="featbox">
<h3 class="sidetitl"> Popular Posts </h3>	
<div class="featlist">
<?php 
	$my_query = new WP_Query('orderby=comment_count&showposts=5');
	while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID;
?>
<div class="fblock">

<a href="<?php the_permalink() ?>">
<?php
if ( has_post_thumbnail() ) { ?>
	<img class="phumb" src="<?php bloginfo('stylesheet_directory'); ?>/timthumb.php?src=<?php get_image_url(); ?>&amp;h=60&amp;w=80&amp;zc=1" alt="" />
<?php } else { ?>
	<img class="phumb" src="<?php bloginfo('template_directory'); ?>/images/dummy.png" alt="" />
<?php } ?>
</a>
<h3><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php echo short_title('...', 4); ?></a></h3>
<p>  <?php the_content_rss('', TRUE, '', 10); ?> </p>

</div>
<?php endwhile; ?>
</div>
</div>	
	
 <div class="featbox">
<h3 class="sidetitl">Twitter updates</h3>
<?php
$twit = get_option('fire_twit'); 
include('twitter.php');?>
<?php if(function_exists('twitter_messages')) : ?>
       <?php twitter_messages("$twit") ?>
       <?php endif; ?>
</div> 	
	
<?php include (TEMPLATEPATH . '/sponsors.php'); ?>	

<div class="sidebar">
<ul>
	<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar') ) : else : ?>
	<?php endif; ?>
</ul>
</div>

</div>