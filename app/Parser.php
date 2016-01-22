<?php

class Parser extends CalculatorException implements iCalc {

    public static function cliParser($value) {
        try {
            if (Validator::isValidCli($value)) {
                $math = new Math();
                $result = $math->runMath($value);
            }
            return iCalc::iHeaderMessage . iCalc::iMathMessage ."{$value[1]} {$value[2]} {$value[3]}".iCalc::iRespMessage."{$result}". iCalc::iEndLineMessage;
        } catch (CalculatorException $calcEx) {
            $calcEx->getMessage(iCalc::iParserErrMessage);
        }
    }

}
