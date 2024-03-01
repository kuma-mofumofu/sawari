<?php get_header(); ?>

  <main id="page-ecclesia">

    <div class="directory">
      <div class="inner">
        <a href="/">ホーム</a>
        <span>&gt;</span>
        <span>機関紙「エクレーシア」</span>
      </div>
    </div>

    <section id="journal-top">
      <div class="outer">
        <h2 class="lower-h2">機関紙「エクレーシア」</h2>
      </div>

      <div class="lower-keyvisual">
        <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/journal-keyvisual.png" alt="">
        <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/journal-keyvisual-sp.png" alt="">
        <div class="text">
          <p>
            社会福祉法人サワリでは、<span>年2回</span>機関誌を発行しています。<br>
            活動や現状を知っていただくだけでなく、<br>
            ご利用者様の自己表現の一つの場として提供しています。
          </p>
        </div>
      </div>
    </section>

    <section>
      <h2>最新号</h2>
      <?php get_template_part("parts/new_journal");?>
    </section>

    <section>
      <h2>バックナンバー</h2>
      <ul>
        <?php
          $ecclesia_posts = get_ecclesia_posts();

          foreach ($ecclesia_posts as $post):
            setup_postdata( $post );
        ?>

        <li class="pdf">
          <a href="<?php the_field('journal_pdf');?>" target="_blank">
            <div class="pdf--image">
              <img src="<?php the_field('journal_image'); ?>" >
            </div><!-- /.pdf--image -->

            <div class="pdf--text">
              <time class="time">
                <?php echo get_the_date('Y年度 m月'); ?>
              </time>
              <p class="number">Vol.<?php the_field('journal_number'); ?></p>
            </div><!-- /.pdf--text -->

          </a>
        </li><!-- /.pdf -->

        <?php
          endforeach;
        ?>
      </ul>

      <div class="btn">
        <a href="<?php home_url()?>/journal/">もっと見る></a>
      </div>
    </section>

  </main>
<?php get_footer(); ?>