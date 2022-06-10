<?php
$cookie_name = $_GET['name'];
$cookie_value = $_GET['value'];
$action = $_GET['action'];

if ($action == 'set') {
    setcookie($cookie_name, $cookie_value, time() + 86400, '/');
}
if ($action == 'get') {
    if ($_COOKIE[$cookie_name])
        echo $_COOKIE[$cookie_name] . "\n";
}
if ($action == 'del') {
    setcookie($cookie_name, '', time() - 86400, '/');
}
?>
