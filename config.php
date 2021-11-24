<?php
    $host='localhost';
    $dbUsername='root';
    $dbName = 'security_task';
    $dbPassword='112358';
    $conn=mysqli_connect($host,$dbUsername,$dbPassword,"$dbName");
    try
    {
        $con=new PDO("mysql:host=$host;dbname=$dbName",$dbUsername,$dbPassword);
        $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        //echo 'connected';
    }
    catch(PDOException $e)
    {
        echo '<br>'.$e->getMessage();
    }
     
?>