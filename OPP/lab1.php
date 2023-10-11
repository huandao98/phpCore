<?php
    class Person {
        public $name;
        public $age;
    }

    $full_name = new Person();
    $full_name->name = "Nguyễn Văn A";
    $full_name->age = "25";
    echo "Họ & tên: ".$full_name->name;
    echo "<br>";
    echo "Tuổi: ".$full_name->age;
?>