<?php

require_once './vendor/autoload.php';
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

require_once 'app/config/iConfig.php';
require_once 'app/Exception/ParserException.php';
require_once 'app/Exception/ValidatorException.php';
require_once 'app/db/dbProvider.php';
require_once 'app/db/dbQuery.php';
require_once 'app/db/dbQueryUpdate.php';
require_once 'app/Validator.php';
require_once 'app/cliHelp.php';
require_once 'app/workDays.php';
require_once 'app/Parser.php';

$log = new Logger(iConfig::iLoggerName);
$log->pushHandler(new StreamHandler(iConfig::iLoggerFile, Logger::WARNING));

print(Parser::cliParser($argv));
