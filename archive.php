<?php get_header(); ?>

<main id="archive">
  <div class="directory">
    <div class="inner">
      <a href="/">ホーム</a>
      <span>&gt;</span>
      <span>お知らせ</span>
    </div>
  </div>

  <div class="outer">
    <h2 class="lower-h2">お知らせ</h2>
  </div>


  <div class="news">
  <ul class="news--list">

    <?php
      $paged = get_query_var('paged') ?: 1;

      $news_query = new WP_Query(
        array(
          'post_type' => 'post',
          'posts_per_page' => 10,
          'paged' => $paged,
        )
      );

      var_dump($news_query);

      if($news_query->have_posts()):
        while($news_query->have_posts()):
          $news_query->the_post();
          setup_postdata($post);
    ?>


    <li class="news--list--item">
      <a href="<?php the_permalink(); ?>">
        <div class="image_block">
          <?php
            if (has_post_thumbnail()) :
              the_post_thumbnail('thumbnail');
          ?>
          <?php else : ?>
              <img src="<?php bloginfo('template_url'); ?>/img/no_image.png" width="150" height="150" alt="アイキャッチがない時の画像" />
          <?php endif ; ?>
        </div><!-- /.image_block -->

        <div class="text_block">

          <div class="time--outer">
            <span class="genre-icon">ジャンル</span>
            <time class="time"><?php  echo get_the_date('Y.m.d') ?></time>
          </div><!-- /.time--outer -->

          <h3 class="news_title"><?php echo get_the_title(); ?></h3>
          <?php the_excerpt(); ?>

        </div><!-- /.text_block -->


      </a>
    </li><!-- /.news--list--item -->

    <?php
        endwhile;
      endif;
    ?>
    </ul><!-- /.news--list -->

    <?php
      if(function_exists('pagination')):
        pagination($news_query->max_num_pages,$paged);
      endif;

      wp_reset_postdata();
    ?>
  </div><!-- /.news -->

  <?php get_template_part('parts/continuations'); ?>  
  <?php get_template_part('parts/businesses'); ?>
</main>

<?php get_footer(); ?>