<?php get_header(); ?>

<?php 
$imgarr = array('http://localhost/wp_parallax_theme/img/hero_1.JPG', 'http://localhost/wp_parallax_theme/img/hero_2.JPG', 'http://localhost/wp_parallax_theme/img/hero_3.JPG');
$img = $imgarr[rand(0,2)];
?>

<div class="row row-custom no-pad taller post-header" style="background-image: url(<?php echo $img; ?>);">
</div>

<div class="col-md-offset-3">

	<?php

	$pagename = get_query_var('pagename');

	$cat = 0;

	if ($pagename == "projects")
		$cat = 3;
	elseif ($pagename == "products")
		$cat = 4;

    $args = array(
                   'cat' => $cat
                   );
	$blog = new WP_Query($args); ?>

	<?php if ( $cat != 0 && $blog->have_posts() ) : while ( $blog->have_posts() ) : $blog->the_post(); ?>

	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<p><strong><?php the_time('l, F jS, Y'); ?></strong></p>
		<hr>

	<?php endwhile; else: ?>

	<!-- If this isn't the projects or products page then it's the the contact us or services page -->

	<?php 

	$id = get_query_var('id');
	$post = get_post($id);
	echo $post->post_content;

	 ?>

	<?php endif; ?>

</div>

<?php get_footer(); ?>