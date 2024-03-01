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

      <div class="pdf--text">
        <span class="new_icon">NEW</span>
        <time class="time">
          <?php echo get_the_date('Y年度 m月'); ?>
        </time>
        <p class="number">Vol.<?php the_field('journal_number'); ?></p>
      </div><!-- /.pdf--text -->
    </a>
  </li>


  <?php
    endforeach;
  ?>
  </ul>
</div><!-- /.new_journal -->