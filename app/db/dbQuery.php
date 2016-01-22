<?php

class dbQuery extends dbProvider implements iConfig {

    protected $dbConn;

    public function __construct() {
        $this->dbConn = new dbProvider();
    }

    public function respQueryVendor() {
        return $this->dbConn->db->select('*')->from('vendor')->fetchAll();
    }

    public function respQueryVendorSchedule() {
        return $this->dbConn->db->select('*')->from('vendor_schedule')->fetchAll();
    }

    public function respQueryVendorSpecialDay() {
        return $this->dbConn->db->select('*')->from('vendor_special_day')->fetchAll();
    }

}
