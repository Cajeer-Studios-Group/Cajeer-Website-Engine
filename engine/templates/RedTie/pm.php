<? include_once 'speedbar.php'; ULogin(1); ?>
<!DOCTYPE html>
<html>
<head>
	<? HEAD(1, LANGSITE49); ?>
	<link rel="stylesheet" href="/templates/Default/css/engine.css">
	<link rel="stylesheet" href="/templates/Default/css/main.css">
</head>
<body>
	<header>
		<? echo TOPMENUACTIVE; MessageShow(); ?>
	</header>
	<div class="main">
		
	</div>
	<footer>
		<? echo LOWERMENUACTIVE; ?>
		<p><? echo cright; ?></p>
	</footer>
	<script type="text/javascript" src="/templates/Default/js/main.js"></script>
</body>
</html>