<?php
    class Person {
        public $name;
        public $age;
        function setName($name){
            $this->name = $name;
        }
        function getName(){
            return $this->name;
        }
        function setAge($age){
            $this->age = $age;
        }
        function getAge(){
            return $this->age;
        }
    }

    class Employee extends Person {
        public $jobTitle;
        function setJobTitle($jobTitle){
            $this->jobTitle = $jobTitle;
        }
        function getJobTitle(){
            return $this->jobTitle;
        }
    }

    $full_name = new Employee();
    $full_name->setName("Nguyễn Văn A");
    $full_name->setAge("25");
    $full_name->setJobTitle("PHP developer");
    echo "Tên: ".$full_name->getName()."<br />";
    echo "Tuổi: ".$full_name->getAge()."<br />";
    echo "Công việc: ".$full_name->getJobTitle();
?>