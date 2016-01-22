<?php

class CliCommander implements iConfig {

    public static function runCLI($value) {
        $workDays = new workDays();
        $cliHelp = new cliHelp();
        $dbQuery = new dbQuery();

        switch ($value) {

            case iConfig::iCliArgvOptionFixBugsDay20:
                return $workDays->fixBugsDay20();
                break;

            case iConfig::iCliArgvOptionFixBugsDay28:
                return $workDays->fixBugsDay28();
                break;

            case iConfig::iCliArgvOptionVendor:
                var_dump($dbQuery->respQueryVendor());
                break;

            case iConfig::iCliArgvOptionSchedule:
                var_dump($dbQuery->respQueryVendorSchedule());
                break;

            case iConfig::iCliArgvOptionSpecialDay:
                var_dump($dbQuery->respQueryVendorSpecialDay());
                break;

            default:
                return $cliHelp->getHelp();
                break;
        }
    }

}

class Parser {

    public static function cliParser($value) {
        try {
            if (Validator::isValidCli($value)) {
                return CliCommander::runCLI($value[1]);
            }
            return CliCommander::runCLI(null);
        } catch (ParserException $parserEx) {
            $parserEx->getMessage(iConfig::iCliErrMessage);
        }
    }

}