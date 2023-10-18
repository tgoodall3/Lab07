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

    public function __construct(Person $person, $ssn, $wage, $hours){
        parent::__construct($person, $ssn);
        $this->person = $hours;
        $this->ssn = $wage;
    }

    public function getWage() {
        return $this->wage;
    }

    public function getHours() {
        return $this->hours;
    }

    public function CalculatePaymetAmount(){
        $BasePayment = $this->hours * $this->wage;


    }

    public function toString() {
        return parent::toString() . ", Wage: {$this->wage}, Hours: {$this->hours}";


    }

}