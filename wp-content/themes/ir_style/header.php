<!DOCTYPE html>
<html lang="ru-RU">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <title><?php //wp_title('|', true, 'right');
                ?></title> -->
    <?php wp_head(); ?>
	


</head>

<body>
    <header id="header">
		<div class="layout">
			<div class="logo">
				<a href="/">
					<!-- <img src="images/shapka.png" alt="" title=""/> -->
					I.style
				</a>
			</div>

			<nav>
				<?php wp_nav_menu() ?>
			</nav>

			<div class="header__info">
				<ul>
					<li><a href="#"><i class="fas fa-phone-alt"></i>+7934332423</a></li>
					<li><a href="#"><i class="fas fa-envelope"></i>wow21moon@yandex.ru</a></li>
				</ul>
			</div>

		</div>



    </header>