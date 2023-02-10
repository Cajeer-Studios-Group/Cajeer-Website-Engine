<? include_once 'speedbar.php'; include_once ENGINE_DIR.('/modules/offline.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<? HEAD(0); ?>
	<link rel="stylesheet" href="/templates/Default/css/engine.css">
	<link rel="stylesheet" href="/templates/Default/css/main.css">
</head>
<body>
	<header>
		<br>
		<br>
		<p align="center"><? echo LANGSITE40; ?>: <? echo $vws; ?></p>
	</header>
	<div class="main">
		<div class="blog-container">
			<div class="blog-body">
				<div class="blog-title">
					<h1><a href="#"><? echo LANGSITE45; ?></a></h1>
				</div>
				<div class="blog-text">
					<p><? echo LANGSITE46; ?>: <? echo offline_reason; ?></p>
				</div>
			</div>
			<div class="blog-footer">
				<ul>
					<li><a href="#"><? echo LANGSITE47; ?></a></li>
					<li><a href="#"><? echo LANGSITE48; ?></a></li>
				</ul>
			</div>
		</div>
		<div class="blog-container">
			<?php
			if ($Page == 'index' and $Module == 'index') {
				$Param1 = 'SELECT `name`, `added`, `shorttext`, `date` FROM `news` WHERE `cat` = 1 ORDER BY `id` DESC LIMIT 0, 10';
			}
			$Query = mysqli_query($CONNECT, $Param1);
			while ($Row = mysqli_fetch_assoc($Query)) {
				echo '
				<div class="blog-body">
					<div class="blog-title">
						<h1><a href="#">'.$Row['name'].'</a></h1>
					</div>
					<div class="blog-text">
						<p>'.$Row['shorttext'].'</p>
					</div>
				</div>
				<div class="blog-footer">
					<ul>
					    <li><a href="#">'.$Row['added'].'</a></li>
						<li><a href="#">'.$Row['date'].'</a></li>
					</ul>
				</div>
				';
			}
			?>
		</div>
	</div>
	<footer>
		<p><? echo cright; ?></p>
	</footer>
	<script type="text/javascript" src="/templates/Default/js/main.js"></script>
</body>
</html>