<?php
include '../init.php';
?>
string stripslashes ( string $str )
反引用一个引用字符串。 
<?php
head('stripslashes');
$str = "Is your name O\'reilly?";
echo stripslashes($str);
tail();
?>
