<?php
/*
Template Name: entry
*/
?>
<?php get_template_part('pages/ind-header'); ?>
	<link rel="stylesheet" href="/wp/css/page-contact.css">
<?php get_template_part('pages/ind-nav'); ?>
<main role="main" class="contact">
	<h1>エントリーフォーム</h1>
	<p>
		ご応募ありがとうございます。メールにて数日中に返信させていただきます。<br>
		電話連絡をご希望の方は番号を記入の上、電話連絡希望とお伝えください。<br>
		SMSでの返信をご希望の場合も、携帯電話番号の記入をお願いいたします。
	</p>
	<p>メールでのお問い合わせは info@kyoudou-group.jp へ</p>
	<form name="inquiry" action="/mail.php" method="post">
		<dl>
			<dt>お名前<span class="brown">必須</span></dt>
			<dd><input name="お名前" id="name" type="text"></dd>
			<dt>E-Mailアドレス<span class="brown">必須</span></dt>
			<dd><input name="E-Mailアドレス" id="email" type="text"></dd>
			<dt>電話番号</dt>
			<dd><input name="電話番号" type="text"></dd>
			<dt>郵便番号</dt>
			<dd><input name="郵便番号" type="text"></dd>
			<dt>ご住所</dt>
			<dd><input name="ご住所" type="text" class="addr"></dd>
			<dt>採用担当へのメッセージ</dt>
			<dd><textarea name="採用担当へのメッセージ" placeholder="志望動機・自己PR・面接日時の希望などお書きください。
例：電話連絡希望
"></textarea></dd>
			<dd><input type="submit" value="  確    認  "></dd>
		</dl>
	</form>

<?php get_template_part('pages/section-contactus'); ?>
<?php get_footer(); ?>
