<?php get_header(); ?>

<?php 
$imgarr = array('http://localhost/wp_parallax_theme/img/hero_1.JPG', 'http://localhost/wp_parallax_theme/img/hero_2.JPG', 'http://localhost/wp_parallax_theme/img/hero_3.JPG');
$img = $imgarr[rand(0,2)];
?>

<div class="row row-custom no-pad taller post-header" style="background-image: url(<?php echo $img; ?>);">
</div>

<div class="col-md-offset-3">

	<?php
    $args = array(
                   'cat' => 2
                   );
	$blog = new WP_Query($args); ?>

	<?php if ( $blog->have_posts() ) : while ( $blog->have_posts() ) : $blog->the_post(); ?>

	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<p><strong><?php the_time('l, F jS, Y'); ?></strong></p>
		<hr>

	<?php endwhile; else: ?>

	<p><?php _e('Sorry, there are no posts.'); ?></p>

	<?php endif; ?>

</div>

<?php get_footer(); ?>