<article id="post-<?php the_ID(); ?>" <?php post_class('white'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

	<header class="article-header">

		<h1 class="entry-title single-title thin center" itemprop="headline"><?php the_title(); ?></h1>

		<label class="byline">
			<?php if(is_singular('post')){?>
				Written by <?php the_author_posts_link(); ?>	on <?php echo the_time('F j, Y') . '. ';
						echo 'Posted in '. get_the_category_list(', ');?>
			<?php } elseif (is_singular('videos')) {?>
				Posted by <?php the_author_posts_link(); ?>	on <?php echo the_time('F j, Y') . '. ';
					echo 'Recorded in '. get_the_term_list( '', 'video_date', '', ', ', '' );?>
				<?php } else {?>
					Posted by <?php the_author_posts_link(); ?>	on <?php echo the_time('F j, Y') . '. ';
						echo 'Published '. get_the_term_list( '', 'video_date', '', ', ', '' );?>
				<?php }
		?>

		<?php get_template_part( 'parts/content', 'share' ); ?>
		</label>
    </header> <!-- end article header -->

    <section class="entry-content" itemprop="articleBody">
		<?php

		$video = get_field('video_url');
		if($video){
			echo '<div class="video-container">' . $video . '</div>';
		} else {
			the_post_thumbnail('medium', array('class' => 'alignleft responsive-img'));
		}
		the_content(); ?>
	</section> <!-- end article section -->

	<footer class="article-footer row">
		<div class="col s12">


		<?php previous_post_link( '%link', '<span aria-label="Navigate to previous article" class="left tooltipped" data-position="right" data-delay="50" data-tooltip="Previous article: %title"><i class="material-icons md-48 left">keyboard_arrow_left</i></span>', TRUE, '' ); ?>
		<?php next_post_link( '%link', '<span aria-label="Navigate to next article" class="right tooltipped" data-position="left" data-delay="50" data-tooltip="Next article: %title"><i class="material-icons md-48 right">keyboard_arrow_right</i></span>', TRUE, '' ); ?>
		</div>
	</footer>
	<!-- end article footer -->




	<?php //comments_template(); ?>



</article> <!-- end article -->
