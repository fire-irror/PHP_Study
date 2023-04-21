<?php
//저장 == 쓰는것
$filename = "data.txt";
$fp=fopen($filename,"a");

$str = "Mary had a dog";
$str1 = "Tom had a cat";
fwrite($fp, $str1);

fclose($fp);

echo "저장되었습니다"
?>