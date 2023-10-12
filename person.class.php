<?php
/**
 * Author: Ngun Hmung
 * Date: 10/11/2023
 * File : person.class.php
 * Description:
 */
class Person{
    //properties
    private $first_name;
    private $last_name;

    //constructor
    public function __construct($first_name, $last_name) {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
    }

    //getter methods
    public function getFirstName() {
        return $this->first_name;
    }

    public function getLastName() {
        return $this->last_name;
    }

    //method to provide a string representation of the Person object
    public function toString() {
        echo "<b>First Name</b>: ", $this->getFirstName();
        echo "<b>Last Name</b>: ", $this->getLastName();


    }
}
