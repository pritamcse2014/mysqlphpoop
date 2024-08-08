<?php
    class User {
        // function getName1($name) {
        //     echo $name;
        // }
        // private function getName2($name) {
        //     echo $name;
        // }
        // function __call($method, $arguments) {
        //     echo "$method Method Not Found.";
        //     echo "<br>";
        //     print_r($arguments);
        // }

        private function getName($name) {
            echo "User Name is ", $name;
        }
        
        function __call($method, $arguments) {
            if (method_exists($this, $method)) {
                echo "$method is private method";
                echo "<br>";
                call_user_func_array([$this, $method], $arguments);
            } else {
                echo "$method Method Not Found.";
            }
        }
    }
    $user = new User();
    // $user->getName("Pritam", "Kumar Kundu");
    // echo "<br>";
    // $user->getName1("Pritam");
    // echo "<br>";
    // $user->getName2("Prity");
    // echo "<br>";
    $user->getName("Pritam Kumar Kundu");
    // echo "<br>";
    // $user->setName("Pritam Kumar Kundu");
?>