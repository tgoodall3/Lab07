<?php
/**
 * Author: Ngun Hmung
 * Date: 10/11/2023
 * File : hourly_employee.class.php
 * Description:
 */
class HourlyEmployee extends Employee{
    private $wage;
    private $hours;

    public function __construct($hours, $wage){
        $this->person = $hours;
        $this->ssn = $wage;
    }

    public function getWage() {
        return $this->wage;
    }

    public function getHours() {
        return $this->hours;
    }

    public function getPaymentAmount() {
        return $this->paymentAmount;
    }

    public function toString() {
        

    }

}