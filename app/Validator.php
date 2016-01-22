<?php
class Validator extends ValidatorException implements iConfig {

    public static function isValidCli($value) {
        try {
            if ((is_array($value)) && (!empty($value[1]))) {
                return true;
            }
            return false;
        } catch (ValidatorException $validEx) {
            $validEx->getMessage(iConfig::iCliErrMessage);
        }
    }

}
