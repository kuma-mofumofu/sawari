<?php get_header(); ?>

  <main id="page-journal">

    <div class="directory">
      <div class="inner">
        <a href="/">ホーム</a>
        <span>&gt;</span>
        <span>機関紙「エクレーシア」</span>
      </div>
    </div>
    <div class="ecclesia">
      <div class="outer">
        <h2 class="lower-h2">機関紙「エクレーシア」</h2>
      </div>

      <ul class="ecclesia--list">

        <?php
          if(have_posts()):
            while(have_posts($post)):
              the_post();
            setup_postdata($post);
        ?>

        <li class="pdf">
          <a href="<?php the_field('journal_pdf');?>" target="_blank">
            <div class="pdf--image">
              <img src="<?php the_field('journal_image'); ?>" >
            </div><!-- /.pdf--image -->
  
            <div class="pdf--text">
              <time class="time">
                <?php echo get_the_date('Y年度 m月'); ?>発行
              </time>
              <div class="lower">
                <p class="number">Vol.<?php the_field('journal_number'); ?></p>
                <span class="file"><img src="<?= get_theme_file_uri(); ?>/img/pdf_icon.png" alt="">(<?php the_field('file_size'); ?>)</span>
              </div>
            </div><!-- /.pdf--text -->
          </a>
        </li><!-- /.pdf -->

        <?php
            endwhile;
          endif;
        ?>

      </ul><!-- /.ecclesia--list -->
    </div><!-- /.ecclesia -->



  </main>
<?php get_footer(); ?>