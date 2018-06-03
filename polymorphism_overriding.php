<?php

class Employee {

    protected $name;
    protected $department;
    private $salary;

    function getName() {
        return $this->name;
    }

    function getDepartment() {
        return $this->department;
    }

    function getSalary() {
        return $this->salary;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setDepartment($department) {
        $this->department = $department;
    }

    function setSalary($salary) {
        $this->salary = $salary;
    }

}

class Manager extends Employee {
    function setName($name) {
        $this->name = "M.R {$name}";
    }
    function setSalary($salary) {
        if(parent::getSalary() <= 5000 || $salary <= 5000){
            parent::setSalary($salary * 1.5);
        }
    }
}

$emp = new Employee();
$emp->setName("mahmoud");
$emp->setSalary(4500);
echo "<h3>Normal</h3>";
echo "{$emp->getName()} <br \>";
echo "{$emp->getSalary()} <br \>";

$manager = new Manager();
$manager->setName("mahmoud");
$manager->setSalary(6);
echo "<h3>Super</h3>";
echo "{$manager->getName()} <br \>";
echo "{$manager->getSalary()} <br \>";
