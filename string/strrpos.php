<?php
include '../init.php';
?>
strrpos 计算指定字符串在目标字符串中最后一次出现的位置
int strrpos ( string $haystack , string $needle [, int $offset = 0 ] )
返回字符串 haystack 中 needle 最后一次出现的数字位置。注意 PHP4 中，needle 只能为单个字符。如果 needle 被指定为一个字符串，那么将仅使用第一个字符。
<?php
head('strrpos');
var_dump(strrpos('zzc tmac zzc tmac yao tmac lll', 'tmac'));
tail();
?>
 