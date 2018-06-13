<?php
function task1 (){
    $file = file_get_contents( 'data.xml');
    $xml = new SimpleXMLElement($file);
    print_r($xml -> Name -> _toString());
}
//task1();

function task2 (){
    $arr = array('tttt','yyyy');
    $arr2 = array('999', $arr,'5555');
//    print_r($arr2);
    $print = json_encode($arr2, JSON_UNESCAPED_UNICODE);
    file_put_contents(output.json, $print);
}
task2();

function task3(){

}


function task5(){
    $str = file_get_contents('https://en.wikipedia.org/w/api.php?action=query&titles=Main%20Page&prop=revisions&rvprop=content&format=json');
    $xml = new SimpleXMLElement($str);
    print_r($xml -> title -> _toString());
}
task5();