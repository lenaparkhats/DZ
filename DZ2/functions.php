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
            $zero = array_slice($len, 1);
            for($i = 1; $i < count($zero); $i++){
                if ($zero[$i] === 0){
                    echo "Делить на ноль нельзя";
                }else{
                    for($i = 1; $i < count($zero); $i++){
                        $t /= $zero[$i];
                    }
                    echo implode(" / ", $len);
                    echo "= $t";
                }
            }
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

function task4 (){
    $date = date("d.m.Y H:i");
    echo $date . '<br>';
    $date2 = strtotime('24.02.2016 00:00:00');
    echo date('d.m.Y H:i:s', $date2);
}

function task5 (){
    $str = 'Две бутылки лимонада';
    $str2 = 'Карл у Клары украл Кораллы';
    $x = str_replace('Две', 'Три', $str);
    echo $x . "<br>";
    for ($i = 0; $i <= strlen($str2); $i++){
        $pos = str_replace('К', '', $str2);
    }
    echo $pos;
}

function task6(){
    $file = fopen(__DIR__ . "text.txt", "w+");
    fwrite ($file, "Hello again!");
    $print = file_get_contents(__DIR__.'text.txt');
    print_r($print);
}