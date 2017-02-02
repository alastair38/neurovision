<section id="starting" class="row" itemscope itemtype="http://schema.org/WebPage">

	<div class="entry-content  col s12 m4 l4">
		<article class="s12 card">
			<div class="card-content">
        <span class="card-title">About Neurosec</span>
        <p>Who are we, what do we do and other questions?</p>
      </div>
      <div class="card-action grey darken-4">

      </div>
		</article>
	</div>
	<div class="entry-content col s12 m4 l4">
		<article class="s12 card">
			<div class="card-content">
        <span class="card-title">The Blog</span>
        <p>Keep up with what is going on with our work and other stuff of interest</p>
      </div>
      <div class="card-action teal darken-2">

      </div>
		</article>
	</div>
	<div class="entry-content col s12 m4 l4">
		<article class="s12 card">
			<div class="card-content">
        <span class="card-title">Publications</span>
        <p>The latest journal articles, papers etc published by our team</p>
      </div>
      <div class="card-action blue-grey darken-1">

      </div>
		</article>
	</div>

</section> <!-- end article -->

<section class="row" itemscope itemtype="http://schema.org/WebPage">

	<div class="entry-content  col s12 m6 l6">
		<article class="s12 card">
			<div class="card-content">
        <span class="card-title">Opportunities</span>
        <p>Here are somethings you might like</p>
      </div>
      <div class="card-action grey lighten-2">

      </div>
		</article>
	</div>
	<div class="entry-content col s12 m6 l6">
		<article class="s12 card ">
			<div class="card-content">
        <span class="card-title">Events</span>
        <p>Latest events at Neurosec</p>
      </div>
			<div class="card-action materialize-red lighten-2">

      </div>
		</article>
	</div>

</section> <!-- end article -->

<section id="key_pages">
<?php
// check if the repeater field has rows of data
if( have_rows('key_pages') ):
  while ( have_rows('key_pages') ) : the_row();
	$page_ID = get_sub_field('page_name');
?>

	<aside class="col s12 l4">
					<a class="black-text hoverable" href="<?php the_permalink($page_ID);?>">
					<h2><?php echo get_the_title($page_ID);?></h2>
					<i class="material-icons"><?php the_sub_field('page_icon');?></i>
					</a>
	</aside>
<?php
	endwhile;
	else :
	    // no rows found
	endif;
?>
</section>
