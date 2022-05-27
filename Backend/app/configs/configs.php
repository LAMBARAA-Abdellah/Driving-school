<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");
    
    define("APPROOT", dirname(dirname(__FILE__)));
    define("URLROOT", 'http://localhost/Statique/Backend/');
    define("APPNAME", 'statique');



    define("db_host", 'localhost');
    define("db_user", 'root');
    define("db_psw", '');
    define("db_name", 'school');
