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

	<div class="lower-headline lh-service">
		<div class="inner page-width">
			<h1 class="headline-01 txt-center">
				<span class="main">PRIVACY POLICY</span>
				<span class="sub">Privacy Policy</span>
			</h1>
		</div>
	</div>

	<div class="breadcrumbs page-width" typeof="BreadcrumbList" vocab="https://schema.org/">
		<?php if(function_exists('bcn_display')) {
			bcn_display();
		}?>
	</div>

	<article class="section-block privacy-block">
		<section class="content page-width">
			<p>Ikkosha Co., Ltd. (hereinafter referred to as 'the Company') promotes the protection of personal information by establishing the following privacy policy, building a system for the protection of personal information and ensuring that all employees are aware of the importance of and committed to the protection of personal information.</p>

			<h2 class="ttl">Management of personal information</h2>
			<p>In order to keep customers' personal information accurate and up-to-date and to prevent unauthorised access to, loss, damage, falsification or leakage of personal information, the Company takes necessary measures such as maintaining a security system, developing a management system and thorough employee training, and implements safety measures and strict management of personal information.</p>

			<h2 class="ttl">Purpose of use of personal information</h2>
			<p>Personal information received from customers will be used to send e-mails and materials to customers as a means of contacting them and answering their business enquiries and questions.</p>

			<h2 class="ttl">Prohibition of disclosure or provision of personal information to third parties</h2>
			<p>
				The Company shall properly manage personal information received from customers and shall not disclose personal information to third parties except in the following cases.<br>
				・When the customer has given their consent.<br>
				・When we disclose the information to contractors to whom we outsource our services in order to provide the service requested by the customer.<br>
				・When it is necessary to disclose the information in accordance with laws and regulations. 
			</p>

			<h2 class="ttl">Security measures for personal information</h2>
			<p>The Company takes all possible security measures to ensure the accuracy and safety of personal information.</p>

			<h2 class="ttl">Reference, correction and deletion of personal information</h2>
			<p>If a customer wishes to refer to, correct or delete his or her personal data, this will be handled appropriately after confirming the identity of the customer.</p>

			<h2 class="ttl">Compliance with and review of laws, regulations and norms</h2>
			<p>The Company will comply with Japanese laws, regulations and other norms applicable to the personal information it holds and will review and improve the content of this policy from time to time.</p>

			<h2 class="ttl">Inquiries.</h2>
			<p>If you have any queries about our handling of personal data, please contact us at</p>

			<p>
				Ikkosha Co., Ltd.<br>
				5-5-7, Ebie 5-chome, Fukushima-ku, Osaka, Japan<br>
				TEL.0120-150-<span class="lastnum-tel">585</span>
			</p>
		</section>
	</article>

<?php
get_footer('en');
