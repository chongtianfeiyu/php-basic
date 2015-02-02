<?php
include '../init.php';
?>
mixed str_replace($search, $replace, $subject [&$count])
该函数返回一个字符串或者数组。该字符串或数组将subject中全部的search全部替换为replace的结果
<?php
head('str_replace');
$str = 'aaa bbb ccc ddd aaa AAAA aaAaaa aa ';
$search = 'aaa';
$replace = 'BBB';

var_dump($str);
var_dump(str_replace($search, $replace, $str));

tail();
?>