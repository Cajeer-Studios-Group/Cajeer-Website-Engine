<?php
if ($_SESSION['USER_ACTIVE'] != 1) {
define('LOWERMENU', '
<a href="/">Home</a> | 
<a href="/feedback/">Contacts</a> | 
<a href="/rules/">Rules</a> | 
<a href="/account/">Log In/Sign up</a> | 
<a href="/">Расширенный поиск</a> | 
<a href="/">Последние новости</a> | 
<a href="/">Последние комментарии</a> | 
<a href="/">Сайт системы</a> | 
<a href="/">Форум поддержки</a> | 
<a href="/">Статистика</a> | 
'.cright.' | 
Design by <a href="/">alexisc22</a></p>
');
} else {
define('LOWERMENU', '
<a href="/">Home</a> | 
<a href="/feedback/">Contacts</a> | 
<a href="/rules/">Rules</a> | 
<a href="/profile/">Profile</a> | 
<a href="/">Расширенный поиск</a> | 
<a href="/">Последние новости</a> | 
<a href="/">Последние комментарии</a> | 
<a href="/">Сайт системы</a> | 
<a href="/">Форум поддержки</a> | 
<a href="/">Статистика</a> | 
'.cright.' | 
Design by <a href="/">alexisc22</a></p>
');
}
define('LOWERMENUACTIVE', '
<a href="/">Home</a> | 
<a href="/feedback/">Contacts</a> | 
<a href="/rules/">Rules</a> | 
<a href="/profile/">Profile</a> | 
<a href="/">Расширенный поиск</a> | 
<a href="/">Последние новости</a> | 
<a href="/">Последние комментарии</a> | 
<a href="/">Сайт системы</a> | 
<a href="/">Форум поддержки</a> | 
<a href="/">Статистика</a> | 
<a href="/profile/exit/">Exit</a> | 
'.cright.' | 
Design by <a href="/">alexisc22</a></p>
');
?>