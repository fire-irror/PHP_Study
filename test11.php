<?php
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    $start = min($num1, $num2); // 작은 수
    $end = max($num1, $num2); // 큰 수
    
    for ($i = $start; $i <= $end; $i++) {
        echo $i . " ";
    }
?>