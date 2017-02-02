<?php get_header();
get_template_part( 'parts/content', 'breadcrumbs' );
$title = single_cat_title("", false);
?>

<main class="container">

		<div class="row valign-wrapper" role="main">

			<div class="col s12">
				<header>
					<h1 class="page-title center"><?php echo $title;?></h1>
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

		</div> <!-- end #main -->
	</div>
</main> <!-- end main -->



<?php get_footer(); ?>
