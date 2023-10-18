<?php
/**
 * Author: Tyler Goodall
 * Date: 10/11/2023
 * File : commission_employee.class.php
 * Description:
 */

// commission_employee.class.php
class CommissionEmployee extends Employee {
    private $sales;

    public function __construct($name, $employeeID, $sales) {
        parent::__construct($name, $employeeID);
        $this->sales = $sales;
        // Increment the count when a new CommissionEmployee is created
        self::$employeeCount++;
    }

    public function calculateEarnings() {
        return $this->sales * 0.10; // 10% commission
    }
}
