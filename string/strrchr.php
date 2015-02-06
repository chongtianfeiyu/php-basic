<?php
include '../init.php';
?>
string strrchr ( string $haystack , mixed $needle )
该函数返回 haystack 字符串中的一部分，这部分以 needle 的最后出现位置开始，直到 haystack 末尾。 
<?php
head('strrchr');
var_dump(strrchr('tmac play basketball', 'c play'));
tail();
?>
