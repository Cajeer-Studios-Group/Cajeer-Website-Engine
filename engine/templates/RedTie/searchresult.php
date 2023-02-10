<? include_once 'speedbar.php'; ?>
<?php
if (!in_array($Module, array('news', 'files'))) MessageSend(1, LANGSYS36, '/');
if (!$_SESSION['SEARCH']) MessageSend(1, LANGSYS37, '/');
?>
<!DOCTYPE html>
<html>
<head>
	<? HEAD(1, LANGSITE51); ?>
	<link rel="stylesheet" href="/templates/Default/css/engine.css">
	<link rel="stylesheet" href="/templates/Default/css/main.css">
</head>
<body>
	<header>
		<? echo TOPMENUACTIVE; MessageShow(); ?>
	</header>
	<div class="main">
		<div class="blog-container">
			<?php
			$Count = mysqli_fetch_row(mysqli_query($CONNECT, "SELECT COUNT(`id`) FROM `$Module` WHERE `name` LIKE '%$_SESSION[SEARCH]%'"));
			if ($Count[0]) {
				if (!$Param['page']) {
					$Param['page'] = 1;
					$Result = mysqli_query($CONNECT, "SELECT `id`, `name`, `shorttext`, `added`, `date` FROM `$Module` WHERE `name` LIKE '%$_SESSION[SEARCH]%' ORDER BY `id` DESC LIMIT 0, 5");
				} else {
					$Start = ($Param['page'] - 1) * 5;
					$Result = mysqli_query($CONNECT, str_replace('START', $Start, "SELECT `id`, `name`, `shorttext`, `added`, `date` FROM `$Module` WHERE `name` LIKE '%$_SESSION[SEARCH]%' ORDER BY `id` DESC LIMIT START, 5"));
				}
				PageSelector("/searchresult/$Module/page/", $Param['page'], $Count);
				while ($Row = mysqli_fetch_assoc($Result)) {
					echo '
					<div class="blog-body">
					    <div class="blog-title">
							<h1><a href="/'.$Module.'/material/id/'.$Row['id'].'">'.$Row['name'].'</a></h1>
						</div>
						<div class="blog-text">
							<p>'.$Row['shorttext'].'</p>
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
		    } else MessageSend(1, LANGSYS38, '/search/');
			?>
		</div>
	</div>
	<footer>
		<? echo LOWERMENUACTIVE; ?>
		<p><? echo cright; ?></p>
	</footer>
	<script type="text/javascript" src="/templates/Default/js/main.js"></script>
</body>
</html>