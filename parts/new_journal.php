<div class="new_journal">
 <ul>
  <?php
   $ecclesia_new = get_ecclesia_new();// 最近のみ表示
   foreach ($ecclesia_new as $post):
    setup_postdata( $post );
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
          <span class="new_icon">NEW</span>
        </div>
        <div class="lower">
          <span class="number">Vol.<?php the_field('journal_number'); ?></span>
          <span class="file"><img src="<?= get_theme_file_uri(); ?>/img/pdf_icon.png" alt="">(<?php the_field('file_size'); ?>)</span>
        </div>

        <?php the_content(); ?>

      </div>
    </a>
  </li>


  <?php
    endforeach;
  ?>
  </ul>
</div><!-- /.new_journal -->