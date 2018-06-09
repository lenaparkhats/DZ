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
    };
};


function task2 ($str, $num){
    echo "Задание 2 <br>";
    $x = func_get_args();
    $t = 1;
    switch ($str){
        case "+":
            $len = array_slice($x, 1);
            echo implode(" + ", $len);
            echo "= " . array_sum($len);
            echo "<br>";
            break;
        case "*":
            $len = array_slice($x, 1);
            echo implode(" * ", $len);
            for($i = 1; $i < count($x); $i++){
                $t *= $x[$i];
            }
            echo "= $t";
            break;
        case "-":
            $len = array_slice($x, 1);
            echo implode(" - ", $len);
            for($i = 1; $i < count($x); $i++){
                $t -= $x[$i];
            }
            echo "= $t";
            break;
        case "/":
            $len = array_slice($x, 1);
            echo implode(" / ", $len);
            for($i = 1; $i < count($x); $i++){
                $t /= $x[$i];
            }
            echo "= $t";
            break;
    };
};

function task3 ($x = 0, $y = 0){
    echo "Задание 3 <br>";

    if (is_int($x)){
        if (is_int($y)){
            if($x !=0 and $y != 0) {
                for ($i = 1; $i <= $x; $i++) {
                    echo "<table><tr>";
                    for ($u = 1; $u <= $y; $u++) {
                        echo "<td>" . $u * $i . " " . "</td>";
                    }
                    echo "</tr>";
                }
            } elseif ($x != 0 and $y == 0) {
                echo "Введите второй аргумент";
            } else{
                echo "Введите аргументы";
            }
        }else{
            echo "Второе число не целое. Введите целое число";
        }
    }else{
        echo "Первое число не целое. Введите целое число";
    }
}
