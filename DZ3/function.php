<?php
function task1 (){
    $file = file_get_contents( __DIR__ . '\data.xml');
    $xml = new SimpleXMLElement($file);
    echo 'Имя: ';
    print ($xml->Address[0]->Name->__toString()) .'<br>';
    echo 'Улица: ';
    print ($xml->Address[0]->Street->__toString()) . '<br>';
    echo 'Город: ';
    print ($xml->Address[0]->City->__toString()) . '<br>';
    echo 'Государство: ';
    print ($xml->Address[0]->State->__toString()) . '<br>';
    echo 'Индекс: ';
    print ($xml->Address[0]->Zip->__toString()) . '<br>';
    echo 'Страна: ';
    print ($xml->Address[0]->Country->__toString()) . '<br>' . '<br>';
    echo 'Имя: ';
    print ($xml->Address[1]->Name->__toString()) . '<br>';
    echo 'Улица: ';
    print ($xml->Address[1]->Street->__toString()) . '<br>';
    echo 'Город: ';
    print ($xml->Address[1]->City->__toString()) . '<br>';
    echo 'Государство: ';
    print ($xml->Address[1]->State->__toString()) . '<br>';
    echo 'Индекс: ';
    print ($xml->Address[1]->Zip->__toString()) . '<br>';
    echo 'Страна: ';
    print ($xml->Address[1]->Country->__toString()) . '<br>' . '<br>';
    print ($xml->DeliveryNotes->__toString()) . '<br>' . '<br>';
    echo 'Наименование товара: ';
    print ($xml->Items->Item[0]->ProductName->__toString()) . '<br>';
    echo 'Количество: ';
    print ($xml->Items->Item[0]->Quantity->__toString()) . '<br>';
    echo 'Цена: ';
    print ($xml->Items->Item[0]->USPrice->__toString()) . '<br>';
    echo 'Коментарий: ';
    print ($xml->Items->Item[0]->Comment->__toString()) . '<br>' . '<br>';
    echo 'Наименование товара: ';
    print ($xml->Items->Item[1]->ProductName->__toString()) . '<br>';
    echo 'Количество: ';
    print ($xml->Items->Item[1]->Quantity->__toString()) . '<br>';
    echo 'Цена: ';
    print ($xml->Items->Item[1]->USPrice->__toString()) . '<br>';
    echo 'Дата отправки: ';
    print ($xml->Items->Item[1]->ShipDate->__toString()) . '<br>';
}


function task2 (){
    $arr = array('tttt','ррр');
    $arr2 = array('999', $arr,'5555');
    $print = json_encode($arr2, JSON_UNESCAPED_UNICODE); //кодирование данных
    file_put_contents(output.json, $print);  //запись файла

    $data = file_get_contents(output.json); //открытие файла
    $decod = json_decode($data, true); //декодирование данных

    $decod2 = $decod;

    $decod2[2] = rand(0, 50);
    $decod2[0] = rand(0, 50);
    $decod2[1][0] = rand(0, 50);

    $print2 = json_encode($decod2, JSON_UNESCAPED_UNICODE); //кодирование данных
    file_put_contents(output2.json, $print2); //запись файла2

    $open = file_get_contents(output.json); //открытие файла
    $decodOpen = json_decode($open, true); //декодирование данных

    $open2 = file_get_contents(output2.json); //открытие файла
    $decodOpen2 = json_decode($open2, true); //декодирование данных

    echo '<pre>';
    print_r($decodOpen);

    echo '<pre>';
    print_r($decodOpen2);

    $res = array_diff($decodOpen, $decodOpen2);
    print_r($res);
}


function task3(){
    $mas = [];
    for($i=0; $i<=50; $i++){
        $mas[$i]=rand(0,50);
    }
    print_r($mas);
    $file = fopen('mas.csv', 'w');
    foreach ($mas as $pol){
        fputcsv($file,explode(' ',$pol));
    }
}


function task4(){
    $csvP = 'mas.csv';
    $sum = 0;
    $csvF = fopen($csvP, 'r');
    if ($csvF) {
        $res = [];
        while (($csvD = fgetcsv($csvF, 100, '+')) !== false) {
            $res[] = $csvD;
        }
        echo '<pre>';
        print_r($res);

        for ($i = 0; $i <= count($res); $i++) {
            if ($res[$i][0] % 2 == 0){
                $x = $res[$i][0];
                $sum += $x;
            }
        }
        echo $sum;
    }
}

function task5(){
    $open = file_get_contents('https://en.wikipedia.org/w/api.php?action=query&titles=Main%20Page&prop=revision
s&rvprop=content&format=json');
    $decodOpen = json_decode($open, true);
    echo '<pre>';
    print_r($decodOpen);

    echo 'Значение ключа pageid: ';
    echo $decodOpen[query][pages][15580374][pageid] . '<br>';
    echo 'Значение ключа title: ';
    echo $decodOpen[query][pages][15580374][title];
}