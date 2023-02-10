<? include_once 'speedbar.php'; ULogin(1); ?>
<!DOCTYPE html>
<html>
<head>
	<? HEAD(1, LANGSITE80); ?>
	<link rel="stylesheet" href="/templates/Default/css/engine.css">
	<link rel="stylesheet" href="/templates/Default/css/main.css">
</head>
<body>
	<header>
		<? echo TOPMENUACTIVE; MessageShow(); ?>
		<?php
		$Result = mysqli_query($CONNECT, "SELECT `date`, `text` FROM `notice` WHERE `uid` = $_SESSION[USER_ID] AND `status` = 0");
		while ($Row = mysqli_fetch_assoc($Result)) {
			echo '<div class="MessageBlock">['.$Row['date'].'] <b>'.LANGSYS39.':</b> '.$Row['text'].'</div>';
		}
		mysqli_query($CONNECT, "UPDATE `notice` SET `status` = 1 WHERE `uid` = $_SESSION[USER_ID] AND `status` = 0");
		mysqli_query($CONNECT, "DELETE FROM `notice` WHERE `date` < SUBTIME(NOW(), 30 0:0:0)");
		?>
	</header>
	<div class="main">
		<div class="profileone">
			<?php
			echo '
			<br>ID: '.$_SESSION['USER_UID'].'
			<br>Nickname: '.$_SESSION['USER_LOGIN'].'
			<br>Email: '.$_SESSION['USER_EMAIL'].'
			<br>Phone: '.$_SESSION['USER_PNUM'].'
			<br>Name: '.$_SESSION['USER_NAME'].'
			<br>Surname: '.$_SESSION['USER_SURNAME'].'
			<br>Gender: '.UGen($_SESSION['USER_GEN']).'
			<br>Birthday: '.$_SESSION['USER_DOB'].'
			<br>City: '.UCity($_SESSION['USER_CITY']).'
			<br>Bio: '.$_SESSION['USER_BIO'].'
			<br>Company: '.$_SESSION['USER_COM'].'
			<br>Teams: '.$_SESSION['USER_TEAM'].'
			<br>Languages: '.ULang($_SESSION['USER_LANG']).'
			<br>Programming languages: '.UPLang($_SESSION['USER_PLANG']).'
			<br>Website: <a href="https://'.$_SESSION['website'].'">'.$_SESSION['website'].'</a>
			<br>Projects: '.$_SESSION['USER_PROJECTS'].'
			<br>Country: '.UCountry($_SESSION['USER_COUNTRY']);
			?>
		</div>
		<div class="profiletwo">
			<?php
			echo '
			<form class="form" method="POST" action="/account/edit/">
			    <p><input type="text" name="login" class="feedback-input" placeholder="Nickname" id="login" maxlength="16" pattern="[A-Za-z-0-9]{3,16}" title="At least three and no more than sixteen Latin letters or numbers." value="'.$_SESSION['USER_LOGIN'].'" required></p>
			    <p><input type="email" name="email" class="feedback-input" placeholder="Email" id="email" value="'.$_SESSION['USER_EMAIL'].'"></p>
			    <p><input type="tel" name="tel" class="feedback-input" placeholder="Phone" id="tel" value="'.$_SESSION['USER_PNUM'].'"></p>
				<p><input type="text" name="name" class="feedback-input" placeholder="Name" id="name" maxlength="16" pattern="[A-Za-z]{3,16}" title="At least three and no more than sixteen Latin letters." value="'.$_SESSION['USER_NAME'].'" required></p>
				<p><input type="text" name="surname" class="feedback-input" placeholder="Surname" id="surname" maxlength="16" pattern="[A-Za-z]{3,16}" title="At least three and no more than sixteen Latin letters." value="'.$_SESSION['USER_SURNAME'].'"></p>
				<p><select size="1" name="gen">'.str_replace('>'.UGen($_SESSION['USER_GEN']), 'selected>'.UGen($_SESSION['USER_GEN']), '<option value="0">Not specified</option><option value="1">Male</option><option value="2">Woman</option>').'</select></p>
				<p><select size="1" name="city">'.str_replace('>'.UCity($_SESSION['USER_CITY']), 'selected>'.UCity($_SESSION['USER_CITY']), '<option value="0">Not specified</option>').'</select></p>
				<p><input type="text" name="bio" class="feedback-input" placeholder="Bio" id="bio" maxlength="100" pattern="[A-Za-z-0-9]{10,100}" title="Not less than ten and not more than one hundred Latin letters, symbols and numbers." value="'.$_SESSION['USER_BIO'].'"></p>
				<p><input type="text" name="company" class="feedback-input" placeholder="Company" id="company" maxlength="16" pattern="[A-Za-z]{3,16}" title="At least three and no more than sixteen Latin letters." value="'.$_SESSION['USER_COM'].'"></p>
				<p><input type="text" name="teams" class="feedback-input" placeholder="Teams" id="teams" maxlength="16" pattern="[A-Za-z]{3,16}" title="At least three and no more than sixteen Latin letters." value="'.$_SESSION['USER_TEAM'].'"></p>
				<p><select size="1" name="lang">'.str_replace('>'.ULang($_SESSION['USER_LANG']), 'selected>'.ULang($_SESSION['USER_LANG']), '<option value="0">Not specified</option>').'</select></p>
				<p><select size="1" name="plang">'.str_replace('>'.UPLang($_SESSION['USER_PLANG']), 'selected>'.UPLang($_SESSION['USER_PLANG']), '<option value="0">Not specified</option>').'</select></p>
				<p><input type="url" name="wsite" class="feedback-input" placeholder="Website" id="wsite" maxlength="16" pattern="[A-Za-z]{3,16}" title="At least three and no more than sixteen Latin letters." value="'.$_SESSION['USER_WSITE'].'"></p>
				<p><input type="text" name="projects" class="feedback-input" placeholder="Projects" id="projects" maxlength="100" pattern="[A-Za-z-0-9]{10,100}" title="Not less than ten and not more than one hundred Latin letters, symbols and numbers." value="'.$_SESSION['USER_PROJECTS'].'"></p>
				<p><select size="1" name="country">'.str_replace('>'.UCountry($_SESSION['USER_COUNTRY']), 'selected>'.UCountry($_SESSION['USER_COUNTRY']), '<option value="0">Not specified</option>').'</select></p>
				<p><input type="password" name="opassword" class="feedback-input" placeholder="Old password" id="password" maxlength="64" pattern="[A-Za-z-0-9]{8,64}" title="Not less than eight and not more than sixty-four Latin characters or digits."></p>
				<p><input type="password" name="npassword" class="feedback-input" placeholder="New password" id="password" maxlength="64" pattern="[A-Za-z-0-9]{8,64}" title="Not less than eight and not more than sixty-four Latin characters or digits."></p>
				<!--<div class="capblock"><img src="/engine/modules/antibot/antibot.php class="capimg""></div> 
				<p><input type="text" name="antibot" class="feedback-input" placeholder="Antibot" id="antibot" maxlength="6" pattern="[0-9]{6}" title="No more and no less than six digits." required></p>-->
				<input type="submit" value="Save" class="button-submit" name="enter">
				<div class="ease"></div>
			</form>';
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