<?php 

if($_SERVER["REQUEST_METHOD"] == "POST") {

	$name = $_POST["name"];
	$email = $_POST["email"];
    $phone = $_POST["phone"];
	$dob = $_POST["dob"];
    $address = $_POST["address"];
	$password = $_POST["password"];

    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "wtk";
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);


    $sql = "INSERT INTO reg VALUES ('".$name."', '".$email."', '".$phone."', '".$dob."', '".$address."', '".$password."')";
    $conn->query($sql);

    echo "true";
    $conn -> close();
}
?>