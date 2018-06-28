<?php
namespace Lena_parkhats;
abstract class counter_bas{                      //абстрактный класс
    public $km;
    public $min;
    public $hour;
    public $age;
    public $hourly;
    public $cena_km;
    public $cena_min;
    public $cena;
    public $name;
    public $day;
    public $mess;
    public $mess2;
    public $mess3;
    public $mess4;
    function count($km, $min) {
        $cena_km = $km;
        $cena_min = $min;
        $cena = $cena_km + $cena_min;
    }
    public function print_name ($km , $min, $age)
    {
        if ($this->name === "базовый") {
            if ($age >= 18 and $age <= 21) {
                $this->cena = $this->cena * 1.1;

                $mess = "Тариф базовый (" . $km . " км, " . $min . " мин, ";
                $mess2 = $age . " лет) = (" . $km . " * 10 " . " + " . $min . " * 3 ";
                $mess3 = ") * 1.1 = " . $this->cena . "руб; " .
                    "(" . $km . " км по 10 рублей плюс " . $min . " мининут по 3 рубля ";
                $mess4 = ") 
                    * коэффициент молодежный 1.1 = " . $this->cena . "руб";

                echo $mess . " без доп. услуг, " . $mess2 . $mess3 . $mess4;
            } elseif ($age <= 18 or $age >= 65) {
                echo "Ваш возраст не подходит к сдачи автомабиля";
            } else {

                $mess = "Тариф базовый (" . $km . " км, " . $min . " мин, ";
                $mess2 = $age . " лет) = (" . $km . " * 10 " . " + " . $min . " * 3 ";
                $mess3 = ") = " . $this->cena . "руб; " .
                    "(" . $km . " км по 10 рублей плюс " . $min . " мининут по 3 рубля ";
                $mess4 = ") = " . $this->cena . "руб";

                echo $mess . " без доп. услуг, " . $mess2 . $mess3 . $mess4;
            }
        } elseif ($this->name === "почасовой") {
            if ($age >= 18 and $age <= 21) {
                $this->cena = $this->cena * 1.1;
                $mess = "Тариф почасовой(" . $km . " км, " . $min . " мин, ";
                $mess2 = $age . " лет) = (" . $km . " * 0 " . " + " . $this->hourly . " * 200 ";
                $mess3 = ") * 1.1 = " . $this->cena . "руб; " .
                    "(" . $km . " км по 0 рублей плюс " . $this->hourly . " мининут по 200 рубля ";
                $mess4 = ") 
                    * коэффициент молодежный 1.1 = " . $this->cena . "руб";
                echo $mess . " без доп. услуг, " . $mess2 . $mess3 . $mess4;

            } elseif ($age <= 18 or $age >= 65) {
                echo "Ваш возраст не подходит к сдачи автомабиля";
            } else {
                $mess = "Тариф почасовой (" . $km . " км, " . $min . " мин, ";
                $mess2 = $age . " лет) = (" . $km . " * 0 " . " + " . $this->hourly . " * 200 ";
                $mess3 = ") = " . $this->cena . "руб; " .
                    "(" . $km . " км по 0 рублей плюс " . $this->hourly . " мининут по 200 рубля ";
                $mess4 = ") = " . $this->cena . "руб";

                echo $mess . " без доп. услуг, " . $mess2 . $mess3 . $mess4;
            }
        } elseif ($this->name === "суточный") {
            if ($age >= 18 and $age <= 21) {
                $this->cena = $this->cena * 1.1;
                $mess = "Тариф суточный (" . $km . " км, " . $this->hour . " суток, " . $this->min. "часов, ";
                $mess2 = $age . " лет) = (" . $km . " * 1 " . " + " . $this->day. " * 1000 ";
                $mess3 = ") * 1.1 = " . $this->cena . "руб; " .
                    "(" . $km . " км по 1 рублей плюс " . $this->day . " дней по 1000 рубля ";
                $mess4 = ") 
                    * коэффициент молодежный 1.1 = " . $this->cena . "руб";

                echo $mess . " без доп. услуг, " . $mess2 . $mess3 . $mess4;

            } elseif ($age <= 18 or $age >= 65) {
                echo "Ваш возраст не подходит к сдачи автомабиля";
            } else {

                $mess = "Тариф суточный (" . $km . " км, " . $this->hour . " суток, " . $this->min. "часа, ";
                $mess2 = $age . " лет) = (" . $km . " * 1 " . " + " . $this->day . " * 100 ";
                $mess3 = ") = " . $this->cena . "руб; " .
                    "(" . $km . " км по 1 рублей плюс " . $this->day . " мининут по 1000 рубля ";
                $mess4 = ") = " . $this->cena . "руб";

                echo $mess . " без доп. услуг, " . $mess2 . $mess3 . $mess4;
            }
        } elseif ($this->name === "студенческий") {
            if ($age >= 18 and $age <= 21) {
                $this->cena = $this->cena * 1.1;

                $mess = "Тариф студенческий (" . $km . " км, " . $min . " мин, ";
                $mess2 = $age . " лет) = (" . $km . " * 4 " . " + " . $min . " * 1 ";
                $mess3 = ") * 1.1 = " . $this->cena . "руб; " .
                    "(" . $km . " км по 4 рублей плюс " . $min . " мининут по 1 рубля ";
                $mess4 = ") 
                    * коэффициент молодежный 1.1 = " . $this->cena . "руб";

                echo $mess . " без доп. услуг, " . $mess2 . $mess3 . $mess4;
            } elseif ($age <= 18 or $age >= 26) {
                echo "Ваш возраст не подходит к сдачи автомабиля ил выбранного тарифа";
            } else {
                $mess = "Тариф студенческий (" . $km . " км, " . $min . " мин, ";
                $mess2 = $age . " лет) = (" . $km . " * 4 " . " + " . $min . " * 1 ";
                $mess3 = ")  = " . $this->cena . "руб; " .
                    "(" . $km . " км по 14рублей плюс " . $min . " мининут по 1 рубля ";
                $mess4 = ") = " . $this->cena . "руб";

                echo $mess . " без доп. услуг, " . $mess2 . $mess3 . $mess4;
            }
            $mess = $this->mess;
            $mess2 = $this->mess2;
            $mess3 = $this->mess3;
            $mess4 = $this->mess4;
        }
    }
}

trait vodit_dop_usl
{
    public function vodit()
    {
        $this->mess4 = $this->cena + 1000;
        echo "Доп услуга водитель. Стоимость 1000 руб. Итого " . $this->cena . " + 1000 = " . $this->mess4;
    }
}

trait gps_dop_usl {
    public function gps ($min, $hour = null){
        $min_h = $min / 60;
        $hourly = ceil($min_h);
        if ($hour !=0){
            $hourly += $hour;
        }
        $hor = $hourly;
        $hourly *= 15;
        $this->cena = $this->cena + $hourly;

        $hour_gps = $hour + $hor;

        echo "<br> <br>";

        if ($this->name === "базовый") {
            if ($this->age >= 18 and $this->age <= 21) {
                $this->cena = $this->cena * 1.1;

                $mess = "Тариф базовый (" . $this->km . " км, " . $min . " мин, ";
                $mess2 = $this->age . " лет) = (" . $this->km . " * 10 " . " + " . $min . " * 3 + " . "15 * " . $hor;
                $mess3 = ") * 1.1 = " . $this->cena . "руб; " .
                    "(" . $this->km . " км по 10 рублей плюс " . $min . " мининут по 3 рубля плюс gps за 1 час 15 руб";
                $mess4 = ") 
                    * коэффициент молодежный 1.1 = " . $this->cena . "руб";

                echo $mess . " доп услуга gps в салон, " . $mess2 . $mess3 . $mess4;
            } elseif ($this->age <= 18 or $this->age >= 65) {
                echo "Ваш возраст не подходит к сдачи автомабиля";
            } else {

                $mess = "Тариф базовый (" . $this->km . " км, " . $min . " мин, ";
                $mess2 = $this->age . " лет) = (" . $this->km . " * 10 " . " + " . $min . " * 3 + " . "15 * " . $hor;
                $mess3 = ") = " . $this->cena . "руб; " .
                    "(" . $this->km . " км по 10 рублей плюс " . $min . " мининут по 3 рубля плюс gps за 1 час 15 руб";
                $mess4 = ") = " . $this->cena . "руб";

                echo $mess . " доп услуга gps в салон, " . $mess2 . $mess3 . $mess4;
            }

            echo "<br> <br>";

        } elseif ($this->name === "почасовой") {
            if ($this->age >= 18 and $this->age <= 21) {
                $this->cena = $this->cena * 1.1;
                $mess = "Тариф почасовой(" . $this->km . " км, " . $min . " мин, ";
                $mess2 = $this->age . " лет) = (" . $this->km . " * 0 " . " + " . $this->hourly . " * 200 + " . "15 * " . $hor;
                $mess3 = ") * 1.1 = " . $this->cena . "руб; " .
                    "(" . $this->km . " км по 0 рублей плюс " . $this->hourly . " мининут по 200 рубля ";
                $mess4 = ") 
                    * коэффициент молодежный 1.1 = " . $this->cena . "руб";
                echo $mess . " доп услуга gps в салон, " . $mess2 . $mess3 . $mess4;

            } elseif ($this->age <= 18 or $this->age >= 65) {
                echo "Ваш возраст не подходит к сдачи автомабиля";
            } else {
                $mess = "Тариф почасовой (" . $this->km . " км, " . $min . " мин, ";
                $mess2 = $this->age . " лет) = (" . $this->km . " * 0 " . " + " . $this->hourly . " * 200 ";
                $mess3 = ") = " . $this->cena . "руб; " .
                    "(" . $this->km. " км по 0 рублей плюс " . $this->hourly . " мининут по 200 рубля плюс gps за 1 час 15 руб";
                $mess4 = ") = " . $this->cena . "руб";

                echo $mess . " доп услуга gps в салон, " . $mess2 . $mess3 . $mess4;
            }

            echo "<br> <br>";

        } elseif ($this->name === "суточный") {
            if ($this->age >= 18 and $this->age <= 21) {
                $this->cena = $this->cena * 1.1;
                $mess = "Тариф суточный (" . $this->km . " км, " . $this->hour . " суток, " . $this->min. " часов, ";
                $mess2 = $this->age . " лет) = (" . $this->km. " * 1 " . " + " . $this->day. " * 1000 + " . "15 * " . $hour_gps;
                $mess3 = ") * 1.1 = " . $this->cena . "руб; " .
                    "(" . $this->km . " км по 1 рублей плюс " . $this->day . " дней по 1000 рубля плюс gps за 1 час 15 руб";
                $mess4 = ") 
                    * коэффициент молодежный 1.1 = " . $this->cena . "руб";

                echo $mess . " доп услуга gps в салон, " . $mess2 . $mess3 . $mess4;

            } elseif ($this->age <= 18 or $this->age >= 65) {
                echo "Ваш возраст не подходит к сдачи автомабиля";
            } else {

                $mess = "Тариф суточный (" . $this->km. " км, " . $this->hour . " суток, " . $this->min. " часа, ";
                $mess2 = $this->age . " лет) = (" . $this->km . " * 1 " . " + " . $this->day . " * 100 + " . "15 * " . $hour_gps;
                $mess3 = ") = " . $this->cena . "руб; " .
                    "(" . $this->km . " км по 1 рублей плюс " . $this->day . " мининут по 1000 рубля плюс gps за 1 час 15 руб";
                $mess4 = ") = " . $this->cena . "руб";

                echo $mess . " доп услуга gps в салон, " . $mess2 . $mess3 . $mess4;
            }

            echo "<br> <br>";

        } elseif ($this->name === "студенческий") {
            if ($this->age >= 18 and $this->age <= 21) {
                $this->cena = $this->cena * 1.1;

                $mess = "Тариф студенческий (" . $this->km . " км, " . $min . " мин, ";
                $mess2 = $this->age . " лет) = (" . $this->km . " * 4 " . " + " . $min . " * 1 + " . "15 * " . $hor;
                $mess3 = ") * 1.1 = " . $this->cena . "руб; " .
                    "(" . $this->km . " км по 4 рублей плюс " . $min . " мининут по 1 рубля плюс gps за 1 час 15 руб";
                $mess4 = ") 
                    * коэффициент молодежный 1.1 = " . $this->cena . "руб";

                echo $mess . " доп услуга gps в салон, " . $mess2 . $mess3 . $mess4;
            } elseif ($this->age <= 18 or $this->age >= 26) {
                echo "Ваш возраст не подходит к сдачи автомабиля или выбранного тарифа";
            } else {
                $mess = "Тариф студенческий (" . $this->km . " км, " . $min . " мин, ";
                $mess2 = $this->age . " лет) = (" . $this->km . " * 4 " . " + " . $min . " * 1 ";
                $mess3 = ")  = " . $this->cena . "руб; " .
                    "(" . $this->km . " км по 14рублей плюс " . $min . " мининут по 1 рубля ";
                $mess4 = ") = " . $this->cena . "руб";

                echo $mess . " доп услуга gps в салон, " . $mess2 . $mess3 . $mess4;
            }
        }
    }
}

class basic extends counter_bas {
    use gps_dop_usl;
    public function bas_count ($km, $min, $age){
        $this->km = $km;
        $this->min = $min;
        $this->age = $age;
        $this->name = "базовый";
        $cena_km = $this->cena_km = $km * 10;
        $cena_min = $this->cena_min = $min * 3;
        $this->cena = $cena_km + $cena_min;
        $r = $this->print_name($km, $min, $age);
        echo $r;
    }
}

$basic = new basic;
$basic ->bas_count(30, 75, 20);
$basic ->gps(75);
echo "<br>";
echo "<br>";


class hourly extends counter_bas {
    use gps_dop_usl;
    use vodit_dop_usl;
    function hourly_count ($km, $min, $age){
        $this->km = $km;
        $this->min = $min;
        $this->age = $age;
        $this->name = "почасовой";
        $min_h = $min / 60;
        $hourly = ceil($min_h);
        $this->hourly = $hourly;
        $cena_km = $this->cena_km = $km * 0;
        $cena_min = $this->cena_min = $hourly * 200;
        $cena_b = $this->cena = $cena_km + $cena_min;
        $r = $this->print_name($km, $min, $age);
        echo $r;
    }
}
$hourly = new hourly;
$hourly ->hourly_count(30, 70, 24);
$hourly ->gps(70);
$hourly -> vodit();
echo "<br>";
echo "<br>";
echo "<br>";


class day extends counter_bas {
    use gps_dop_usl;
    use vodit_dop_usl;
    public function day_count ($km, $hour ,$min, $age){
        $this->km = $km;
        $this->min = $min;
        $this->age = $age;
        $this->name = "суточный";
        $cena_km = $this->cena_km = $km * 1;
        $this->min=$min;
        $this->hour = $hour;
        $d = $hour / 24;
        $day = ceil($d);
        if ($min >= 30){
            $day += 1;
        }
        $this->day = $day;

        $cena_min = $this->cena_min = $day * 1000;
        $this->cena = $cena_km + $cena_min;
        $r = $this->print_name($km, $min, $age);
        echo $r;
    }
}

$day = new day;
$day ->day_count(30, 1, 2,24);
$day->gps(32, 1);
$day -> vodit();
echo "<br>";
echo "<br>";
echo "<br>";

class student extends counter_bas {
    use gps_dop_usl;
    public function student_count ($km, $min, $age){
        $this->km = $km;
        $this->min = $min;
        $this->age = $age;
        $this->name = "студенческий";
        $cena_km = $this->cena_km = $km * 4;
        $cena_min = $this->cena_min = $min * 1;
        $this->cena = $cena_km + $cena_min;
        $r = $this->print_name($km, $min, $age);
        echo $r;
    }
}

$student = new student;
$student ->student_count(30, 10, 20);
$student ->gps(10);
echo "<br>";