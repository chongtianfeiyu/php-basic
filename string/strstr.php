<?php
include '../init.php';
?>
string strstr ( string $haystack , mixed $needle [, bool $before_needle = false ] )
返回 haystack 字符串从 needle 第一次出现的位置开始到 haystack 结尾的字符串。 
<?php
head('strstr');
$str = 'zzc@emCail.com';
var_dump(strstr($str, 'C'));
var_dump(strstr($str, 'C', true));
tail();
?>