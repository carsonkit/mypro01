<?php

function db_conn() { 

    define('DSN','mysql:host=localhost;dbname=lesson1;charset=utf8mb4'); 
    define('DB_USER','root'); 
    define('DB_PASS',''); 
    try { 
        [データベース接続処理] 
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); 
    } catch (PDOException $e){ 
        echo $e->getMessage(); 
        exit; 
    } 
    return $dbh; 

} 



?>