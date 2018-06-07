<?php

function task1($arr, $x){
    echo "Задание 1 <br> ";
    if ($x == false) {
        foreach ($arr as $ind) {
            echo '<p>' . $ind . '</p>';
        }

    } else{
        $u = implode("", $arr);
        return $u;
    }
};

echo task1(['aaaa', 'ddddd', 'ccccc'] , true);

echo "<br> <br>";

function task2 ($str, $num){
    echo "Задание 2 <br>";
    $x = func_get_args();
    echo implode("+", $x). " = ";
    echo array_sum($x);
    echo "<br>";
}
task2('+', 1, 2, 3, 4, 5);

echo "<br> <br>";

function task3 ($x, $y = 0){
    echo "Задание 3 <br>";
    if($y != 0) {
        for ($i = 1; $i <= $x; $i++) {
            echo "<table><tr>";
            for ($u = 1; $u <= $y; $u++) {
                echo "<td>" . $u * $i . " " . "</td>";
            }
            echo "</tr>";
        }
    } else {
        echo "Введите второй аргумент";
    }
}
task3(8, 8);
