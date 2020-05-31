<?
$g = 0;
$l = 0;
$textlog="";
$textpas="";
$textlg = file_get_contents("login.txt");
$textps = file_get_contents("password.txt");

while ($g < strlen($textlg)-1){
while ($textlg[$g] !="\n"){
$textlog .= $textlg[$g]; $g++;
}
while ($textps[$l] !="\n"){
$textpas .= $textps[$l]; $l++;
}
if($_POST['login'] == $textlog && $_POST['password'] == $textpas) {
echo "excellent";
break;
}
$textlog = "";
$textpas="";
$g++;$l++;
}
if(!($_POST['login'] == $textlog && $_POST['password'] == $textpas)){
echo "not excellent. 
not logged in!";
}
?>