<!DOCTYPE html>
<html lang="ja" itemscope itemtype="http://schema.org/WebPage">
<head>
	<meta charset="UTF-8">
	<title><?php the_title(); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="/apple-touch-icon.png" rel="apple-touch-icon">
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&family=Noto+Sans+JP:wght@400;500&display=swap" rel="stylesheet">
	<!-- jquery & iScroll -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.2.0/iscroll.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/js/drawer.min.js"></script>
	<script src="/wp/js/nav.js"></script>
	<link rel="stylesheet" href="/wp/css/pages-style.css">
</head>

<body class="drawer drawer--top">
	<header role="banner">
		<nav class="nav-bar">
			<h1><a href="<?php echo site_url(); ?>/bus">株式会社共同</a></h1>
			<ul>
				<li><a href="<?php echo site_url(); ?>/company">会社概要</a></li>
				<li><a href="<?php echo site_url(); ?>/transport">運送・貨物・倉庫</a></li>
				<li><a href="<?php echo site_url(); ?>/bus">旅客事業部</a></li>
				<li><a href="<?php echo site_url(); ?>/join">採用情報</a></li>
			</ul>
		</nav>

		<h1><a href="<?php echo site_url(); ?>">Kyoudou</a></h1>
		<nav class="main-nav">
			<ul>
				<li><a href="<?php echo site_url(); ?>/company">company</a></li>
				<li><a href="<?php echo site_url(); ?>/transport">works</a></li>
				<li><a href="<?php echo site_url(); ?>/bus">passenger bus</a></li>
				<li><a href="<?php echo site_url(); ?>/join">join us</a></li>
			</ul>
		</nav>

		<button type="button" class="drawer-toggle drawer-hamburger">
			<span class="sr-only">toggle navigation</span>
			<span class="drawer-hamburger-icon"></span>
		</button>
		<nav class="drawer-nav" role="navigation">
			<ul class="drawer-menu">
				<li><a class="drawer-brand" href="<?php echo site_url(); ?>">Kyoudou</a></li>
				<li><a href="<?php echo site_url(); ?>/company">会社概要</a></li>
				<li><a href="<?php echo site_url(); ?>/news">NEWS</a></li>
				<li><a href="<?php echo site_url(); ?>/transport">物流・運送・貨物事業</a></li>
				<li><a href="<?php echo site_url(); ?>/yokohama">横浜営業所</a></li>
				<li><a href="<?php echo site_url(); ?>/atsugi">厚木営業所</a></li>
				<li><a href="<?php echo site_url(); ?>/koga">古河営業所</a></li>
				<li><a href="<?php echo site_url(); ?>/bus">旅客事業</a></li>
				<li><a href="<?php echo site_url(); ?>/join">採用情報</a></li>
				<li><a href="<?php echo site_url(); ?>/contact">お問い合わせ</a></li>
				<li><a href="<?php echo site_url(); ?>/privacy-policy">プライバシーポリシー</a></li>
				<li><a href="<?php echo site_url(); ?>/blog">BLOG</a></li>
			</ul>
		</nav>
  </header>
