<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
    // $connection = pg_connect ("host=ec2-23-21-55-25.compute-1.amazonaws.com dbname=d3fn4lugik4eop user=dekixmpqcprkpu password=MNbCC56WQ1ZaNRqX8GHmTBaUv-");
    // if($connection) {
    //    echo 'connected';
    // } else {
    //     echo 'there has been an error connecting';
    // } 

echo "test para";
$dbuser = 'dekixmpqcprkpu';  
$dbpass = 'MNbCC56WQ1ZaNRqX8GHmTBaUv-';  
$host = 'ec2-23-21-55-25.compute-1.amazonaws.com';  
$dbname='d3fn4lugik4eop';  
$dbh = new PDO("pgsql:host=$host;dbname=$dbname;sslmode=require", $dbuser, $dbpass);
try{
 
	// display a message if connected to the PostgreSQL successfully
	if($dbh){
		echo "Connected to the <strong>$db</strong> database successfully!";
	}
}catch (PDOException $e){
	// report error message
	echo $e->getMessage();
}
echo "hello world";


    phpinfo();
?>