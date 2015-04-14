<?php get_header(); ?>

<div class="pg-row pg-row--no-h-gutter">
	<div class="pg-md-3-4 cols">
		<div class="Posts-container js-masonry" id="container"  data-masonry-options='{  "gutter": 20 }'>

			<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

			<section class="Post-container item">
				
				<div class="Post-header">
					<h1 class="Post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
					<p class="Post-byline"><?php the_time('F j, Y') ?></p>
				</div> <!-- post header -->
				
				<div class="Post-category">
					<?php the_category(' '); ?>
				</div> <!-- post category -->

				<div class="Post-thumbnail">
					<a href="<?php the_permalink(); ?>" class="Post-featuredImg">
						<?php if(has_post_thumbnail()) {                    
						    $image_src = wp_get_attachment_image_src( get_post_thumbnail_id(),'full' );
						     echo '<img src="' . $image_src[0]  . '" width="100%"  />';
						} ;?>
						<!-- <img class="Post-thumbnailImg" src="img/berry3.jpg"> -->
					</a>
				</div> <!-- post thumbnail -->

				<div class="Post-excerpt">
					<p><?php echo strip_tags(get_the_excerpt()); ?></p>
			    </div> <!-- post Excerpt -->

			    <footer class="Post-footerMeta">
    				<!-- Read more button -->
    				<div class="Post-readMoreBtn">
    					<a href="<?php the_permalink(); ?>">Read More</a>
    				</div>								
			    </footer>
			</section> 

			<?php endwhile; else : ?>
				
				<p><?php _e('Sorry, no pages matched your criteria.'); ?></p>

			<?php endif; ?>

		</div> <!-- posts container -->
	</div> <!-- the content -->

	<div class="pg-md-1-4 cols">
		<!-- look at this shit later jsut temp -->
		<section class="Sidebar">

			<div class="Sidebar-textWidget">
				<div class="profile-picture">
					<img src="img/profile.jpg">
				</div>

				<p class="about-me-widget-title">hello there.</p>

				<p>This is a spot to put a little bit about yourself and your blog. This is an option, actually everything on this sidebar can be customised but you in Wordpress!</p>
			</div> <!--textwidget -->

			<div class="Sidebar-textWidget">
				<div class="social-buttons">
					<a href="#" class="one">Facebook</a>
					<a href="#" class="two">Twitter</a>
					<a href="#" class="three">Pinterest</a>
					<a href="#" class="four">Instagram</a>
				</div>
			</div> <!-- text widget -->
		
			<div class="Sidebar-wpLists">
				<h3 class="Sidebar-wpWidget-title">This is an unordered list</h3>
				<ul>
					<li><a href="#">Category 1</a></li>
					<li><a href="#">Category 2</a></li>
					<li><a href="#">Category 3</a></li>
				</ul>
			</div>

		</section> <!-- sidebar-container -->
	</div> <!-- the sidebar -->
</div> <!-- grid container -->
<?php get_footer(); ?>		