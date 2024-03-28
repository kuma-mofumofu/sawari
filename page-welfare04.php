<?php get_header(); ?>

    <main id="page-consultation" class="businesses">
      <div class="directory">
        <div class="inner">
          <a href="/">ホーム</a>
          <span>&gt;</span>
          <span>特定相談支援</span>
        </div>
      </div>

      <section id="consultation-top" >
        <div class="outer">
          <h2 class="lower-h2">特定相談支援</h2>
        </div>
        

        <div class="lower-keyvisual">
            <img class="pc" src="<?= get_theme_file_uri(); ?>/img/consultation-keyvisual.png" alt="">
            <img class="sp" src="<?= get_theme_file_uri(); ?>/img/consultation-keyvisual-sp.png" alt="">
            <div class="text">
                <p>
                    自分らしく<span>暮</span>らす
                </p>
            </div>
        </div>

        <h3>特定相談支援について<img src="<?= get_theme_file_uri(); ?>/img/h2-icon07.png" alt=""></h3>

        <div class="about-outer">
            <p>障碍福祉サービスを利用するためのサービス等利用計画を作成したり、作成したサービス等利用計画が最適かどうかをモニタリングし、必要な場合であれば見直しや修正を行いより良い生活を送れるようにします。</p>
        </div>
        <div class="businesses-inner">
            <dl>
                <div>
                    <dt>対象となる方</dt>
                    <dd>障碍福祉サービスを申請した障碍者であって、市町村がサービス等利用計画案の提出を求めた方 <br>
    地域相談支援を申請した障碍者であって市町村がサービス等利用計画案の提出を求めた方 <br>
    なお、介護保険制度のサービスを利用する場合には、障碍福祉サービス固有の行動援護、同行援護、自立訓練（生活訓練）、就労移行支援、就労継続支援等を利用している方で、市町村が必要と認める場合に対象となります。</dd>
                </div>
                <div>
                    <dt>ご利用料金</dt>
                    <dd>都度ご相談によって決めていきます。安心してご相談ください。</dd>
                </div>
            </dl>
        </div>
      </section>


      <?php get_template_part("parts/contact"); ?>



      <section id="using">
          <h4>ご利用までの流れ</h4>
          <div class="businesses-inner">
            <ul>
                <li>
                    <span>1</span>
                    <div class="text">
                        <h5>相談</h5>
                        <p>障碍のある方ご本人の意向、お悩みや課題などをお聞きしながら必要なサービスや状況を整理します。</p>
                    </div>
                </li>
                <li>
                    <span>2</span>
                    <div class="text">
                        <h5>計画</h5>
                        <p>相談支援専門員がご相談を元にサービス等利用計画案（プランニング）を作成します。</p>
                    </div>
                </li>
                <li>
                    <span>3</span>
                    <div class="text">
                        <h5>申請</h5>
                        <p>福祉サービス受給者証をお持ちでない場合、お住まいの市区町村の担当課にサービス利用の申請をします。</p>
                    </div>
                </li>
                <li>
                    <span>4</span>
                    <div class="text">
                        <h5>決定</h5>
                        <p>作成したサービス利用計画案などをもとに、申請を行った後に支給の決定を受けます。</p>
                    </div>
                </li>
                <li>
                    <span>5</span>
                    <div class="text">
                        <h5>会議</h5>
                        <p>ご本人や自治体スタッフなどの関係者が、サービス担当者会議で話し合い、正式な計画が決定します。</p>
                    </div>
                </li>
                <li>
                    <span>6</span>
                    <div class="text">
                        <h5>開始</h5>
                        <p>会議で確定したサービス等利用計画を市区町村に提出し、サービスの利用を開始します。</p>
                    </div>
                </li>
             </ul>
            </div>
      </section>

      




      <?php get_template_part("parts/business"); ?>
      <?php get_template_part("parts/middle"); ?>

    </main>
<?php get_footer(); ?>