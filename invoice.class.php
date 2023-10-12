<?php
/**
 * Author: Ngun Hmung
 * Date: 10/11/2023
 * File : invoice.class.php
 * Description:
 */
// Define a class for invoices
class Invoice implements Payable{
    // Properties
    private $partNumber;
    private $partDescription;
    private $quantity;
    private $pricePerItem;

    //static property to keep track of the number of Invoice objects created
    private static $invoiceCount = 0;

    //constructor
    public function __construct($partNumber, $partDescription, $quantity, $pricePerItem) {
        $this->partNumber = $partNumber;
        $this->partDescription = $partDescription;
        $this->quantity = $quantity;
        $this->pricePerItem = $pricePerItem;

        //count of Invoice objects
        self::$invoiceCount++;
    }

    //getter methods
    public function getPartNumber() {
        return $this->partNumber;
    }

    public function getPartDescription() {
        return $this->partDescription;
    }

    public function getQuantity() {
        return $this->quantity;
    }

    public function getPricePerItem() {
        return $this->pricePerItem;
    }

    //method to calculate the payment amount
    public function getPaymentAmount() {
        return $this->quantity * $this->pricePerItem;
    }

    //method to convert the Invoice object to a string representation
    public function toString()
    {
        echo "<b>Part Number</b>: ", $this->getPartNumber();
        echo "<b>Part Description</b>: ", $this->getPartDescription();
        echo "<b>Quantity</b>: ", $this->getQuantity();
        echo "<b>Price per item</b>: ", $this->getPricePerItem();
        echo "<b>Payment Amount</b>: ", $this->getPaymentAmount();


    }

    //static method to get the count of Invoice objects created
    public static function getInvoiceCount() {
        return self::$invoiceCount;
    }
}
