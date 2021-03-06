<?php
/**
 * Loop Template
 */

if (have_posts()) : while (have_posts()) : the_post(); //==============================?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">

	<header class="article-header">
		<div class="featured-image">
			<?php 
			if ( has_post_thumbnail() ) {
				the_post_thumbnail();
			} ?>
		</div>
		<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
		<p class="byline vcard"><?php
			printf( 'Posted <time class="updated" datetime="%1$s" pubdate>%2$s</time> by <span class="author">%3$s</span> <span class="amp">&</span> filed under %4$s.', get_the_time('Y-m-j'), get_the_time(get_option('date_format')), the_author(), get_the_category_list(', '));
		?></p>
	</header> <!-- end article header -->

	<section class="entry-content">
		<?php the_excerpt(); ?>
	</section> <!-- end article section -->

	<footer class="article-footer">
		<p class="tags"><?php the_tags('<span class="tags-title">' . 'Tags:' . '</span> ', ', ', ''); ?></p>
	</footer> <!-- end article footer -->

</article> <!-- end article -->

<?php endwhile; else : //===============================================================?>

<article id="post-not-found" class="hentry">

	<header class="article-header">
		<h1><?php echo "Oops, No Posts Were Found!"; ?></h1>
	</header>

	<section class="entry-content">
		<p><?php echo "Uh Oh. Something is missing. Try double checking things."; ?></p>
	</section>

</article>

<?php endif; //=========================================================================?>