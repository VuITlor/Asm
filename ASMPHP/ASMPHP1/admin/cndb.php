<?php
    function cndb(){
        $servername = "localhost";
        $username = "root";
        $password = "";

        try {
        $conn = new PDO("mysql:host=$servername;dbname=asmphp1", $username, $password);
        
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        }
    }
?>