<?php
include '../init.php';
?>
string strrev(string)
返回反转的字符串
<?php
head('strrev');
$str = 'abcdefg';
var_dump($str);
var_dump(strrev($str));
tail();
?>