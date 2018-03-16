<?php
/**
 * Created by PhpStorm.
 * User: t0000654
 * Date: 3/16/18
 * Time: 2:00 PM
 */

class MagicMethods{

    private $name;
    public $surname = "default";


    public function __construct($name) {
        $this->name = $name;
        echo '[__construct] '. $name . ' magic object created'. '</br>';
    }

    public function __destruct() {
        echo '[__destruct] '. $this->name . ' magic object destructed'. '</br>';
    }

    public function hello() {
        echo '[hello] '.$this->name . ' says Hello!' . '</br>';
    }

    public function __call($method, $args) {
        echo '[__call] '. 'Non static method ' . $method . ' was not found </br>';
        return false;
    }

    public static function __callStatic($method, $args) {
        echo '[__callStatic] '. 'Static method ' . $method . ' was not found </br>';
        return false;
    }

    public function __get($field) {
        echo '[__get] '. 'Getting variable ' . $field . '</br>';
        if($field == 'name') {
            return $this->name;
        }
        /*
         * This conditional is not necessary because surname variable is defined as public
         * But I typed it to show that this wont be called
         */
        if($field == 'surname') {
            return $this->surname;
        }
        return false;
    }

    public function __set($field, $value) {
        echo '[__set] '. 'Setting value for ' . $field . ' ,old value: ' . $this->name . ' ,new value: ' . $value . '</br>';
        if($field == 'name') {
            $this->name = $value;
        }
        /*
         * This conditional is not necessary because surname variable is defined as public
         * But I typed it to show that this wont be called
         */
        if($field == 'surname') {
            $this->surname = $value;
        }
    }

    public function __isset($field) {
        echo '[__isset] Is ' . $field.  ' set? ' . '</br>';
        if($field == 'name') {
            return isset($this->name);
        }
        /*
         * This conditional is not necessary because surname variable is defined as public
         * But I typed it to show that this wont be called
         */
        if($field == 'surname') {
            return isset($this->surname);
        }
        return false;
    }

    public function __unset($field) {
        echo '[__unset] Unsetting ' . $field . '</br>';
        if($field == 'name') {
            unset($this->name);
        }
        /*
         * This conditional is not necessary because surname variable is defined as public
         * But I typed it to show that this wont be called
         */
        if($field == 'surname') {
            unset($this->surname);
        }
    }

    public function __sleep() {
        return array($this->name);
    }

    public function __wakeup() {
        if($this->name == "First") {
            $this->surname = "Changed";
        }
    }

    public function __toString()
    {
        return "My name is " . $this->name . " and surname " . $this->surname;
    }

    public function __invoke($variable)
    {
        echo '[__set] '."I am object not method, but i can print variable u wrote in method header: "
            . $variable . "</br>";
    }

    public static function __set_state($an_array)
    {
        $obj = new MagicMethods($an_array['name']);
        $obj->surname = $an_array['surname'];
        return $obj;
    }

    public function __clone()
    {
        echo 'Clone method was called' . '</br>';
    }

    public function __debugInfo() {
        return [
            'name' => $this->name,
            'surname' => $this->surname
        ];
    }
}