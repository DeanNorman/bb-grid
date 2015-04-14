<?php get_header(); ?>

<div class="pg-row">
	<div class="pg-md-3-4 cols">
		<div class="Posts-container" id="container" >

			<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
			
			<article class="SinglePost">
				<header class="SinglePost-header">
					<h1 class="SinglePost-title"><?php the_title(); ?></h1>
					<p class="SinglePost-date"><?php the_time('F j, Y'); ?></p>
					<div class="SinglePost-category"><?php the_category(' '); ?></div>	
				</header>

				<div class="SinglePost-content clearfix">
					<?php the_content(); ?>

				</div> <!-- entry-content -->
			</article>	
			<?php comments_template(); ?>
			<?php endwhile; else : ?>
				
				<p><?php _e('Sorry, no pages matched your criteria.'); ?></p>

			<?php endif; ?>

		</div> <!-- posts container -->
	</div> <!-- the content -->
	<?php get_sidebar(); ?>

</div> <!-- grid container -->
<?php get_footer(); ?>		