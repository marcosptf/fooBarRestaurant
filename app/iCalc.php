<?php

interface iCalc {

    const iMathSignalPlus = "+";
    const iMathSignalMinus = "-";
    const iMathSignalMulti = "*";
    const iMathSignalDivi = "/";
    const iMathSignalModu = "%";
    const iCalcErrMessage = "invalid value to math!\n";
    const iCliErrMessage = "invalid input data!\n";
    const iParserErrMessage = "err while process, please try again!\n";
    const iHelpMessage = "Please, to math, insert: [number] + [operator] + [number] \n";
    const iResultMessage = "Please, to math, insert: [number] + [operator] + [number] \n";
    const iMathMessage = "Math: ";
    const iRespMessage = " \nResult: ";
    const iEndLineMessage  = " \n\n";
    const iHeaderMessage = <<<EOD
\n
******************Calculator********************************
*Calculator CLI 0.0.01 by @marcosptf.                      *
*                                                          *
*To Math, do you need run:                                 *
*php index.php [number] + [operator] + [number] + [enter]  *
*                                                          *
*Example:                                                  *
*php index.php 5 + 5                                       *
*                                                          *
*Obs.:                                                     *
*If you want math a multiply, please, put the operator     *
*between simple quotes like example:                       *
*php index.php 5 '*' 5                                     *
*                                                          *
*To run tests:                                             *
*cd tests/                                                 *
*phpunit tests.php                                         *
************************************************************\n
EOD;

}
