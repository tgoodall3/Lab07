<?php
/**
 * Author: Ngun Hmung
 * Date: 10/11/2023
 * File : employee.class.php
 * Description:
 */
// Define an abstract class for person
abstract class Employee{
    //properties
    private $person;
    private $ssn;

    //static property to keep track of the number of Employee objects created
    public static $employeeCount = 0;

    //constructor
    public function __construct($person, $ssn) {
        $this->person = $person;
        $this->ssn = $ssn;

        //count of Employee objects
        self::$employeeCount++;
    }

    //getter methods
    public function getPerson() {
        return $this->person;
    }

    public function getSSN() {
        return $this->ssn;
    }

    //abstract method to calculate the payment amount
    public abstract function calculatePayment();

    //method to provide a string representation of the Employee object
    public function toString() {
        echo "SSN: {$this->ssn}, Person: {$this->person->toString()}";

    }

    //static method to get the count of Employee objects created
    public static function getEmployeeCount() {
        return self::$employeeCount;
    }
}
