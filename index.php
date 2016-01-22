<?php

require_once 'app/iCalc.php';
require_once 'app/absCalc.php';
require_once 'app/CalculatorException.php';
require_once 'app/Validator.php';
require_once 'app/Parser.php';
require_once 'app/Calculator.php';
require_once 'app/Math.php';

print(Parser::cliParser($argv));