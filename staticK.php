<?php

class user {

    //static field

    public static $nsme;
    private static $password;
    protected $birthday;



    // static method
    
    function setPWD($password){
        self::$password = $password;
    }
    
     function getPWD(){
         return self::$password;
    }
    
    static function save(){
        echo '<br /> your name has saved!'.self::$nsme
                .'<br /> your password has saved!' . self::$password;
    }
}
$user1 = new user();
$user1->setPWD("123");
user::$nsme = "ali";
//user::$name = "name";
//print user::$name;
user::save();