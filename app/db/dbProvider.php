<?php

use Respect\Relational\Db;
use Respect\Relational\Mapper;

class dbProvider implements iConfig {

    private $pdo;
    protected $db;
    protected $mapper;

    public function __construct() {
        $this->getConn();
    }

    private function getConn() {
        $this->pdo = new PDO('mysql:host=' . iConfig::iMysqlHost . ';port=' .
                iConfig::iMysqlPort . ';dbname=' . iConfig::iMysqlDbName .
                ';charset=' . iConfig::iMysqlCharset . ';', iConfig::iMysqlUser, iConfig::iMysqlPwd, array(PDO::ATTR_PERSISTENT => true)
        );
        $this->db = new Db($this->pdo);
        $this->mapper = new Mapper($this->pdo);
    }

    public function __destruct() {
        unset($this->db);
        unset($this->mapper);
        unset($this->pdo);
    }

}
