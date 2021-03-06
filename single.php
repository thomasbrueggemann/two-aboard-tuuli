<?php get_header(); ?>

<div class="container-fluid main">

	<div class="row">
    	<div class="col-md-4 col-sm-4 sidebar">
			<?php get_sidebar(); ?>
    	</div>
    	<div class="col-md-8 col-md-offset-4 col-sm-8 col-sm-offset-4 content">

    		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
	    		<h1><?php the_title(); ?></h1>	
	    		<h4 style="margin:15px 0 30px 0"><?php the_time("F jS, Y") ?>, written by <?php the_author(); ?></h4>
	    		<?php the_content(); ?>
	    	<?php endwhile; endif; ?>
    	</div>	
	</div>
</div>

<?php get_footer(); ?>