<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>
<?php
$posts = get_posts(['numberposts' => 10, 'post_type' => 'news']);
if ($posts) :
?>
    <aside class="news">
      <ul>
<?php
foreach($posts as $post) : setup_postdata($post);
?>
        <li>
        <?php the_title(); ?>
        <?php the_time('Y/m/d'); ?>
        </li>
<?php endforeach; ?>
      </ul>
    </aside>
<?php endif; wp_reset_postdata(); ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
