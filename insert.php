<?php

$host = "localhost";
$user = "root";
$userpass = "";
$dbname = "ajax_php_crud";

$db_conn = mysqli_connect($host,$user,$userpass,$dbname);

if($db_conn== true){


    $name = $_POST['name'];
    $roll = $_POST['roll'];
    $address = $_POST['address'];
    $password = $_POST['password'];

    // insert Query 


$insert = "INSERT INTO db_ajax (name,roll,address,password)VALUES('$name','$roll','$address','$password')";




if(mysqli_query($db_conn,$insert)){

    echo "Insert SuccessFully";

}







}


// ajax_php_crud