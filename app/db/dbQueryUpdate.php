<?php

class dbQueryUpdate extends dbProvider implements iConfig {

    protected $dbConn;

    public function __construct() {
        $this->dbConn = new dbProvider();
    }

    public function updateQueryVendorDay20() {
        $updateVendorSchedule = $this->dbConn->mapper->vendor_special_day[1]->fetch();
        $updateVendorSchedule->all_day = iConfig::iUpdateVendorScheduleAllDayNo;
        $updateVendorSchedule->start_hour = iConfig::iUpdateVendorScheduleStart;
        $updateVendorSchedule->stop_hour = iConfig::iUpdateVendorScheduleStop;
        $this->dbConn->mapper->vendor_special_day->persist($updateVendorSchedule);
        $this->dbConn->mapper->flush();

        $updateVendorSchedule = $this->dbConn->mapper->vendor_schedule[2]->fetch();
        $updateVendorSchedule->all_day = iConfig::iUpdateVendorScheduleAllDayNo;
        $updateVendorSchedule->start_hour = iConfig::iUpdateVendorScheduleStart;
        $updateVendorSchedule->stop_hour = iConfig::iUpdateVendorScheduleStop;
        $this->dbConn->mapper->vendor_special_day->persist($updateVendorSchedule);
        $this->dbConn->mapper->flush();
        return iConfig::iUpdateVendorScheduleDoneday20;
    }

    public function updateQueryVendorDay28() {

        $updateVendorSchedule = $this->dbConn->mapper->vendor_schedule[0]->fetch();
        $updateVendorSchedule->all_day = iConfig::iUpdateVendorScheduleAllDayYes;
        $updateVendorSchedule->start_hour = iConfig::iUpdateVendorScheduleStartStop;
        $updateVendorSchedule->stop_hour = iConfig::iUpdateVendorScheduleStartStop;
        $this->dbConn->mapper->vendor_schedule->persist($updateVendorSchedule);
        $this->dbConn->mapper->flush();

        $updateVendorSchedule = $this->dbConn->mapper->vendor_schedule[1]->fetch();
        $updateVendorSchedule->all_day = iConfig::iUpdateVendorScheduleAllDayYes;
        $updateVendorSchedule->start_hour = iConfig::iUpdateVendorScheduleStartStop;
        $updateVendorSchedule->stop_hour = iConfig::iUpdateVendorScheduleStartStop;
        $this->dbConn->mapper->vendor_schedule->persist($updateVendorSchedule);
        $this->dbConn->mapper->flush();
        return iConfig::iUpdateVendorScheduleDoneday28;
    }

}
