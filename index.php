<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<section class="container sobre">
			<h2 class="subtitulo"><h1><?php the_title(); ?></h1></h2>
    
      <div class="grid-8">
			<?php the_content(); ?>
		</div>
	</section>



<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>



<?php get_footer(); ?>