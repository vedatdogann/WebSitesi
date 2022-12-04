<?php

$sname= "sql106.epizy.com";
$unmae= "epiz_32434422";
$password= "ZVkMreEjTI";

$db_name = "epiz_32434422_webphp";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if(!$conn){
    echo "Connection failed";
}