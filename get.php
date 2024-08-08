<?php
    class User {
        public $name = "Pritam Kumar Kundu";

        function __get($property)
        {
            echo "This $property is not exist";
        }
    }
    $user = new User();
    echo $user->name;
    // echo $user->nama;
    echo "<br>";
    echo $user->age;
?>