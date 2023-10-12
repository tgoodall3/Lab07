<?php
/**
 * Author: Ngun Hmung
 * Date: 10/11/2023
 * File : payable.class.php
 * Description:
 */


// Define an interface for payable objects
interface Payable{
    public function getPaymentAmount();
}