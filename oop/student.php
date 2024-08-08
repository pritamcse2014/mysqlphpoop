<?php
    include("./config.php");
    class Student {
        public $DBConnection;
        function __construct($connection) {
            $this->DBConnection=$connection;
        }
        function getData() {
            $getStudent = $this->DBConnection->prepare("SELECT * FROM students");
            $getStudent->execute();
            $result = $getStudent->fetchAll();
            echo "<pre>";
            print_r($result);
            echo "<pre>";
        }

        function insertData() {
            $studentQuery = "INSERT INTO students(`id`, `name`, `course`, `batch`, `city`, `year`) VALUES (null,'Pritam','CSE','Evening','Dhaka','2024')";
            $student = $this->DBConnection->prepare($studentQuery);
            $result = $student->execute();
            if ($result) {
                echo "Data Inserted Successfully.";
            } else {
                echo "Data Inserted Failed.";
            }
        }

        function updateData() {
            $studentQuery = "UPDATE students SET name='Priya', course='SWE', batch='24th', city='Jessore', year='2024' WHERE id = 15";
            $student = $this->DBConnection->prepare($studentQuery);
            $result = $student->execute();
            if ($result) {
                echo "Data Updated Successfully.";
            } else {
                echo "Data Updated Failed.";
            }
        }

        function deleteData() {
            $studentQuery = "DELETE FROM students WHERE id = 15";
            $student = $this->DBConnection->prepare($studentQuery);
            $result = $student->execute();
            if ($result) {
                echo "Data Deleted Successfully.";
            } else {
                echo "Data Deleted Failed.";
            }
        }

        function insertDataWithRequest($request) {
            // echo "<pre>";
            // print_r($request);
            // echo "<pre>";
            $name = $request['name'];
            $course = $request['course'];
            $batch = $request['batch'];
            $city = $request['city'];
            $year = $request['year'];
            $studentQuery = "INSERT INTO students(`id`, `name`, `course`, `batch`, `city`, `year`) VALUES (null,'$name','$course','$batch','$city','$year')";
            $student = $this->DBConnection->prepare($studentQuery);
            $result = $student->execute();
            if ($result) {
                echo "Data Inserted Successfully.";
            } else {
                echo "Data Inserted Failed.";
            }
        }
    }
    $student = new Student($connection);
    // $student->getData();
    // $student->insertData();
    // $student->updateData();
    // $student->deleteData();
    if (isset($_POST['name'])) {
        $student->insertDataWithRequest($_POST);
    }
?>