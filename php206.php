<?php
    $x = 100;
    $y = "100";
    $a = 15;
    $b = 10;
    var_dump($x == $y);
    echo "<br />";
    if($x == $y) {
        echo "True";
    }
    else{
        echo "False";
    }

    echo "<br />";
    if($x === $y){
        echo "True";
    }
    else {
        echo "False";
    }

    echo "<br />";
    if($a <=> $b){
        echo "True";
    }
    else {
        echo "False";
    }

?>