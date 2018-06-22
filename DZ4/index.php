<?php
namespace Lena_parkhats;

class counter_bas{                      //абстрактный класс
    protected $km;
    protected $min;
    protected $hour;
    protected $age;
    protected $cena_km;
    protected $cena_min;
    protected $cena;

    function count($km, $min) {
        $cena_km = $km;
        $cena_min = $min;
        $cena = $cena_km + $cena_min;
        return $cena;
    }
    function count_if($cena ,$age){
        if ($age <= 18 or $age >= 65){
            echo "Ваш возраст не подходит к сдачи автомабиля";
        } elseif ($age >= 18 and $age <= 21){
            echo "Стоимость: " . $cena = ($cena * 0.1) + $cena . " руб";
        } else{
            echo "Стоимость " . $cena . " руб";
        }
    }
}
class basic extends counter_bas {                    //базавый тариф
    public function bas_count ($km, $min){
//        $r = $this->count($km, $min, $age);
//        echo $r;
//        $this->km = $km;
//        $this->min = $min;
//        $this->min = $age;
        $cena_km = $this->cena_km = $km * 10;
        $cena_min = $this->cena_min = $min * 3;
        $cena_b = $this->cena = $cena_km + $cena_min +10;
        echo $cena_km;
        echo $cena_min;
        echo $cena_b;
    }

    public function bas_if_count($age){
        $r = $this->count_if($this->cena_b,$age);
        $this->cena = $this->cena_b;
        echo $r;
    }
}
$basic = new basic;
$basic ->bas_count(20, 10);
$basic ->bas_if_count(17);





class hourly extends counter_bas {
    function hourly_count ($km, $min, $age){
        $r = $this->count($km, $min, $age);
//        echo $this->cena_km;

    }

}