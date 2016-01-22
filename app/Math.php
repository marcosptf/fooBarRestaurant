<?php

class Math extends Calculator {

    public function runMath($value) {
        $calc = new Calculator();
        $calc->setValue($value[1], $value[3]);
        $result = "";

        if ($value[2] == iCalc::iMathSignalPlus) {
            $result = $calc->getPlus();
        } else if ($value[2] == iCalc::iMathSignalDivi) {
            $result = $calc->getDivide();
        } else if ($value[2] == iCalc::iMathSignalMulti) {
            $result = $calc->getMultiply();
        } else if ($value[2] == iCalc::iMathSignalMinus) {
            $result = $calc->getMinus();
        } else if ($value[2] == iCalc::iMathSignalModu) {
            $result = $calc->getModule();
        } else {
            $result = iCalc::iHelpMessage;
        }
        return $result;
    }

}