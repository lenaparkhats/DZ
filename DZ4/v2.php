<?php
namespace Lena_parkhats;
class counter_bas{                      //абстрактный класс
    public $km;
    public $min;
    public $hour;
    public $age;
    public $cena_km;
    public $cena_min;
    public $cena;
    public $name;
    function count($km, $min) {
        $cena_km = $km;
        $cena_min = $min;
        $cena = $cena_km + $cena_min;
    }

    public function print_name ($km , $min, $age){
        echo "5564";
        if ($this->name === "базовый"){
            echo "k.jhb";
            if ($this->age >= 18 and $this->age <= 21){
                echo "Тариф базовый (" . $this->km . " км, " . $this->min . " мин, ". " без доп. услуг, " . $this->age . " лет) = 
                (" . $this->km . " * 10 " . " + " . $this->min . " * 3) * 1.1 = "  . $this->cena . "руб; ".
                    "(" . $this->km . " км по 10 рублей плюс " . $this->min . " мининут по 3 рубля) 
                    * коэффициент молодежный 1.1 = " . $this->cena . "руб";
            } elseif ($this->age <= 18 or $this->age >= 65) {
                echo "Ваш возраст не подходит к сдачи автомабиля";
            } else {
                echo "Тариф базовый (" . $this->km . " км, " . $this->min . " мин, ". " без доп. услуг, " . $this->age . " лет) = 
                (" . $this->km . " * 10 " . " + " . $this->min . " * 3) = "  . $this->cena . "руб; " .
                    "(" . $this->km . " км по 10 рублей плюс " . $this->min . " мининут по 3 рубля) = " . $this->cena . "руб";
            }
        }
    }
}
class basic extends counter_bas {                    //базавый тариф
    public function bas_count ($km, $min, $age){
        $this->name = "базовый";
        $r = $this->print_name($km, $min, $age);
//        $cena_km = $this->cena_km = $km * 10;
//        $cena_min = $this->cena_min = $min * 3;
//        $this->cena = $cena_km + $cena_min;

        echo $r;

    }
}
$basic = new basic;
$basic ->print_name(30, 10, 10);
//$basic ->count_if(30, 10);
echo "<br>";

class hourly extends counter_bas {
    function hourly_count ($km, $min, $age){
        $min_h = $min / 60;
        $hourly = ceil($min_h);
        $cena_km = $this->cena_km = $km * 0;
        $cena_min = $this->cena_min = $hourly * 200;
        $cena_b = $this->cena = $cena_km + $cena_min;
    }
//    public function hou_if_count($age){
//        $r = $this->count_if($this->cena,$age);
//    }
}
//$hourly = new hourly;
//$hourly ->hourly_count(30, 70, 24);
//$hourly ->hou_if_count(20);