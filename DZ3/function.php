<?php
function task1 (){
    $file = file_get_contents( __DIR__ . 'data.xml');
    $xml = new SimpleXMLElement($file);
    print ($xml->Name->__toString());
}
//task1();


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
//task2();


function task3(){
    $mas = [];
    for($i=0; $i<=50; $i++){
        $mas[$i]=rand(0,50);
    }
    print_r($mas);
    $file = fopen('mas.csv', 'w');
    foreach ($mas as $pol){
//        fputcsv($file, $pol , "+");
        fputcsv($file,explode('+',$pol));
    }
}
//task3();


function task5(){
    $csvP = 'mas.csv';
    $sum = 0;
    $csvF = fopen($csvP, 'r');
    if ($csvF){
        $res = [];
        while (($csvD = fgetcsv($csvF, 100, '+')) !== false){
            $res[] = $csvD;
        }
        echo '<pre>';

        for ($i = 0; $i <= count($res); $i++){
            if ($res[$i] % 2 == 0){
                $x = $res[$i];
                $sum = $sum + $x;
            }
        }
//        $summ = array_sum($res);
        print_r($res);
        echo $sum;
    }
}
//task5();

function task6(){
    $open = file_get_contents('en.wikipedia.org/w/api.php?action=query&titles=Main%20Page&prop=revisions&rvprop=content&format=json');
//    $decodOpen = json_decode($open, true);

    echo ($open);
}
//task6();