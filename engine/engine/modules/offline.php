<?php
$ouws = mysqli_query($CONNECT, 'SELECT `user` FROM `online`');
$vws = 0;
$uws = 0;
while ($ows = mysqli_fetch_assoc($ouws)) {
	if ($ows['user'] == 'quest') $vws += 1;
	else {
		$uws += 1;
		$uwslist .= '<a href="/user/'.$ows['user'].'">'.$ows['user'].'</a>, ';
	}
	if ($uwslist) $uwslist = substr($uwslist, 0, -2);
}
?>