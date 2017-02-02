<?php get_header();
$title = get_the_archive_title();
?>

<main class="container">

		<div class="row" role="main">
			<div class="col s12">
				<header>
					<h1 class="page-title center">Publications</h1>
				</header>

		    <div class="col s12 l9">



			    <?php if (have_posts()) : while (have_posts()) : the_post();

					get_template_part( 'parts/loop', 'blog' );

					?>

					<?php endwhile; ?>

					<?php joints_page_navi(); ?>

					<?php else : ?>

					<?php get_template_part( 'parts/content', 'missing' ); ?>

					<?php endif; ?>

			</div>

			<?php get_sidebar('archives'); ?>

				</div> <!-- end .row -->

		</div> <!-- end .row -->

</main> <!-- end main -->

<?php get_footer(); ?>
