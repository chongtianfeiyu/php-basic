<?php
include '../init.php';
?>
string stristr ( string $haystack , mixed $needle [, bool $before_needle = false ] )
返回 haystack 字符串从 needle 第一次出现的位置开始到结尾的字符串。 
stristr — strstr() 函数的忽略大小写版本
<?php
head('stristr');
$str = 'zzC@email.com';
var_dump(stristr($str, 'C'));
var_dump(stristr($str, 'C', true));
tail();
?>