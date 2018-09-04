<section class="l-contents event">
  <ul>
    <?php
      $args = [
        'numberposts' => 10,
        'post_type' => 'news'
      ];
      $posts = get_posts($args);
      if ($posts) : foreach($posts as $post) : setup_postdata($post);
    ?>
    <li>
      <a href="<?php the_permalink(); ?>">
        <?php the_title(); ?>
        <?php the_time('Y/m/d'); ?>
      </a>
    </li>
    <?php endforeach; ?>
    <?php else : //記事が無い場合 ?>
    <li>
      <p>記事はまだありません。</p>
    </li>
    <?php endif; wp_reset_postdata(); ?>
  </ul>
</section>
