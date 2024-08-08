<?php
    class User {
        function getName() {
            echo "My Name is Pritam Kumar Kundu";
        }
        
        function __invoke() {
            echo "My Name is Priya Rani Sarker";
        }

        function other() {
            echo "Test";
        }
    }
    $user = new User();
    $user->getName();
    echo "<br>";
    $user();
    echo "<br>";
    $user->other();
?>