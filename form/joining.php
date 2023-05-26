<?php
// 사용자가 입력한 id와 pass를 가져옴
// $_GET   $_POST
$id=$_POST["user_id"];  // $id:사용자가 입력한 id값
$pass = $_POST["user_pass"];
$name = $_POST["user_name"];
$email = $_POST["user_email"];
$address = $_POST["address"];
$text = $_POST["txt"];


echo "id : ".$id."<br/>";
echo "password : ".$pass."<br/>";
echo "name : ".$name."<br/>";
echo "email : ".$email."<br/>";
echo "address : ".$address."<br/>";
echo "text : ".$text."<br/>";

?>