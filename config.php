<?php
    session_start();
    $host='localhost';
    $dbUsername='Zubrah';
    $dbName = 'security_task';
    $dbPassword='P@ss123';
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