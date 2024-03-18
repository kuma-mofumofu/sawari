<?php get_header(); ?>
  <main id="single" class="container">

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
    <div class="news--item">


      <div class="time--outer">
        <span class="genre-icon">ジャンル</span>
        <time class="time"><?php  echo get_the_date('Y.m.d') ?></time>
      </div><!-- /.time--outer -->


      <h3 class="news_title">
        <?php echo get_the_title(); ?>
      </h3>

      <?php the_content(); ?>
      <div class="image_block">
        <?php
          if (has_post_thumbnail()) :
            the_post_thumbnail('thumbnail');
        ?>
        <?php else : ?>
            <img src="<?php bloginfo('template_url'); ?>/img/no_image.png" width="150" height="150" alt="アイキャッチがない時の画像" />
        <?php endif ; ?>
      </div><!-- /.image_block -->

    </div><!-- /.news--item -->
  </div><!-- /.news -->

    <a href="<?php home_url()?>/news/" class="continuation">
      一覧に戻る
    </a>

  </main>
<?php get_footer(); ?>