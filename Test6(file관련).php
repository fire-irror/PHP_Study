<?php
//저장 == 쓰는것
$filename = "data.txt";
// $fp=fopen($filename,"a");

// $str = "Mary had a dog";
// $str1 = "Tom had a cat";
// fwrite($fp, $str1);

// fclose($fp);

// echo "저장되었습니다"


//파일 읽기
$fp=fopen($filename,"r");

while(!feof($fp)){   //end of file
  //echo fgetc($fp);  //한글자씩 읽어준다ㅑ
  echo fgets($fp);  //한 문자열 읽어준다
}
?>