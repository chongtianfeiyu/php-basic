<?php
include '../init.php';
?>
int strlen ( string $string )
获取字符串的长度
<?php
head('strlen');
var_dump(strlen('123443545'));
var_dump(strlen(1));
var_dump(strlen([1,2,3 , 'zzc']));

tail();
?>