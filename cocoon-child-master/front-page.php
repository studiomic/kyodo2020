<!DOCTYPE html>
<html lang="ja" itemscope itemtype="http://schema.org/WebPage">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo(‘name’); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="/wp/apple-touch-icon.png" rel="apple-touch-icon">
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&family=Noto+Sans+JP:wght@400;500&display=swap" rel="stylesheet">
	<!-- jquery & iScroll -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.2.0/iscroll.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/js/drawer.min.js"></script>
	<script src="/wp/js/nav.js"></script>
	<script src="/wp/js/scroll.js"></script>
	<link rel="stylesheet" href="/wp/css/pages-style.css">
</head>

<body class="drawer drawer--top">
	<header role="banner">
		<nav class="nav-bar">
			<h1><a href="<?php echo site_url(); ?>">株式会社共同</a></h1>
			<ul>
				<li><a href="<?php echo site_url(); ?>/company">会社概要</a></li>
				<li><a href="<?php echo site_url(); ?>/#transport">運送・貨物・倉庫</a></li>
				<li><a href="<?php echo site_url(); ?>/bus">旅客事業部</a></li>
				<li><a href="<?php echo site_url(); ?>/join">採用情報</a></li>
				<li><a href="<?php echo site_url(); ?>/map">アクセスマップ</a></li>
			</ul>
		</nav>

		<h1><a href="<?php echo site_url(); ?>">Kyoudou</a></h1>
		<nav class="main-nav">
			<ul>
				<li><a href="<?php echo site_url(); ?>/company">company</a></li>
				<li><a href="<?php echo site_url(); ?>#transport">works</a></li>
				<li><a href="<?php echo site_url(); ?>/bus">passenger bus</a></li>
				<li><a href="<?php echo site_url(); ?>/join">join us</a></li>
				<li><a href="<?php echo site_url(); ?>/map">Access Map</a></li>
			</ul>
		</nav>

		<button type="button" class="drawer-toggle drawer-hamburger">
			<span class="sr-only">toggle navigation</span>
			<span class="drawer-hamburger-icon"></span>
		</button>
		<nav class="drawer-nav" role="navigation">
			<ul class="drawer-menu">
				<li><a class="drawer-brand" href="<?php echo site_url(); ?>">Kyoudou</a></li>
				<li><a href="<?php echo site_url(); ?>#transport">物流・運送・貨物事業</a></li>
				<li><a href="<?php echo site_url(); ?>/yokohama">横浜営業所</a></li>
				<li><a href="<?php echo site_url(); ?>/atsugi">厚木営業所</a></li>
				<li><a href="<?php echo site_url(); ?>/koga">古河営業所</a></li>
				<li><a href="<?php echo site_url(); ?>/bus">旅客事業部</a></li>
				<li><a href="<?php echo site_url(); ?>/news">NEWS</a></li>
				<li><a href="<?php echo site_url(); ?>/company">会社概要</a></li>
				<li><a href="<?php echo site_url(); ?>/join">採用情報</a></li>
				<li><a href="<?php echo site_url(); ?>/contact">お問い合わせ</a></li>
				<li><a href="<?php echo site_url(); ?>/privacy-policy">プライバシーポリシー</a></li>
				<li><a href="<?php echo site_url(); ?>/map">Access Map</a></li>
			</ul>
		</nav>
  </header>

	<main role="main" class="Front">
		<section class="newsFront">
			<article>
				<p>創業<span>25</span>周年<br>東京、神奈川、関東圏に強い物流会社で<br>若さ、やる気、お待ちしています。</p>
			</article>

			<article>
				<!-- SLUG-POST -->
				<?php
					$wp_query = new WP_Query();
					$my_posts = array(
						'post_type' => 'post',
						'category_name' => 'news',
						'posts_per_page'=> '3',
					);
					$wp_query->query( $my_posts );
					if( $wp_query->have_posts() ): while( $wp_query->have_posts() ) : $wp_query->the_post();
				?>
				<section class="blog-card">
					<a href="<?php echo site_url(); ?>/news#<?php the_ID(); ?>">
						<time datetime="<?php echo get_the_date(); ?>">
							<span><?php echo get_post_time('M'); ?></span><span class="front-day"><?php echo get_the_date( 'd' ); ?></span><span><?php echo get_the_date( 'Y' ); ?></span>
						</time>
						<div>
						<?php if ( has_post_thumbnail() ): // thumbnail ?>
							<figure><?php the_post_thumbnail(); ?></figure>
						<?php else: // not.thumbnail ?>
							<?php endif; ?>
							<h2>&#9654; <?php the_title(); ?></h2>
							<?php the_excerpt(); ?>
						</div>
					</a>
				</section>
			<?php endwhile; endif; wp_reset_postdata(); ?>
			<!-- SLUG-POST -->
			</article>
		</section>

		<section class="transport" id="transport">
			<h1>物流・運送・貨物事業</h1>
			<section class="shipping">
				<div class="mixB4" id="mixBG1">
					<section class="headline" id="headline1">
						<h2>輸送サービス</h2>
							<div class="flex">
							<article>
								<h3>拠点</h3>
								<p>横浜営業所（神奈川県横浜市）<br>厚木営業所（神奈川県厚木市）<br>古河営業所（茨城県古河市）</p>
							</article>
							<article>
								<h3>配送</h3>
								<p>全国対応<br>法人・個人依頼<br>単回・定期・倉庫保管サービス</p>
							</article>
						</div>
					</section>
				</div>

				<section class="buzContent">
					<h2>事業内容</h2>
					<p class="intro">
						共同の運送・貨物事業部は、豊富な車種を揃え一般貨物輸送・全般を扱う横浜営業所に万全な整備工場を備え、<br>
						自動車フレーム（トラックシャシー）輸送を専属で行なっている厚木営業所では、上依知車庫にある大型倉庫をクライアントの外部倉庫として部品ストックなどにご活用いただいております。<br>
						古河の説明が抜けている。UNICクレーンや、巡回健康診断車などの話も、運送事業部のトップで説明する。
					</p>
					<ul>
						<li>各種輸送業務 ー 自動車部品・鉄鋼製品・自衛隊関係・米軍関係・住宅建材・輸送機器・メディカル品・米穀・たばこ・廃家電</li>
						<li>検診車業務</li>
						<li>自動車部品 ー 保管、入出庫、管理業務</li>
						<li>物流センター業務</li>
						<li>サブリース業</li>
						<li>輸入家具 ー 保管・輸送</li>
					</ul>
				</section>

				<section class="salesOffice">
					<section class="flex">
						<article>
							<a href="<?php echo site_url(); ?>/yokohama">
								<!-- <img src="/wp/img/yokohama/yokohama-27.jpg"> -->
								<img src="/wp/img/yokohama/0554.JPG">
								<h3><span>横浜営業所</span></h3></a>
							<p>24時間車両を集中管理できる整備工場スペースを有する横浜営業所では、精密機器輸送・食品・飲料・衣料品など企業様の物流を中心に個人宅の引越しまで、あらゆる商品とニーズに対応できる車両を幅広く揃え、地場輸送・長距離輸送ともに、オールマイティーにお客様のご依頼に応えています。</p>
						</article>
						<article>
							<a href="<?php echo site_url(); ?>/atsugi">
								<!-- <img src="/wp/img/atsugi/forklift.png"> -->
								<img src="/wp/img/atsugi/6795.JPG">
								<h3><span>厚木営業所</span></h3></a>
							<p>1,000坪以上のフリースペースを確保した厚木市・上依知車庫では、武部鉄工所製作による日野自動車と三菱自動車のトラックシャシーを各メーカー様へ納入しております。</p>
							<p>また大型倉庫はお客様の外部倉庫として部品ストックなどに活用していただいています。</p>
						</article>
						<article>
							<a href="<?php echo site_url(); ?>/koga">
								<img src="/wp/img/koga/gm4.png">
								<h3><span>古河営業所</span></h3></a>
							<p>古河営業所説明。吾輩は猫である。名前はまだ無い。どこで生れたかとんと見当がつかぬ。何でも薄暗いじめじめした所でニャーニャー泣いていた事だけは記憶している。吾輩はここで始めて人間というものを見た。</p>
						</article>
						<article>
							<a href="<?php echo site_url(); ?>/yokohama#equipment">
								<img src="/wp/img/yokohama/yokohama-16.jpg">
								<h3><span>横浜本社営業所・整備工場</span></h3></a>
							<p>ここのタイトルを「本社」営業所にするかはともかく、サイトのどこを探しても本社がどこか探しにくいのはモヤッとする。ので、横浜の所在地が本社と明言した方がいい気がする。</p>
							<p>整備工場に隣接する事務所で管理・設備があることなど書いた上で、横浜ページの設備項目にリンク。もしくはこのページにも同じ内容を載せる。</p>
						</article>
						<article>
							<a href="#">
								<img src="/wp/img/yokohama/yokohama-10.jpg">
								<h3><span>UNICクレーン</span></h3></a>
							<p>運送・貨物事業部のトップは、営業所の列挙ページではなく総合的に事業内容、サービスを伝えるべき場所なので、横浜営業所保有のUNICクレーンは・・・という流れでここに載せる。</p>
							<p>営業所という中見出しは微妙なので外しても良い</p>
						</article>
						<article>
							<a href="#">
								<img src="https://j-netline.com/wp/wp-content/themes/cocoon-master/images/no-image-320.png" alt="" height="270">
								<h3><span>巡回健康診断車</span></h3></a>
							<p>巡回健康診断車も同左で、新事業というよりサービス内容・対応車種が増えていくごとに、ここ事業内容で増やせるようにレイアウトする</p>
						</article>
					</section>
				</section>
			</section>

			<section class="warehouse">
				<div class="mixB4" id="mixBG2">
					<section class="headline" id="headline2">
						<h2>倉庫・保管サービス</h2>
						<h3>拠点</h3>
						<p>
							横浜営業者（神奈川県横浜市）<br>
							厚木営業所（神奈川県厚木市）<br>
							古河営業所（茨城県古河市）
						</p>
						<h3>(このセクションのテキストはすべてダミー)</h3>
					</section>
				</div>
				<section class="buzContent">
					<h2>お客様の商品・部品・機材倉庫として</h2>
					<p class="intro">
						共同の運送・貨物事業部は、豊富な車種を揃え一般貨物輸送・全般を扱う横浜営業所に万全な整備工場を備え、<br>
						自動車フレーム（トラックシャシー）輸送を専属で行なっている厚木営業所では、上依知車庫にある大型倉庫をクライアントの外部倉庫として部品ストックなどにご活用いただいております。<br>
						古河の説明が抜けている。UNICクレーンや、巡回健康診断車などの話も、運送事業部のトップで説明する。
					</p>
				</section>
				<section class="flex">
					<article>
						<img src="/wp/img/koga/gm1.png">
						<h3>物流コストの削減</h3>
						<p>写真や提案数によって横列は3でも4でも可。4は狭くなるので、2列2段で見やすく配置もあり。</p>
					</article>
					<article>
						<img src="/wp/img/koga/gm4.png">
						<h3>商品管理のアウトソーシング</h3>
						<p>吾輩は猫である。名前はまだ無い。どこで生れたかとんと見当がつかぬ。何でも薄暗いじめじめした所でニャーニャー泣いていた事だけは記憶している。吾輩はここで始めて人間というものを見た。</p>
					</article>
				</section>
			</section>
		</section><!-- transport -->

		<section class="busFront">
			<h1>送迎バス・旅客事業</h1>
			<div class="mixB4" id="mixBG3">
				<a href="<?php echo site_url(); ?>/bus">
				<section class="headline" id="headline3">
					<div>
					<h2>旅客事業部</h2>
					<h3>貸切バス・マイクロバス・特定バス</h3>
					<p>
						貸切チャーターバスをお客様の用途に合わせて手配いたします。<br>
						冠婚葬祭や観光に適した1日〜数日単位の送迎依頼や<br>
						学校・法人・個人・マンション等集合住宅からの定期便ご依頼など<br>
						幅広くご利用いただいております。<br>
					</p>
					<h3>乗合バス・こすずめ号</h3>
					</div>
					<!-- <p>
						小雀浄水場〜大船駅（循環）<br>
						大船駅北口ターミナル〜小雀町内循環の乗合バス「こすずめ号」は、365日欠かさず運行しています。<br>
						お近くの方はぜひご利用ください。
					</p> -->
				</section></a>
			</div>
		</section>

		<section class="greenSafety">
			<h2>環境への配慮と安全に対する取り組み</h2>
			<section class="flex">
				<section>
					<div><img src="/wp/img/anzenyuryo.gif" alt="安全性優良事業所"></div>
					<h3>安全性優良事業所</h3>
					<p>
						<a href="https://www.jta.or.jp/" target="_blank">全日本トラック協会</a>
						による交通安全対策などへの取り組みを事業所単位で認定する安全性優良事業所「Gマーク」を取得しています。
					</p>
				</section>
				<section>
					<div><img src="/wp/img/green-keiei.gif" alt="グリーン経営認証"></div>
					<h3>グリーン経営認証</h3>
					<p>
						<a href="https://www.green-m.jp/" target="_blank">公益財団法人交通エコロジー・モビリティ財団</a>
						による環境保全を目的にした取り組みを行っている運輸事業者に対する認定制度「グリーン経営認証」を取得しています。
					</p>
				</section>
				<section>
					<div><img src="/wp/img/safetybus.png" alt="貸切バス事業者安全性評価認定" width="160"></div>
					<h3>貸切バス事業者安全性評価認定</h3>
					<p>
						<a href="http://www.bus.or.jp/safety/index.html" target="_blank">公益社団法人日本バス協会</a>
						による貸切バス事業者安全性評価認定制度の「2つ星」を取得いたしました。<br>
						認定事業者は国土交通省並びに日本バス協会のホームページにて公表され、認定証のほか運行する車体に「SAFETY BUS」マークを貼付します。
					</p>
				</section>
			</section>
			<section class="safetyBottom">
				<p>
					昨今の輸送業界では常識になっているエアサスペンションは全車両に装備し、デジタルタコグラフによる車両管理、大阪府乗り入れ申請、24時間365日の完全対面点呼の実施、自社整備工場での日常点呼等、安全に、確実に、迅速にお客様のお荷物を運ぶことを全面支援いたします。
					品質維持の基本構造、徹底した車輌管理・運行管理、車輌整備、入社教育制度について
				</p>
			</section>
		</section>

		<section class="joinFront">
			<h2>採用情報</h2>
			<a href="/wp/join">
			<div><p>Join Us</p></div>
			<section>
				<p>
					株式会社共同では<br>
					拠点3箇所の各営業所で中距離・長距離トラックドライバー<br>
					横浜営業所でフォークリフト操縦者、自動車整備士、営業担当者<br>
					横浜営業所・旅客事業部でバス・ドライバー、乗務員を募集しております。<br>
				</p>
				<p>
					ドライバーについては、未経験者の方にもしっかりとした安全運転講習・新人研修などプロドライバーになるまでのサポート体制がありますので、輸送業務に興味のある方や将来のスキルアップを目指す方、ご応募をお待ちしています！
				</p>
			</section></a>
		</section>

		<?php get_template_part('pages/section-contactus'); ?>
	</main>

	<footer>
		<h2><a href="#">株式会社共同</a></h2>
		<address>
			<p>〒244-0845 神奈川県横浜市栄区金井町164-1</p>
			<p>TEL &nbsp; 045-851-1551 &nbsp; &nbsp; FAX &nbsp; 045-851-0081</p>
		</address>
		<small>Copyright &copy; 2020 Kyoudou Co.,Ltd. <span>All Rights Reserved.</span></small>
	</footer>

<script>
$(document).ready(function() {
	$('.drawer').drawer();
});
</script>
</body>
</html>
