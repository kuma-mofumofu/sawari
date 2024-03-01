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

          <div class="pdf--image">
            <img src="<?php the_field('journal_image'); ?>" >
          </div><!-- /.pdf--image -->

          <div class="pdf--text">
            <time class="time">
              <?php echo get_the_date('Y年度 m月'); ?>
            </time>
            <p class="number">Vol.<?php the_field('journal_number'); ?></p>
          </div><!-- /.pdf--text -->

        </li><!-- /.pdf -->

        <?php
            endwhile;
          endif;
        ?>

      </ul><!-- /.ecclesia--list -->
    </div><!-- /.ecclesia -->



  </main>
<?php get_footer(); ?>