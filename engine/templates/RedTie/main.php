<? include_once 'speedbar.php'; ?>
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
<!DOCTYPE html>
<html>
<head>
    <? HEAD(0); ?>
    <link rel="stylesheet" href="/templates/RedTie/css/styles.css" type="text/css" />
</head>
<body>
    <? echo MessageShow(); ?>
    <div class="main">
        <div id="page" align="center">
            <div id="content" style="width:800px">
                <div id="logo">
                    <div style="margin-top:70px" class="whitetitle">CWE</div>
                </div>
                <div id="topheader">
                    <div align="left" class="bodytext">
                        <br />
                        <strong>Данный сайт является</strong><br />
                        демо версией Cajeer WE<br />
                        Авторизация:<br />
                        Login: admin<br />
                        Password: admin
                    </div>
                    <div id="toplinks" class="smallgraytext">
                        Visitors: <? echo $vws; ?> | User: <? echo $uws; ?>
                    </div>
                </div>
                <? echo TOPMENU; echo TOPMENUSUB; ?>
                <div id="contenttext">
                    <div style="padding:10px">
                        <span class="titletext">Welcome to Cajeer Website Engine!</span>
                    </div>
                    <div class="bodytext" style="padding:12px;" align="justify">
                        <strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae similique iusto, recusandae vel soluta quam ex sunt nostrum laborum quod fuga! Quibusdam doloremque aliquam natus.</strong><br />
                        <br />
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur id est tincidunt nisl pellentesque tincidunt. Donec in mauris. Mauris neque magna, consectetuer id, malesuada vitae, tincidunt sit amet, mi. Aliquam lacinia. Suspendisse potenti. Proin justo lorem, rutrum ac, facilisis in, malesuada sed, ligula. Mauris lobortis lacus at nibh. Aenean vitae odio vel odio placerat hendrerit. Suspendisse lacus lacus, tempor id, pharetra eget, ornare sit amet, pede. Sed aliquet, justo ac elementum pretium, arcu leo placerat est, a luctus purus diam eget arcu. Nam augue diam, mollis a, scelerisque eget, aliquet condimentum, pede. Vestibulum tristique lectus sed augue.<br /><br />
                        Aenean ut mauris luctus mauris interdum convallis. Nunc vestibulum sodales nulla. Nulla vitae massa. Maecenas vel tellus vitae elit mattis adipiscing. In pulvinar felis sed est. Mauris non mi. Duis ultrices dolor ut orci. Quisque lacinia arcu et purus. Sed euismod metus nec augue. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc dolor leo, aliquam a, placerat sit amet, accumsan eget, dolor. Sed lacinia augue in magna. Fusce sed enim. Vestibulum et mauris. Phasellus in lectus. Pellentesque eu elit in dolor ullamcorper sodales. Vestibulum interdum ornare ligula. Mauris felis odio, rhoncus sed, adipiscing fermentum, tincidunt eu, metus. Suspendisse viverra rhoncus purus.
                    </div>
                </div>
                <div id="leftpanel">
                    <div align="justify" class="graypanel">
                        <span class="smalltitle">News</span><br /><br />
                        <?php
                        if ($Page == 'index' and $Module == 'index') {
                            $Param1 = 'SELECT `name`, `shorttext` FROM `news` WHERE `cat` = 1 ORDER BY `id` DESC LIMIT 0, 10';
                        }
                        $Query = mysqli_query($CONNECT, $Param1);
                        while ($Row = mysqli_fetch_assoc($Query)) {
                            echo '
                            <span class="smallredtext"><a href="/news/">'.$Row['name'].'</a></span><br />
                            <span class="bodytext">'.$Row['shorttext'].'</span><br />
                            <a href="#" class="smallgraytext">More...</a><br /><br />
                            ';
                        }
                        ?>
                    </div>
                </div>
                <div id="footer" class="smallgraytext">
                    <? echo LOWERMENU; ?>
                    <p>Users: <? echo $uwslist; ?>.</p>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="/templates/RedTie/js/main.js"></script>
</body>
</html>