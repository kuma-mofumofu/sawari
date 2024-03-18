    <footer>
      <?php get_template_part("parts/contact");?>
      <div class="cityscape"></div>
      <div class="footer-main">
        <div class="text">
          <div class="company">
            <h2>社会福祉法人サワリ</h2>
            <address>
              〒590-0811 大阪府堺市堺区南陵町1-2-6<br>
              TEL:072-280-0830
            </address>
            <a class="access" href="https://www.google.com/maps/place/%E3%80%92590-0811+%E5%A4%A7%E9%98%AA%E5%BA%9C%E5%A0%BA%E5%B8%82%E5%A0%BA%E5%8C%BA%E5%8D%97%E9%99%B5%E7%94%BA%EF%BC%91%E4%B8%81%EF%BC%92%E2%88%92%EF%BC%96+%E3%82%B5%E3%83%AF%E3%83%AA/@34.5542581,135.4666439,17z/data=!3m1!4b1!4m6!3m5!1s0x6000db67fac93337:0xbd35ce8027ee33f7!8m2!3d34.5542581!4d135.4692135!16s%2Fg%2F11d_4fj8fw?entry=ttu">アクセス（GoogleMap）<span>→</span></a>
          </div>
          <nav>
            <ul>
              <li><a href="/news/">お知らせ</a></li>
              <li><a href="/about/">サワリについて</a></li>
              <li><a href="/company/">法人概要</a></li>
              <li><a href="/contact/">お問い合わせ</a></li>
              <li><a href="/privacy/">個人情報保護方針</a></li>
            </ul>
            <div class="businesses">
              <h3>事業内容</h3>
              <ul>
                <li><a href="/employment/">就労継続支援B型</a></li>
                <li><a href="/living/">共同生活援助</a></li>
                <li><a href="/nursing/">デイサービス<br>
                  └共生型生活介護</a></li>
                <li><a href="/consultation/">特定相談支援</a></li>
              </ul>
            </div>
            <div class="buttons">
              <a href="/support/" class="button">支援のお願い</a>
              <a href="/ecclesia/" class="button">機関紙エクレーシア</a>
            </div>
          </nav>
        </div>
      </div>
      <span class="copyright">&copy; social welfare service corporation sawari</span>
    </footer>
    <script src="<?= get_theme_file_uri(); ?>/js/main.js"></script>
    <?php wp_footer(); ?>
  </body>
</html>