<?php

class Validator extends CalculatorException implements iCalc {

    public static function isValidNumber($value) {
        try {
            if ((null != $value) || (!empty($value)) || ($value > 0)) {
                return true;
            }
            return false;
        } catch (CalculatorException $calcEx) {
            $calcEx->getMessage(iCalc::iCalcErrMessage);
        }
    }

    public static function isValidCli($value) {
        try {
            if ((is_array($value)) && (!empty($value[1])) && (!empty($value[2])) && (!empty($value[3]))) {
                return true;
            }
            return false;
        } catch (CalculatorException $calcEx) {
            $calcEx->getMessage(iCalc::iCliErrMessage);
        }
    }

}

