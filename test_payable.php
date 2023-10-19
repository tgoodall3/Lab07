<?php
/**
 * Author: Tyler Goodall
 * Date: 10/11/2023
 * File : test_payable.php
 * Description:
 */
function camelCaseToUnderscore($str) {
    //store all characters in an array
    $characters = str_split($str);

    //covert the first character to a lowercase
    $characters[0] = strtolower($characters[0]);

    //exam all characters in the array
    //if a character is uppercase, replace it with a lowercase and prefix it with an underscore
    foreach ($characters as &$character) {
        if (ord($character) >= ord('A') && ord($character) <= ord('Z'))
            $character = '_' . strtolower($character);
    }

    //convert all elements in the array into a string and return the string
    return implode('', $characters);
}

spl_autoload_register(function($class_name){
    require_once camelCaseToUnderscore($class_name) . '.class.php';
});
?>

<?php

//code

require_once('invoice.class.php'); // Include your Invoice class file
require_once('salaried_employee.class.php'); // Include your SalariedEmployee class file
require_once('hourly_employee.class.php'); // Include your HourlyEmployee class file
require_once('commission_employee.class.php'); // Include your CommissionEmployee class file
require_once('base_plus_commission_employee.class.php'); // Include your BasePlusCommissionEmployee class file

$objects = array(
    new Invoice("01234", "Seat", 2, 375.0),
    new Invoice("56789", "Tire", 4, 79.95),
    new SalariedEmployee("John Smith", "111-11-1111", 800.0),
    new HourlyEmployee("Karen Price", "222-22-2222", 16.75, 40),
    new CommissionEmployee("Sue Jones", "333-33-3333", 10000.0, 0.06),
    new BasePlusCommissionEmployee("Bob Lewis", "444-44-4444", 5000.0, 0.04, 300.0)
);

foreach ($objects as $object) {
    if ($object instanceof Invoice) {
        echo "Invoice:" . "<br>";
        echo "Part number: {$object->getPartNumber()} ({$object->getPartDescription()})" . "<br>";
        echo "Quantity: {$object->getQuantity()}". "<br>";
        echo "Price per item: $" . number_format($object->getPricePerItem(), 2). "<br>";
    } elseif ($object instanceof SalariedEmployee) {
        echo "Salaried Employee:". "<br>";
        echo "Name: {$object->getPerson()}". "<br>";
        echo "Social security number: {$object->getSSN()}". "<br>";
        echo "Weekly salary: $" . number_format($object->getWeeklySalary(), 2). "<br>";
    } elseif ($object instanceof HourlyEmployee) {
        echo "Hourly Employee:". "<br>";
        echo "Name: {$object->getPerson()}". "<br>";
        echo "Social security number: {$object->getSSN()}". "<br>";
        echo "Wage per hour: $" . number_format($object->getWage(), 2). "<br>";
        echo "Hours: {$object->getHours()}". "<br>";
    } elseif ($object instanceof CommissionEmployee) {
        echo "Commission Employee:". "<br>";
        echo "Name: {$object->getPerson()}". "<br>";
        echo "Social security number: {$object->getSSN()}". "<br>";
        echo "Gross sale: $" . number_format($object->getSales(), 2). "<br>";
        echo "Commission rate: " . number_format($object->getCommissionRate(), 2). "<br>";
    } elseif ($object instanceof BasePlusCommissionEmployee) {
        echo "Base Plus Commission Employee:". "<br>";
        echo "Name: {$object->getPerson()}". "<br>";
        echo "Social security number: {$object->getSSN()}". "<br>";
        echo "Gross sale: $" . number_format($object->getSales(), 2). "<br>";
        echo "Commission rate: " . number_format($object->getCommissionRate(), 2). "<br>";
        echo "Base salary: $" . number_format($object->getBaseSalary(), 2). "<br>";
    }

    echo "Earning: $" . number_format($object->getPaymentAmount(), 2). "<br>";
}

echo "Number of invoices: " . Invoice::getInvoiceCount(). "<br>";
echo "Number of employees: " . Employee::getEmployeeCount();


?>
