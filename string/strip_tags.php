<?php
include '../init.php';
?>
string strip_tags ( string $str [, string $allowable_tags ] )
该函数尝试返回给定的字符串 str 去除空字符、HTML 和 PHP 标记后的结果。它使用与函数 fgetss() 一样的机制去除标记。 
<?php
head('strip_tags');
$str = "<?php <br /> <h1> zzc </h1>    zzc";
var_dump(strip_tags($str));
tail();
?>