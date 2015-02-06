<?php
include '../init.php';
?>
string strpbrk ( string $haystack , string $char_list )
strpbrk() 函数在 haystack 字符串中查找 char_list 中的字符。
<?php
head('strpbrk');
var_dump(strpbrk('thIs is a some thing', 'im'));
var_dump(strpbrk('thIs is a some thing', 'Im'));
var_dump(strpbrk('that be a some thing', 'im'));
tail();
?>
