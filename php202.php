<?php
//outside function
    $msg = "Welcome to Thailand"; //Globol Scope
    $name = "Mr.Mark";
    $x = 5;
    $y = 10;
    $z = 0;
    function myTest(){
        //Inside Function
        global $name;
        $msg = 'Hello '; //Local Scope
        global $x.$y;
        
        //$GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
        $y = $x + $y;
        echo $msg, $name,'',$y, "<br />";
    }
    echo $msg. "<br />";
    myTest();
?>