<!DOCTYPE html>
<html lang="en"  class="coder1">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>社会福祉法人サワリ</title>
    <link rel="stylesheet" href="<?= get_theme_file_uri();?>/css/reset.css">    
    <link rel="stylesheet" href="<?= get_theme_file_uri();?>/css/styles.css">
    <link rel="icon" href="<?= get_theme_file_uri(); ?>/img/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Zen+Maru+Gothic:wght@500;700&display=swap" rel="stylesheet">
    <?PHP wp_head(); ?>
  </head>
  <body>
    <header>
      <div class="inner">
        <a class="logo" href="/">
          <h1><img src="<?= get_theme_file_uri(); ?>/img/logo.png" alt=""></h1>
        </a>
        <div class="nav-outer" >
        <nav>
          <div class="upper">
            <div class="tel">
              <a href="tel:072-280-0803"><img src="<?= get_theme_file_uri(); ?>/img/tel-icon.png" alt="">072-280-0803</a>
              <span>&#40;営業時間&#58;平日9時〜17時&#41;</span>
            </div>
            <div class="tags">
              <a class="tag" href="/support/">
                <img src="<?= get_theme_file_uri(); ?>/img/love-icon.png" alt="">
                <span>支援のお願い</span>
              </a>
              <a class="tag" href="/ecclesia/">
                <img src="<?= get_theme_file_uri(); ?>/img/newspaper-icon.png" alt="">
                <span>
                  機関紙<br>
                  エクレーシア
                </span>
              </a>
            </div>
          </div>
          <ul>
            <li><a href="/news/">お知らせ</a></li>
            <li><a href="/about/">サワリについて</a></li>
            <li ><a href="/company/">法人概要</a></li>
            <li class="businesses">
              <a href="/welfare01/">事業内容</a>
              <dl>
                <a href="/welfare01/">
                  <dt>デイサービス/共生型生活介護</dt>
                  <dd>ピパ</dd>
                </a>
                <a href="/welfare02/"> 
                  <dt>就労継続支援B型</dt>
                  <dd>グレースハウス/ポケット</dd>
                </a>
                <a href="/welfare03/">
                  <dt>共同生活援助(グループホーム)</dt>
                  <dd>ハサピ/伽耶琴</dd>
                </a>
                <a href="/welfare04/">
                  <dt>特定相談支援</dt>
                  <dd>グレース</dd>
                </a>
              </dl>
            </li>
            <li><a href="/contact/">お問い合わせ</a></li>
          </ul>
        </nav>
        </div>
        <button class="hamburger">
          <span></span>
          <span></span>
          <span></span>
        </button>
      </div>
    </header>