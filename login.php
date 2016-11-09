<?php
$ID= $_GET['ID'];  
$PW= $_GET['PW'];   
$servername = "localhost"; //SERVER HOST (default value : localhost)
$username = "root"; //SQLSERVER USERNAME
$password = "password"; //SQLSERVER PASSWORD
$dbname = "dbname"; //DATABASE NAME
$con = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
{ 
    $sql = "select * from tablename where ID = '$ID' and PW = '$PW'";  //insert tablename    
    $result = mysqli_query($con,$sql) or die(mysql_error());           
    $count=mysqli_num_rows($result);
}
    if ($count==1){  
        echo "successfully"; //when to success
    } else {                 
         echo "error"; //when to error wrong the id or passwd
    }
$conn->close();
?>
   
