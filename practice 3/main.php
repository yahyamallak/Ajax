<?php

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$op = $_POST['op'];


if($op == "add"){
    echo $num1 + $num2;
}elseif($op == "sub"){
    echo $num1 - $num2;
}elseif($op == "mul"){
    echo $num1 * $num2;
}elseif($op == "div"){
    echo $num1 / $num2;
}