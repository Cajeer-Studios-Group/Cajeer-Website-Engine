<?php 
function HEAD ($p1, $p2 = '') {
	if ($p1 == 0) $p1 = home_title;
	else if ($p1 != 0) $p1 = short_title.' | '.$p2;
	if ($_COOKIE['language'] == 'English') $lang = 'en';
	else if ($_COOKIE['language'] == 'French') $lang = 'fr';
	else if ($_COOKIE['language'] == 'German') $lang = 'de';
	else if ($_COOKIE['language'] == 'Italian') $lang = 'it';
	else if ($_COOKIE['language'] == 'Russian') $lang = 'ru';
	else if ($_COOKIE['language'] == 'Spanish') $lang = 'es';
	echo '<meta http-equiv="Content-Type" content="text/html; charset='.charset.'"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title>'.$p1.'</title><meta name="description" content="'.description.'"><meta name="keywords" content="'.keywords.'"><meta name="authors" content="'.authors.'"><meta name="copyright" content="'.copyright.'"><meta http-equiv="content-language" content="'.$lang.'"><link rel="stylesheet" href="/engine/skins/stylesheets/frame.css"><link rel="stylesheet" href="/engine/skins/stylesheets/styles.css"><link rel="stylesheet" href="/engine/skins/stylesheets/Rarog Kit/rarog.min.css"><script type="text/javascript" src="/engine/skins/javascripts/scripts.js"></script><script type="text/javascript" src="/engine/skins/javascripts/Rarog Kit/rarog.min.js"></script>'.metrics;
}
?>