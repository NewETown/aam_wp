<?php get_header(); ?>

<!-- <?php get_sidebar(); ?> -->

<?php 
$imgarr = array('http://aamwp.azurewebsites.net/wp-content/themes/aliveandmodern/img/hero_1.JPG',
				'http://aamwp.azurewebsites.net/wp-content/themes/aliveandmodern/img/hero_2.JPG',
				'http://aamwp.azurewebsites.net/wp-content/themes/aliveandmodern/img/hero_3.JPG');
$img = $imgarr[rand(0,2)];
?>

<div class="row row-custom no-pad taller post-header" style="background-image: url(<?php echo $img; ?>);">
</div>


<div id="blog">
	<div class="col-md-offset-2 col-md-10">
	
	    <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
	     
	    <div class="post row row-custom">
	    	<div class="col-md-8">
			    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			    <div class="entry">  
			            <?php the_post_thumbnail(); ?>
			            <?php the_content(); ?>
			    </div>
			</div>
		</div>
	</div>
	<div class="row row-custom">
		<div class="col-md-offset-2 col-md-10">
			<div class="fb-comments" data-href="<?php echo the_permalink() ?>" data-colorscheme="light" data-numposts="5" data-width="The pixel width of the plugin"></div>
		</div>
	</div>

 
	<?php endwhile; ?>
	
	<?php endif; ?>
</div>

<?php get_footer(); ?>