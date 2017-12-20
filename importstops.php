<?php

include("conexao.php"); // conecta no servidor

mysql_select_db("EP");

$criar = "CREATE TABLE STOPS (
stop_id int NOT NULL,
stop_name varchar (200),
stop_desc varchar (200),
stop_lat double NOT NULL,
stop_lon double NOT NULL,
PRIMARY KEY (stop_id)
)";

$results = mysql_query($create) or die (mysql_error());

$fhandle=fopen("/home/ec2-user/stops.txt", "r");
fgets($fhandle); //First fgets to read over header line.

while($line=fgets($fhandle)){
    //Explode your line by space delimeter
    $words=explode(" ",$line);
    /*
        Do additional checks and data sanitizing here.
    */
    //If every line follows the format in your example, and is not empty, insert into table here
    $sql="INSER INTO STOPS 
          VALUES ($words[0], $words[1], $words[2], $words[3], $words[4])";
}

?>