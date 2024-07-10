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

	<div class="service-headline">
		<div class="inner">
			<picture class="mv">
				<source srcset="<?php echo get_template_directory_uri() ?>/images/service/dm_design/mv_sp.jpg" media="(max-width: 833px)"/>
				<img src="<?php echo get_template_directory_uri() ?>/images/service/dm_design/mv_pc.jpg" width="1600" height="650">
			</picture>
			<ul class="page-list">
				<?php if(get_field('consultation-form')): ?>
					<li>
						<a href="#contact">
							<dl>
								<dt>お見積り・制作の相談についてはこちら</dt>
							</dl>
						</a>
					</li>
				<?php endif; ?>
			</ul>
		</div>
	</div>

	<div class="breadcrumbs page-width" typeof="BreadcrumbList" vocab="https://schema.org/">
		<?php if(function_exists('bcn_display')) {
			bcn_display();
		}?>
	</div>

	<article class="section-block svc-worries">
		<section class="content page-width">
			<h2 class="ttl">DM施策に関する、<br>こんな「お悩み」ありませんか？</h2>
			<ul class="check-list">
				<li>DMの費用対効果をあげたい</li>
				<li>ハウスリスト以外にもアプローチがしたい</li>
				<li>デザインはプロにお願いしたい</li>
				<li>封入封緘・宛名ラベル貼りをお願いしたい</li>
				<li>DMの開封計測がしたい</li>
				<li>DM発送後のテレアポイントを実施したい</li>
				<li>DM施策を丸投げしたい</li>
			</ul>
			<figure class="pic pic01">
				<img src="<?php echo get_template_directory_uri() ?>/images/service/dm_design/worries.jpg" width="566" height="770" alt="">
			</figure>
		</section>
		<section class="resolution-block">
			<div class="page-width txt-center">
				<h3 class="ttl">そのDMに関するお悩み、<br>私たちにお任せください！</h3>
			</div>
		</section>
	</article>

	<article class="section-block svc-sec01 pd-t_md">
		<section class="content page-width">
			<h2 class="svc-ttl04 txt-center">プロモーショナルマーケティングに精通する私たちが、DM制作はもちろん、<br>その後の効果計測・アフターフォローまで、すべてをワンストップでご提供します。</h2>
			<figure class="pic txt-center">
				<img src="<?php echo get_template_directory_uri() ?>/images/service/dm_design/flow.jpg" width="766" height="504" alt="">
			</figure>
		</section>
		<section class="content page-width">
			<h2 class="headline-03 svc-ttl03">私たちは、貴社のDM施策に徹底的に寄り添います！</h2>
			<div class="svc-flow-v2">
				<div class="flow-box">
					<div class="txt-area">
						<h3 class="ttl01">1.ヒアリング</h3>
						<h4 class="ttl02">DM施策の内容をお伺いします。</h4>
						<p>DMで紹介する商品・サービスなどの内容をヒアリングさせていただきます。</p>
						<ul class="dot">
							<li>リストの有無</li>
							<li>DM施策のゴール設定</li>
							<li>お見積もり など</li>
						</ul>
					</div>
					<figure class="pic-area">
						<img src="<?php echo get_template_directory_uri() ?>/images/service/dm_design/flow01.jpg" width="500" height="278" alt="">
					</figure>
				</div>
				<div class="flow-box">
					<div class="txt-area">
						<h3 class="ttl01">2.企画立案＆ご提案</h3>
						<h4 class="ttl02">最適なDM施策をご提案します。</h4>
						<p>オリエンテーションのヒアリングから、<br>お客さまの目的と予算を最適化した企画の提案を行います。</p>
						<ul class="dot">
							<li>DM発送に必要なリストのご提供の提案</li>
							<li>DMのサイズや形状とデザインの提案</li>
							<li>DM発送後の問い合わせ、セミナー申込み等の目標達成までのフロー提案</li>
							<li>DM施策の見積もり など</li>
						</ul>
					</div>
					<figure class="pic-area">
						<img src="<?php echo get_template_directory_uri() ?>/images/service/dm_design/flow02.jpg" width="500" height="278" alt="">
					</figure>
				</div>
				<div class="flow-box">
					<div class="txt-area">
						<h3 class="ttl01">3.DMデザイン</h3>
						<h4 class="ttl02">デザインをご提案します。</h4>
						<p>企画書のラフ案からデザインを制作します。<br>デザイン提出後、校正のやりとりを経て完成させていきます。</p>
					</div>
					<figure class="pic-area">
						<img src="<?php echo get_template_directory_uri() ?>/images/service/dm_design/flow03.jpg" width="500" height="278" alt="">
					</figure>
					<div class="btn-wrap">
						<a href="#works" class="btn btn-01 btn-arw">デザイン実績を見る</a>
						<a href="#products" class="btn btn-01 btn-arw">DMの種類を見る</a>
					</div>
				</div>
				<div class="flow-box">
					<div class="txt-area">
						<h3 class="ttl01">4.DM印刷＆DM発送</h3>
						<h4 class="ttl02">印刷・発送も目的に合わせて実施します。</h4>
						<p>封入、封緘、宛名ラベル貼りなどの内職作業も承ります。</p>
					</div>
					<figure class="pic-area">
						<img src="<?php echo get_template_directory_uri() ?>/images/service/dm_design/flow04.jpg" width="500" height="278" alt="">
					</figure>
				</div>
				<div class="flow-box">
					<div class="txt-area">
						<h3 class="ttl01">5.DM開封計測</h3>
						<h4 class="ttl02">DM発送後の開封／未開封のレポートを提出します。</h4>
						<p>“発送したDMの開封が計測できる”のは、ご存知でしょうか？<br>発送して終わり…では実にもったいない。<br>DM発送後には次のステップがあります！</p>
						<a href="#analytics" class="btn btn-01 btn-arw">詳細はこちら</a>
					</div>
					<figure class="pic-area">
						<img src="<?php echo get_template_directory_uri() ?>/images/service/dm_design/flow05.jpg" width="500" height="278" alt="">
					</figure>
				</div>
				<div class="flow-box">
					<div class="txt-area">
						<h3 class="ttl01">6.アフターフォロー</h3>
						<h4 class="ttl02">DM発送後、目的に応じたテレアポイントを実施します。</h4>
						<p>DMは「送って終わり」ではありません。<br>成果につなげるためには、「送った後アクション」が重要となります。<br>当社では、DM施策に応じた【成果につなげるためのアクション】をサポートいたします。</p>
					</div>
					<figure class="pic-area">
						<img src="<?php echo get_template_directory_uri() ?>/images/service/dm_design/flow06.jpg" width="500" height="278" alt="">
					</figure>
					<ul class="svc-sub-list">
						<li>
							<figure class="pic">
								<img src="<?php echo get_template_directory_uri() ?>/images/service/dm_design/flow06_1.jpg" width="273" height="200" alt="">
							</figure>
							<div class="txt-area">
								<h3 class="ttl01">トークスクリプトの作成</h3>
								<p>目的に沿った専用トークスクリプトを作成します。</p>
								<ul class="dot">
									<li>お打ち合わせ</li>
									<li>トークスクリプト作成 など</li>
								</ul>
							</div>
						</li>
						<li>
							<figure class="pic">
								<img src="<?php echo get_template_directory_uri() ?>/images/service/dm_design/flow06_2.jpg" width="273" height="200" alt="">
							</figure>
							<div class="txt-area">
								<h3 class="ttl01">オペレーター研修</h3>
								<p>サービスの理解を深め、適切な対応のための研修を行います。</p>
								<ul class="dot">
									<li>ご担当者とオペレーターの打合わせ</li>
									<li>トークスクリプト確認 など</li>
								</ul>
							</div>
						</li>
						<li>
							<figure class="pic">
								<img src="<?php echo get_template_directory_uri() ?>/images/service/dm_design/flow06_3.jpg" width="273" height="200" alt="">
							</figure>
							<div class="txt-area">
								<h3 class="ttl01">テレアポイント実施</h3>
								<p>DM施策に目的に沿ってオペレーターによるテレアポイントを実施します。</p>
								<ul class="dot">
									<li>DM受取確認</li>
									<li>アンケート調査</li>
									<li>商談アポイント設定</li>
									<li>セミナー／イベント参加者予約 など</li>
								</ul>
							</div>
						</li>
						<li>
							<figure class="pic">
								<img src="<?php echo get_template_directory_uri() ?>/images/service/dm_design/flow06_4.jpg" width="273" height="200" alt="">
							</figure>
							<div class="txt-area">
								<h3 class="ttl01">レポート提出</h3>
								<p>実施内容の詳細をレポートで提出します。</p>
								<ul class="dot">
									<li>通話結果</li>
									<li>アンケート結果 など</li>
								</ul>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</section>
	</article>

	<article class="section-block common-block pd-y_none" data-color="white">
		<section class="content contact-area">
			<div class="inner">
				<h2 class="headline-02 txt-center">ご相談・ご質問等ございましたら、お気軽にお問い合わせください</h2>
				<div class="btn-column">
					<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn01">
						<img src="<?php echo get_template_directory_uri() ?>/images/common/icon_mail02.png" width="25" height="20" alt="MAIL" class="icon">
						メールでのお問い合わせ
					</a>
					<a href="tel:0120150585" class="btn btn02">
						<dl>
							<dt class="txt-serif"><span>0120-150-<span class="lastnum-tel">585</span></span></dt>
							<dd class="label">受付時間 / 平日 9:00～18:00</dd>
						</dl>
					</a>
				</div>
			</div>
		</section>
	</article>

	<article id="analytics" class="section-block svc-sec02">
		<section class="content page-width">
			<h2 class="headline-03 svc-ttl03">DM開封計測</h2>
			<h3 class="svc-ttl04 txt-center">“発送したDMの開封が計測できる”<br class="spOnly">のはご存知でしょうか？<br>発送して終わり…では実にもったいない。DM発送後には次のステップがあります！</h3>
			<dl class="svc-lead01 txt-center">
				<dt>バリアブル印刷（可変印刷）<br class="spOnly">を使った計測サービス</dt>
				<dd>バリアブル印刷とは、名前・住所・文字・ナンバリング・バーコード・QRコード・画像など、<br class="pcOnly">“1枚1枚違った差替え印刷”をする技術のことです。計測には、このバリアブル印刷のQRコードを使用します。<br>QRコードの読取先は、Webサイトやランディングページに設定する必要がございます。</dd>
			</dl>
			<div class="svc-analytics-example">
				<dl class="example-box">
					<dt>計測例 その１</dt>
					<dd>
						<h4 class="ttl">100件のDMを発送する場合</h4>
						<p>100通のDMそれぞれに、個別のQRコードをバリアブル印刷することで、「誰がDMのQRコードを通してWebサイト・ランディングページにアクセスしたか。」を把握できます。</p>
						<figure class="pic">
							<img src="<?php echo get_template_directory_uri() ?>/images/service/dm_design/example01.png" width="530" height="550" alt="">
						</figure>
					</dd>
				</dl>
				<dl class="example-box">
					<dt>計測例 その2</dt>
					<dd>
						<h4 class="ttl">店舗ごとやエリアごとに<br class="spOnly">仕分ける場合</h4>
						<p>A店（エリア）から発送するDMと、B店（エリア）から発送するDMに、それぞれ違うQRコードを印刷することで、「どちらの店舗（エリア）のお客さまがサイトにアクセスしたか。」を把握できます。</p>
						<figure class="pic">
							<img src="<?php echo get_template_directory_uri() ?>/images/service/dm_design/example02.png" width="530" height="550" alt="">
						</figure>
					</dd>
				</dl>
			</div>
			<div class="svc-flow-v2">
				<div class="flow-box">
					<div class="txt-area">
						<h3 class="ttl01">計測の流れ</h3>
						<h4 class="ttl02">DM制作の時点でQRコードのリンク先URLを<br class="pcOnly">ご用意ください。</h4>
						<ol class="num">
							<li>DM発送リストをご提供ください。</li>
							<li>発送リストに対しそれぞれのパラメータ設置を行います。</li>
							<li>DM制作／印刷／発送</li>
							<li>DM内QRコードのリンク先へのアクセスを<br class="pcOnly">Googleアナリティクスでチェック。</li>
							<li>レポートを作成し、ご提出。</li>
						</ol>
					</div>
					<figure class="pic-area">
						<img src="<?php echo get_template_directory_uri() ?>/images/service/dm_design/analytics01.jpg" width="500" height="384" alt="">
					</figure>
				</div>
				<div class="flow-box">
					<div class="txt-area">
						<h3 class="ttl01">計測に必要なこと</h3>
						<h4 class="ttl02">DM開封計測には条件が必要です。</h4>
						<p>開封計測はGoogleアナリティクスを使用いたします。そのため、あらかじめWebサイトやランディングページへのアナリティクスの導入やコード設置が必要になります。また、導入・設置が完了している場合、管理者権限がないと計測できませんので、アナリティクスへの当社の管理者登録を行っていただく必要がございます。</p>
					</div>
					<figure class="pic-area">
						<img src="<?php echo get_template_directory_uri() ?>/images/service/dm_design/analytics02.jpg" width="500" height="313" alt="">
					</figure>
				</div>
				<div class="flow-box">
					<div class="txt-area">
						<h3 class="ttl01">自社でDM開封を計測したい方へ</h3>
						<h4 class="ttl02">“DM開封計測”に関する資料を<br>無料でダウンロードいただけます。</h4>
						<p>下記よりダウンロードいただき、ぜひセルフDM開封計測にご活用ください。</p>
						<a href="<?php echo esc_url( home_url( '/download' ) ); ?>" class="btn btn-01 btn-arw" style="font-size: 1.6rem;">資料のダウンロードはこちら</a>
					</div>
					<figure class="pic-area">
						<img src="<?php echo get_template_directory_uri() ?>/images/service/dm_design/analytics03.jpg" width="500" height="313" alt="">
					</figure>
				</div>
				<div class="flow-box">
					<div class="txt-area">
						<h3 class="ttl01">DM開封計測に伴うサービス</h3>
						<h4 class="ttl02">計測に欠かせない下記内容も承ります。<br>お気軽にお問い合わせください。</h4>
						<ul class="dot">
							<li>計測に必要なWebサイト、ランディングページの制作</li>
							<li>Googleアナリティクスの導入、コード設置</li>
						</ul>
					</div>
					<figure class="pic-area">
						<img src="<?php echo get_template_directory_uri() ?>/images/service/dm_design/analytics04.jpg" width="500" height="313" alt="">
					</figure>
				</div>
			</div>
		</section>
		<section id="products" class="content page-width">
			<h2 class="headline-03 svc-ttl03">DMの種類</h2>
			<h3 class="svc-ttl04 txt-center">目的・用途や部数、ご予算に合わせてベストなDMを選びましょう。</h3>
			<div class="l-column col-3 col-1-sp svc-product-list">
				<div class="product-dm">
					<figure class="pic">
						<img src="<?php echo get_template_directory_uri() ?>/images/service/dm_design/product01.jpg" width="342" height="342" alt="">
					</figure>
					<dl class="info">
						<dt>ハガキ</dt>
						<dd>一般的なハガキ、ポストカードのサイズ。<br>情報量が少ない代わりに低コストで印刷・発送が可能です。</dd>
					</dl>
					<div class="dl-table">
						<dl>
							<dt>サイズ（mm）</dt>
							<dd>100×148</dd>
						</dl>
						<dl>
							<dt>用紙</dt>
							<dd>コート180kg、225kg<br>マットコート180kg、220kg</dd>
						</dl>
						<dl>
							<dt>デザイン料</dt>
							<dd><strong>30,000円〜</strong></dd>
						</dl>
					</div>
				</div>
				<div class="product-dm">
					<figure class="pic">
						<img src="<?php echo get_template_directory_uri() ?>/images/service/dm_design/product02.jpg" width="342" height="342" alt="">
					</figure>
					<dl class="info">
						<dt>大判ハガキ（長3）</dt>
						<dd>一般的なハガキサイズより少し大きめの長3サイズ。低コストで印刷・発送が可能です。</dd>
					</dl>
					<div class="dl-table">
						<dl>
							<dt>サイズ（mm）</dt>
							<dd>120×235</dd>
						</dl>
						<dl>
							<dt>用紙</dt>
							<dd>コート180kg、225kg<br>マットコート180kg、220kg</dd>
						</dl>
						<dl>
							<dt>デザイン料</dt>
							<dd><strong>40,000円〜</strong></dd>
						</dl>
					</div>
				</div>
				<div class="product-dm">
					<figure class="pic">
						<img src="<?php echo get_template_directory_uri() ?>/images/service/dm_design/product03.jpg" width="342" height="342" alt="">
					</figure>
					<dl class="info">
						<dt>大判ハガキ（A4）</dt>
						<dd>圧着なしで開封いらずのストレートなDMです。情報量も多く、デザインを目立たせることで、他の郵便物に埋もれにくくできます。</dd>
					</dl>
					<div class="dl-table">
						<dl>
							<dt>サイズ（mm）</dt>
							<dd>210×297</dd>
						</dl>
						<dl>
							<dt>用紙</dt>
							<dd>コート180kg、225kg<br>マットコート180kg、220kg</dd>
						</dl>
						<dl>
							<dt>デザイン料</dt>
							<dd><strong>50,000円〜</strong></dd>
						</dl>
					</div>
				</div>
				<div class="product-dm">
					<figure class="pic">
						<img src="<?php echo get_template_directory_uri() ?>/images/service/dm_design/product04.jpg" width="342" height="342" alt="">
					</figure>
					<dl class="info">
						<dt>圧着ハガキ V折</dt>
						<dd>通常ハガキより情報量が3倍でありながら同価格で郵送が可能。開けたいという心理を利用し高い開封率を誇ります。</dd>
					</dl>
					<div class="dl-table">
						<dl>
							<dt>サイズ（mm）</dt>
							<dd>145×100<br>［展開時：145×195］</dd>
						</dl>
						<dl>
							<dt>用紙</dt>
							<dd>コート135kg<br>マットコート110kg、135kg</dd>
						</dl>
						<dl>
							<dt>デザイン料</dt>
							<dd><strong>60,000円〜</strong></dd>
						</dl>
					</div>
				</div>
				<div class="product-dm">
					<figure class="pic">
						<img src="<?php echo get_template_directory_uri() ?>/images/service/dm_design/product05.jpg" width="342" height="342" alt="">
					</figure>
					<dl class="info">
						<dt>圧着ハガキ Z折</dt>
						<dd>通常ハガキより情報量が5倍でありながら同価格で郵送が可能。ワイドのあるビジュアルをデザインできます。</dd>
					</dl>
					<div class="dl-table">
						<dl>
							<dt>サイズ（mm）</dt>
							<dd>145×100<br>［展開時：145×290］</dd>
						</dl>
						<dl>
							<dt>用紙</dt>
							<dd>コート90kg<br>マットコート90kg</dd>
						</dl>
						<dl>
							<dt>デザイン料</dt>
							<dd><strong>70,000円〜</strong></dd>
						</dl>
					</div>
				</div>
				<div class="product-dm">
					<figure class="pic">
						<img src="<?php echo get_template_directory_uri() ?>/images/service/dm_design/product06.jpg" width="342" height="342" alt="">
					</figure>
					<dl class="info">
						<dt>圧着ハガキ C折</dt>
						<dd>一般的なハガキサイズより少し大きめの長3サイズ。低コストで印刷・発送が可能です。</dd>
					</dl>
					<div class="dl-table">
						<dl>
							<dt>サイズ（mm）</dt>
							<dd>145×100<br>［展開時：145×299］</dd>
						</dl>
						<dl>
							<dt>用紙</dt>
							<dd>コート135kg<br>マットコート135kg</dd>
						</dl>
						<dl>
							<dt>デザイン料</dt>
							<dd><strong>70,000円〜</strong></dd>
						</dl>
					</div>
				</div>
				<div class="product-dm">
					<figure class="pic">
						<img src="<?php echo get_template_directory_uri() ?>/images/service/dm_design/product07.jpg" width="342" height="342" alt="">
					</figure>
					<dl class="info">
						<dt>圧着A4 V折</dt>
						<dd>A4サイズ約2枚分の情報量の掲載が可能。中面A3サイズを丸々デザインで表現できます。</dd>
					</dl>
					<div class="dl-table">
						<dl>
							<dt>サイズ（mm）</dt>
							<dd>210×297<br>［展開時：420×297］</dd>
						</dl>
						<dl>
							<dt>用紙</dt>
							<dd>コート110kg、135kg<br>マットコート110kg、135kg</dd>
						</dl>
						<dl>
							<dt>タイプ</dt>
							<dd>ずらし折り or コーナーカット</dd>
						</dl>
						<dl>
							<dt>圧着面</dt>
							<dd>フチ糊 or UV圧着</dd>
						</dl>
						<dl>
							<dt>デザイン料</dt>
							<dd><strong>75,000円〜</strong></dd>
						</dl>
					</div>
				</div>
				<div class="product-dm">
					<figure class="pic">
						<img src="<?php echo get_template_directory_uri() ?>/images/service/dm_design/product08.jpg" width="342" height="342" alt="">
					</figure>
					<dl class="info">
						<dt>圧着A4 C折</dt>
						<dd>A4の5倍の掲載量を実現。ハガキタイプのDMでは最大の掲載量を誇ります。</dd>
					</dl>
					<div class="dl-table">
						<dl>
							<dt>サイズ（mm）</dt>
							<dd>210×297<br>［展開時：628×297］</dd>
						</dl>
						<dl>
							<dt>用紙</dt>
							<dd>コート110kg<br>マットコート110kg</dd>
						</dl>
						<dl>
							<dt>タイプ</dt>
							<dd>コーナーカット</dd>
						</dl>
						<dl>
							<dt>圧着面</dt>
							<dd>フチ糊 or UV圧着</dd>
						</dl>
						<dl>
							<dt>デザイン料</dt>
							<dd><strong>90,000円〜</strong></dd>
						</dl>
					</div>
				</div>
			</div>
		</section>
	</article>

	<article class="section-block common-block pd-y_none" data-color="white">
		<section class="content contact-area">
			<div class="inner">
				<h2 class="headline-02 txt-center">ご相談・ご質問等ございましたら、お気軽にお問い合わせください</h2>
				<div class="btn-column">
					<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn01">
						<img src="<?php echo get_template_directory_uri() ?>/images/common/icon_mail02.png" width="25" height="20" alt="MAIL" class="icon">
						メールでのお問い合わせ
					</a>
					<a href="tel:0120150585" class="btn btn02">
						<dl>
							<dt class="txt-serif"><span>0120-150-<span class="lastnum-tel">585</span></span></dt>
							<dd class="label">受付時間 / 平日 9:00～18:00</dd>
						</dl>
					</a>
				</div>
			</div>
		</section>
	</article>

	<article id="works" class="section-block svc-sec03">
		<section class="content page-width">
			<h2 class="headline-03 svc-ttl03">制作実績</h2>
			<div class="svc-works-dm">
				<div class="main-area">
					<figure class="pic">
						<img src="<?php echo get_template_directory_uri() ?>/images/service/dm_design/works01.jpg" width="705" height="418" alt="">
					</figure>
					<dl class="info">
						<dt>城陽スイミングスクール</dt>
						<dd>
							企画／デザイン／レイアウト<br>
							印刷（仕様：圧着ハガキV折／部数：15,000部）<br>
							発送（エリアダイアログ 15,000件）
						</dd>
					</dl>
				</div>
				<ul class="l-column col-3 col-1-sp works-dm-list">
					<li>
						<figure class="pic">
							<img src="<?php echo get_template_directory_uri() ?>/images/service/dm_design/works02.jpg" width="275" height="269" alt="">
						</figure>
						<dl class="info">
							<dt>JSS東花園スイミングスクール</dt>
							<dd>
								企画／デザイン／レイアウト<br>
								印刷（仕様：圧着ハガキV折／部数：10,000部）<br>
								発送（エリアダイアログ 10,000件）
							</dd>
						</dl>
					</li>
					<li>
						<figure class="pic">
							<img src="<?php echo get_template_directory_uri() ?>/images/service/dm_design/works03.jpg" width="275" height="269" alt="">
						</figure>
						<dl class="info">
							<dt>スイムピア奈良</dt>
							<dd>
								企画／デザイン／レイアウト<br>
								印刷（仕様：圧着ハガキV折／部数：15,000部）<br>
								発送（エリアダイアログ 15,000件）
							</dd>
						</dl>
					</li>
					<li>
						<figure class="pic">
							<img src="<?php echo get_template_directory_uri() ?>/images/service/dm_design/works04.jpg" width="317" height="269" alt="">
						</figure>
						<dl class="info">
							<dt>自社プロモーション用DM</dt>
							<dd>
								企画／デザイン／レイアウト<br>
								印刷（仕様：大判ハガキ（長３）
							</dd>
						</dl>
					</li>
				</ul>
			</div>
		</section>

		<section class="content page-width">
			<h2 class="headline-03 svc-ttl03">よくあるご質問</h2>
			<dl class="faq-list">
				<dt>DM（ダイレクトメール）作成の見積もりの依頼はどうすればいいですか？</dt>
				<dd>まずは見積もり依頼のお問い合わせをください。こちらから連絡し、詳細情報をヒアリングさせていただきます。</dd>
			</dl>
			<dl class="faq-list">
				<dt>DM（ダイレクトメール）作成を依頼する際は、どんな情報を用意したら良いのでしょうか？</dt>
				<dd>
					まずは<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="link-underline">お問い合わせフォーム</a>にアクセスしてください。<br>
					お問い合わせのフォームに［氏名］と［メールアドレス］と［会社名］、［お問い合わせ内容］に「見積もり希望」とご記入ください。<br>
					詳細はこちらからご連絡してヒアリングさせていただきます。<br>
					もし、実施予定日、発送件数（リスト件数）、DMの種類など詳細が確定していれば、わかる範囲で［お問い合わせ内容］にご記入ください。 
				</dd>
			</dl>
			<dl class="faq-list">
				<dt>用紙をこだわりたいのですが、紙見本はありますか？</dt>
				<dd>もちろんございます。ご希望があれば事前にお伺いし、サンプルをお届けいたします。 </dd>
			</dl>
			<dl class="faq-list">
				<dt>定型以外の形に対応できますか？</dt>
				<dd>できます。定形外の形状に関しましては型抜き加工で対応します。<br>※形によって型抜き不可の場合があります。詳細は担当にご相談ください。</dd>
			</dl>
			<dl class="faq-list">
				<dt>折り目をずらした仕上げにしたいのですが…</dt>
				<dd>もちろん可能です。さまざまな折加工に対応いたしますので、お気軽にご相談ください。</dd>
			</dl>
			<dl class="faq-list">
				<dt>デザインを丸投げでお願いできますか？</dt>
				<dd>お任せください。お客さまのご希望やイメージ、会社の特徴などのヒアリングからデザインをおこします。 </dd>
			</dl>
			<dl class="faq-list">
				<dt>キャッチコピーを考えてもらえますか？</dt>
				<dd>お任せください。専属のコピーライターや編集スタッフがご提案いたします。</dd>
			</dl>
			<dl class="faq-list">
				<dt>デザイナーさんと直接打ち合わせできますか？</dt>
				<dd>可能です。来社・訪社はもちろん、Zoom（ズーム）やチャットなどのオンラインでも対応可能です。</dd>
			</dl>
		</section>
	</article>

	<?php if(get_field('download-form')): ?>
		<article id="download" class="section-block pd-t_md">
			<section class="content page-width">
				<?php 
				$post_objects = get_field('download-form');
				$postID = $post_objects->ID;
				?>
				<div class="download-contents svc-download">
					<div class="visual-area">
						<?php
						$downloadImg = get_field('download_img', $postID);
						if( !empty( $downloadImg ) ): 
						?>
						<figure class="pic">
							<img src="<?php echo esc_url($downloadImg['url']); ?>" alt="<?php echo esc_attr($downloadImg['alt']); ?>" />
						</figure>
						<?php endif; ?>
						<h3 class="headline-02 h-pdf"><?php echo get_the_title($postID); ?></h3>
						<?php if(get_field('download_comment', $postID)): ?>
							<div class="comment">
								<p><?php the_field('download_comment', $postID); ?></p>
							</div>
						<?php endif; ?>
					</div>
					<div class="form-area download-form">
						<p class="download-msg">フォームに必要事項をご記入いただくと、無料で資料ダウンロードが可能です。</p>
						<?php echo do_shortcode('[mwform_formkey key="65"]'); ?>
					</div>
				</div>
			</section>
		</article>
	<?php endif; ?>

	<?php if(get_field('consultation-form')): ?>
		<article id="contact" class="section-block svc-contact pd-t_none bg-c01">
			<h2 class="headline">無料お見積り・制作の<br class="spOnly">ご相談はこちらから</h2>
			<section class="content page-width">
				<?php echo do_shortcode(get_field('consultation-form')); ?>
			</section>
		</article>
	<?php endif; ?>

<?php
get_footer();
?>

<script>
// 高さを合わせる
$('.product-dm .info dt').matchHeight();
$('.product-dm .info dd').matchHeight();

// MW WP FORMのスクロール位置調整
$(function(){

	let target01 = $(".mw_wp_form").eq(0);	// 資料請求フォーム
	let target02 = $(".mw_wp_form").eq(1);	// お問い合わせフォーム

	if (target01.hasClass('mw_wp_form_confirm') || target01.hasClass('mw_wp_form_complete')) {
		var posy = $(target01).offset().top - 80;
		posy = posy + parseInt(mwform_scroll.offset);
		$('body').scrollTop(posy);
		$(window).scrollTop(posy);
	} else if (target02.hasClass('mw_wp_form_confirm') || target02.hasClass('mw_wp_form_complete')) {
		var posy = $(target02).offset().top - 80;
		posy = posy + parseInt(mwform_scroll.offset);
		$('body').scrollTop(posy);
		$(window).scrollTop(posy);
	} 

	//規約チェックボックスの文言変更
	$('.accept-box .mwform-checkbox-field-text').html('<a href="<?php echo esc_url(home_url('privacy-policy/')); ?>" target="_blank" rel="noopener noreferrer" class="underline">プライバシーポリシー</a>に同意する');

});
</script>