<?php
include '../init.php';
?>
str_ireplace str_replace的不区分大小写版本
<a href='str_replace.php'>str_replace</a>
<?php
head('str_ireplace');
$str = 'aaa bbb ccc ddd aaa AAAA aaAaaa aa ';
$search = 'aaa';
$replace = 'BBB';

var_dump($str);
var_dump(str_ireplace($search, $replace, $str));
tail();
?>
