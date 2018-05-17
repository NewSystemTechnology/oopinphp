<?php

class user {

    //static fields
    public static $name;
    protected static $password;
    // field
    protected $birthday;

    // static method
    function setPWD($password) {
        self::$password = $password;
    }

    function getPWD() {
        return self::$password;
    }

    static function save() {
        echo '<br /> your name has saved: ' . self::$name
        . '<br /> your password has saved: ' . self::$password;
    }

}

class Admins  extends user{

    // fields
    private $cpanelConnection;
    protected static $loginTime;

    //  methods
    function getCpanelConnection() {
        return $this->cpanelConnection;
    }

    static function getLoginTime() {
        return self::$loginTime;
    }

    function setCpanelConnection($cpanelConnection) {
        $this->cpanelConnection = $cpanelConnection;
    }

    static function setLoginTime($loginTime) {
        self::$loginTime = $loginTime;
    }

}

$admin = new Admins();
Admins::$name = "sam";
$admin->setPWD("123456");
Admins::save();
