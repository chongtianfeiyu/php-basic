<?php
include '../init.php';
?>
strspn — 计算字符串中全部字符都存在于指定字符集合中的第一段子串的长度。 
int strspn ( string $subject , string $mask [, int $start [, int $length ]] )
返回 subject 中全部字符仅存在于 mask 中的第一组连续字符(子字符串)的长度。 
如果省略了 start 和 length 参数，则检查整个 subject 字符串；如果指定了这两个参数，则效果等同于调用 strspn(substr($subject, $start, $length), $mask)（更多信息，参见 substr ）。
 
<?php
head('strspn');
var_dump(strspn('a4a2 is 123', '1234567890'));
tail();
?>