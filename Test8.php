<style>
h1{
  color:red;
}

</style>

<?php
$file = "counter.txt";
$count =0;

if(file_exists($file)){
  $count = file_get_contents($file);
}

$count ++;

file_put_contents($file, $count);

echo "<h1>총 방문 횟수", $count ,"번 입니다.</h1>"
?>