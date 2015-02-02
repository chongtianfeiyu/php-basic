<?php

include '../init.php';
?>
substr(string, start [, length])
返回字符串由start和length指定的子字符串
<?php
head('substr');
$string = 'abcdefhijk';
var_dump($string);
var_dump(substr($string, 0));
var_dump(substr($string, 0, 5));
var_dump(substr($string, 1));
var_dump(substr($string, 1, 5));
var_dump(substr($string , 20));
var_dump(substr($string, -1));
var_dump(substr($string, -1, 3));
var_dump(substr($string, -2));
var_dump(substr($string, -2, 3));
tail();
?>