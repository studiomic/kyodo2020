<?php
/*
Template Name: contact
*/
?>
<?php get_template_part('pages/ind-header'); ?>
	<link rel="stylesheet" href="/wp/css/page-contact.css">
<?php get_template_part('pages/ind-nav'); ?>
<main role="main" class="contact">
	<h1>お問い合わせ</h1>
	<p>
		ご相談・お見積り・ご質問など、各種お問い合わせは下記のフォームからお送りください。<br>
		メールでのお問い合わせは info@kyoudou-group.jp へ
	</p>
	<form name="inquiry" action="/mail.php" method="post">
		<dl>
			<dt>お問い合わせ先<span class="brown">必須</span></dt>
			<dd>
				<input name="お問い合わせ先[]" type="checkbox" value="横浜営業所"> 横浜営業所
				<input name="お問い合わせ先[]" type="checkbox" value="厚木営業所"> 厚木営業所
				<input name="お問い合わせ先[]" type="checkbox" value="古河営業所"> 古河営業所
				<input name="お問い合わせ先[]" type="checkbox" value="採用担当"> 採用担当<br>
				<input name="お問い合わせ先[]" type="checkbox" value="旅客事業部"> 旅客事業部（貸切バス・乗合バス）
			</dd>
			<dt>お名前<span class="brown">必須</span></dt>
			<dd><input name="お名前" id="name" type="text"></dd>
			<dt>E-Mailアドレス<span class="brown">必須</span></dt>
			<dd><input name="E-Mailアドレス" id="email" type="text"></dd>
			<dt>会社名</dt>
			<dd><input name="会社名" id="company" type="text"></dd>
			<dt>電話番号</dt>
			<dd><input name="電話番号" type="text"></dd>
			<dt>FAX番号</dt>
			<dd><input name="FAX番号" type="text"></dd>
			<dt>郵便番号</dt>
			<dd><input name="郵便番号" type="text"></dd>
			<dt>ご住所</dt>
			<dd><input name="ご住所" type="text" class="addr"></dd>
			<dt>お問い合わせ内容</dt>
			<dd><textarea name="お問い合わせ内容"></textarea></dd>
			<dd><input type="submit" value="  確    認  "></dd>
		</dl>
	</form>

<?php get_template_part('pages/section-contactus'); ?>
<?php get_footer(); ?>
