<?php $author = get_queried_object();
$author_id = $author->ID;?>

<div id="" class="hentry">

		<header>
			<h1 class="screen-reader-text"><?php echo the_author_meta( 'display_name', $author_id )?> </h1>
		</header>

		<section class="entry-content">
			<p><?php _e("This author has not published any content yet.", "jointswp");?></p>
		</section>

</div>
