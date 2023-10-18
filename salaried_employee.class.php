<?php
/**
 * Author: Tyler Goodall
 * Date: 10/11/2023
 * File : salaried_employee.class.php
 * Description:
 */

// salaried_employee.class.php
class SalariedEmployee extends Employee {
    private $weeklySalary;

    public function __construct($name, $employeeID, $weeklySalary) {
        parent::__construct($name, $employeeID);
        $this->weeklySalary = $weeklySalary;
        // Increment the count when a new SalariedEmployee is created
        self::$employeeCount++;
    }

    public function calculateEarnings() {
        return $this->weeklySalary;
    }
}
