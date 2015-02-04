<?php
include '../init.php';
?>
int strncasecmp ( string $str1 , string $str2 , int $len )
该函数与 <a href='strcasecmp.php'>strcasecmp</a> 类似，不同之处在于你可以指定两个字符串比较时使用的长度（即最大比较长度）。
<?php
head('strncasecmp');
$string = "true";
if(strncasecmp($string, "Trudeau", 4)) { print "True"; } else { print "False"; } 
tail();
?>

