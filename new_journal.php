<div class="new_journal">
 <ul>
  <?php
   $ecclesia_new = get_ecclesia_new();// 最近のみ表示
   foreach ($ecclesia_new as $post):
    setup_postdata( $post );
  ?>

  <li>
   <div class="image_block">
    <?php if (has_post_thumbnail()): ?>
     <?php the_post_thumbnail('thumbnail'); ?>
    <?php else: ?>
     <img src="<?php bloginfo('template_url'); ?>/img/no_image.png" alt="">
    <?php endif; ?>
   </div><!-- /.image_block -->

   <div class="text_block">
    <div class="title--outer">
     <span class="new_icon">NEW</span>
     <h4 class="ecclesia_title">
      <?php echo the_title(); ?>
     </h4>
    </div><!-- /.title--outer -->

    <div class="journal_content">
     <?php echo get_the_content("journal"); ?>
    </div><!-- /.journal_content -->
   </div><!-- /.text_block -->
  </li>

  <?php
   endforeach;
  ?>
 </ul>
</div><!-- /.new_journal -->