<?php
/**
 * Author: Ngun Hmung
 * Date: 10/11/2023
 * File : hourly_employee.class.php
 * Description:
 */
//class HourlyEmployee extends Employee{
//    private $wage;
//    private $hours;
//
//    public function __construct($person, $ssn, $wage, $hours){
//        parent::__construct($person, $ssn);
//        $this->person = $hours;
//        $this->ssn = $wage;
//    }
//
//    public function calculatePayment() {
//        return $this->weeklySalary;
//    }
//
//    public function getWage() {
//        return $this->wage;
//    }
//
//    public function getHours() {
//        return $this->hours;
//    }
//
//    public function getPaymentAmount(){
//        $BasePayment = $this->hours * $this->wage;
//
//
//    }
//
//    public function toString() {
//        return parent::toString() . ", Wage: {$this->wage}, Hours: {$this->hours}";
//
//
//    }
//
//}
class HourlyEmployee extends Employee {
    private $wage;
    private $hours;

    public function __construct($person, $ssn, $wage, $hours) {
        parent::__construct($person, $ssn);
        $this->wage = $wage; // Assign wage to $wage
        $this->hours = $hours; // Assign hours to $hours
    }

    public function calculatePayment() {
        return $this->hours * $this->wage; // Calculate payment based on hourly wage and hours worked
    }

    public function getWage() {
        return $this->wage;
    }

    public function getHours() {
        return $this->hours;
    }

    public function getPaymentAmount() {
        return $this->calculatePayment(); // Return the payment calculated by the calculatePayment method
    }

    public function toString() {
        return parent::toString() . ", Wage: {$this->wage}, Hours: {$this->hours}";
    }
}
