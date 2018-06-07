<?php

for ($i = 1; $i <= 10; $i++){
    for ($r = 1; $r <= 10; $r++){
        $res = $r * $i;
        if ($i % 2 == 0 and $r % 2 == 0){
            echo "($res)" . " ";
        } elseif ($i % 2 != 0 and $r % 2 != 0){
            echo "[$res]" . " ";
        } else{
            echo $res . " ";
        }

    }
    echo "<br>";
}
