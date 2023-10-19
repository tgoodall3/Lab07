<?php
/**
 * Author: Tyler Goodall
 * Date: 10/11/2023
 * File : base_plus_commission_employee.class.php
 * Description:
 */

// base_plus_commission_employee.class.php
class BasePlusCommissionEmployee extends CommissionEmployee {
    private $baseSalary;

    public function __construct($name, $employeeID, $sales, $baseSalary, $commissionRate) {
        parent::__construct($name, $employeeID, $sales, $commissionRate);
        $this->baseSalary = $baseSalary;
        // Increment the count when a new BasePlusCommissionEmployee is created
//        self::$employeeCount++;
    }

    public function getBaseSalary() {
        return $this->baseSalary;
    }

    public function getPaymentAmount() {
        return parent::getPaymentAmount() + $this->baseSalary;
    }

    public function toString() {
        return parent::toString() . ", Base Salary: " . $this->baseSalary;
    }
}
