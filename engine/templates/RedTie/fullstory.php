<? include_once 'speedbar.php'; ?>
<?php 
$Param['id'] += 0;
if ($Param['id'] == 0) MessageSend(1, LANGSYS32, '/news/');
$Row = mysqli_fetch_assoc(mysqli_query($CONNECT, 'SELECT `name`, `read`,`added`, `text`, `date` FROM `news` WHERE `id` = '.$Param['id']));
if (!$Row['name']) MessageSend(1, LANGSYS33, '/news/');
mysqli_query($CONNECT, 'UPDATE `news` SET `read` = `read` + 1 WHERE `id` = '.$Param['id']);
?>
<!DOCTYPE html>
<html>
<head>
	<? HEAD(1, LANGSITE36); ?>
	<link rel="stylesheet" href="/templates/Default/css/engine.css">
	<link rel="stylesheet" href="/templates/Default/css/main.css">
</head>
<body>
	<header>
		<? echo TOPMENU; MessageShow(); ?>
	</header>
	<div class="main">
		<div class="blog-container">
			<?php
			echo '
			<div class="blog-body">
					<div class="blog-title">
						<h1><a href="/news/">'.$Row['name'].'</a></h1>
					</div>
					<div class="blog-text">
						<p>'.$Row['text'].'</p>
					</div>
				</div>
				<div class="blog-footer">
					<ul>
						<li><a href="/user/'.$Row['added'].'">'.$Row['added'].'</a></li>
						<li><a href="#">'.$Row['date'].'</a></li>
						<li><a href="#">'.($Row['read'] + 1).'</a></li>
					</ul>
				</div>
			';
			?>
	    </div>
	</div>
	<footer>
		<? echo LOWERMENU; ?>
		<p><? echo cright; ?></p>
	</footer>
	<script type="text/javascript" src="/templates/Default/js/main.js"></script>
</body>
</html>