<? include_once 'speedbar.php'; include_once ENGINE_DIR.'/modules/search.php'; ?>
<?php
if ($_POST['enter']) {
	$_SESSION['SEARCH'] = FormChars($_POST['text']);
	exit(header('Location: /searchresult/'.$Module));
}
?>
<!DOCTYPE html>
<html>
<head>
	<? HEAD(1, LANGSITE50); ?>
	<link rel="stylesheet" href="/templates/Default/css/engine.css">
	<link rel="stylesheet" href="/templates/Default/css/main.css">
</head>
<body>
	<header>
		<? echo TOPMENUACTIVE; MessageShow(); ?>
	</header>
	<div class="main">
		<? SearchForm(); ?>
	</div>
	<footer>
		<? echo LOWERMENUACTIVE; ?>
		<p><? echo cright; ?></p>
	</footer>
	<script type="text/javascript" src="/templates/Default/js/main.js"></script>
</body>
</html>