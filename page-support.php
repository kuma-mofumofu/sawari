<?php get_header(); ?>

    <main id="page-support">
      <div class="directory">
        <div class="inner">
          <a href="/">ホーム</a>
          <span>&gt;</span>
          <span>支援のお願い</span>
        </div>
      </div>

      <div class="wrapper">
        <section id="support-top">
          <div class="outer">
            <h2 class="lower-h2">支援のお願い</h2>
          </div>
          <div class="support-tags">
            <a href="#support-about" class="tag">
              <img src="<?= get_theme_file_uri(); ?>/img/love-icon.png" alt="">
              <span>ご寄付</span>
            </a>
            <a href="#kimono-about" class="tag">
              <img src="<?= get_theme_file_uri(); ?>/img/kimono-icon.png" alt="">
              <span>着物のご寄付</span>
            </a>
          </div>
        </section>

        <section id="support-about">
          <h3>ご寄付について</h3>
          <p>
            社会福祉法人サワリでは、サワリの活動をご理解、応援して下さる皆様（個人・法人・団体等）、福祉に思いのある皆様、様々な方々との出会い・つながりを大切にしています。
          </p>
          <p>
            社会福祉法人サワリでは、法人理念と現場理念にご賛同いただける個人・法人・団体など全国の皆様からの寄付金の受付を行っております。<br>
            当事者の回復と人間性を育む理念を土台とした日々の取り組みを貫徹していくには、あまりにも厳しい状況です。又、各施設のバランスを考えなくてはならない時代に入りました。それ故に堺市内だけではなく、全国の皆様の心添えられた後方支援の協力強化を願い祈る次第です。<br>
            皆様のご支援、ご協力を心からお願い申し上げます。
          </p>
          <dl>
            <dt><span></span>寄付の使い道</dt>
            <dd>
              寄付金の使い道について指定下さい。ご指定のない場合、「法人一任」扱いとさせていただきます。
              <ul>
                <li>社会福祉法人サワリへの寄付金は寄付金控除の対象となります。</li>
                <li>お渡しします寄付領収書をもって確定申告等お手続き下さい。</li>
                <li>控除の手続きなど詳しくは、市町村の担当窓口などにご相談ください。</li>
              </ul>
            </dd>
            <dt><span></span>お申込み手続き</dt>
            <dd>
              当法人にあります寄付申込書にご記入の上、ご提出ください。<br>
              内容を確認次第、納入について連絡いたしますので、その手順に従ってお手続きください。後日、寄付領収書を送付いたします。
            </dd>
            <dt><span></span>お名前の公表</dt>
            <dd>機関誌エクレーシアに、ご芳名を掲載いたします。匿名をご希望される場合はお申し出ください。</dd>
          </dl>
        </section>

        <section id="kimono-about">
          <h3>着物のご寄贈について</h3>
          <p>
            さまざまな着物関係の資材のご寄贈をお待ちしております。<br>
            ご家庭に眠っている資材たちをありがたく活用させていただきます。（時期により募集頻度は変わります）
          </p>
          <div class="suspended">
            <img src="<?= get_theme_file_uri(); ?>/img/kimono-suspended.png" alt="">
            <p>社会福祉法人サワリでは、着物や帯を使って製品を作っていますが、多くの方々よりご寄付を頂き、施設での保管場所が無くなってしまったため、一旦、着物の受付を中止しております。ご理解のほどよろしくお願いいたします。</p>
          </div>
          <div class="accepting"></div>
        </section>
      </div>


      <?php get_template_part("parts/continuations"); ?>
      <?php get_template_part("parts/business"); ?>

    </main>
<?php get_footer(); ?>