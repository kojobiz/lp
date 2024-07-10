<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ikkosha_theme
 */

get_header();
?>

	<div class="lower-headline lh-service">
		<div class="inner page-width">
			<h1 class="headline-01 txt-center">
				<span class="main">COMPANY</span>
				<span class="sub">会社案内</span>
			</h1>
			<figure class="icon">
				<img src="<?php echo get_template_directory_uri() ?>/images/common/kaeru05a.png" width="220" height="164">
			</figure>
		</div>
	</div>

	<div class="breadcrumbs page-width" typeof="BreadcrumbList" vocab="https://schema.org/">
		<?php if(function_exists('bcn_display')) {
			bcn_display();
		}?>
	</div>

	<nav class="page-navi page-width">
		<ul>
			<li><a href="#message" class="btn btn-01 btn-arw btn-border" data-color="red">代表挨拶</a></li>
			<li><a href="#outline" class="btn btn-01 btn-arw btn-border" data-color="red">会社概要</a></li>
			<li><a href="#access" class="btn btn-01 btn-arw btn-border" data-color="red">アクセスマップ</a></li>
			<li><a href="#history" class="btn btn-01 btn-arw btn-border" data-color="red">100年の歩み</a></li>
			<li><a href="<?php echo esc_url( home_url( '/staff' ) ); ?>" class="btn btn-01 btn-arw btn-border" data-color="red">スタッフ紹介</a></li>
		</ul>
	</nav>

	<article id="message" class="section-block">
		<section class="content page-width">
			<h2 class="headline-01 txt-center">
				<span class="main">MESSAGE</span>
				<span class="sub">代表挨拶</span>
			</h2>
			<div class="message-column">
				<figure class="pic">
					<img src="<?php echo get_template_directory_uri() ?>/images/company/ceo.jpg" width="329" height="467" alt="岩田 雄仁">
					<figcaption class="name txt-serif">
						代表取締役<span>岩田 雄仁</span>
					</figcaption>
				</figure>
				<div class="txt">
					<h3 class="headline-02" data-color="red">時代が求めるリーディング・プロモーション・カンパニー<br>それが私たち一向社です！</h3>
					<p>一向社が創業した1922年は折しも大正デモクラシー期。政治・社会・文化の各方面で起こった民主主義・自由主義的な風潮が日本中に満ちあふれていた頃のこと。そんな時代のムードを追い風に、印刷は文化であるという信念のもと「印刷を通して文化の一端を担う」ことを旗印に掲げ、力強い一歩を踏み出しました。<br>当時の会社案内には「文化の使命を完全に果たす業」とあり、創業当初から、印刷とはインキで紙を汚すことではなく、文化の媒体そのものであるという強い信念をもって営業してきたことが分かります。それから、はや100年。</p>
					<p>当時の活版印刷はオフセット印刷、そしてオンデマンド印刷やWebサイトへ、新聞はSNSへと変化し、あらゆる多様性が氾濫する情報中心の社会へと大きく様変わりし、もはや文化を映す媒介は印刷だけではなくなってしまいました。今や誰もが簡単に情報発信をすることができるようになり、毎日数PB（ペタバイト）もの情報がインデックスされるという、情報の玉石混淆が進む時代に突入しています。おびただしい情報の波にうまく乗れた者は一躍世界中の注目を浴びることができますが、溺れてしまう者、押し流されてしまう者の数の比ではありません。</p>
					<p>私たちはいついかなる時も文化の担い手として常に時代の半歩先を見据えながら、お客さまの、何をどのようにプロモーションすべきかを考え続けることで、一向社“らしい”オンリーワンの情報発信スキルと創造力を磨き続けてまいりました。「全てはお客さまのために」その姿勢は、この先も変わりようがありません。「100年企業」となった今こそ初心に帰る（カエル）と共に、これからはより広域なプロモーションを提案できるエージェンシーとして、これまで以上に頓智の利いた創発型アイデア・サービスをご提供してまいります。<br>変わらぬご愛顧のほど、どうぞ宜しくお願い申し上げます。</p>
				</div>
			</div>
		</section>

		<section id="outline" class="content page-width">
			<h2 class="headline-01 txt-center">
				<span class="main">OUTLINE</span>
				<span class="sub">会社概要</span>
			</h2>
			<div class="dl-table">
				<dl>
					<dt>会社名</dt>
					<dd>株式会社一向社</dd>
				</dl>
				<dl>
					<dt>創業年月</dt>
					<dd>大正11年（1922年）9月</dd>
				</dl>
				<dl>
					<dt>設立年月日</dt>
					<dd>昭和9年（1934年）8月18日</dd>
				</dl>
				<dl>
					<dt>所在地</dt>
					<dd>〒553-0001 大阪市福島区海老江5-5-7</dd>
				</dl>
				<dl>
					<dt>電話番号</dt>
					<dd>TEL.0120-150-<span class="lastnum-tel">585</span></dd>
				</dl>
				<dl>
					<dt>資本金</dt>
					<dd>15,000千円</dd>
				</dl>
				<dl>
					<dt>代表者</dt>
					<dd>代表取締役 岩田 雄仁</dd>
				</dl>
				<dl>
					<dt>従業員</dt>
					<dd>10名（2023年1月現在）</dd>
				</dl>
				<dl>
					<dt>取引銀行</dt>
					<dd>三井住友銀行 西野田支店／三菱UFJ銀行 野田支店</dd>
				</dl>
			</div>
		</section>

		<section id="history" class="content page-width">
			<h2 class="headline-01 txt-center">
				<span class="main">HISTORY</span>
				<span class="sub">100年の歩み</span>
			</h2>
			<div class="timeline">
				<div class="timeline-box">
					<div class="txt-area">
						<dl>
							<dt>1922年</dt>
							<dd>
								<h3 class="ttl">大正デモクラシーの時代1922年に起業</h3>
								<p>一向社の創業は明治維新後、日清戦争（1894-1895年）と日露戦争（1904-1905年）の勝利を経て日本が西欧列強の仲間入りを果たした時代でした。1918年に第1次世界大戦が終結し、1920年3月に「戦後恐慌」を迎えます。一方で、経済の急速な発展や近代化で目覚めた自由主義や民主主義の思潮、市民文化や大衆文化の流れは止まらず、いわゆる「大正デモクラシー」と呼ばれる時代でした。</p>
							</dd>
						</dl>
					</div>
					<figure class="pic">
						<img src="<?php echo get_template_directory_uri() ?>/images/company/history01.jpg" width="538" height="454" alt="">
					</figure>
				</div>
				<div class="timeline-box">
					<div class="txt-area">
						<dl>
							<dt>1934年</dt>
							<dd>
								<h3 class="ttl">株式会社を設立 社員も倍増</h3>
								<p>時代は昭和になり、一向社は活版印刷を生業とする会社として発展しました。1934年に株式会社一向社としてスタート。社員も増えて営業に奮闘していた頃ですが、1941年に太平洋戦争が始まることに。</p>
							</dd>
						</dl>
					</div>
					<figure class="pic">
						<img src="<?php echo get_template_directory_uri() ?>/images/company/history02.jpg" width="538" height="454" alt="">
					</figure>
				</div>
				<div class="timeline-box">
					<div class="txt-area">
						<dl>
							<dt>1960年</dt>
							<dd>
								<h3 class="ttl">戦後復興からドイツ製印刷機の導入</h3>
								<p>ハイデルベルグ社の「プラテン」というドイツ製の活版印刷機をいち早く導入し、ポーラー断裁機が関西で最初に導入されました。また、半透明用紙のトレーシングペーパーに印刷する特殊な「VQインキ」を自社開発。「製図用紙」として製品化し、商品開発を行う大手メーカーに多数納入しました。</p>
							</dd>
						</dl>
					</div>
					<figure class="pic">
						<img src="<?php echo get_template_directory_uri() ?>/images/company/history03.jpg" width="538" height="454" alt="">
					</figure>
				</div>
				<div class="timeline-box">
					<div class="txt-area">
						<dl>
							<dt>1965年</dt>
							<dd>
								<h3 class="ttl">現在でも毎年作成 現在の手帳は当時から</h3>
								<p>活版印刷とオフセット印刷を使用して作成した「メモランダム」という手帳を、前期・後期の年2回作成して皆様にお届けしていました。</p>
							</dd>
						</dl>
					</div>
					<figure class="pic">
						<img src="<?php echo get_template_directory_uri() ?>/images/company/history04.jpg" width="538" height="454" alt="">
					</figure>
				</div>
				<div class="timeline-box">
					<div class="txt-area">
						<dl>
							<dt>1970年</dt>
							<dd>
								<h3 class="ttl">ハイデルベルグ社のオフセット印刷機導入</h3>
								<p>1970年頃にオフセット印刷機を導入。家電メーカーから、液晶になった電卓の初号機の取扱説明書などを受注しました。</p>
							</dd>
						</dl>
					</div>
					<figure class="pic">
						<img src="<?php echo get_template_directory_uri() ?>/images/company/history05.jpg" width="538" height="454" alt="">
					</figure>
				</div>
				<div class="timeline-box">
					<div class="txt-area">
						<dl>
							<dt>1980年</dt>
							<dd>
								<h3 class="ttl">家電メーカーのパソコン販売をサポートした時代</h3>
								<p>1978年に開発された8bitパソコンの「MZシリーズ」やワープロの「書院」の取扱説明書の印刷や原稿のライティングも行いました。</p>
							</dd>
						</dl>
					</div>
					<figure class="pic">
						<img src="<?php echo get_template_directory_uri() ?>/images/company/history06.jpg" width="538" height="454" alt="">
					</figure>
				</div>
				<div class="timeline-box">
					<div class="txt-area">
						<dl>
							<dt>1990年</dt>
							<dd>
								<h3 class="ttl">紙のデザイン·写植·版下からDTPの時代へ</h3>
								<p>90年代からMacintoshシリーズのIIfx（ツーエフエックス）とIIci（ツーシー アイ）を導入し、本格的にDTP（デスクトップパブリッシング）がスタートしました。同時期に印刷事業を縮小し、広告代理店へと転向。</p>
							</dd>
						</dl>
					</div>
					<figure class="pic">
						<img src="<?php echo get_template_directory_uri() ?>/images/company/history07.jpg" width="538" height="454" alt="">
					</figure>
				</div>
				<div class="timeline-box">
					<div class="txt-area">
						<dl>
							<dt>2000年</dt>
							<dd>
								<h3 class="ttl">本格的なインターネット時代への取り組み</h3>
								<p>インターネット端末も開発する家電メーカーのヒット商品ZaurusやMebius、液晶テレビAQUOSの店頭プロモーション動画などの作成も初号機段階から携わり、徐々に紙からデジタルへと事業を転換して行きました。</p>
							</dd>
						</dl>
					</div>
					<figure class="pic">
						<img src="<?php echo get_template_directory_uri() ?>/images/company/history08.jpg" width="538" height="454" alt="">
					</figure>
				</div>
				<div class="timeline-box">
					<div class="txt-area">
						<dl>
							<dt>2008年</dt>
							<dd>
								<h3 class="ttl">全国カレンダー展において映えある<br>経済産業大臣賞受賞</h3>
								<p>東京のIT系商社の配布用カレンダーを8年連続で制作。2008年制作のカレンダーはドイツのカレンダー展でも銀賞を受賞しました。</p>
							</dd>
						</dl>
					</div>
					<figure class="pic">
						<img src="<?php echo get_template_directory_uri() ?>/images/company/history09.jpg" width="538" height="454" alt="">
					</figure>
				</div>
				<div class="timeline-box">
					<div class="txt-area">
						<dl>
							<dt>2015年</dt>
							<dd>
								<h3 class="ttl">新事務所9年振りに海老江にカエル</h3>
								<p>国道2号線沿いの海老江の地に社屋が建ち、大阪福島（2007年-）から移転しました。翌年東京事務所も新宿から原宿に移転。脱印刷営業を推進するべく、創発型アイデアサービス企業として変革しました。</p>
							</dd>
						</dl>
					</div>
					<figure class="pic">
						<img src="<?php echo get_template_directory_uri() ?>/images/company/history10.jpg" width="538" height="454" alt="">
					</figure>
				</div>
				<div class="timeline-box">
					<div class="txt-area">
						<dl>
							<dt>2020年</dt>
							<dd>
								<h3 class="ttl">新たにMAツールを導入し<br>「プロマケ」サービスを開始</h3>
								<p>「顧客とのコミュニケーションの非対面化」がコロナ禍で急増。プロモーションとマーケティングをMA（マーケティングオートメーション）ツールで構築する、「会わずして見込み客と接触してセールスを行う仕組み」の提供を始めました。</p>
							</dd>
						</dl>
					</div>
					<figure class="pic">
						<img src="<?php echo get_template_directory_uri() ?>/images/company/history11.jpg" width="538" height="454" alt="">
					</figure>
				</div>
				<dl class="timeline-now">
					<dt>2022年</dt>
					<dd>創業100周年</dd>
				</dl>
			</div>
		</section>

		<section id="access" class="content page-width">
			<h2 class="headline-01 txt-center">
				<span class="main">ACCESS</span>
				<span class="sub">アクセスマップ</span>
			</h2>
			<div class="access-box">
				<dl>
					<dt>本社</dt>
					<dd>〒553-0001 大阪市福島区海老江5-5-7</dd>
				</dl>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3280.3461161644304!2d135.46987111148815!3d34.69644908332789!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e66222b8f343%3A0x47168739956f0e86!2z5qCq5byP5Lya56S-5LiA5ZCR56S-!5e0!3m2!1sja!2sjp!4v1690970105996!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
			<div class="access-box">
				<dl>
					<dt>東京オフィス</dt>
					<dd>〒108-0075 東京都港区港南2-3-1 大信秋山ビル3F #321</dd>
				</dl>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3242.9385014906156!2d139.74039171283457!3d35.629242572489844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188a453a574ba9%3A0xdb27a9dc25dbe648!2z44CSMTA4LTAwNzUg5p2x5Lqs6YO95riv5Yy65riv5Y2X77yS5LiB55uu77yT4oiS77yRIOWkp-S_oeeni-WxseODk-ODqw!5e0!3m2!1sja!2sjp!4v1719463788473!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
		</section>
	</article>

<?php
get_footer();
