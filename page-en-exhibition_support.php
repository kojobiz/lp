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

get_header('en');
?>

	<div class="service-headline">
		<div class="inner">
			<picture class="mv">
				<source srcset="<?php echo get_template_directory_uri() ?>/images/service/exhibition_support/mv_sp_en.jpg" media="(max-width: 833px)"/>
				<img src="<?php echo get_template_directory_uri() ?>/images/service/exhibition_support/mv_pc_en.jpg" width="1600" height="650">
			</picture>			
			<ul class="page-list">
				<?php if(get_field('download-form')): ?>
					<li>
						<a href="#download">
							<dl>
								<dt>You can also check detailed service introductions and case studies.</dt>
								<dd>"Document download"</dd>
							</dl>
						</a>
					</li>
				<?php endif; ?>

				<?php if(get_field('consultation-form')): ?>
					<li>
						<a href="#contact">
							<dl>
								<dt>About quotation and exhibition</dt>
								<dd>"Free consultation"</dd>
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
			<h2 class="ttl" style="text-align: center;">Do you have any of these 'worries'<br>about exhibiting at exhibitions?</h2>
			<ul class="check-list check-list2">
				<li><strong>I'm a first-time exhibitor and don't know where to start.</strong></li>
				<li><strong>I have something I want to do at the exhibition but need new ideas</strong></li>
				<li>Not enough staff to run the day of the exhibition, <strong>too much to do with too few people in charge</strong></li>
				<li><strong>Previous exhibitions did not attract as many visitors as envisaged</strong></li>
				<li><strong>Post-exhibition customer lists are lying untouched.</strong></li>
				
			</ul>
		<!--	<figure class="pic pic01">
				<img src="<?php echo get_template_directory_uri() ?>/images/service/exhibition_support/img01.jpg" width="440" height="596" alt="">
			</figure>-->
		</section>
		<section class="resolution-block">
			<div class="page-width txt-center">
				<h3 class="ttl">Ikkosha's 'Exhibition Entire Support'<br>can solve all your exhibition problems!</h3>
			</div>
		</section>
	</article>

	<article class="section-block svc-sec01">
		<section class="content page-width">
			<h2 class="headline-02 txt-center svc-ttl01" data-color="red">The most important thing to remember when <br class="spOnly">exhibiting at a trade show is to leave <br>everything to one company.</h2>
			<p class="txt-lead txt-center">Exhibiting at a trade show involves many different things moving at once, making it easy for omissions and compromises to occur.<br>Therefore, the best way to avoid mistakes is to commission as few support companies as possible.
				<br>In addition, as the person in charge of the exhibition is often not dedicated to the exhibition, he/she can focus on his/her traditional work by reducing his/her workload.</p>
			<figure class="pic txt-center">
				<img src="<?php echo get_template_directory_uri() ?>/images/service/exhibition_support/flow_en.jpg" width="877" height="584" alt="">
			</figure>
		</section>
		<section class="content page-width">
			<h3 class="headline-03 svc-ttl03">Service details and implementation flow</h3>
			<div class="svc-flow">
				<dl class="flow-box">
					<dt><span>STEP 1</span>Detailed Discussion</dt>
					<dd class="flow-detail">
						<div class="col-2">
							<dl>
								<dt>Exhibit project</dt>
								<dd>
									<div class="txt">
										<ul class="circle">
											<li>Subsidy application diagnosis</li>
											<li>Exhibition theme planning</li>
										</ul>
									</div>
									<figure class="pic">
										<img src="<?php echo get_template_directory_uri() ?>/images/service/exhibition_support/flow01_1.jpg" width="248" height="181" alt="">
									</figure>
								</dd>
							</dl>
							<dl>
								<dt>Arrangements and preparations for the day's operations</dt>
								<dd>
									<div class="txt">
										<ul class="circle">
											<li>CO (companion)/MC (moderator)/interpreter selection</li>
											<li>Preparation of talk scripts</li>
										</ul>
									</div>
									<figure class="pic">
										<img src="<?php echo get_template_directory_uri() ?>/images/service/exhibition_support/flow01_2.jpg" width="248" height="181" alt="">
									</figure>
								</dd>
							</dl>
							<dl>
								<dt>Creative production</dt>
								<dd>
									<div class="txt">
										<ul class="circle">
											<li>Booth design, conduit planning, graphic design.</li>
											<li>Exhibition panel/video/signage content planning/production.</li>
										</ul>
									</div>
									<figure class="pic">
										<img src="<?php echo get_template_directory_uri() ?>/images/service/exhibition_support/flow01_3.jpg" width="248" height="181" alt="">
									</figure>
								</dd>
							</dl>
							<dl>
								<dt>attracting visitors</dt>
								<dd>
									<div class="txt">
										<ul class="circle">
											<li>Production of special websites for announcements</li>
											<li>DM production/dispatch</li>
										</ul>
									</div>
									<figure class="pic">
										<img src="<?php echo get_template_directory_uri() ?>/images/service/exhibition_support/flow01_4.jpg" width="248" height="181" alt="">
									</figure>
								</dd>
							</dl>
						</div>
					</dd>
				</dl>
				<dl class="flow-box">
					<dt><span>STEP 2</span>Advance Preparation</dt>
					<dd class="flow-detail">
						<dl>
							<dt>Set-up and decoration</dt>
							<dd>
								<div class="txt">
									<ul class="circle">
										<li>Booth set-up, bringing in own equipment</li>
										<li>Placement of products/catalogues/novelties brought in</li>
										<li>Installation of questionnaires</li>
										<li>Check internet environment</li>
										<li>Audio/visual checks</li>
										<li>Rehearsal</li>
									</ul>
								</div>
								<figure class="pic col-2">
									<img src="<?php echo get_template_directory_uri() ?>/images/service/exhibition_support/flow02_1.jpg" width="248" height="181" alt="">
									<img src="<?php echo get_template_directory_uri() ?>/images/service/exhibition_support/flow02_2.jpg" width="248" height="181" alt="">
								</figure>
							</dd>
						</dl>
					</dd>
				</dl>
				<dl class="flow-box">
					<dt><span>STEP 3</span>During the Exhibition</dt>
					<dd class="flow-detail">
						<dl>
							<dt>Operational support</dt>
							<dd>
								<div class="txt">
									<ul class="circle">
										<li>Dealing with visitors</li>
										<li>Scheduling presentations</li>
										<li>Confirmation of operations</li>
										<li>Directing the CO/MC</li>
										<li>Lunch arrangements for participants</li>
										<li>Reception arrangements</li>
										<li>Packing and dispatch of takeaway items</li>
										<li>Photographing of booths</li>
									</ul>
								</div>
								<figure class="pic col-2">
									<img src="<?php echo get_template_directory_uri() ?>/images/service/exhibition_support/flow03_1.jpg" width="248" height="181" alt="">
									<img src="<?php echo get_template_directory_uri() ?>/images/service/exhibition_support/flow03_2.jpg" width="248" height="181" alt="">
								</figure>
							</dd>
						</dl>
					</dd>
				</dl>
				<dl class="flow-box">
					<dt><span>STEP 4</span>After the End of the Session</dt>
					<dd class="flow-detail">
						<dl>
							<dt>Customer follow-up</dt>
							<dd>
								<div class="txt">
									<ul class="circle">
										<li>Lead entry (business card registration/listing)</li>
										<li>Thank-you emails</li>
										<li>Expansion into MA tools - customer development</li>
										<li>Business meeting tele-appointments</li>
										<li>Attracting customers to seminars/tele appointments</li>
										<li>Catalogue/novelty dispatch</li>
										<li>Printing of catalogue replenishment</li>
									</ul>
								</div>
								<figure class="pic col-2">
									<img src="<?php echo get_template_directory_uri() ?>/images/service/exhibition_support/flow04_1.jpg" width="248" height="181" alt="">
									<img src="<?php echo get_template_directory_uri() ?>/images/service/exhibition_support/flow04_2.jpg" width="248" height="181" alt="">
								</figure>
							</dd>
						</dl>
					</dd>
				</dl>
			</div>
		</section>
	</article>

	<article class="section-block common-block pd-y_none" data-color="white">
		<section class="content contact-area">
			<div class="inner">
				<h2 class="headline-02 txt-center">If you have any questions or concerns, please feel free to contact us.</h2>
				<div class="btn-column">
					<a href="#contact" class="btn btn01">
						<img src="<?php echo get_template_directory_uri() ?>/images/common/icon_mail02.png" width="25" height="20" alt="MAIL" class="icon">
						Contact us by email
					</a>
					<a href="tel:0120150585" class="btn btn02">
						<dl>
							<dt class="txt-serif"><span>0120-150-<span class="lastnum-tel">585</span></span></dt>
							<dd class="label">Reception hours/weekdays 9:00～18:00</dd>
						</dl>
					</a>
				</div>
			</div>
		</section>
	</article>

	<article class="section-block svc-sec02">
		<section class="content page-width">
			<h3 class="headline-03 svc-ttl03">Comparison with other companies' services</h3>
			<div class="sp-scroll-table">
				<table class="comparison-table">
					<thead>
						<tr>
							<th class="th01"></th>
							<th class="th02">General exhibition support companies</th>
							<th class="th03">Ikkosha</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th class="th01">Scope of services</th>
							<td class="td01">
								<span class="valuation soso"></span>
								<p>Limited support such as 'decoration only'<br> or 'just running the day'</p>
							</td>
							<td class="td02">
								<span class="valuation very-good"></span>
								<p>One-stop, wide-ranging support from the initial planning stages to post-exhibition follow-up</p>
							</td>
						</tr>
						<tr>
							<th class="th01">Support system</th>
							<td class="td01">
								<span class="valuation soso"></span>
								<p>Only the front part of the exhibition management is handled.</p>
							</td>
							<td class="td02">
								<span class="valuation good"></span>
								<p>Preparing and submitting exhibiting documents, data entry of acquired business cards and other detailed tasks.</p>
							</td>
						</tr>
						<tr>
							<th class="th01">Planning</th>
							<td class="td01">
								<span class="valuation soso"></span>
								<p>Implement customers' requests as they are.</p>
							</td>
							<td class="td02">
								<span class="valuation very-good"></span>
								<p>Builds exhibition strategies through thorough communication with customers and proposes ideas that exceed their requirements.</p>
							</td>
						</tr>
						<tr>
							<th class="th01">Production and customer attraction</th>
							<td class="td01">
								<span class="valuation soso"></span>
								<p>Designs that do not take into account how to attract visitors on the day of the exhibition<br>Not supported for web promotion, etc.</p>
							</td>
							<td class="td02">
								<span class="valuation good"></span>
								<p>Logical branding and customer attraction support based on<br>a precise strategy, with an awareness of the lead lines<br>and booth layout.</p>
							</td>
						</tr>
						<tr>
							<th class="th01">Operation</th>
							<td class="td01">
								<span class="valuation soso"></span>
								<p>Booth set-up and take-down only</p>
							</td>
							<td class="td02">
								<span class="valuation good"></span>
								<p>Not only set-up and decoration, but also detailed on-site support on the day of the event and progress management for lead acquisition.</p>
							</td>
						</tr>
						<tr>
							<th class="th01">Follow-up service</th>
							<td class="td01">
								<span class="valuation soso"></span>
								<p>Limited support such as 'no follow-up' or 'lead acquisition only'</p>
							</td>
							<td class="td02">
								<span class="valuation good"></span>
								<p>From business card registration and listing to customer nurturing, email distribution and business appointments through marketing automation.</p>
							</td>
						</tr>
						<tr>
							<th class="th01">Budget</th>
							<td class="td01">
								<span class="valuation soso"></span>
								<p>Fixed price to be determined.</p>
							</td>
							<td class="td02">
								<span class="valuation good"></span>
								<p>Flexible quotations tailored to the<br>customer's budgetary situation.</p>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</section>
	</article>

	<article class="section-block common-block pd-y_none" data-color="white">
		<section class="content contact-area">
			<div class="inner">
				<h2 class="headline-02 txt-center">If you have any questions or concerns, please feel free to contact us.</h2>
				<div class="btn-column">
					<a href="#contact" class="btn btn01">
						<img src="<?php echo get_template_directory_uri() ?>/images/common/icon_mail02.png" width="25" height="20" alt="MAIL" class="icon">
						Contact us by email
					</a>
					<a href="tel:0120150585" class="btn btn02">
						<dl>
							<dt class="txt-serif"><span>0120-150-<span class="lastnum-tel">585</span></span></dt>
							<dd class="label">Reception hours/weekdays 9:00～18:00</dd>
						</dl>
					</a>
				</div>
			</div>
		</section>
	</article>

	<article class="section-block svc-sec03">
		<section class="content page-width">
			<h2 class="headline-03 svc-ttl03">Latest achievements</h2>
			<div class="svc-works">
				<div class="pic-area slider-wrap">
					<div class="swiper-container svc-works-slider slider-main">
						<div class="swiper-wrapper">
							<div class="swiper-slide"><img src="<?php echo get_template_directory_uri() ?>/images/service/exhibition_support/works01_1.jpg" width="570" height="400" alt=""></div>
							<div class="swiper-slide"><img src="<?php echo get_template_directory_uri() ?>/images/service/exhibition_support/works01_2.jpg" width="570" height="400" alt=""></div>
							<div class="swiper-slide"><img src="<?php echo get_template_directory_uri() ?>/images/service/exhibition_support/works01_3.jpg" width="570" height="400" alt=""></div>
							<div class="swiper-slide"><img src="<?php echo get_template_directory_uri() ?>/images/service/exhibition_support/works01_4.jpg" width="570" height="400" alt=""></div>
						</div>
					</div>
					<div class="swiper-container svc-works-thumbnail slider-thumb">
						<div class="swiper-wrapper">
							<div class="swiper-slide"><img src="<?php echo get_template_directory_uri() ?>/images/service/exhibition_support/works01_1.jpg" width="570" height="400" alt=""></div>
							<div class="swiper-slide"><img src="<?php echo get_template_directory_uri() ?>/images/service/exhibition_support/works01_2.jpg" width="570" height="400" alt=""></div>
							<div class="swiper-slide"><img src="<?php echo get_template_directory_uri() ?>/images/service/exhibition_support/works01_3.jpg" width="570" height="400" alt=""></div>
							<div class="swiper-slide"><img src="<?php echo get_template_directory_uri() ?>/images/service/exhibition_support/works01_4.jpg" width="570" height="400" alt=""></div>
						</div>
					</div>
				</div>
				<div class="works-detail">
					<h3 class="name">CHUGAI RO CO., LTD.</h3>
					<div class="dl-table">
						<dl>
							<dt>Business activities</dt>
							<dd>Manufacture and sale of industrial furnaces, industrial machinery, etc.</dd>
						</dl>
						<dl>
							<dt>Exhibition name</dt>
							<dd>Thermotec 2022</dd>
						</dl>
						<dl>
							<dt>Venue</dt>
							<dd>Tokyo Big Sight</dd>
						</dl>
						<dl>
							<dt>Period</dt>
							<dd>1-3 June 2022</dd>
						</dl>
						<dl>
							<dt>Exhibit points/effectiveness</dt>
							<dd>All exhibition panels were converted to "touch panel signage", enabling a variety of information to be provided on the spot. Achieved 1.5 times the number of leads compared to the previous exhibition and 15% of all visitors.</dd>
						</dl>
					</div>
				</div>
			</div>

			<div class="svc-works">
				<div class="pic-area slider-wrap">
					<div class="swiper-container svc-works-slider slider-main">
						<div class="swiper-wrapper">
							<div class="swiper-slide"><img src="<?php echo get_template_directory_uri() ?>/images/service/exhibition_support/works02_1.jpg" width="570" height="400" alt=""></div>
							<div class="swiper-slide"><img src="<?php echo get_template_directory_uri() ?>/images/service/exhibition_support/works02_2.jpg" width="570" height="400" alt=""></div>
							<div class="swiper-slide"><img src="<?php echo get_template_directory_uri() ?>/images/service/exhibition_support/works02_3.jpg" width="570" height="400" alt=""></div>
							<div class="swiper-slide"><img src="<?php echo get_template_directory_uri() ?>/images/service/exhibition_support/works02_4.jpg" width="570" height="400" alt=""></div>
						</div>
					</div>
					<div class="swiper-container svc-works-thumbnail slider-thumb">
						<div class="swiper-wrapper">
							<div class="swiper-slide"><img src="<?php echo get_template_directory_uri() ?>/images/service/exhibition_support/works02_1.jpg" width="570" height="400" alt=""></div>
							<div class="swiper-slide"><img src="<?php echo get_template_directory_uri() ?>/images/service/exhibition_support/works02_2.jpg" width="570" height="400" alt=""></div>
							<div class="swiper-slide"><img src="<?php echo get_template_directory_uri() ?>/images/service/exhibition_support/works02_3.jpg" width="570" height="400" alt=""></div>
							<div class="swiper-slide"><img src="<?php echo get_template_directory_uri() ?>/images/service/exhibition_support/works02_4.jpg" width="570" height="400" alt=""></div>
						</div>
					</div>
				</div>
				<div class="works-detail">
					<h3 class="name">UTSUMI Co.,Ltd.</h3>
					<div class="dl-table">
						<dl>
							<dt>Business activities</dt>
							<dd>Manufacture and sale of hairdressing and beauty scissors, nail scissors, pet scissors and nippers.</dd>
						</dl>
						<dl>
							<dt>Exhibition name</dt>
							<dd>Asia Beauty Expo 2022</dd>
						</dl>
						<dl>
							<dt>Venue</dt>
							<dd>Pacifico Yokohama</dd>
						</dl>
						<dl>
							<dt>Period</dt>
							<dd>30-31 May 2022.</dd>
						</dl>
						<dl>
							<dt>Exhibit points/effectiveness</dt>
							<dd>Booth design with low decoration costs. The shading of the carpe letters increases the presence. Scissor cutting demonstration and at the same time video recording reduced costs for future content creation. 
							Also gained 520 on line members, supporting the transformation from BtoBtoC to DtoC.</dd>
						</dl>
					</div>
				</div>
			</div>

			<div class="svc-works">
				<div class="pic-area slider-wrap">
					<div class="swiper-container svc-works-slider slider-main">
						<div class="swiper-wrapper">
							<div class="swiper-slide"><img src="<?php echo get_template_directory_uri() ?>/images/service/exhibition_support/works03_1.jpg" width="570" height="400" alt=""></div>
							<div class="swiper-slide"><img src="<?php echo get_template_directory_uri() ?>/images/service/exhibition_support/works03_2.jpg" width="570" height="400" alt=""></div>
						</div>
					</div>
					<div class="swiper-container svc-works-thumbnail slider-thumb">
						<div class="swiper-wrapper">
							<div class="swiper-slide"><img src="<?php echo get_template_directory_uri() ?>/images/service/exhibition_support/works03_1.jpg" width="570" height="400" alt=""></div>
							<div class="swiper-slide"><img src="<?php echo get_template_directory_uri() ?>/images/service/exhibition_support/works03_2.jpg" width="570" height="400" alt=""></div>
						</div>
					</div>
				</div>
				<div class="works-detail">
					<h3 class="name">JAPAN BIKOTSU COLLEGE</h3>
					<div class="dl-table">
						<dl>
							<dt>Business activities</dt>
							<dd>Cosmetic Osteopathic Correction of Small Face・Cosmetic Osteopathic Correction of Whole Body</dd>
						</dl>
						<dl>
							<dt>Exhibition name</dt>
							<dd>Beauty World Japan</dd>
						</dl>
						<dl>
							<dt>Venue</dt>
							<dd>Tokyo Big Sight</dd>
						</dl>
						<dl>
							<dt>Period</dt>
							<dd>16-18 May 2022.</dd>
						</dl>
						<dl>
							<dt>Exhibit points/effectiveness</dt>
							<dd>Booth design with visibility from the main line in mind.</dd>
						</dl>
					</div>
				</div>
			</div>
		</section>
		<section class="content page-width">
			<h2 class="headline-03 svc-ttl03">FAQ</h2>
			<dl class="faq-list">
				<dt>I don't know where to start.</dt>
				<dd>We will work with you to organise the details of your exhibition and plans for attracting visitors, starting with what you should do at the exhibition.</dd>
			</dl>
			<dl class="faq-list">
				<dt>Can the booths be both systems and woodwork?</dt>
				<dd>Yes, we can handle both. We will select and propose an exhibition policy based on the overall budget and objectives.</dd>
			</dl>
			<dl class="faq-list">
				<dt>How long is the preparation time required?</dt>
				<dd>Ideally, you should start preparing around three to six months in advance to attract customers in advance, but depending on the content, it is possible to do so in a shorter period of time.</dd>
			</dl>
			<dl class="faq-list">
				<dt>How much does it cost?</dt>
				<dd>We will make a proposal based on the customer's requirements and provide a flexible quotation for the best plan.<br>Please feel free to contact us first.</dd>
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
						<p class="download-msg">By filling out the necessary information in the form,you can download the materials for free.</p>
						<?php echo do_shortcode('[mwform_formkey key="1311"]'); ?>
					</div>
				</div>
			</section>
		</article>
	<?php endif; ?>
	
	<?php if(get_field('consultation-form')): ?>
		<article id="contact" class="section-block svc-contact pd-t_none bg-c01">
			<h2 class="headline">Contact us for a free quotation <br class="spOnly">and exhibition consultation.</h2>
			<section class="content page-width">
				<?php echo do_shortcode(get_field('consultation-form')); ?>
			</section>
		</article>
	<?php endif; ?>

<?php
get_footer('en');
?>

<script>
window.onload = function() {
	//ラッパー要素
	var sliderWrap = document.querySelectorAll('.slider-wrap');
	//サムネイルのスライダー
	var sliderThumb = document.querySelectorAll('.slider-thumb');
	//メインのスライダー
	var sliderMain = document.querySelectorAll('.slider-main');
	
	for (let i = 0; i < sliderWrap.length; i++) {
		//.slider-wrap、.slider-thumb、.slider-mainに01から始まる連番を振る
		var num = ('00' + (i+1)).slice(-2);
		sliderWrap[i].className += (num);
		sliderThumb[i].className += (num);
		sliderMain[i].className += (num);
		//サムネイル用のスライダー呼び出し&オプション指定
		var swiperThumb = new Swiper('.slider-thumb' + (num), {
			slidesPerView: 4,
			freeMode: true,
			watchSlidesVisibility: true,
			watchSlidesProgress: true,
			spaceBetween: 4,
		});
		//メインのスライダー呼び出し&オプション指定
		var swiperMain = new Swiper ('.slider-main' + (num), {
			thumbs: {
				swiper: swiperThumb,
			},
			slidesPerView: 1,
		});
	}
}

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
	$('.accept-box .mwform-checkbox-field-text').html('I agree to the <a href="<?php echo esc_url(home_url('en-privacy-policy/')); ?>" target="_blank" rel="noopener noreferrer" class="underline">privacy policy</a>');

});

// change サービス to service
$( document ).ready(function() {
    $(".breadcrumbs span:contains('サービス')").text("service");
});
</script>