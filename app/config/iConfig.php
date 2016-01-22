<?php

interface iConfig {

    const iMysqlHost = "127.0.0.1";
    const iMysqlPort = "3306";
    const iMysqlDbName = "foodora-test";
    const iMysqlCharset = "UTF8";
    const iMysqlUser = "root";
    const iMysqlPwd = "123456";
    const iLoggerName = "applog";
    const iLoggerFile = "app/log/app.log";
    const iCliErrMessage = "invalid input data!\n";
    const iCliArgvOptionCreate = "create-specialdays";
    const iCliArgvOptionFixBugsDay20 = "fixbug-day-20";
    const iCliArgvOptionFixBugsDay28 = "fixbug-day-28";
    const iCliArgvOptionVendor = "vendor";
    const iCliArgvOptionSchedule = "schedule";
    const iCliArgvOptionSpecialDay = "specialday";
    const iUpdateVendorScheduleOpen = "opened";
    const iUpdateVendorScheduleClosed = "closed";
    const iUpdateVendorScheduleStart = "19:00:00";
    const iUpdateVendorScheduleStop = "22:00:00";
    const iUpdateVendorScheduleStartStop = "NULL";
    const iUpdateVendorScheduleAllDayYes = "1";
    const iUpdateVendorScheduleAllDayNo = "0";
    const iUpdateVendorScheduleDoneday20 = "Update Vendor 20 day has been done!\n";
    const iUpdateVendorScheduleDoneday28 = "Update Vendor 28 day has been done!\n";
    const iHeaderMessage = <<<EOD
******************fooBar*Restaurant*************************
*Restaurant CLI 0.0.01 by @marcosptf.                      *
*                                                          *
*To run script:                                            *
*php index.php [command]                                   *
*                                                          *
*Example:                                                  *
*This command run fix to bug on day 20                     *
*php index.php fixbug-day-20                               *
*                                                          *
*This command run fix to bug on day 28                     *
*php index.php fixbug-day-28                               *
*                                                          *
*This command show data from vendor                        *
*php index.php vendor                                      *
*                                                          *
*This command show data from schedule                      *
*php index.php schedule                                    *
*                                                          *
*This command show data from specialday                    *
*php index.php specialday                                  *
*                                                          *
*This command show help                                    *
*php index.php help                                        *
*                                                          *
*To run tests:                                             *
*cd tests/                                                 *
*phpunit tests.php                                         *
************************************************************\n
EOD;

}
