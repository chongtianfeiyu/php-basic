<?php
include '../init.php';
?>
int strncmp ( string $str1 , string $str2 , int $len )
该函数与 strcmp() 类似，不同之处在于你可以指定两个字符串比较时使用的长度（即最大比较长度）。 
注意该比较区分大小写。 
<?php
head('strncmp');
var_dump(strncmp('abc', 'abcd', 3));
tail();
?>
