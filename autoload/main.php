<?php
    function autoLoader($class) {
        echo "<br>";
        // echo $class.'.php';
        echo "<br>";
        include($class.'.php');
    }
    spl_autoload_register("autoLoader");
    $t1 = new Teacher();
    $s1 = new Student();
    $m1 = new Management();
?>