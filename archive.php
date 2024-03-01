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
      if(have_posts()):
        while(have_posts()):
          the_post();
    ?>

    <li class="news--list--item">
      <a href="<?php the_permalink(); ?>">

        <div class="image_block">
          <img src="<?php echo get_theme_file_uri('/img/no_image.png'); ?>" alt="">
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
  </div><!-- /.news -->

  <?php wp_pagenavi(); ?>


  <?php get_template_part('parts/continuations'); ?>  
  <?php get_template_part('parts/businesses'); ?>
</main>

<?php get_footer(); ?>