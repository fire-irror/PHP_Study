<style>
h1{
  color:red;
}

</style>



<?php
echo "<h1>1. strlen</h1>";
$str = "php is a popular scripting language";
echo strlen($str);
echo "<br>";
?>

<?php
$var1 = "hello";
$var2="Hello";
$result=strcmp($var1,$var2);
echo "result".$result;
echo "<br>";
?>

<?php
$str="abcdef";
$find="c";
$pos=strpos($str, $find);
echo "pos: ".$pos;
echo"<br>";
?>

<?php
$str="Mary ahd a Little lamb and she loved IT so MUCH";
$str1=strtolower($str);
echo"$str1";
echo "<br>";
$str2=strtoupper($str);
echo"$str2";
echo "<br>";
?>

<?php
$str="hellophpwelcome";
$result=substr($str,5,5); 

echo "$result"; //phpwe
echo "<br>";

$result2=substr($str,3);
echo $result2;

?>