<?php

$server = "localhost";
$username = "root";
$password ="";
$dbname="contactform";

$con = mysqli_connect($server, $username, $password, $dbname);
if(!$con)
{
    echo"Connection failed";

}

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$country = $_POST['country'];
$state = $_POST['state'];
$city = $_POST['city'];

$sql = "INSERT INTO `contact form`(`name`, `phone`, `email`, `country`, `state`, `city`) VALUES('$name', '$phone', '$email', '$country', '$state', '$city')";

$result = mysqli_query($con, $sql);

if($result)
{
    echo "DATA SUBMITTED";
}
else
{
    echo "ERROR";
}


?>


