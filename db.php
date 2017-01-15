<?php

function initDB(){
    global $db;
    //hard coded values only for these exercises, will should use config
    $dsn = "mysql:host=localhost;dbname=authdb;charset=utf8";
    $username = "root";
    $password = "root";
    
    try {
        $db = new PDO($dsn, $username, $password);
    } catch (Exception $ex) {
        throw new Exception('DB connection error: ' . $ex->getMessage());
    }
}

function getUserDetails($username, $password){
    global $db;
    $stmt = $db->query('SELECT username, password, role FROM users WHERE username = "'.$username.'" AND password = "'.$password.'" ');
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    return $row;
}

initDB();










