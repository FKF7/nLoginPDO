<?php
require_once 'config.php';

/**
 * Description of connection
 *
 * @author Fernando Fink
 */
class connection {
	
    public static function getConnection($host, $dbName, $user, $password) {
        $dsn = "mysql:host=$host;dbname=$dbName;charset=UTF8";
        
        try{
            $options = [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION];
            return new PDO($dsn, $user, $password, $options);
        } catch (PDOException $ex) {
            die($ex->getMessage());

        }
    }
}
return connection::getConnection($host, $dbName, $user, $password);