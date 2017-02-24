	</div> <!-- /wrapper -->	
</div> <!-- /wrapper-inner -->

<footer id="colophon" class="site-footer" role="contentinfo">
	<?php if ( has_nav_menu( 'social' ) ) : ?>
		<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentysixteen' ); ?>">
		<?php
			wp_nav_menu( array(
			'theme_location' => 'social',
			'menu_class'     => 'social-links-menu',
			'depth'          => 1,
			'link_before'    => '<span class="screen-reader-text">',
			'link_after'     => '</span>',
			) );
		?>
		</nav><!-- .social-navigation -->
	<?php endif; ?>
	<div class="site-info">
		<p class="credits1">Powered by <a href="http://pankaj.co/andy-free-child-theme-for-rams/">Andy WP Theme</a></p>
	</div><!-- .site-info -->
</footer><!-- .site-footer -->
<div class="clear"></div>

<?php wp_footer(); ?>
</body>
</html>