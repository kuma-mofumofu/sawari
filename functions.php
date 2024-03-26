 <?php
/* ===============================================
 # カスタムメニュー
 =============================================== */
 function register_my_menu() {
    register_nav_menu( 'main-menu','グローバル');
    register_nav_menu( 'footer-menu','フッターナビ');
   }
   add_action( 'after_setup_theme', 'register_my_menu' );
   /* ===============================================
 # 管理画面の「投稿」をお知らせに変更
 =============================================== */
 function Change_menulabel() {
    global $menu;
    global $submenu;
    $name = 'お知らせ';
    $menu[5][0] = $name;
    $submenu['edit.php'][5][0] = $name.'一覧';
    $submenu['edit.php'][10][0] = '新しい'.$name;
   }
   function Change_objectlabel() {
    global $wp_post_types;
    $name = 'お知らせ';
    $labels = &$wp_post_types['post']->labels;
    $labels->name = $name;
    $labels->singular_name = $name;
    $labels->add_new = _x('追加', $name);
    $labels->add_new_item = $name.'の新規追加';
    $labels->edit_item = $name.'の編集';
    $labels->new_item = '新規'.$name;
    $labels->view_item = $name.'を表示';
    $labels->search_items = $name.'を検索';
    $labels->not_found = $name.'が見つかりませんでした';
    $labels->not_found_in_trash = 'ゴミ箱に'.$name.'は見つかりませんでした';
   }
   add_action( 'init', 'Change_objectlabel' );
   add_action( 'admin_menu', 'Change_menulabel' );
   /* ===============================================
   # お知らせでアイキャッチを使用できるようにする
   =============================================== */
    add_theme_support('post-thumbnails');
   /* ===============================================
 # topページのお知らせ表示数
 =============================================== */
 function get_top_posts(){
    $args = array(
      'post_type' => 'post',
      'posts_per_page' => 3,
      'no_found_rows' => true,
    );
    $my_posts = get_posts($args);
    return $my_posts;
  }
  /* ===============================================
  # エクレーシア最新号表示
  =============================================== */
  function get_ecclesia_new(){
    $args = array(
      'post_type' => 'journal',
      'posts_per_page' => 1,
      'no_found_rows' => true,
    );
    $my_posts = get_posts($args);
    return $my_posts;
  }
  /* ===============================================
  # エクレーシア バックナンバー表示数
  =============================================== */
  function get_ecclesia_posts(){
    $args = array(
      'post_type' => 'journal',
      'posts_per_page' => 3,
      'no_found_rows' => true,
      'offset'=> 1,
    );
    $my_posts = get_posts($args);
    return $my_posts;
  }
   /* ===============================================
 # archive.phpを作成
 =============================================== */
 function post_has_archive($args,$post_type){
    if('post' == $post_type){
      $args['rewrite'] = true;
      $args['has_archive'] = 'news';//スラッグ名
    }
    return $args;
   }
   add_filter('register_post_type_args','post_has_archive',10,2);
   /* ===============================================
 # 管理バーの非表示
 =============================================== */
 //* htmlタグのmargin-top:32px !important;の消去
  add_filter('show_admin_bar','__return_false');

 /* ===============================================
 # 管理画面メニュー非表示
 =============================================== */
 function remove_menus(){
  remove_menu_page( 'edit-comments.php' ); // コメント
 }
 add_action( 'admin_menu', 'remove_menus', 999 );
 /* ===============================================
 # 管理画面左メニュー並び替え
 =============================================== */
 function wpse_custom_menu_order($menu_ord){
  if (!$menu_ord) return true;
  return array(
    'index.php', // ダッシュボード
    'upload.php', // メディア
    'edit.php?post_type=page', // 固定ページ
  );
 }
 add_filter( 'custom_menu_order', 'wpse_custom_menu_order', 10, 1 );
 add_filter( 'menu_order', 'wpse_custom_menu_order', 10, 1 );
  /* ===========================================
  # 抜粋機能を固定ページに使えるように設定
  ================================================ */
  add_post_type_support( 'page','excerpt' );
  /* ===============================================
  # 抜粋文の文字数調整
  =============================================== */
  function cms_excerpt_more(){
    return '...';
  }
  add_filter( 'excerpt_more','cms_excerpt_more' );

  function cms_excerpt_length(){
    return 80;
  }
  add_filter( 'excerpt_mblength','cms_excerpt_length' );
  /* ===============================================
  # 特定の箇所の文字数調整をできるようにする為の関数
  =============================================== */
  function get_flexible_excerpt( $number ){
    $value = get_the_excerpt();
    $value = wp_trim_words( $value,$number,'...' );
    return $value;
  }
  /* ===============================================
  # ページタイトル
  =============================================== */
  function get_page_title(){
    if(is_page()):
      return get_the_title();
    endif;
  }
  /* ===============================================
  # ページネーション
  =============================================== */
  function pagination( $pages, $paged, $range = 2, $show_only = false ) {
    global $paged;
    $pages = ( int ) $pages;    //float型で渡ってくるので明示的に int型 へ
    $paged = $paged ?: 1;       //get_query_var('paged')をそのまま投げても大丈夫なように

    //表示テキスト
    $text_first   = "|<<";
    $text_before  = "<<";
    $text_next    = ">>";
    $text_last    = ">>|";

    if ( $show_only && $pages === 1 ) {
      // １ページのみで表示設定が true の時
      echo '<div class="pagination"><span class="current pager">1</span></div>';
      return;
    }

    if ( $pages === 1 ) return;    // １ページのみで表示設定もない場合

    if ( 1 !== $pages ) {
      //２ページ以上の時
      echo '<div class="pagination">';

      if ( $paged > $range + 1 ) {
        // 「最初へ」 の表示
        echo '<a href="', get_pagenum_link(1) ,'" class="first">', $text_first ,'</a>';
      }

      if ( $paged > 1 ) {
        // 「前へ」 の表示
        echo '<a href="', get_pagenum_link( $paged - 1 ) ,'" class="prev">', $text_before ,'</a>';
      }

      for ( $i = 1; $i <= $pages; $i++ ) {
        if ( $i <= $paged + $range && $i >= $paged - $range ) {
          // $paged +- $range 以内であればページ番号を出力
          if ( $paged === $i ) {
            echo '<span class="current pager">', $i ,'</span>';
          } else {
            echo '<a href="', get_pagenum_link( $i ) ,'" class="pager">', $i ,'</a>';
          }
        }
      }

      if ( $paged < $pages ) {
        // 「次へ」 の表示
        echo '<a href="', get_pagenum_link( $paged + 1 ) ,'" class="next">', $text_next ,'</a>';
      }

      if ( $paged + $range < $pages ) {
        // 「最後へ」 の表示
        echo '<a href="', get_pagenum_link( $pages ) ,'" class="last">', $text_last ,'</a>';
      }

      echo '</div>';
    }
  }


?>