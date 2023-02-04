<?php
define('ROOT_DIR', dirname(__FILE__));
define('ENGINE_DIR', ROOT_DIR.'/engine');
include_once ENGINE_DIR.'/data/dbconfig.php';
$CONNECT = mysqli_connect(SERVER, USERNAME, PASSWORD, NAME);

mysqli_query($CONNECT, "DELETE FROM `chat` WHERE `time` < SUBTIME(NOW(), 30 0:0:0)");
mysqli_query($CONNECT, "DELETE FROM `online` WHERE `time` < SUBTIME(NOW(), 0 1:0:0)");
?>