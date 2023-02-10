<? include_once 'speedbar.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<? HEAD(1, $Module); ?>
	<link rel="stylesheet" href="/templates/Default/css/engine.css">
	<link rel="stylesheet" href="/templates/Default/css/main.css">
</head>
<body>
	<header>
		<? echo TOPMENUACTIVE; MessageShow(); ?>
	</header>
	<div class="main">
		<div class="profileone">
			<?php
			if (!$Param['id']) {
				$Row = mysqli_fetch_assoc(mysqli_query($CONNECT, "SELECT `uid`, `login`, `email`, `pnumber`, `password`, `name`, `surname`, `gender`, `dob`, `ncity`, `city`, `bio`, `company`, `teams`, `languages`, `planguages`, `website`, `projects`, `country` FROM `users` WHERE `login` = '$Module'"));
			} else {
				$Row = mysqli_fetch_assoc(mysqli_query($CONNECT, "SELECT `uid`, `login`, `email`, `pnumber`, `password`, `name`, `surname`, `gender`, `dob`, `ncity`, `city`, `bio`, `company`, `teams`, `languages`, `planguages`, `website`, `projects`, `country` FROM `users` WHERE `uid` = '$Param[id]'"));
			}
			echo '
			<br>ID: '.$Row['uid'].'
			<br>Nickname: '.$Row['login'].'
			<br>Email: '.$Row['email'].'
			<br>Phone: '.$Row['pnumber'].'
			<br>Name: '.$Row['name'].'
			<br>Surname: '.$Row['surname'].'
			<br>Gender: '.UGen($Row['gender']).'
			<br>Birthday: '.$Row['dob'].'
			<br>City: '.UCity($Row['city']).'
			<br>Bio: '.$Row['bio'].'
			<br>Company: '.$Row['company'].'
			<br>Teams: '.$Row['teams'].'
			<br>Languages: '.ULang($Row['languages']).'
			<br>Programming languages: '.UPLang($Row['planguages']).'
			<br>Website: <a href="https://'.$Row['website'].'">'.$Row['website'].'</a>
			<br>Projects: '.$Row['projects'].'
			<br>Country: '.UCountry($Row['country']);
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