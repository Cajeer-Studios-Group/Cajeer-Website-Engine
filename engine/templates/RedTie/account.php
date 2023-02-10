<? include_once 'speedbar.php'; ULogin(0); ?>
<!DOCTYPE html>
<html>
<head>
	<? HEAD(1, LANGSITE25); ?>
	<link rel="stylesheet" href="/templates/Default/css/engine.css">
	<link rel="stylesheet" href="/templates/Default/css/main.css">
</head>
<body>
	<header>
		<? echo TOPMENU; MessageShow(); ?>
	</header>
	<div class="main">
		<div class="about__container">
			<h1><? echo LANGSITE13; ?></h1>
			<div class="advantages__container">
				<div class="advantages">
					<div class="advantages__item">
						<form class="form" action="/account/login/">
							<input type="submit" value="<? echo LANGSITE14; ?>" class="button-submit">
							<div class="ease"></div>
						</form>
					</div>
					<div class="advantages__item">
						<form class="form" action="/account/register/">
							<input type="submit" value="<? echo LANGSITE15; ?>" class="button-submit">
							<div class="ease"></div>
						</form>
					</div>
					<div class="advantages__item">
						<form class="form" action="/account/recovery/">
							<input type="submit" value="<? echo LANGSITE16; ?>" class="button-submit">
							<div class="ease"></div>
						</form>
					</div>
				</div>
			</div>
			<div class="advantages__container">
				<div class="advantages">
					<div class="advantages__item"></div>
					<div class="advantages__item">
						<form class="form" method="POST" action="/account/settings/">
							<?php
							echo '
							<select size="1" name="templatesselect">'.str_replace('>'.$_COOKIE['template'], 'selected>'.$_COOKIE['template'], '<option value="0">Default</option><option value="1">Cajeer</option>').'</select>
							<select size="1" name="languagesselect">'.str_replace('>'.$_COOKIE['language'], 'selected>'.$_COOKIE['language'], '<option value="0">English</option><option value="1">French</option><option value="2">German</option><option value="3">Italian</option><option value="4">Russian</option><option value="5">Spanish</option>').'</select>
							';
							?>
							<br><br><input type="submit" value="<? echo LANGSITE17; ?>" class="button-submit" name="enter">
							<div class="ease"></div>
						</form>
					</div>
					<div class="advantages__item"></div>
				</div>
			</div>
			<p><? echo LANGSITE12; ?></p>
		</div>
	</div>
	<footer>
		<? echo LOWERMENU; ?>
		<p><? echo cright; ?></p>
	</footer>
	<script type="text/javascript" src="/templates/Default/js/main.js"></script>
</body>
</html>