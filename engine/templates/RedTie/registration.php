<? include_once 'speedbar.php'; ULogin(0); ?>
<!DOCTYPE html>
<html>
<head>
	<? HEAD(1, LANGSITE78); ?>
	<link rel="stylesheet" href="/templates/Default/css/engine.css">
	<link rel="stylesheet" href="/templates/Default/css/main.css">
</head>
<body>
	<header>
		<? echo TOPMENU; MessageShow(); ?>
	</header>
	<div class="main">
		<form class="form" method="POST" action="/account/registration/">
			<p><input type="text" name="name" class="feedback-input" placeholder="<? echo LANGSITE19; ?>" id="name" maxlength="16" pattern="[A-Za-z]{3,16}" title="<? echo LANGSITE99; ?>" required></p>
			<p><input type="text" name="login" class="feedback-input" placeholder="<? echo LANGSITE92; ?>" id="login" maxlength="16" pattern="[A-Za-z-0-9]{3,16}" title="<? echo LANGSITE93; ?>" required></p>
			<p><input type="password" name="password" class="feedback-input" placeholder="<? echo LANGSITE94; ?>" id="password" maxlength="64" pattern="[A-Za-z-0-9]{8,64}" title="<? echo LANGSITE95; ?>" required></p>
			<!--<div class="capblock"><img src="/engine/modules/antibot/antibot.php class="capimg""></div> 
			<p><input type="text" name="antibot" class="feedback-input" placeholder="Antibot" id="antibot" maxlength="6" pattern="[0-9]{6}" title="No more and no less than six digits." required></p>-->
			<input type="submit" value="<? echo LANGSITE100; ?>" class="button-submit" name="enter">
			<div class="ease"></div>
		</form>
	</div>
	<footer>
		<? echo LOWERMENU; ?>
		<p><? echo cright; ?></p>
	</footer>
	<script type="text/javascript" src="/templates/Default/js/main.js"></script>
</body>
</html>