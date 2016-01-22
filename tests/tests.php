<?php

require_once '../index.php';

class calcTest extends \PHPUnit_Framework_TestCase {

    protected $object;
    protected $math;

    protected function setUp() {
        $this->math = new Math();
    }

    public function testValidatorNumberIsValidInteger() {
        $value = 5;
        $this->assertTrue(Validator::isValidNumber($value));
    }

    public function testValidatorNumberIsValidDouble() {
        $value = 5.0;
        $this->assertTrue(Validator::isValidNumber($value));
    }

    public function testValidatorNumberIsNotValidEmpty() {
        $value = "";
        $this->assertFalse(Validator::isValidNumber($value));
    }

    public function testValidatorNumberIsNotValidNull() {
        $value = NULL;
        $this->assertFalse(Validator::isValidNumber($value));
    }

    public function testValidatorCliIsValid() {
        $value = array();
        $value[0] = "file";
        $value[1] = "number1";
        $value[2] = "operator";
        $value[3] = "number2";
        $this->assertTrue(Validator::isValidCli($value));
    }

    public function testValidatorCliIsArrayInvalidNumber1() {
        $value = array();
        $value[0] = "file";
        $value[1] = "";
        $value[2] = "operator";
        $value[3] = "number2";
        $this->assertFalse(Validator::isValidCli($value));
    }

    public function testValidatorCliIsArrayInvalidOperator() {
        $value = array();
        $value[0] = "file";
        $value[1] = "number1";
        $value[2] = "";
        $value[3] = "number2";
        $this->assertFalse(Validator::isValidCli($value));
    }

    public function testValidatorCliIsArrayInvalidIndexNumber2() {
        $value = array();
        $value[0] = "file";
        $value[1] = "number1";
        $value[2] = "operator";
        $value[3] = "";
        $this->assertFalse(Validator::isValidCli($value));
    }

    public function testValidatorCliIsArrayInvalidInvalid() {
        $value = array();
        $this->assertFalse(Validator::isValidCli($value));
    }

    public function testValidatorParserPlus() {
        $value = array();
        $value[0] = "file";
        $value[1] = "5";
        $value[2] = "+";
        $value[3] = "2";
        $this->assertEquals("7", $this->math->runMath($value));
    }

    public function testValidatorParserDivide() {
        $value = array();
        $value[0] = "file";
        $value[1] = "5";
        $value[2] = "/";
        $value[3] = "2";
        $this->assertEquals("2.5", $this->math->runMath($value));
    }

    public function testValidatorParserMulti() {
        $value = array();
        $value[0] = "file";
        $value[1] = "5";
        $value[2] = "*";
        $value[3] = "2";
        $this->assertEquals("10", $this->math->runMath($value));
    }

    public function testValidatorParserMinus() {
        $value = array();
        $value[0] = "file";
        $value[1] = "5";
        $value[2] = "-";
        $value[3] = "2";
        $this->assertEquals("3", $this->math->runMath($value));
    }

    public function testValidatorParserModule() {
        $value = array();
        $value[0] = "file";
        $value[1] = "5";
        $value[2] = "%";
        $value[3] = "2";
        $this->assertEquals("1", $this->math->runMath($value));
    }

    protected function tearDown() {
        unset($this->object);
    }

}
