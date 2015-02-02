<?php
include '../init.php';
?>
mixed strpos($haystack, $needle [, $offset = 0])
返回needle在haystack首次出现的位置
haystack 是主字符串
needle 如果不是字符串的话 ，那么它将转换为整形并被视为字符的顺序值
offset 偏移值
<?php
head('strpos');
$str = 'sadsa abc de fe fe ab cde ';
$needle = 'ab';
var_dump(strpos($str, $needle));
var_dump(strpos($str, $needle,7));
var_dump(strpos($str, $needle, -1));
tail();
?>