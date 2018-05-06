<?php

/*
 * DataBase Class to connect with MySQL 
 * <Access Modifier> [ private , public , protected ]
 * (Host , user , password , DBName)
 */

//error_reporting(0);

class mySql {

    private $host;
    private $userRoot;
    private $passord;
    private $DBName;
    private $db;

    function setHost($host) {
        $this->host = $host;
    }

    function getHost() {
        return $this->host;
    }

    function setUserRoot($UserRoot) {
        $this->userRoot = $UserRoot;
    }

    function getUserRoot() {
        return $this->userRoot;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function getPassword() {
        return $this->passord;
    }

    function setDBName($DBName) {
        $this->DBName = strtolower($DBName);
    }

    function getDBName() {
        return $this->DBName;
    }

    function connect() {
        $this->db = new mysqli($this->host, $this->userRoot, $this->passord, $this->DBName);
        if($this->db->connect_error){
            return 0;
        } else {
            return 1;
        }
    }

    function query($statement) {
        //return $this->db->query($statement);
    }

}

//$boj = new mySql;
//$boj->setHost('127.0.0.1');
//echo "{$boj->getHost()}";
$obj = new mySql();
$obj->setHost('127.0.0.1');
$obj->setUserRoot('root');
$obj->setPassword('');
$obj->setDBName('testMysqlClass');
echo $obj->connect();
