<?php 
  $counter = 0;
  get_header(); 
?>

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

            <div class="text">
              <div class="upper">
                <time class="time">
                  <?php echo get_the_date('Y年度 m月発行'); ?>
                </time>
                <?php if($counter == 0): ?>
                  <span class="new_icon">NEW</span>
                <?php endif; ?>
                
              </div>
              <div class="lower">
                <span class="number">Vol.<?php the_field('journal_number'); ?></span>
                <img src="<?= get_theme_file_uri(); ?>/img/pdf_icon.png" alt="">
                <span class="file">(<?php the_field('file_size'); ?>)</span>
              </div>

            </div>
          </a>
        </li>

        <?php
            $counter++;
            endwhile;
          endif;
        ?>
        <li class="style"></li>
        <li class="style"></li>
        <li class="style"></li>

      </ul><!-- /.ecclesia--list -->

      <a class="continuation" href="/ecclesia/">機関紙一覧へ戻る</a>
    </div><!-- /.ecclesia -->



  </main>
<?php get_footer(); ?>