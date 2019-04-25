<?php

$host="localhost"; // Host name 
$username=""; // Mysql username 
$password=""; // Mysql password 
$db_name="test"; // Database name 
$tbl_name="forum_question"; // Table name 

// Connect to server and select database.
$conn = mysqli_connect($host, $username, $password) or die("cannot connect"); 
mysqli_select_db($conn, $db_name) or die("cannot select DB");

// get data that sent from form 
$topic=(isset($_POST['topic']) ? $_POST['topic'] : '');
$detail=(isset($_POST['detail']) ? $_POST['detail'] : '');
$name=(isset($_POST['name']) ? $_POST['name'] : '');
$email=(isset($_POST['email']) ? $_POST['email'] : '');

$datetime=date("d/m/y h:i:s"); //create date time

$sql="INSERT INTO $tbl_name(topic, detail, name, email, datetime)VALUES('$topic', '$detail', '$name', '$email', '$datetime')";
$result=mysqli_query($conn, $sql);

if($result){
echo "Successful<BR>";
echo "<a href=main_forum.php>View your topic</a>";
}
else {
echo "ERROR";
}
mysqli_close($conn);
?>