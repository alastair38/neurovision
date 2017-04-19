<div class="row">

	<ul class="tabs tabs-fixed-width">
<?php
// check if the repeater field has rows of data

if( have_rows('tabs') ):
  while ( have_rows('tabs') ) : the_row();
?>

		<li class="tab col s4"><a class="active" href="#<?php the_sub_field('tab_title');?>"><?php the_sub_field('tab_title');?></a></li>


<?php
	endwhile;
	else :
	    // no rows found
	endif;
?>
</ul>

</div>

<?php
// check if the repeater field has rows of data

if( have_rows('tabs') ):
  while ( have_rows('tabs') ) : the_row();
	$cpt = get_sub_field('custom_post_type');
	$cat = get_sub_field('category');
?>
<section id="<?php the_sub_field('tab_title');?>" class="row center" itemscope itemtype="http://schema.org/WebPage">

	<h4 class="col s12 center thin">
		<?php the_sub_field('tab_byline');?>
	</h4>
			<?php if($cpt == 'videos') {
				global $post;
				$args = array( 'posts_per_page' => 1, 'order'=> 'ASC', 'post_type' => $cpt );
				$postslist = get_posts( $args );
				foreach ( $postslist as $post ) :
				setup_postdata( $post ); ?>
				<article class="entry-content col s4 offset-s4">
					<div class="col s12 center">
						 <?php the_post_thumbnail(array(150, 150), array('class' => 'responsive-img circle')); ?>
					</div>
					<div class="col s12">
						<div class="card-content">
							<label class="authors"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></label>
						</div>
					</div>

				</article>
				<?php
				endforeach;
				wp_reset_postdata();
			} else {
		global $post;
		$args = array( 'posts_per_page' => 3, 'order'=> 'ASC', 'post_type' => $cpt, 'category' => $cat);
		$postslist = get_posts( $args );
		foreach ( $postslist as $post ) :
		setup_postdata( $post ); ?>
		<article class="entry-content col s4">
			<div class="col s12 center">
				 <?php the_post_thumbnail(array(150, 150), array('class' => 'responsive-img circle')); ?>
			</div>
			<div class="col s12">
				<div class="card-content">
					<label class="authors"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></label>
				</div>
			</div>

		</article>
		<?php
		endforeach;
		wp_reset_postdata();}
		?>

</section> <!-- end article -->


<?php
	endwhile;
	else :
	    // no rows found
	endif;
?>
