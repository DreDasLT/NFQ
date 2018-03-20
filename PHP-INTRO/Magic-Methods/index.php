<?php
/**
 * Created by PhpStorm.
 * User: t0000654
 * Date: 3/16/18
 * Time: 2:02 PM
 */

require 'MagicMethods.php';

// Construct
$object = new MagicMethods("First");

// Call, CallStatic
$object->hello(); // Method __call will be called because it exists.
$object->labas(); // Method __call won't be called because labas() doesn't exist.

// Get
echo $object->surname . '</br>'; // When we try to get public variable, __get method won't be called
echo $object->name . '</br>'; // When we try to get private/protected variable, __get method will be called

// Set
$object->surname = "Not Default"; // We try to set value for public variable, so set__ method won't called
$object->name = "Second"; // We try to set value for private/protected variable, so set__ method will be called

// isset, unset
var_dump(isset($object->name)); // __isset method will be called because name variable is defined as private/protected
echo "</br>";
var_dump(isset($object->surname)); // __isset method won't be called because surname variable is public
echo "</br>";

unset($object->name); // __unset method will be called because name variable is private/protected
unset($object->surname); // __unset method won't be called because surname variable is public

var_dump(isset($object->name)); // Now we will check if variable was unset
echo "</br>";
var_dump(isset($object->surname)); // Now we will check if variable was unset
echo "</br>";

// Sleep, Wakeup
$object->name = "First";
$object->surname = "Method";
$data = serialize($object);
echo $data. '</br>';
var_dump(unserialize($data));

// toString
echo $object . "</br>";

// Invoke
$object("kintamasis metode");

// Set_State
var_dump(var_export($object, true));
echo "</br>";

// Clone
$object1 = clone $object;


$object1->surname = "Other surname";
var_dump($object);
echo "</br>";
var_dump($object1);
echo "</br>";




