<?php get_header(); ?>

<div class="content">
									        
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
			<div class="post-inner">
				
				<div class="post-header">
																					
					<h1 class="post-title"><?php the_title(); ?></h1>
													
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
			    <?php $post_format = get_post_format(); ?>
				
				<?php if ( $post_format == 'gallery' ) : ?>
			
				<div class="featured-media">	
	
					<?php rams_flexslider('post-image'); ?>
					
				</div> <!-- /featured-media -->
			
				<?php elseif ( has_post_thumbnail() ) : ?>
					
				<div class="featured-media">
		
					<?php the_post_thumbnail('post-image'); ?>
					
				</div> <!-- /featured-media -->
					
				<?php endif; ?>
				    
			    <div class="post-content">
			    
			    	<?php the_content(); ?>
			    
			    </div> <!-- /post-content -->
			    
			    <div class="clear"></div>
			
			</div> <!-- /post-inner -->
			
			<?php 
		    	$args = array(
					'before'           => '<div class="clear"></div><p class="page-links"><span class="title">' . __( 'Pages:','rams' ) . '</span>',
					'after'            => '</p>',
					'link_before'      => '<span>',
					'link_after'       => '</span>',
					'separator'        => '',
					'pagelink'         => '%',
					'echo'             => 1
				);
	    	
	    		wp_link_pages($args); 
			?>
			
			<div class="post-meta">
			<?php if (has_tag()) : ?>
							
				<p><?php _e('Tags: ','rams'); ?></strong><?php the_tags('', ', '); ?></p>
					
			<?php endif; ?>
			<?php
				$prev_post = get_previous_post();
				$next_post = get_next_post();
						
				if (!empty( $next_post ) || !empty( $prev_post )):
						
			?>
			<div class="post-nav">
			
				<?php
					if (!empty( $next_post )): ?>
						
						<p>
						<?php _e('Next Post: ', 'rams'); ?>
						<a class="post-nav-newer" title="<?php _e('Next post', 'rams'); echo ': ' . get_the_title($next_post); ?>" href="<?php echo get_permalink( $next_post->ID ); ?>">
						<?php echo get_the_title($next_post); ?>
						</a>
						</p>
						
					<?php endif; ?>
															
					<div class="clear"></div>
																							
			</div> <!-- /post-nav -->
					
			<?php endif; ?>
			
			</div> <!-- /post-meta -->
														                                    	        	        
		</div> <!-- /post -->
				
		<div class="comments-container">
							
			<?php comments_template( '', true ); ?>
			
		</div> <!-- /comments-container -->
									                        
   	<?php endwhile; else: ?>

		<p><?php _e("We couldn't find any posts that matched your query. Please try again.", "rams"); ?></p>
	
	<?php endif; ?>    

</div> <!-- /content -->
		
<?php get_footer(); ?>