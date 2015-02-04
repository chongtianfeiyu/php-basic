<?php
include '../init.php';
?>
int strnatcmp ( string $str1 , string $str2 )
该函数实现了以人类习惯对数字型字符串进行排序的比较算法，这就是"自然顺序"。注意该比较区分大小写。 
<?php
head('strnatcmp');
var_dump(strnatcmp('img.png', 'img1.png'));
tail();
?>
