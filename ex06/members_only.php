<?php
$usr = $_SERVER['PHP_AUTH_USER'];
$password = $_SERVER['PHP_AUTH_PW'];
$image = base64_encode(file_get_contents("../img/42.png"));
if (($usr == 'zaz') && ($password == 'Ilovemylittleponey'))
{
    echo "<html><body>\nHello Zaz<br />\n<img src='data:image/png;base64,";
    echo $image;
    echo "'>\n</body></html>\n";
}
else
{
    header('WWW-Authenticate: Basic realm=\'\'Member area\'\'');
    header('HTTP/1.0 401 Unauthorized');
    echo "<html><body>That area is accessible for members only</body></html>     \n";
}
?>
