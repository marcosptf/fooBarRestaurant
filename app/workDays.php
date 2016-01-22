<?php

class workDays extends dbQuery {

    protected $dbQueryUpdate;

    public function __construct() {
        $this->dbQueryUpdate = new dbQueryUpdate();
    }

    public function fixBugsDay20() {
        return $this->dbQueryUpdate->updateQueryVendorDay20();
    }

    public function fixBugsDay28() {
        return $this->dbQueryUpdate->updateQueryVendorDay28();
    }

}