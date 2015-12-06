<?php get_header(); ?>

<div class="container-fluid main">

	<div class="row">
    	<div class="col-md-4 col-sm-4 sidebar">
			<?php get_sidebar(); ?>
    	</div>
    	<div class="col-md-8 col-md-offset-4 col-sm-8 col-sm-offset-4 content">

    		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    			<div class="row">
	    			<div class="col-md-3 col-xs-4 post-thumb">
	    				<?php
		    				// Check if the post has a Post Thumbnail assigned to it.
							if(has_post_thumbnail()) {

								echo '<a href="' . esc_url(get_permalink(get_the_ID())) . '">';

								$thumb = get_the_post_thumbnail(get_the_ID(), "thumbnail");
                                
                                $dom = new DomDocument;
                                $dom->loadXML($thumb);
                                $imgs = $dom->getElementsByTagName("img");
                                foreach($imgs as $img)
                                {
                                    echo "<img src=\"" . $img->getAttribute("src") . "\" />";
                                    break;
                                } 

                                echo "</a>";
							} 
						?>
	    			</div>
	    			<div class="col-md-9 col-xs-8">
						<h2><a href="<?php echo esc_url(get_permalink(get_the_ID())); ?>"><?php the_title(); ?></a></h2>
						<h4><?php the_time("F jS, Y") ?></h4>
						<p><?php echo strip_tags(get_the_content(" [...]", true)); ?></p>
	    			</div>
    			</div>
    			<hr>
			<?php endwhile; ?>
			
			<div class="nav-previous alignleft"><?php next_posts_link("Older posts"); ?></div>
			<div class="nav-next alignright"><?php previous_posts_link("Newer posts"); ?></div>

			<? else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>	
    	</div>	
	</div>
</div>

<?php get_footer(); ?>