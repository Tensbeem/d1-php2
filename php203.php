<?php
    function myTest(){
        static $a = 0;
        echo $a;
        $a = $a + 1;
    }
    myTest();
    myTest();
    myTest();
?>