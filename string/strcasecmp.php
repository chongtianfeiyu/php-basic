<?php
include '../init.php';
?>
int strcasecmp ( string $str1 , string $str2 )
二进制安全比较字符串（不区分大小写）。 
<?php
head('strcasecmp');
var_dump(strcasecmp('hello', 'Hello'));
tail();
?>
