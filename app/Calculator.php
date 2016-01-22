<?php

class Calculator extends absCalc implements iCalc {

    private $value_a;
    private $value_b;

    public function setValue($a, $b) {
        if ((Validator::isValidNumber($a)) && (Validator::isValidNumber($b))) {
            $this->value_a = $a;
            $this->value_b = $b;
        }
    }

    public function getPlus() {
        return $this->value_a + $this->value_b;
    }

    public function getMinus() {
        return $this->value_a - $this->value_b;
    }

    public function getMultiply() {
        return $this->value_a * $this->value_b;
    }

    public function getDivide() {
        return $this->value_a / $this->value_b;
    }

    public function getModule() {
        return $this->value_a % $this->value_b;
    }

}
