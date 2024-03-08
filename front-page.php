<?php get_header(); ?>
    <main id="front-page">
      <section id="keyvisual">
        <img class="keyvisual-pc" src="<?= get_theme_file_uri(); ?>/img/keyvisual-pc.png" alt="">
        <div class="text">
          <p class="catch-copy">
            <span>共</span>に<span>生</span>きる
          </p>
          <p>
            私たちは、ひとりひとりの存在が、<br>
            この社会を構成する豊かな音色だと考えています。<br>
            その想いから「<a href="/about/">サワリ</a>」と命名しました。
          </p>
        </div>
        <div class="musical-notes">
          <div><img class="hidden" src="<?= get_theme_file_uri(); ?>/img/musical-note1.png" alt=""></div>
          <div><img class="hidden" src="<?= get_theme_file_uri(); ?>/img/musical-note2.png" alt=""></div>
          <div><img class="hidden" src="<?= get_theme_file_uri(); ?>/img/musical-note3.png" alt=""></div>
          <div><img class="hidden" src="<?= get_theme_file_uri(); ?>/img/musical-note4.png" alt=""></div>
          <script src="<?= get_theme_file_uri(); ?>/js/front-page.js"></script>
        </div>
        <img class="keyvisual-staff" src="<?= get_theme_file_uri(); ?>/img/keyvisual-sp-staff.png" alt="">
        <img class="keyvisual-cityscape" src="<?= get_theme_file_uri(); ?>/img/keyvisual-sp-cityscape.png" alt="">
      </section>


      <?php get_template_part("parts/business");?>


      <div class="wrapper">
        <section id="news">
          <h2 class="headline">
            <img src="<?= get_theme_file_uri(); ?>/img/h2-icon03.png" alt="">
            <span>お知らせ</span>
            <img src="<?= get_theme_file_uri(); ?>/img/h2-icon04.png" alt="">
          </h2>

          <ul>
            <?php
              $top_posts = get_top_posts();// topページのお知らせ表示数

              foreach ($top_posts as $post):
                setup_postdata( $post );
            ?>

            <li class="news_list">
              <a href="<?php the_permalink(); ?>">

              <div class="news_list--headline">
                <p class="news_list--title"><?php echo the_title(); ?></p>
                <time class="time">
                  <?php echo the_date('Y年度 m月'); ?>
                </time>
              </div><!-- /.news_list--time -->


              <div class="news_list--content">
                <p>
                <?php the_excerpt(); ?>

                </p>
              </div><!-- /.news_list--content -->
              </a>
            </li><!-- /.news_list -->
            <?php
              wp_reset_postdata();
              endforeach;
            ?>
          </ul>
          <a href="/news/" class="continuation">続きを見る<span>→</span></a>
        </section>

        <section id="ecclesia">
          <h2 class="sub_title">エクレーシア最新号</h2>
          <?php get_template_part("parts/new_journal");?>

          <?php the_content(); ?>

          <div class="btn">
            <a href="<?php home_url()?>/ecclesia/">エクレーシアについて<span>→</span></a>
          </div>

          <div class="btn">
            <a href="<?php home_url()?>/journal/">バックナンバー<span>→</span></a>
          </div>
        </section>

        <section id="support">
          <img src="<?= get_theme_file_uri(); ?>/img/love-icon.png" alt="">
          <div class="text">
            <h2>支援のお願い</h2>
            <p>社会福祉法人サワリでは、法人理念と現場理念にご賛同いただける個人・法人・団体など全国の皆様からの寄付金の受付を行っております。</p>
            <a href="/support/" class="access">詳細を見る<span>→</span></a>
          </div>
        </section>
      </div>
    </main>
<?php get_footer(); ?>