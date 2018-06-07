<?php
$age = 19;

if ($age >= 18 and $age <= 65){
    echo 'Вам еще работать и работать';
} elseif ($age > 65){
    echo 'Вам пора на пенсию';
} elseif ($age < 18 and $age >= 1){
    echo 'Вам еще рано работать';
} else {
    echo 'Неизвестный возраст';
}
