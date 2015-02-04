<?php
include '../init.php';
?>
int strnatcasecmp ( string $str1 , string $str2 )
该函数实现了以人类习惯对数字型字符串进行排序的比较算法。
<?php
head('strnatcasecmp');
var_dump(strnatcasecmp('abc', 'def'));
var_dump(strnatcasecmp('Abc', 'bBC'));
tail();
?>
