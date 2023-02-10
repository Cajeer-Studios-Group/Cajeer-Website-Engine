<? include_once 'speedbar.php'; ULogin(0); ?>
<!DOCTYPE html>
<html>
<head>
	<? HEAD(1, LANGSITE74); ?>
	<link rel="stylesheet" href="/templates/Default/css/engine.css">
	<link rel="stylesheet" href="/templates/Default/css/main.css">
</head>
<body>
	<header>
		<? echo TOPMENU; MessageShow(); ?>
	</header>
	<div class="main">
		<form class="form" method="POST" action="account/lostpassword/">
			<p><input type="text" name="login" class="feedback-input" placeholder="<? echo LANGSITE92; ?>" id="login" maxlength="16" pattern="[A-Za-z-0-9]{3,16}" title="<? echo LANGSITE93; ?>" required></p>
			<p><input type="email" name="email" class="feedback-input" placeholder="<? echo LANGSITE20; ?>" id="email" required></p>
			<!--<div class="capblock"><img src="/engine/modules/antibot/antibot.php class="capimg""></div> 
			<p><input type="text" name="antibot" class="feedback-input" placeholder="Antibot" id="antibot" maxlength="6" pattern="[0-9]{6}" title="No more and no less than six digits." required></p>-->
			<input type="submit" value="<? echo LANGSITE98; ?>" class="button-submit" name="enter">
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