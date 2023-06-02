<?php
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

$start = min($num1, $num2); // 작은 수
$end = max($num1, $num2); // 큰 수

$sum = 0; // 합을 저장할 변수 초기화
$count = 0; // 개수를 저장할 변수 초기화

for ($i = $start; $i <= $end; $i++) {
    if ($i % 3 === 0 || $i % 5 === 0) {
        $sum += $i; // 3의 배수이거나 5의 배수인 수의 합 누적
        $count++; // 개수 증가
    }
}

$average = ($count > 0) ? $sum / $count : 0; // 평균 계산

echo "두 정수 사이의 3의 배수이거나 5의 배수인 수들의 합: {$sum}<br>";
echo "두 정수 사이의 3의 배수이거나 5의 배수인 수들의 평균: {$average}";
?>
