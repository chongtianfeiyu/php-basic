<?php
include '../init.php';
?>
int strripos ( string $haystack , string $needle [, int $offset = 0 ] )
以不区分大小写的方式查找指定字符串在目标字符串中最后一次出现的位置。与 strrpos() 不同，strripos() 不区分大小写。 
<?php
head('strripos');
var_dump(strripos('zzc tmac zzc tmac yao', 'tmac'));
var_dump(strripos('zzc tmac zzc tmac yao', 'tmac', 19));
tail();
?>
