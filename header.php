<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>ささゆりの会</title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/import.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="container">
		<div class="border"></div>
		<header>
			<div class="contact-btn">
				<a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/common/contact.png" alt="お問い合わせ"></a>
			</div>
			<nav class="clearfix">
				<ul>
					<li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/nav/about.png" alt="ささゆりの会とは"></a></li>
					<li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/nav/report.png" alt="活動報告"></a></li>
				</ul>
				<h1><a href="index.php"><img src="<?php echo get_template_directory_uri(); ?>/images/nav/logo.png" alt="ささゆりの会"></a></h1>
				<ul class="nav-right">
					<li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/nav/books.png" alt="おすすめの書籍"></a></li>
					<li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/nav/link.png" alt="リンク集"></a></li>
				</ul>
			</nav>
		</header>