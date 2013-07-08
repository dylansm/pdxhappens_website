<?php
/*
 * Template Name: Seven Ahead
 */

get_header(); // Loads the header.php template. ?>


  <div id="content">

		<?php do_atomic( 'open_content' ); // origin_open_content ?>

		<div class="hfeed">

			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php do_atomic( 'before_entry' ); // origin_before_entry ?>

					<div id="post-<?php the_ID(); ?>" class="<?php hybrid_entry_class(); ?>">

						<?php do_atomic( 'open_entry' ); // origin_open_entry ?>

						<?php echo apply_atomic_shortcode( 'entry_title', '[entry-title permalink="0"]' ); ?>


<?php

function filter_where( $where = '' ) {
  // posts for March 1 to March 15, 2010
  $where .= " AND _start_eventtimestamp >= '2013-07-01' AND _start_eventtimestamp < '2013-07-30'";
  return $where;
}

echo date('Y-m-d');

 $args = array( 'post_type' => 'event',
'meta_key' => '_start_eventtimestamp',
'orderby'=> 'meta_value_num',
'order' => 'ASC',
'posts_per_page' => 20,
 );

add_filter( 'posts_where', 'filter_where' );

$events = new WP_Query( $args );

remove_filter( 'posts_where', 'filter_where' );


if ( $events->have_posts() ) :
  echo '<ul>';
  while ( $events->have_posts() ) : $events->the_post();
    echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
  endwhile;
  echo '</ul>';
endif;

?>


						<div class="entry-content">

							<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'origin' ) ); ?>
							
							<?php wp_link_pages( array( 'before' => '<p class="page-links">' . __( 'Pages:', 'origin' ), 'after' => '</p>' ) ); ?>
							
						</div><!-- .entry-content -->

						<?php echo apply_atomic_shortcode( 'entry_meta', '<div class="entry-meta">[entry-edit-link]</div>' ); ?>

						<?php do_atomic( 'close_entry' ); // origin_close_entry ?>

					</div><!-- .hentry -->

					<?php do_atomic( 'after_entry' ); // origin_after_entry ?>

					<?php do_atomic( 'after_singular' ); // origin_after_singular ?>
					
					<?php //comments_template( '/comments.php', true ); // Loads the comments.php template. ?>

				<?php endwhile; ?>

			<?php endif; ?>

		</div><!-- .hfeed -->

		<?php do_atomic( 'close_content' ); // origin_close_content ?>


      <div class="hfeed">

    <div id="post-42" class="hentry page publish post-1 odd author-madmin">


    <h1 class="page-title entry-title">Featured</h1>
    <div class="entry-content">

<?php
// The Query
$query = new WP_Query( 'category_name=featured' );

// The Loop
if ( $query->have_posts() ) {
  while ( $query->have_posts() ) {
    $query->the_post();
    echo '<li>' . get_the_title() . '</li>';
  }
} else {
  // no posts found
}
/* Restore original Post Data */
wp_reset_postdata();

?>




    </div><!-- .entry-content -->

    <div class="entry-meta"><span class="echodit"><a class="post-edit-link" href="http://pdxhappens.192.168.1.138.xip.io:8080/wp-admin/post.php?post=42&amp;action=edit" title="Edit Page">Edit</a></span></div>

    </div>


  </div>
</div>


<?php get_footer(); // Loads the footer.php template. ?>
