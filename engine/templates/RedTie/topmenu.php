<?php
if ($_SESSION['USER_ACTIVE'] != 1) {
define('TOPMENU', '
<div id="menu">
	<div align="right" class="smallwhitetext" style="padding:9px;">
		<a href="/">Home</a> | 
		<a href="/feedback/">Contacts</a> | 
		<a href="/rules/">Rules</a> | 
		<a href="/account/">Log In/Sign up</a>
	</div>
</div>
');
} else {
define('TOPMENU', '
<div id="menu">
	<div align="right" class="smallwhitetext" style="padding:9px;">
		<a href="/">Home</a> | 
		<a href="/feedback/">Contacts</a> | 
		<a href="/rules/">Rules</a> | 
		<a href="/profile/">Profile</a>
	</div>
</div>
');
}
define('TOPMENUACTIVE', '
<div id="menu">
	<div align="right" class="smallwhitetext" style="padding:9px;">
		<a href="/">Home</a> | 
		<a href="/profile/">Profile</a> | 
		<a href="/profile/messenger/">Messenger</a> | 
		<a href="/files/">Files</a> | 
		<a href="/profile/discussions/">Discussions</a> | 
		<a href="/profile/exit/">Exit</a>
	</div>
</div>
');
define('TOPMENUSUB', '
<div id="submenu">
    <div align="right" class="smallgraytext" style="padding:9px;">
        <a href="/news/category/id/1">О скрипте</a> | 
        <a href="/news/category/id/2">В мире</a> | 
        <a href="/news/category/id/3">Экономика</a> |  
        <a href="/news/category/id/4">Криминал</a> | 
        <a href="/news/category/id/5">Спорт</a> | 
        <a href="/news/category/id/6">Культура</a> | 
        <a href="/news/category/id/7">Инопресса</a>
    </div>
</div>
');
?>