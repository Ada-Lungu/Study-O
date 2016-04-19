<?php
/**
 * Created by PhpStorm.
 * User: ada
 * Date: 16/04/16
 * Time: 16:18
 */

$servername = "localhost";
$username = "root";
$password = "aduska87";

try {
    $conn = new PDO("mysql:host=$servername; dbname=studyo", $username, $password);
// set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";

}

catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}

?>