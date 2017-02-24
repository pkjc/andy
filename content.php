<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	
	
	<div class="post-inner">
		
		<div class="post-header">
			
		    <h2 class="post-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

	<p class="post-date">
	<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_time(get_option('date_format')); ?></a>
	<span class="sep">/</span>
	<?php _e('','rams'); ?><?php the_author_posts_link(); ?>
	<span class="sep">/</span>
	<?php if (has_category()) : ?>					
		<?php _e('','rams'); ?><?php the_category(', '); ?>
	<?php endif; ?>
	<?php if ( is_sticky() ) : ?>	
		<span class="sep">/</span> <span class="is-sticky"><?php _e('Sticky','rams'); ?></span>
	<?php endif; ?>
				
			</p>
		    	    
		</div> <!-- /post-header -->
		<?php if ( has_post_thumbnail() ) : ?>
	
			<div class="featured-media">	
			
				<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
			
					<?php the_post_thumbnail('post-image'); ?>
			
				</a>
			
			</div> <!-- /featured-media -->
			
		<?php endif; ?>
		<div class="post-content">
		
		<?php the_excerpt(); ?>
		
		</div>
	
	</div> <!-- /post-inner -->

</div> <!-- /post -->