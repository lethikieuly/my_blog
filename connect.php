<?php 

function getConnection() {
    $host = "localhost";
    $username = "root";
    $password = "";
    $nameDB = "blogs";
    $conn = null;
    try {
        $conn = new PDO("mysql:host=$host;dbname=$nameDB", $username, $password);
        return $conn;
    } catch (Exception $e) {
       echo $e->getMessage();
    }
    return $conn;
}
$conn = getConnection();

?>