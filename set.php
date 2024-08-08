<?php
    class User {
        // private $name1;
        // private $name2 = "Pritam";
        private $name = "Pritam";
        // function __set($property, $value) {
        //     echo "This $property cannot set $value ";
        // }
        
        // function __set1($property, $value) {
        //     echo "This $property cannot set $value ";
        // }
        
        function __set($property, $value) {
            if (property_exists($this, $property)) {
                // echo "Yes";
                $this->$property=$value;
            } else {
                echo "No";
            }
        }

        function getName() {
            echo $this->name;
        }

        // function getName() {
        //     echo $this->name2;
        // }
    }
    $user = new User();
    // $user->name="Pritam Kumar Kundu";
    // echo "<br>";
    // $user->name1="Pritam Kumar Kundu";
    // echo "<br>";
    $user->getName();
    echo "<br>";
    $user->name="Pritam Kumar Kundu";
    $user->getName();
?>