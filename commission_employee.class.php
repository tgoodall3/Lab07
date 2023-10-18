<?php
/**
 * Author: Tyler Goodall
 * Date: 10/11/2023
 * File : commission_employee.class.php
 * Description:
 */

class CommissionEmployee extends Employee {
    private $sales;
    private $commissionRate;

    public function __construct($name, $employeeID, $sales, $commissionRate) {
        parent::__construct($name, $employeeID);
        $this->sales = $sales;
        $this->commissionRate = $commissionRate;
    }

    public function calculatePayment() {
        return $this->weeklySalary;
    }

    public function getSales() {
        return $this->sales;
    }

    public function getCommissionRate() {
        return $this->commissionRate;
    }

    public function getPaymentAmount() {
        return $this->sales * ($this->commissionRate / 100); // Calculate commission based on the rate
    }

    public function toString() {
        return "Name: " . $this->getName() . ", Employee ID: " . $this->getEmployeeID() . ", Sales: " . $this->sales . ", Commission Rate: " . $this->commissionRate . "%";
    }
}
