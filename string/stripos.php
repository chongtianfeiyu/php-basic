<?php
include '../init.php';
?>
int stripos ( string $haystack , string $needle [, int $offset = 0 ] )
strpos的不区分大小写版本
<?php
head('stripos');
$str = 'sadsa Ab abc de fe fe ab cde ';
$needle = 'ab';
var_dump(stripos($str, $needle));
var_dump(strpos($str, $needle,7));
var_dump(strpos($str, $needle, -1));
tail();
?>