<? include_once 'speedbar.php'; include_once ENGINE_DIR.'/modules/search.php'; ?>
<?php
if ($Module == 'category' and $Param['id'] != 1 and $Param['id'] != 2 and $Param['id'] != 3 and $Param['id'] != 4) MessageSend(1, LANGSYS31, '/news/');
$Param['page'] += 0;
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
			if (!$Module or $Module == 'main') {
				$Param1 = 'SELECT `id`, `name`, `added`, `shorttext`, `date` FROM `news` ORDER BY `id` DESC LIMIT 0, 5';
				$Param2 = 'SELECT `id`, `name`, `added`, `shorttext`, `date` FROM `news` ORDER BY `id` DESC LIMIT START, 5';
				$Param3 = 'SELECT COUNT(`id`) FROM `news`';
				$Param4 = '/news/main/page/';
			} else if ($Module == 'category') {
				$Param1 = 'SELECT `id`, `name`, `added`, `shorttext`, `date` FROM `news` WHERE `cat` = '.$Param['id'].' ORDER BY `id` DESC LIMIT 0, 5';
				$Param2 = 'SELECT `id`, `name`, `added`, `shorttext`, `date` FROM `news` WHERE `cat` = '.$Param['id'].' ORDER BY `id` DESC LIMIT START, 5';
				$Param3 = 'SELECT COUNT(`id`) FROM `news` WHERE `cat` = '.$Param['id'];
				$Param4 = '/news/category/id/'.$Param['id'].'/page/';
			}
			$Count = mysqli_fetch_row(mysqli_query($CONNECT, $Param3));
			if (!$Param['page']) {
				$Param['page'] = 1;
				$Result = mysqli_query($CONNECT, $Param1);
			} else {
				$Start = ($Param['page'] - 1) * 5;
				$Result = mysqli_query($CONNECT, str_replace('START', $Start, $Param2));
			}
			PageSelector($Param4, $Param['page'], $Count);
			while ($Row = mysqli_fetch_assoc($Result)) {
				echo '
				<div class="blog-body">
					<div class="blog-title">
						<h1><a href="/news/material/id/'.$Row['id'].'">'.$Row['name'].'</a></h1>
					</div>
					<div class="blog-text">
						<p>'.$Row['shorttext'].'</p>
					</div>
					<div class="blog-tags">
						<ul>
							<li><a href="/news/category/id/1">'.LANGSITE30.'</a></li>
							<li><a href="/news/category/id/2">'.LANGSITE31.'</a></li>
							<li><a href="/news/category/id/3">'.LANGSITE32.'</a></li>
							<li><a href="/news/category/id/4">'.LANGSITE33.'</a></li>
						</ul>
				    </div>
				</div>
				<div class="blog-footer">
					<ul>
						<li><a href="/user/'.$Row['added'].'">'.$Row['added'].'</a></li>
						<li><a href="#">'.$Row['date'].'</a></li>
					</ul>
				</div>
				';
			}
			?>
		</div>
		<? SearchForm(); ?>
	</div>
	<footer>
		<? echo LOWERMENU; ?>
		<p><? echo cright; ?></p>
	</footer>
	<script type="text/javascript" src="/templates/Default/js/main.js"></script>
</body>
</html>