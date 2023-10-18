<?php
/**
 * Author: Ngun Hmung
 * Date: 10/11/2023
 * File : base_plus_commission_employee.class.php
 * Description:
 */

// base_plus_commission_employee.class.php
class BasePlusCommissionEmployee extends CommissionEmployee {
    private $baseSalary;

    public function __construct($name, $employeeID, $sales, $baseSalary) {
        parent::__construct($name, $employeeID, $sales);
        $this->baseSalary = $baseSalary;
        // Increment the count when a new BasePlusCommissionEmployee is created
        self::$employeeCount++;
    }

    public function calculateEarnings() {
        return parent::calculateEarnings() + $this->baseSalary;
    }
}
