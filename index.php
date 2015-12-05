<?php get_header(); ?>

<div class="container-fluid main">

	<div class="row">
    	<div class="col-md-4 sidebar">
			<?php get_sidebar(); ?>
    	</div>
    	<div class="col-md-8 col-md-offset-4 content">
    		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<h1><?php the_title(); ?></h1>
			<h4>Posted on <?php the_time("F jS, Y") ?></h4>
			<p><?php the_content(__("Read more...")); ?></p>
			<hr> <?php endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>	
    	</div>	
	</div>
</div>

<?php get_footer(); ?>