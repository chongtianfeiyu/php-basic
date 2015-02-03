<?php
include '../init.php';
?>
string strtr ( string $str , string $from , string $to )

string strtr ( string $str , array $replace_pairs )

该函数返回 str 的一个副本，并将在 from 中指定的字符转换为 to 中相应的字符。 比如， $from[$n]中每次的出现都会被替换为 $to[$n]，其中 $n 是两个参数都有效的位移(offset)。 

如果 from 与 to 长度不相等，那么多余的字符部分将被忽略。 str 的长度将会和返回的值一样。 
<?php
head('strtr');
$str = 'zzc play dota2';
var_dump(strtr($str, 'zzc', 'mac'));
var_dump(strtr($str, ['zzc'=>'mac', 'dota2'=>'lolv2']));
tail();
?>