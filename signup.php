<?php
$ID= $_GET['ID'];
$PW = $_GET['PW'];
$servername = "localhost"; //SERVER HOST (default value : localhost)
$username = "root"; //SQLSERVER USERNAME
$password = "password"; //SQLSERVER PASSWORD
$dbname = "dbname"; //DATABASE NAME
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
{
$sql = "INSERT INTO tablename (ID, PW) //into tablename
VALUES ('$ID', '$PW')";
}
if ($conn->query($sql) === TRUE) {
    echo "successfully"; //when to success
} else {
    echo "Error: " . $sql . "<br>" . $conn->error; //when to error and when to have same id
}
$conn->close();
?>
