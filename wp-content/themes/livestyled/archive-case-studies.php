<?php
get_header();
get_template_part( 'templates/global', 'social-icons' );
get_template_part( 'templates/pb-copy-image' );
?>

<article class="section theme--secondary" id="section-2">

	<?php
	$args = array(
		'post_type' => 'case-study-category'
	);
	$terms = get_terms( $args );

	foreach ( $terms as $term ):
		if($term->name != "Uncategorised"): ?>

		<section class="container">

			<h2 class="section__header section__header--normal-case"><?php echo $term->name; ?></h2>

			<?php
			$args = array(
				'posts_per_page' => -1,
				'post_type' => 'case-studies', // you can change it according to your custom post type
				'tax_query' => array(
					array(
						'taxonomy' => 'case-study-category', // you can change it according to your taxonomy
						'field' => 'term_id', // this can be 'term_id', 'slug' & 'name'
						'terms' => $term->term_id,
					)
				)
			);
			$posts = get_posts($args);
			?>

			<ul class="post-list post-list--sectioned flexbox flex-wrap">
				<?php $n=0; foreach($posts as $post):
					if ($n++ == 2) break;
					get_template_part( 'templates/post-case-study' );
				endforeach; ?>
			</ul>

			<a href="<?php echo get_term_link($term->term_id); ?>">More from this category</a>

		</section>

	<?php endif;
	endforeach; ?>

</article>


<?php
include( 'templates/pb-request-demo-form.php' );

get_footer();