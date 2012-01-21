
</div>
<div class="clear"></div>


<div class="bottomcover">

<div id="bottom" >
<ul>

<?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar("Footer") ) : ?>    
		
	<li class="botwid">
				<h3 class="bothead"><?php _e( 'Archives', '' ); ?></h3>
				<ul>
						<?php wp_get_archives( 'type=monthly' ); ?>
				</ul>
	</li>
<?php endif; ?>
	</ul>

<div class="clear"> </div>
</div>
</div>
